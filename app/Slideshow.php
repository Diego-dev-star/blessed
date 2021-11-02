<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use function Sodium\compare;
use TCG\Voyager\Traits\Translatable;

class Slideshow extends Model
{
    use Translatable;

    protected $translatable = ['title','description'];

    protected $table = 'slideshow';


}
