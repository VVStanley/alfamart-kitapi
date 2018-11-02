<?php

namespace App\Http\Controllers\Kit;

use App\Http\Controllers\Controller;
use App\Http\Requests\CalculateRequest;
use Wstanley\Kitapi\KitService;

class Calculate extends Controller
{
    public static function index()
    {
        $service = new KitService();

        return view('kit.calculate', [
            'cities' => $service->cityTdd()->all(),
            'currencies' => $service->currency()->all(),
            'insurance' => $service->insurance()->agent(),
        ]);
    }

    public static function calculate(CalculateRequest $request)
    {
//        dd($request->all());

        $service = new KitService();

        $response = $service->calculate($request->all())->standart();

//        dd($response);

        session(['response' => $response, 'request' => $request->all()]);

//        dd(session('response'), session('request'));

        return view('kit.calculate', [

            'cities' => $service->cityTdd()->all(),
            'currencies' => $service->currency()->all(),
            'insurance' => $service->insurance()->agent(),
            'cost' => $response->cost,
        ]);

    }
}