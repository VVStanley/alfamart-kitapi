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

Route::get('/kit/order/second', ['as' => 'admin.kit.order.second', function () {

    return AdminSection::view(\App\Http\Controllers\Kit\Order\SecondController::index(), 'ТК КИТ');
}]);



