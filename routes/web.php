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

Route::get('blog/{slug}', ['uses'=>'blogController@getSingle', 'as'=>'blog.single'])->where('slug', '[\w\d\-\_]+');
Route::get('/', 'PagesController@getIndex');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact','PagesController@getContact');
Route::resource('posts', 'PostController');
Route::get('blog', ['uses'=>'blogController@getArchieve', 'as'=>'blog.index']);
