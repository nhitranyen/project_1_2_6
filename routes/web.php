<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index']);

Route::post('/orders',[App\Http\Controllers\HomeController::class, 'orders']);

Route::get('/orders-save',[App\Http\Controllers\HomeController::class, 'orders_save']);

Route::get('/payment-success',[App\Http\Controllers\HomeController::class, 'success']);

Route::get('/events',[App\Http\Controllers\EventController::class, 'index']);

Route::get('/contact',[App\Http\Controllers\HomeController::class,'contact']);

Route::get('/send-mail',[App\Http\Controllers\HomeController::class,'send_mail']);

Route::get('/events_detail/{id}', [App\Http\Controllers\EventController::class, 'detail']);