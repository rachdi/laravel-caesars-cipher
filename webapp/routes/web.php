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

Route::get('text/message','ControllerMessage@getIndex');
Route::post('text/comment','ControllerMessage@AjoutText');
Route::post('text/message','ControllerMessage@Commentaireajouter');
Route::post('/supprim/{id}','ControllerMessage@DeleteMessage');
Route::post('/chiffrer/{id}','ControllerMessage@Chiffrer');
