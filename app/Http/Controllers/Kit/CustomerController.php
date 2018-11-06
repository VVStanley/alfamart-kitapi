<?php

namespace App\Http\Controllers\Kit;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use Wstanley\Kitapi\KitService;

class CustomerController extends Controller
{
    public static function index()
    {
        $service = new KitService();

        return view('kit.customer',
            [
                'countries' => $service->country()->all()
            ]);
    }

    public static function post(CustomerRequest $request)
    {
        $data = $request->all();

        unset($data['_token']);

        $data['debitor_type'] = key($data['debitor_type']);

        session(['request.customer' => $data]);

        return redirect()->route('admin.kit.sender.index');
    }
}
