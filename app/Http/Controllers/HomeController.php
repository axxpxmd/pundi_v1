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

namespace App\Http\Controllers;

// Models
use App\Models\Poster;
use App\Models\Articles;
use App\Models\Category;
use App\Models\HomePageCard2;
use App\Models\HomePageCard3;
use App\Models\HomePageTitle;
use App\Models\HomePageSideBar;
use App\Models\HomePageCard1Right;
use App\Models\HomePageCard1Bottom;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        /**
         * Title Card
         */
        $titleCard = HomePageTitle::first();

        /**
         * Section 1 
         */
        $trendingTop    = Articles::wherestatus(1)->orderBy('created_at', 'desc')->take(5)->get();
        $trendingBottom = HomePageCard1Bottom::with('article')->take(3)->get();
        $trendingRight  = HomePageCard1Right::with('article')->take(5)->get();

        /**
         * Section 2
         */
        $card2 = HomePageCard2::with('article')->take(5)->get();

        /**
         * Section 3 
         */
        // Article By Category
        $all = Articles::orderBy('created_at', 'desc')->wherestatus(1)->take(6)->get();
        $n_category1 = Articles::where('category_id', 1)->wherestatus(1)->orderBy('created_at', 'desc')->take(4)->get();
        $n_category2 = Articles::where('category_id', 2)->wherestatus(1)->orderBy('created_at', 'desc')->take(4)->get();
        $n_category3 = Articles::where('category_id', 3)->wherestatus(1)->orderBy('created_at', 'desc')->take(4)->get();
        $n_category4 = Articles::where('category_id', 4)->wherestatus(1)->orderBy('created_at', 'desc')->take(4)->get();
        // Category
        $category1 = Category::whereid(1)->first();
        $category2 = Category::whereid(2)->first();
        $category3 = Category::whereid(3)->first();
        $category4 = Category::whereid(4)->first();
        // SideBar
        $sideBar = HomePageSideBar::with('article')->take(4)->get();
        $poster  = Poster::select('poster')->get();

        /**
         * Section 4
         */
        $card3 = HomePageCard3::with('article')->take(6)->get();

        /**
         * Section 5
         */
        $card4 = Articles::wherestatus(1)->orderBy('views', 'DESC')->take(5)->get();

        return view('home', compact(
            'trendingTop',
            'trendingBottom',
            'trendingRight',
            'card2',
            'all',
            'n_category1',
            'n_category2',
            'n_category3',
            'n_category4',
            'category1',
            'category2',
            'category3',
            'category4',
            'sideBar',
            'poster',
            'card3',
            'titleCard',
            'card4'
        ));
    }
}
