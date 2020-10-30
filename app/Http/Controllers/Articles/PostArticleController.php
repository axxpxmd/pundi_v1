<?php

namespace App\Http\Controllers\Articles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;

class PostArticleController extends Controller
{
    protected $view  = 'pages.articles.';
    protected $route = 'article.post.';
    protected $path  = '';

    public function index(Request $request)
    {
        $route = $this->route;

        $category = Category::select('id', 'n_category')->whereNotIn('id', [5])->get();
        $category_id = ($request->category_id == '' ? '' : $request->category_id);

        return view($this->view . 'post', compact(
            'route',
            'category',
            'category_id'
        ));
    }

    public function subCategoryByCategory($category_id)
    {
        return SubCategory::select('id', 'n_sub_category')->where('category_id', $category_id)->get();
    }
}
