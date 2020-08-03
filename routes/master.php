<?php

use Illuminate\Support\Facades\Route;

Route::post('login', 'Auth\LoginController@store');
