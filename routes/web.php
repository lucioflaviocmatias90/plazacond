<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function() {

	Route::get('/home', 'HomeController@index')->name('home');

	Route::resources([
		'owner' => 'OwnerController',
		'kiosk' => 'KioskController',
		'letter' => 'LetterController',
		'notice' => 'NoticeController',
		'phone' => 'PhoneController',
		'resident' => 'ResidentController',
		'vehicle' => 'VehicleController',
		'visit' => 'VisitController',
		'visitor' => 'VisitorController',
		'classified' => 'ClassifiedController',
	]);

	// URLS DE PESQUISAS

	Route::post('owner/search', 'OwnerController@search')->name('owner.search');

	Route::post('resident/search', 'ResidentController@search')->name('resident.search');

	Route::post('vehicle/search', 'VehicleController@search')->name('vehicle.search');

	Route::post('letter/search', 'LetterController@search')->name('letter.search');

	Route::post('classified/search', 'ClassifiedController@search')->name('classified.search');

	Route::post('visitor/search', 'VisitorController@search')->name('visitor.search');


	// CADASTRO DE VISITAS

	Route::post('visit/{visit}', 'VisitorController@visitStore')->name('visit.store');

});