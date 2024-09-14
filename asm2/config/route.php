<?php
use app\Routing\Route;
// Define routes
Route::add('/', 'HomeController@index');
Route::add('/index', 'HomeController@index');
Route::add('/product/list', 'ProductController@product');
Route::add('/product/list/(\d+)', 'ProductController@product');
Route::add('/product/list/(\d+)', 'ProductController@product');
Route::add('/product/search/(\w+)', 'ProductController@product');
Route::add('/product/detail/(\d+)', 'ProductController@detail');

Route::add('/cart', 'ProductController@addcart');
Route::add('/delcart/(\d+)', 'ProductController@delcart');

Route::add('/login', 'UserController@login');
Route::add('/register', 'UserController@register');


$uri = isset($_GET['url']) ? "/".rtrim($_GET['url'], '/') : '/index';
Route::dispatch($uri);