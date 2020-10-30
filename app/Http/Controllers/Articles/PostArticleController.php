<?php

namespace App\Http\Controllers\Articles;

use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\Models\Articles;
use App\Models\Category;
use App\Models\SubCategory;

class PostArticleController extends Controller
{
    protected $view  = 'pages.articles.';
    protected $route = 'article.post.';
    protected $path  = '/images/article/';

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

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|unique:articles,title',
            'image'   => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'content' => 'required|max:700',
            'tag'     => 'required',
            'category_id'     => 'required',
            'sub_category_id' => 'required',
            'source_image'    => 'required'
        ]);

        // get data 
        $title   = $request->title;
        $content = $request->content;
        $tag     = $request->tag;
        $author_id       = Auth::user()->id;
        $category_id     = $request->category_id;
        $sub_category_id = $request->sub_category_id;
        $source_image    = $request->source_image;

        $file     = $request->file('image');
        $fileName = time() . "." . $file->getClientOriginalName();
        $request->file('image')->storeAs($this->path, $fileName, 'ftp', 'public');

        $artikel = new Articles();
        $artikel->title   = $title;
        $artikel->content = $content;
        $artikel->tag     = $tag;
        $artikel->image   = $fileName;
        $artikel->category_id     = $category_id;
        $artikel->sub_category_id = $sub_category_id;
        $artikel->source_image    = $source_image;
        $artikel->author_id       = $author_id;
        $artikel->save();

        return redirect()
            ->route($this->route . 'index', Auth::user()->id)
            ->withSuccess('Selamat! Tulisan berhasil terkirim');
    }
}
