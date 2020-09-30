<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

// Model
use App\Models\Articles;

class ProfileController extends Controller
{
    protected $view = 'pages.profiles.';

    public function index()
    {
        $article = Articles::where('author_id', Auth::user()->id)->with('user')->get();

        return view($this->view . 'profile', compact(
            'article'
        ));
    }
}
