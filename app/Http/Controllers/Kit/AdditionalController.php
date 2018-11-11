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
        $data = $request->all();

        unset($data['_token']);

        array_filter($data, function ($value, $key) {
            session(['request.' . $key => $value]);
        }, ARRAY_FILTER_USE_BOTH);

        return redirect()->route('admin.kit.confirmation.index');
    }
}
