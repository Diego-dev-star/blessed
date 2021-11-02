<?php
/**
 * Created by PhpStorm.
 * User: Witalij Coder
 * Date: 25.11.2020
 * Time: 14:36
 */

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Support\Facades\DB;
use Nicolaslopezj\Searchable\SearchableTrait;


class News extends Controller
{

    public function index()
    {
        $posts = Models\News::orderBy('created_at', 'desc');
        return view('news')->with([
            'posts' => $posts->paginate(10),
        ]);
    }

    public function Search()
    {
        return Models\News::search($query)->get();
    }

    public function latest($column = 'created_at')
    {
        return $this->orderBy($column, 'desc');
    }

    public function autocomplete(Request $request)
    {
        $data = \App\Models\News::select("title as name", "image as img", "body as desc")->where("title", "LIKE", "%{$request->input('query')}%")->get();


        return response()->json($data);
    }

    public function show(int $id, $slug)
    {
        $post = Models\News::find($id);
        return view('layout.single-post',['post'=> $post]);
    }
    public function category()
    {
        return $this->belongsTo('App\News\Category', 'category_id');
    }


    public function BrecrumbImage()
    {
        $brecrumb = $this->index();
        return $brecrumb;
    }


}