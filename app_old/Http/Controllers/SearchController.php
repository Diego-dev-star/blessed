<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models;

class SearchController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $query = !empty(trim($request->search)) ? trim($request->search) : null;
        $posts = DB::table('posts')
            ->where('title', 'LIKE', '%')
            ->get()
            ->all();

        return view('layout.elements.search', compact('query', 'posts'));
    }

    public function search(){

    }


}
