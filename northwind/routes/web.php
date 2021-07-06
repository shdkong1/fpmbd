<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
    return view('dashboard');
});
Route::get('shipper', 'App\Http\Controllers\ShipperController@index')->name('index');
Route::post('shipper/add_shipper', 'App\Http\Controllers\ShipperController@add_shipper')->name('shipper/add_shipper');
Route::get('shipper/edit_shipper/{id}', 'App\Http\Controllers\ShipperController@edit')->name('edit');
Route::put('update', 'App\Http\Controllers\ShipperController@update')->name('update');
