<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class Job extends Controller
{
    public function Index()
    {
        //return view('admin.job');
    }

    public function FrontJods()
    {
        $model = \App\Job::paginate(10);
        $model->load('translations');
        $JobCtegories = DB::table('jobs')->distinct()->get('category');
        $JobCtegories->load('translations');
        return view('job', compact('model'))->with([
            'JobCategories' => $JobCtegories
        ]);
    }
    //recrutphone
    public function phone_rand()
    {
        $arr = array(
             "48577179777" => "a" ,
             "48570701735" => "b" ,
             "48450111430" => "c" ,
             "48730541562" => "d"

        );
        $key = array_rand($arr);
        return $key;

    }

    public function show(int $id, $slug){
        $jobpost = \App\Job::find($id);
        return view('layout.SingleJob')->with([
            'jobpost' => $jobpost,
            'recrut' => $this->phone_rand()
        ]);

    }


}
