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
            return redirect()->route('admin.kit.receiver.index');
        }

        if ($data['pickup_r'] == '0') {
            $data['real_country'] = session('request.sender.real_country') ?? '';
            $data['real_city'] = session('request.sender.real_city') ?? '';
            $data['real_street'] = session('request.sender.real_street') ?? '';
            $data['real_house'] = session('request.sender.real_house') ?? '';
            $data['real_supp'] = session('request.sender.real_supp') ?? '';
            $data['real_room'] = session('request.sender.real_room') ?? '';
        }
        unset($data['pick_up']);
        session(['request.pick_up' => $data]);

        return redirect()->route('admin.kit.receiver.index');
    }
}
