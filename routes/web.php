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

Route::get('/', 'ConnectController@showLoginForm');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/login', 'ConnectController@getLogin')->name('login');
Route::post('/login', 'ConnectController@postLogin')->name('login');
Route::post('/logout', 'ConnectController@postLogout')->name('logout');


//Catalogos
// sucursal 

Route::get('/brachoffices', function(){
    return view('catalogs.branchoffices.home');
});