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

//route bawaan default laravel
Route::get('/', function(){
    return view('index');
});

//route blog
Route::get('/home', 'HomeController');
Route::get('/article/{id}','ArticleController');
Route::get('/about', 'AboutController');