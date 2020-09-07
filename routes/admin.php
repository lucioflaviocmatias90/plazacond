<?php

use Illuminate\Support\Facades\Route;

Route::post('login', 'LoginController@store');

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('apartments', 'ApartmentController@index');

    Route::resource('letters', 'LetterController')->only([
        'index', 'store', 'update', 'destroy'
    ]);

    Route::get('phones', 'PhoneController@index');

});
