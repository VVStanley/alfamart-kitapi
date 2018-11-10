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
        $data = $request->all();
        $service = new KitService();

        $response = $service->calculate($data)->calculateResult();


        $data['dispatch_address_code'] = isset($response->dispatch_address('standart')->code)
            ? $response->dispatch_address('standart')->code : false;

        session(['response' => $response, 'request' => $data]);

        return view('kit.calculate', [

            'cities' => $service->cityTdd()->all(),
            'currencies' => $service->currency()->all(),
            'insurance' => $service->insurance()->agent(),
            'response' => $response  // ->error ? $response->error : $response->cost('standart'),
        ]);
    }
}
