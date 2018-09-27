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

// Route::get('/', function () {
//     return view('posts.index');
// });

Route::get('/','PostController@index');

Route::get('blog/{slug}','PostController@detail');

Route::get('category/{slug}','PostController@category');

Route::get('tag/{slug}','PostController@tag');

Route::prefix('admin')->group(function()
{
	Route::get('/','AdminController@index');

	Route::get('posts/getlistposts','AdminPostAjaxController@getListPosts');

	Route::resource('posts','AdminPostAjaxController');

	// Route::get('categories/list','AdminPostController@index');

	// Route::get('tags/list','AdminControllerPost@index');

});