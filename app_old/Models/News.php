<?php
/**
 * Created by PhpStorm.
 * User: Witalij Coder
 * Date: 26.11.2020
 * Time: 10:52
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Support\Facades\DB;



class News extends Model
{

    use Translatable;
    protected $translatable = ['title','excerpt', 'body', 'meta_description'];
    protected $table = 'posts';

    protected $fillable = [
        'title','image','body' , 'slug'
    ];
    use SearchableTrait;
    protected $searchable = [
        'columns' => [
            'posts.title' => 10,
            'posts.id' => 5,
            'posts.excerpt' => 3,
            'posts.image' => 2,
        ],
        'joins' => [
            'profiles' => ['posts.id','posts.category_id'],
        ],
    ];


    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id','id');
    }

    public function author(){
        return $this->belongsTo('App\Models\User', 'author_id', 'id');
    }

    public static function latestPost()
    {
        return News::orderBy('updated_at', 'desc');
    }

    //public static function FindByslug ($slug){
    //    return static::where('slug', $slug)->first();
    //


}