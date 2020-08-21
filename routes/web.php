<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->group(function(){
    Route::get('/dashboard/','Dashboard\DashboardController@index');

    //Users
    Route::middleware('auth')->get('/dashboard/users','Dashboard\UserController@index')->name('dashboard.users');
    Route::get('/dashboard/users/edit/{id}','Dashboard\UserController@edit')->name('dashboard.users.edit');
    Route::put('/dashboard/users/update/{id}','Dashboard\UserController@update')->name('dashboard.users.update');
    Route::delete('/dashboard/users/delete/{id}','Dashboard\UserController@destroy')->name('dashboard.users.delete');

});
