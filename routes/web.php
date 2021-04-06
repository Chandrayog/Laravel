<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('contacts', 'App\Http\Controllers\ContactController@index');

// Route::resource('/contacts', 'App\Http\Controllers\ContactController@index');
Route::get('/contacts/create', 'App\Http\Controllers\ContactController@create');
Route::get('/contacts/edit/{contact}','App\Http\Controllers\ContactController@edit');
Route::delete('/contacts/destroy/{contact}','App\Http\Controllers\ContactController@destroy');
Route::patch('/contacts/update/{contact}','App\Http\Controllers\ContactController@update')->name('contacts.update');
Route::get('/contacts/{contact}','App\Http\Controllers\ContactController@show');
//Route::post('/contacts','App\Http\Controllers\ContactController@store');
Route::post('/contacts/store', 'App\Http\Controllers\ContactController@store')->name('contacts.store');