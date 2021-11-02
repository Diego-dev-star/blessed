<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Category extends Controller
{
    public function Index()
    {
        $catgories = new \TCG\Voyager\Models\Category();
        return view('CategoryPage')->with([
            'category' => $catgories

        ]);
    }
    public function Single($id)
    {
        $category = \App\Models\Category::where('id',  $id)->firstOrFail();
        $cposts = \App\Models\News::where('category_id', $id)->firstOrFail()->get();
        return view('layout.singlecat')->with([
            'category '=> $category,
            'catposts' =>  $cposts
        ]);

    }
}

