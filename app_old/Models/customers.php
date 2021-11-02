<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Traits\Translatable;
class Customers extends Model
{
    use HasFactory;
    public  $timestamps = false;

    protected $table = 'customers';

}
