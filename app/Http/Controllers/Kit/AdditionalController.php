<?php

namespace App\Http\Controllers\Kit;

use App\Http\Requests\AdditionalRequest;
use App\Http\Controllers\Controller;
use Wstanley\Kitapi\KitService;

class AdditionalController extends Controller
{
    public static function index()
    {
        $service = new KitService();

        return view('kit.additional',
            [
                'countries' => $service->country()->all()
            ]);
    }

    public static function post(AdditionalRequest $request)
    {
        dd($request->all());
    }
}
