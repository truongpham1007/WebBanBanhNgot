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


// back-end

// admin
Route::get('/login','AdminController@getIndex');
Route::get('/dashboard','AdminController@getDashboard');
Route::get('/logout','AdminController@Logout');


Route::post('/admin-dashboard','AdminController@getLogin');

// category-product
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');

