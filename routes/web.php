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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('/admin/users','Admin\UsersController',['except' => ['show', 'create', 'store']]);

//Route::namespace('Admin') => this allows to not put Admin in 'Admin\UsersController
//perfix('admin') => adds 'admin' to the start of url
//name('admin.') => adds 'admin.' to the start of the route
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users','UsersController',['except' => ['show', 'create', 'store']]);
    
});

