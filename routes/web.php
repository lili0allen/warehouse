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


Route::resource('warehouse', 'WarehouseController');
Route::resource('category', 'CategoryController');
Route::resource('product', 'ProductController');
Route::resource('attribute', 'AttributeController');
Route::resource('producttransaction', 'ProductTransactionController');
Route::resource('transaction', 'TransactionController');
Route::resource('customer', 'CustomerController');
Route::resource('supplier', 'SupplierController');
