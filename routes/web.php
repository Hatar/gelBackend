<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'gel_backend'],function(){
    Route::resource('map','MapController');
    //Config Device of Map
    Route::get('/map/mode_config/{id}','MapController@configDevice')->name('map.config');
    Route::resource('status','StatusController');
    Route::resource('device','DeviceController');
    Route::put('save_position/{id}','DeviceController@save_position')->name('device.save_position');
    Route::get('retrievemaps','MapController@retrievemap')->name('retrievemaps');
});

