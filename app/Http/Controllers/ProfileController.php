<?php

namespace App\Http\Controllers;

use Auth;

// Model
use App\Models\Articles;
use App\Models\Comment;

class ProfileController extends Controller
{
    protected $view = 'pages.profiles.';

    public function index()
    {
        $article = Articles::where('author_id', Auth::user()->id)->with('user')->orderBy('views', 'DESC')->paginate(10);
        $comment = Comment::where('user_id', Auth::user()->id)->with('article')->get();

        return view($this->view . 'profile', compact(
            'article',
            'comment'
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
