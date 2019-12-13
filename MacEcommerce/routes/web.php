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
// User
Route::get('/home','HomeController@getIndex');
Route::get('/product-type','HomeController@getProductType');
Route::get('/product-detail/{product_id}','ProductController@getProductDetail');
Route::get('/contact','HomeController@getContact');
Route::get('/about-us','HomeController@getAboutUs');
Route::get('/login-user','HomeController@getLogin');
Route::get('/register','HomeController@getRegister');
Route::get('/logout-user','HomeController@getLogout');
Route::get('/checkout','HomeController@getCheckOut');
//show category 
Route::get('/category-type/{category_id}','CategoryProduct@showCategoryProduct');
Route::get('/brand-type/{brand_id}','BrandController@showBrandProduct');



// back-end

// admin
Route::get('/login','AdminController@getIndex');
Route::get('/dashboard','AdminController@getDashboard');
Route::get('/logout','AdminController@Logout');


Route::post('/admin-dashboard','AdminController@getLogin');

// category-product
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');
Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');

Route::post('/save-category-product','CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');

//Brand Controller

Route::get('/add-brand-product','BrandController@add_brand_product');
Route::get('/edit-brand-product/{brand_product_id}','BrandController@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}','BrandController@delete_brand_product');
Route::get('/all-brand-product','BrandController@all_brand_product');

Route::get('/unactive-brand-product/{brand_product_id}','BrandController@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','BrandController@active_brand_product');

Route::post('/save-brand-product','BrandController@save_brand_product');
Route::post('/update-brand-product/{brand_product_id}','BrandController@update_brand_product');

//Product
Route::get('/add-product','ProductController@add_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');
Route::get('/all-product','ProductController@all_product');

Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');

Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');



