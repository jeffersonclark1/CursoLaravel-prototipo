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

Route::resourceVerbs([
    'create'=>'cadastro',
    'edit'=>'editar'
]);

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::view('/form', 'form');
//
//Route::get('/users/{id}', 'LaraDev\Http\Controllers\UserController@index');
//Route::get('/getData', 'LaraDev\Http\Controllers\UserController@getData');
//
//Route::post('/postData', 'LaraDev\Http\Controllers\UserController@postData');
//
//Route::put('/users/1', 'LaraDev\Http\Controllers\UserController@testPut');
//
//Route::patch('/users/1', 'LaraDev\Http\Controllers\UserController@testPatch');
//
//Route::match(['put', 'patch'], '/users/2', 'LaraDev\Http\Controllers\UserController@testMatch');
//
//Route::delete('/users/1', 'LaraDev\Http\Controllers\UserController@destroy');
//
//Route::any('/users', 'LaraDev\Http\Controllers\UserController@any');

Route::resource('posts', 'LaraDev\Http\Controllers\PostController');
