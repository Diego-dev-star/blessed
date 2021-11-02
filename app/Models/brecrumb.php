<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brecrumb extends Model
{
    use HasFactory;
    protected $table = 'posts';

    public function brecrumb(){
        $brecrumbs = DB::table('posts')->select('value')->where('image', '=', 'free')
            ->orderBy('created_at','desc');
        return $brecrumbs;
    }
}
