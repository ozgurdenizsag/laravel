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
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/administrations', 'AdministrationController@index')->name('admin');

Route::post('/envoyerMail', 'ContactController@sendMail')->name('envoyerMail');

Route::post('/creerCat', 'CategoryController@store')->name('createCat');
Route::post('/supprimerCat', 'CategoryController@supprimer')->name('deleteCat');
Route::post('/modifierCat', 'CategoryController@modifier')->name('editCat');

Route::get('/category/{idCategory}/photos', 'CategoryController@getAllPhotos');
Route::get('/photo/{idPhoto}/datas', 'CategoryController@getPhotoDatas');

Route::post('/modifierPhoto', 'PhotoController@modifier')->name('editPhoto');
Route::post('/ajouterPhoto', 'PhotoController@create')->name('uploadPhoto');
Route::post('/supprimerPhoto', 'PhotoController@delete')->name('deletePhoto');
