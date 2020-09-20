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
use App\Models\Kategori;

class WelcomeController extends Controller
{
    public function index()
    {

        /**
         * Section 1 : Trending
         */
        $trending_top    = Articles::wherestatus(1)->orderBy('created_at', 'desc')->take(5)->get();
        $trending_bottom = Articles::wherestatus(1)->orderBy('created_at', 'desc')->take(3)->get();
        $trending_right  = Articles::wherestatus(1)->orderBy('created_at', 'desc')->take(5)->get();

        /**
         * Section 2 : Indepth Of Issues
         */
        $indepth_of_issues = Articles::wherestatus(1)->take(5)->get();

        /**
         * Section 3 : Berita Terbaru
         */
        $semua = Articles::orderBy('created_at', 'desc')->wherestatus(1)->take(6)->get();
        $headline   = Articles::where('kategori_id', 1)->wherestatus(1)->take(4)->get();
        $indepth    = Articles::where('kategori_id', 2)->wherestatus(1)->take(4)->get();
        $kebijakan  = Articles::where('kategori_id', 3)->wherestatus(1)->take(4)->get();
        $serbaSerbi = Articles::where('kategori_id', 4)->wherestatus(1)->take(4)->get();
        $konsultasi = Articles::where('kategori_id', 5)->wherestatus(1)->take(4)->get();
        // Kategori
        $satu  = Kategori::whereid(1)->first();
        $dua   = Kategori::whereid(2)->first();
        $tiga  = Kategori::whereid(3)->first();
        $empat = Kategori::whereid(4)->first();
        // SideBar
        $sideBar = Articles::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')->wherestatus(1)->orderBy('created_at', 'desc')->take(4)->get();
        $poster  = Poster::select('poster')->get();

        /**
         * Section 4 : Report
         */
        $report = Articles::orderBy('created_at', 'desc')->wherestatus(1)->take(6)->get();

        return view('home', compact(
            'trending_top',
            'trending_bottom',
            'trending_right',
            'indepth_of_issues',
            'semua',
            'headline',
            'indepth',
            'kebijakan',
            'serbaSerbi',
            'konsultasi',
            'satu',
            'dua',
            'tiga',
            'empat',
            'sideBar',
            'poster',
            'report'
        ));
    }
}
