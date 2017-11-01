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

route::get('/tes',function(){
    return 'tes!';
});

route::get('/article', 'testController@index');
route::get('/article/create', 'testController@create');
route::post('/article', 'testController@store');

route::get('/article/{id}', 'testController@show');

route::get('/article/{id}/edit', 'testController@edit');
route::put('/article/{id}', 'testController@update');

route::delete('/article/{id}', 'testController@delete');
