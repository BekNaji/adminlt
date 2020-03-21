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

Route::get('/', function () {
    return view('welcome');
});
Route::redirect('admin','admin/home');
Route::redirect('home','admin');
Auth::routes(['register' => false]);

Route::middleware('auth')->prefix('admin')->namespace('backend')->group(function(){

		Route::get('home', 'HomeController@index')->name('home');

	Route::get('profile', 'ProfileController@index')->name('profile');
	
});




