<?php

namespace App\Http\Controllers\Kit;

use App\Http\Requests\ReceiverRequest;
use App\Http\Controllers\Controller;
use Wstanley\Kitapi\KitService;

class ReceiverController extends Controller
{
    public static function index()
    {
        $service = new KitService();

        return view('kit.receiver',
            [
                'countries' => $service->country()->all()
            ]);
    }

    public static function post(ReceiverRequest $request)
    {
        dd($request->all());
    }
}
