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

Route::get('/kit/order/pickup', ['as' => 'admin.kit.pickup.index', function () {
    return AdminSection::view(\App\Http\Controllers\Kit\PickupController::index(), 'ТК КИТ');
}]);

Route::post('/kit/order/pickup', ['as' => 'admin.kit.pickup.post', function (\App\Http\Requests\PickupRequest $request) {
    return AdminSection::view(\App\Http\Controllers\Kit\PickupController::post($request), 'ТК КИТ');
}]);

Route::get('/kit/order/receiver', ['as' => 'admin.kit.receiver.index', function () {
    return AdminSection::view(\App\Http\Controllers\Kit\ReceiverController::index(), 'ТК КИТ');
}]);

Route::post('/kit/order/receiver', ['as' => 'admin.kit.receiver.post', function (\App\Http\Requests\ReceiverRequest $request) {
    return AdminSection::view(\App\Http\Controllers\Kit\ReceiverController::post($request), 'ТК КИТ');
}]);

Route::get('/kit/order/delivery', ['as' => 'admin.kit.delivery.index', function () {
    return AdminSection::view(\App\Http\Controllers\Kit\DeliveryController::index(), 'ТК КИТ');
}]);

Route::post('/kit/order/delivery', ['as' => 'admin.kit.delivery.post', function (\App\Http\Requests\DeliveryRequest $request) {
    return AdminSection::view(\App\Http\Controllers\Kit\DeliveryController::post($request), 'ТК КИТ');
}]);

Route::get('/kit/order/additional', ['as' => 'admin.kit.additional.index', function () {
    return AdminSection::view(\App\Http\Controllers\Kit\AdditionalController::index(), 'ТК КИТ');
}]);

Route::post('/kit/order/additional', ['as' => 'admin.kit.additional.post', function (\App\Http\Requests\AdditionalRequest $request) {
    return AdminSection::view(\App\Http\Controllers\Kit\AdditionalController::post($request), 'ТК КИТ');
}]);



