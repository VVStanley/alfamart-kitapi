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
        $data = $request->all();

        unset($data['_token']);

        $data['debitor_type'] = key($data['debitor_type']);

        session(['request.sender' => $data]);

        return redirect()->route('admin.kit.pickup.index');
    }
}
