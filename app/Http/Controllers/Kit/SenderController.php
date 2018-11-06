<?php

namespace App\Http\Controllers\Kit;

use App\Http\Requests\SenderRequest;
use App\Http\Controllers\Controller;
use Wstanley\Kitapi\KitService;

class SenderController extends Controller
{
    public static function index()
    {
        $service = new KitService();

        return view('kit.sender',
            [
                'countries' => $service->country()->all()
            ]);
    }

    public static function post(SenderRequest $request)
    {
        dd($request->all());
    }
}
