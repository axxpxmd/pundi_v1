<?php

namespace App\Http\Controllers\Articles;

use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\Models\Comment;
use App\Models\Articles;
use App\Models\AdminDetails;

class ArticleController extends Controller
{
    protected $route = '';
    protected $view  = 'pages.articles.';
    protected $path  = '';

    public function index($n_article)
    {
        $route  = $this->route;
        $params = str_replace('-', ' ', $n_article);

        $article = Articles::where('title', $params)->first();
        $comment = Comment::where('article_id', $article->id)->get();
        $editor  = AdminDetails::select('id', 'admin_id', 'nama')->where('admin_id', $article->editor_id)->first();

        // Counter Views
        DB::update('UPDATE articles SET views = views + 1 WHERE id = "' . $article->id . '"');

        return view($this->view . 'article', compact(
            'route',
            'article',
            'comment',
            'editor'
        ));
    }
}
