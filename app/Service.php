<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Traits\Translatable;

class Service extends Model
{
    //multilang
    use Translatable;
    protected $translatable = ['title', 'body'];

    use HasFactory;
    protected $table = 'services';


    public function getService(){
        $service = DB::table('services')->get();
        return $service;
    }
}
