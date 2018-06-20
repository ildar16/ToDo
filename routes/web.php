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

//Route::get('/', 'HomeController@index');
//Route::get('/posts/{slug}', ['uses'=>'PostController@getPost', 'as'=>'get-post']);

Route::get('/', ['uses'=>'AuthController@getLogin', 'middleware' => 'guest']);
Route::get('/todo/', ['uses'=>'TodoController@index', 'middleware' => 'auth'])->name('todo');
Route::get('/todo/current', ['uses'=>'TodoController@index', 'middleware' => 'auth'])->name('current-tasks');
Route::get('/todo/done', ['uses'=>'TodoController@index', 'middleware' => 'auth'])->name('done-tasks');
Route::get('/todo/login', ['uses'=>'AuthController@getLogin', 'middleware' => 'guest'])->name('user-login');
Route::post('/todo/login', ['uses'=>'AuthController@getAuth'])->name('get-post');
Route::get('/todo/logout', ['uses'=>'AuthController@getLogout'])->name('get-logout');
Route::post('/todo', ['uses'=>'TodoController@postIndex']);
Route::post('/todo/current', ['uses'=>'TodoController@postIndex']);
Route::post('/todo/done', ['uses'=>'TodoController@postIndex']);
Route::get('/todo/new', ['uses'=>'TodoController@getNew'])->name('new-task');
Route::post('/todo/new', ['uses'=>'TodoController@postNew']);
Route::post('/todo/new', ['uses'=>'TodoController@postNew']);
Route::bind('Item', function ($value, $route){
    return Item::where('id', $value)->first();
});
Route::get('/todo/delete/{item}', ['uses'=>'TodoController@getDelete'])->name('delete-task');