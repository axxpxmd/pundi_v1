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

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\Models\Articles;
use App\Models\Category;
use App\Models\SubCategory;

class CategoryController extends Controller
{
    protected $view = 'pages.category.';
    protected $path = 'images/artikel/';

    public function index($n_category)
    {
        $path   = $this->path;
        $params = str_replace('-', ' ', $n_category);

        $category    = Category::where('n_category', $params)->first();
        $subCategory = SubCategory::where('category_id', $category->id)->get();

        $articles = Articles::where('category_id', $category->id)
            ->where('status', 1)
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view($this->view . 'category', compact(
            'category',
            'subCategory',
            'articles',
            'path'
        ));
    }
}
