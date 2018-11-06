<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Define your dashboard here.';
	return AdminSection::view($content, 'Dashboard');
}]);

/*
 *      Роуты ТК КИТ
 */

Route::get('/kit/calculate', ['as' => 'admin.kit.index', function () {
    return AdminSection::view(\App\Http\Controllers\Kit\Calculate::index(), 'ТК КИТ');
}]);

Route::post('/kit/calculate', ['as' => 'admin.kit.calculate', function (\App\Http\Requests\CalculateRequest $request) {

    return AdminSection::view(\App\Http\Controllers\Kit\Calculate::calculate($request), 'ТК КИТ');
}]);

Route::get('/kit/order/customer', ['as' => 'admin.kit.customer.index', function () {

    return AdminSection::view(\App\Http\Controllers\Kit\CustomerController::index(), 'ТК КИТ');
}]);

Route::post('/kit/order/customer', ['as' => 'admin.kit.customer.post', function (\App\Http\Requests\CustomerRequest $request) {

    return AdminSection::view(\App\Http\Controllers\Kit\CustomerController::post($request), 'ТК КИТ');
}]);

Route::get('/kit/order/sender', ['as' => 'admin.kit.sender.index', function () {

    return AdminSection::view(\App\Http\Controllers\Kit\SenderController::index(), 'ТК КИТ');
}]);

Route::post('/kit/order/sender', ['as' => 'admin.kit.sender.post', function (\App\Http\Requests\SenderRequest $request) {

    return AdminSection::view(\App\Http\Controllers\Kit\SenderController::post($request), 'ТК КИТ');
}]);




