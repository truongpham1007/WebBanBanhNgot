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
Route::post('/search','HomeController@search')->name('search');
Route::get('/product-type','HomeController@getProductType');
Route::get('/product-detail/{product_id}','ProductController@getProductDetail');
Route::get('/contact','HomeController@getContact');
Route::post('/add-contacts','HomeController@addContact');
Route::get('/about-us','HomeController@getAboutUs');
Route::get('/login-user','HomeController@getLogin');
Route::get('/register','HomeController@getRegister');
Route::get('/logout-user','HomeController@getLogout');
Route::get('/autocomplete', 'AutocompleteController@index');
Route::get('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');
Route::get('/forgot','HomeController@getForgot');
Route::post('forgot', [
	'as'=>'quen-mat-khau',
	'uses'=>'HomeController@postQuenmatkhau'
]);

Route::get('khoiphuc/{email}/{code}', [
	'as'=>'khoi-phuc',
	'uses'=>'HomeController@getKhoiphuc'
]);

Route::post('khoiphuc', [
	'as'=>'khoi-phuc',
	'uses'=>'HomeController@postKhoiphuc'
]);

//test


//Cart
Route::post('/save-cart','CartController@getCheckOut');
Route::get('/show-cart','CartController@getCart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart-quantity','CartController@update_cart_quantity');
//Checkout

Route::get('/login-checkout','CheckoutController@login_checkout');
Route::get('/logout-checkout','CheckoutController@logout_checkout');
Route::post('/add-customer','CheckoutController@add_customer');

Route::post('/order-place','CheckoutController@order_place');
Route::post('/login-customer','CheckoutController@login_customer');
Route::get('/checkout','CheckoutController@checkout');
Route::get('/payment','CheckoutController@payment');
Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');

//Order
Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/pass-order','CheckoutController@pass_order');
Route::get('/view-order/{orderId}','CheckoutController@view_order');
Route::get('/update-order/{orderId}','CheckoutController@update_order');
Route::get('/delete-order/{order_id}','CheckoutController@delete_order');
//show category 
Route::get('/category-type/{category_id}','CategoryProduct@showCategoryProduct');
Route::get('/brand-type/{brand_id}','BrandController@showBrandProduct');



// back-end

// admin
Route::get('/login','AdminController@getIndex');
Route::get('/dashboard','AdminController@getDashboard');
Route::get('/logout','AdminController@Logout');
Route::get('/all-contact','BrandController@all_contact');
Route::get('/delete-contact/{id}','BrandController@delete_contact');
//user
Route::get('/all-user','BrandController@all_user');
Route::get('/delete-user/{id}','BrandController@delete_user');


Route::post('/admin-dashboard','AdminController@getLogin');


// category-product
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
Route::get('/delete-category-product','CategoryProduct@delete_category_product')->name('delete-category-product');
Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');

Route::get('/save-category-product','CategoryProduct@save_category_product')->name('save-category-product');
Route::get('/update-category-product','CategoryProduct@update_cate')->name('update-cate');

//Brand Controller

Route::get('/add-brand-product','BrandController@add_brand_product')->name('add.brand');
Route::get('/edit-brand-product/{brand_product_id}','BrandController@edit_brand_product');
Route::get('/delete-brand-product','BrandController@delete_brand_product')->name('delete-brand-product');
Route::get('/all-brand-product','BrandController@all_brand_product');
Route::get('postbrandAjax', 'BrandController@PostBrand')->name('postbrandAjax');

Route::get('/unactive-brand-product/{brand_product_id}','BrandController@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','BrandController@active_brand_product');

Route::post('/save-brand-product','BrandController@save_brand_product');
Route::post('/update-brand-product/{brand_product_id}','BrandController@update_brand_product');

//Product
Route::get('/add-product','ProductController@add_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product','ProductController@delete_product')->name('delete-product');
Route::get('/all-product','ProductController@all_product');

Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');

Route::get('/save-product','ProductController@save_product')->name('save-product');
Route::post('/update-product/{product_id}','ProductController@update_product');



