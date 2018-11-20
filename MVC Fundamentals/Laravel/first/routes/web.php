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
Route::resource('products','ProductController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('user/{name?}', function($name=null){
	return $name;
});

Route::get('user/{id}/{name}',function($id,$name){
})->where(['id'=>'[0-9]+','name'=>'[a-z]+']);