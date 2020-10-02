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

use App\Http\Controllers\Controller;

// Models
use App\User;
use App\Models\Comment;
use App\Models\Articles;

class ProfileOtherUserController extends Controller
{
    protected $view = 'pages.profiles.otherUser.';

    public function index($name)
    {
        // convert parameter to string ( remove - )
        $params  = str_replace('-', ' ', $name);

        $user    = User::where('name', $params)->first();
        $article = Articles::where('author_id', $user->id)->with('user')->orderBy('views', 'DESC')->paginate(10);
        $comment = Comment::where('user_id', $user->id)->with('article')->get();

        return view($this->view . 'otherProfile', compact(
            'user',
            'article',
            'comment'
        ));
    }
}
