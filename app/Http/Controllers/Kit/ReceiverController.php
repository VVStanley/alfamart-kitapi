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
        $data = $request->all();

        if ($data['receiver'] == '0') {
            session(['request.receiver' => session('request.customer')]);
            return redirect()->route('admin.kit.additional.index');
        }

        unset($data['receiver'], $data['_token']);
        session(['request.receiver' => $data]);
        return redirect()->route('admin.kit.additional.index');
    }
}
