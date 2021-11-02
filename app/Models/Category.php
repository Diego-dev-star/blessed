<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use Translatable;
    protected $translatable = ['title','excerpt', 'body',];

    use HasFactory;
    protected $table = 'categories';

    protected $fillable = ['id', 'name', 'slug'];

    public function category()
    {
        return $this->belongsToMany(Category::class, 'categories', 'id');
    }

    public function item()
    {
        return $this->belongsToMany(News::class, 'posts', 'category_id');
    }


}
