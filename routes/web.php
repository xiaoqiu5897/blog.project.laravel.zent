<?php

// Route::get('/','BlogController@index');

// Route::get('blog/{slug}','BlogController@detail');

// Route::get('category/{slug}','BlogController@category');


// Route::get('/',function ()
// {
// 	$crawler = Goutte::request('GET', 'https://dantri.com.vn/kinh-doanh/thu-tuong-hoi-facebook-google-ban-khoan-dieu-gi-khi-dau-tu-o-viet-nam-20180912160337742.htm');
// 	$crawler->filter('#ctl00_IDContent_Tin_Chi_Tiet h1.mgb15')->each(function ($node) {
// 		dump($node->text());
// 	});
// 	$crawler->filter('#ctl00_IDContent_Tin_Chi_Tiet h2.sapo')->each(function ($node) {
// 		dump($node->text());
// 	});
// 	$crawler->filter('#ctl00_IDContent_Tin_Chi_Tiet div#divNewsContent')->each(function ($node) {
// 		dump($node->html());//lấy đc cả html
// 	});
// });
// Route::prefix('admin')->group(function()
// {
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// });