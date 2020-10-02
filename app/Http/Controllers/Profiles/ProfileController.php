<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of welcome
 *
 * @author Asip Hamdi
 * Github : axxpxmd
 */

namespace App\Http\Controllers\Profiles;

use Auth;

use App\Http\Controllers\Controller;

// Model
use App\User;
use App\Models\Comment;
use App\Models\Articles;

class ProfileController extends Controller
{
    protected $view = 'pages.profiles.';

    public function index()
    {
        $user    = User::where('id', Auth::user()->id)->first();
        $article = Articles::where('author_id', Auth::user()->id)->with('user')->orderBy('views', 'DESC')->paginate(10);
        $comment = Comment::where('user_id', Auth::user()->id)->with('article')->get();

        return view($this->view . 'profile', compact(
            'article',
            'comment',
            'user'
        ));
    }

    public function edit()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view($this->view . 'edit', compact(
            'user'
        ));
    }
}
