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

/*Route::get('/', function () {
    return view('/blog/index');
});*/

Auth::routes();

Route::name('admin_home')->get('/home', 'HomeController@index');

Route::name('index')->get('/', 'BlogController@index');
Route::name('new_post')->get('/create', 'BlogController@create');
Route::name('store_post')->post('/', 'BlogController@store');
Route::name('show_post')->get('/post/{id}', 'BlogController@show');
Route::name('edit_post')->get('/post/{id}/edit', 'BlogController@edit');
Route::name('update_post')->put('/post/{id}', 'BlogController@update');
Route::name('delete_post')->delete('/post/{id}', 'BlogController@destroy');

