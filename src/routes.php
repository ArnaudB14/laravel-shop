<?php

use Illuminate\Support\Facades\Route;

Route::prefix('shop')->namespace('Amsgames\LaravelShop\Http\Controllers')->group(function () {
    Route::get('callback/payment/{status}/{id}/{shoptoken}', 'Shop\CallbackController@process')->name('shop.callback');
    Route::post('callback/payment/{status}/{id}/{shoptoken}', 'Shop\CallbackController@process');
});
