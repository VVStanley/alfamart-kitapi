<?php

namespace App\Http\Controllers\Kit;

use App\Http\Requests\ConfirmationRequest;
use App\Http\Controllers\Controller;

class ConfirmationController extends Controller
{
    public static function index()
    {
        return view('kit.confirmation',
            [
                'request' => session('request')
            ]);
    }

    public static function post(ConfirmationRequest $request)
    {
//        dd(session('request'));
        return view('kit.response');
    }
}
