<?php

/*
|--------------------------------------------------------------------------
| Service - Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for this service.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'web'], function() {

    // The controllers live in src/Services/Web/Http/Controllers
    // Route::get('/', 'UserController@index');

    Route::get('/', function() {
        return view('web::welcome');
    });
    

});

Route::group(['prefix' => 'admin','middleware' => [ 'admin', 'auth']], function() {
    Route::get('/create_shipment','AdminController@index' );
    Route::post('/create_shipment','AdminController@store');
    Route::get('/','ShipmentController@index');
    Route::get('/create_event/{shipment_id}', 'ShipmentEventController@create');
    Route::post('/create_event/{shipment_id}', 'ShipmentEventController@store');
});
Route::get('/track_shipment','ShipmentTrackerController@create');
Route::post('/track_shipment','ShipmentTrackerController@track');

