<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Job;
use App\Slideshow;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\subscribe;
use Illuminate\View\View;


class Controller extends BaseController
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function __construct()
    {
        $this->newsblock = new News();



    }

    public function Index()
    {
        $model = Job::all();
        $slider = Slideshow::all();
        $filteres = Job::query()->distinct()->get('category');
        return view('home')->with([
            'model' => $model,
            'slider' => $slider,
            'filteres' => $filteres

        ]);
    }



    public function ContactForm(Request $request)
    {
        //может  быть con_name как имя  поля (get запрос )
        $subscribes = new subscribe();
        $subscribes->id = $request->id;
        $subscribes->email  = $request->input('sub_email');
        $subscribes->save();
        return redirect('/');
    }




}
