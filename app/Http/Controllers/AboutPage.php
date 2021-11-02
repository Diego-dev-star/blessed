<?php
/**
 * Created by PhpStorm.
 * User: Witalij Coder
 * Date: 05.01.2021
 * Time: 9:31
 */

namespace App\Http\Controllers;


use App\Service;

class AboutPage extends Controller
{
    public function Index()
    {
        return view('about')->with([
            'service' => $this->aboutBlock()

        ]);

    }

    public function aboutBlock()
    {
        $blockVar = new Service();
        return $blockVar->getService();

    }
}
