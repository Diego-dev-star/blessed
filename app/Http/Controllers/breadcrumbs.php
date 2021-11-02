<?php
/**
 * Created by PhpStorm.
 * User: Witalij Coder
 * Date: 21.12.2020
 * Time: 13:26
 */

namespace App\Http\Controllers;


use Illuminate\Routing\Route;
use App\Models;


class breadcrumbs extends Controller
{
    public function Brecrumbs()
    {
        $brecrumbs = new brecrumb();
        return $brecrumbs;
    }

}