<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//后台路由规则
Route::get('/admin', 'AdminController@index');

//用户管理
Route::get('/user/add', 'UserController@add');
Route::post('/user/insert', 'UserController@insert');
Route::get('/user', 'UserController@index');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::post('/user/update', 'UserController@update');
Route::get('/user/delete/{id}', 'UserController@delete');

//resful 控制器  一条规则顶七条
Route::resource('cate', 'CatesController');

// Route::controller('abc','AbcController');

//标签管理
Route::resource('tag', 'TagController');

//文章管理
Route::resource('article', 'ArticleController');






