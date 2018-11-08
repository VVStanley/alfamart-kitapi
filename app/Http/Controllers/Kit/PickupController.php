<?php

namespace App\Http\Controllers\Kit;

use App\Http\Requests\PickupRequest;
use App\Http\Controllers\Controller;

class PickupController extends Controller
{
    public static function index()
    {
        return view('kit.pickup');
    }

    public static function post(PickupRequest $request)
    {
        dd($request->all());
    }
}
