<?php
/**
 * Created by PhpStorm.
 * User: Witalij Coder
 * Date: 28.12.2020
 * Time: 11:24
 */

namespace App\Http\Controllers;


use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use TCG\Voyager\Events\Routing;
use TCG\Voyager\Events\RoutingAdmin;
use TCG\Voyager\Events\RoutingAdminAfter;
use TCG\Voyager\Events\RoutingAfter;
use TCG\Voyager\Facades\Voyager;
use App\Models\customers;



class Contact extends Controller
{
    public function Index()
    {
        return view('contact');
    }

    public function ContactForm(Request $request)
    {
        //может  быть con_name как имя  поля (get запрос )
       $customers = new customers();
       $customers->id = $request->id;

       $customers->name  = $request->input('con_name');
       $customers->email  = $request->input('con_email');
       $customers->company  = $request->input('con_company');
       $customers->phone  = $request->input('con_phone');
       $customers->message  = $request->input('con_message');

       $customers->save();
       return redirect('/about');
    }


}