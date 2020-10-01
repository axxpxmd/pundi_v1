<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

// Model
use App\Models\Articles;
use App\Models\Comment;

class ProfileController extends Controller
{
    protected $view = 'pages.profiles.';

    public function index()
    {
        $article    = Articles::where('author_id', Auth::user()->id)->with('user')->orderBy('views', 'DESC')->paginate(10);
        $article_id = Articles::select('id')->where('author_id', Auth::user()->id)->get()->toArray();

        $comment = Comment::whereIn('article_id', $article_id)->get();

        return view($this->view . 'profile', compact(
            'article'
        ));
    }

    public function edit()
    {
        $user = Auth::user();

        return view($this->view . 'edit', compact(
            'user'
        ));
    }
}
