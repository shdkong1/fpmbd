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

Route::get('home', function (){
    return view('dashboard');
})->name('home');

Route::get('shipper', 'App\Http\Controllers\ShipperController@index')->name('indexshipper');
Route::post('shipper/add_shipper', 'App\Http\Controllers\ShipperController@add_shipper')->name('shipper/add_shipper');
Route::get('shipper/edit_shipper/{id}', 'App\Http\Controllers\ShipperController@edit')->name('editshipper');
Route::put('/{id}', 'App\Http\Controllers\ShipperController@update')->name('updateshipper');
Route::delete('deleted', 'App\Http\Controllers\ShipperController@delete')->name('deleteshipper');

Route::get('region', 'App\Http\Controllers\RegionController@index')->name('index');
Route::post('region/add_region', 'App\Http\Controllers\RegionController@add_region')->name('region/add_region');
Route::get('region/edit_region/{id}', 'App\Http\Controllers\RegionController@edit')->name('edit');
Route::put('update', 'App\Http\Controllers\RegionController@update')->name('update');

Route::get('category', 'App\Http\Controllers\CategoryController@index')->name('index');
Route::post('category/add_category', 'App\Http\Controllers\CategoryController@add_region')->name('category/add_category');
Route::get('category/edit_category/{id}', 'App\Http\Controllers\CategoryController@edit')->name('edit');
Route::put('update', 'App\Http\Controllers\CategoryController@update')->name('update');

Route::get('product', 'App\Http\Controllers\ProductController@index')->name('index');
Route::post('product/add_product', 'App\Http\Controllers\ProductController@add_product')->name('product/add_product');
Route::get('product/edit_product/{id}', 'App\Http\Controllers\ProductController@edit')->name('edit');
Route::put('update', 'App\Http\Controllers\ProductController@update')->name('update');

Route::get('supplier', 'App\Http\Controllers\SupplierController@index')->name('index');
Route::post('supplier/add_supplier', 'App\Http\Controllers\SupplierController@add_product')->name('supplier/add_supplier');
Route::get('supplier/edit_supplier/{id}', 'App\Http\Controllers\SupplierController@edit')->name('edit');
Route::put('update', 'App\Http\Controllers\SupplierController@update')->name('update');

Route::get('orderdetail', 'App\Http\Controllers\OrderdetailController@index')->name('index');
Route::post('orderdetail/add_orderdetail', 'App\Http\Controllers\OrderdetailController@add_product')->name('orderdetail/add_orderdetail');
Route::get('orderdetail/edit_orderdetail/{id}', 'App\Http\Controllers\OrderdetailController@edit')->name('edit');
Route::put('update', 'App\Http\Controllers\OrderdetailController@update')->name('update');

Route::get('order', 'App\Http\Controllers\OrderController@index')->name('index');
Route::post('order/add_order', 'App\Http\Controllers\OrderController@add_product')->name('order/add_order');
Route::get('order/edit_order/{id}', 'App\Http\Controllers\OrderController@edit')->name('edit');
Route::put('update', 'App\Http\Controllers\OrderController@update')->name('update');

Route::get('employee', 'App\Http\Controllers\EmployeeController@index')->name('index');
Route::post('employee/add_employee', 'App\Http\Controllers\EmployeeController@add_product')->name('employee/add_employee');
Route::get('employee/edit_employee/{id}', 'App\Http\Controllers\EmployeeController@edit')->name('edit');
Route::put('update', 'App\Http\Controllers\EmployeeController@update')->name('update');

Route::get('employeeterritory', 'App\Http\Controllers\EmployeeterritoryController@index')->name('index');
Route::post('employeeterritory/add_employeeterritory', 'App\Http\Controllers\EmployeeterritoryController@add_product')->name('employeeterritory/add_employeeterritory');
Route::get('employeeterritory/edit_employeeterritory/{id}', 'App\Http\Controllers\EmployeeterritoryController@edit')->name('edit');
Route::put('update', 'App\Http\Controllers\EmployeeterritoryController@update')->name('update');

Route::get('territory', 'App\Http\Controllers\TerritoryController@index')->name('index');
Route::post('territory/add_territory', 'App\Http\Controllers\TerritoryController@add_product')->name('territory/add_territory');
Route::get('territory/edit_territory/{id}', 'App\Http\Controllers\TerritoryController@edit')->name('edit');
Route::put('update', 'App\Http\Controllers\TerritoryController@update')->name('update');

Route::get('customer', 'App\Http\Controllers\CustomerController@index')->name('index');
Route::post('customer/add_customer', 'App\Http\Controllers\CustomerController@add_product')->name('customer/add_customer');
Route::get('customer/edit_customer/{id}', 'App\Http\Controllers\CustomerController@edit')->name('edit');
Route::put('update', 'App\Http\Controllers\CustomerController@update')->name('update');

Route::get('customerdemographic', 'App\Http\Controllers\CustomerdemographicController@index')->name('index');
Route::post('customerdemographic/add_customerdemographic', 'App\Http\Controllers\CustomerdemographicController@add_product')->name('customerdemographic/add_customerdemographic');
Route::get('customerdemographic/edit_customerdemographic/{id}', 'App\Http\Controllers\CustomerdemographicController@edit')->name('edit');
Route::put('update', 'App\Http\Controllers\CustomerdemographicController@update')->name('update');

Route::get('usstate', 'App\Http\Controllers\UsstatesController@index')->name('index');
Route::post('usstate/add_usstate', 'App\Http\Controllers\UsstatesController@add_product')->name('usstate/add_usstate');
Route::get('usstate/edit_usstate/{id}', 'App\Http\Controllers\UsstatesController@edit')->name('edit');
Route::put('update', 'App\Http\Controllers\UsstatesController@update')->name('update');