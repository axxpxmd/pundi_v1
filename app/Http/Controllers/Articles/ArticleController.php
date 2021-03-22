<?php

namespace App\Http\Controllers\Articles;

use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\Models\Comment;
use App\Models\checkIP;
use App\Models\Articles;
use App\Models\AdminDetails;
use App\Models\SubComment;

class ArticleController extends Controller
{
    protected $route = '';
    protected $view  = 'pages.articles.';
    protected $path  = '';

    public function index(Request $request, $n_article)
    {
        $route  = $this->route;
        $params = str_replace('-', ' ', $n_article);

        // Check ip
        $ip = $request->ip();
        $this->storeip($params, $ip);

        // Get data
        $article = Articles::where('title', $params)->first();
        $editor = AdminDetails::select('id', 'admin_id', 'nama')->where('admin_id', $article->editor_id)->first();

        // Get Comment
        $comment = Comment::where('article_id', $article->id)->get();
        $subComment = SubComment::where('article_id', $article->id)->get();
        $countComment = $comment->count() + $subComment->count();

        // Related article
        $relateds = Articles::where('sub_category_id', $article->sub_category_id)->whereNotIn('id', [$article->id])->inRandomOrder()->get()->take(5);

        return view($this->view . 'article', compact(
            'route',
            'article',
            'comment',
            'editor',
            'relateds',
            'countComment'
        ));
    }

    public function storeip($params, $ip)
    {
        $article = Articles::where('title', $params)->first();
        $check = checkIP::select('article_id', 'ip')->where('article_id', $article->id)->where('ip', $ip)->get();

        if ($check->count() == 0) {
            // Counter Views
            DB::update('UPDATE articles SET views = views + 1 WHERE id = "' . $article->id . '"');
            // Save IP
            $checkIp = new checkIP();
            $checkIp->article_id = $article->id;
            $checkIp->ip = $ip;
            $checkIp->save();
        }
    }
}
