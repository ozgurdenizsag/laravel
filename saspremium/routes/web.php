<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Product management
Route::get('admin/products', 'ProductsAdminController@index')->name('products.index')->middleware('auth')->middleware('isAdmin');
Route::post('admin/product/create','ProductsAdminController@create')->name('products.create')->middleware('auth')->middleware('isAdmin');
Route::get('admin/product/getCatSup/{id}','ProductsAdminController@getCatSup')->name('products.getCatSup')->middleware('auth')->middleware('isAdmin');


//Supplier management
Route::get('admin/suppliers', 'SuppliersAdminController@index')->name('suppliers.index')->middleware('auth')->middleware('isAdmin');

