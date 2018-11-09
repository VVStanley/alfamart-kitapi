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
        $data = $request->all();

        unset($data['_token']);

        if (!$data['pick_up']) {

            $data = [];
            session(['request.pick_up' => $data]);
        } else {

            unset($data['pick_up']);
            session(['request.pick_up' => $data]);
        }

        return redirect()->route('admin.kit.receiver.index');
    }
}
