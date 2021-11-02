<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Traits\Translatable;
class Job extends Model
{
    use Translatable;
    protected $translatable = ['title', 'description', 'category','meta_description'];

    protected $table = 'jobs';
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getJobPostTable(){
        $job = DB::table('jobs')->get();
        return $job;
    }
    public static function FilterCat(){
     $cat =  DB::table('jobs')->distinct()->get('category');
     return $cat;
    }



}
