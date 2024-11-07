<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::controller(PaymentController::class)->group(function () {
    Route::get('/payment/{id?}', 'index')->whereIn('id', ['license', 'renewal'])->name('payment.index');
    Route::get("/payment/success", 'success')->name('payment.success');
    Route::post('/create-order', 'createOrder')->name('create.order');
    Route::post('/payment-callback', 'paymentCallback')->name('payment.callback');
});
