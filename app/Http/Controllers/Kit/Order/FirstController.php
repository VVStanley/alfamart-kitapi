<?php

namespace App\Http\Controllers\Kit\Order;

use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public static function index()
    {


//        dd(session('response'), session('request'));


        return view('kit.order.first');
    }
}
