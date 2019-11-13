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
//fron end
Route::get('/', function () {
    return view('welcome');
});
Route::get('trang-chu', [
    'as' => 'trangchu',
    'uses' => 'PageController@getIndex',
]);
//Loai san pham

Route::get('loai-san-pham', [
    'as' => 'loaisanpham',
    'uses' => 'PageController@getProductType',
]);

Route::get('chi-tiet-san-pham', [
    'as' => 'chitietsanpham',
    'uses' => 'PageController@getProductDetail',
]);

Route::get('lien-he', [
    'as' => 'lienhe',
    'uses' => 'PageController@getContact',
]);

Route::get('gioi-thieu', [
    'as' => 'gioithieu',
    'uses' => 'PageController@getAbout',
]);
Route::get('dang-nhap', [
    'as' => 'dangnhap',
    'uses' => 'PageController@getLogin',
]);
Route::get('dang-ki', [
    'as' => 'dangki',
    'uses' => 'PageController@getRegister',
]);
Route::post('dang-ki', [
    'as' => 'pdangki',
    'uses' => 'PageController@postRegister',
]);

//backend
Route::get('/login','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@log_out');

Route::post('/admin-dashboard','AdminController@dashboard');


//Category Product
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');

Route::post('/save-category-product','CategoryProduct@save_category_product');

