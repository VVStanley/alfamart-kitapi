<?php

namespace App\Http\Controllers\Kit\Order;

use App\Http\Controllers\Controller;

class SecondController extends Controller
{
    public static function index()
    {


        dd(session('response'), session('request'));


        return view('kit.order.second',
            [
                'session' => session('response')
            ]);
    }
}
