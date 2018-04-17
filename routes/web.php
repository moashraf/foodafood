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

Route::group([ 'prefix' => 'en'], function ()
{
    App()->setLocale('en');

    Route::get('about' , 'ENsiteController@about');
    Route::get('contact' , 'ENsiteController@contact');
Route::resource('/', 'HomeControllerEN');
Route::resource('All_Product', 'ProductControllerEN');
Route::resource('Categories', 'CategoriesProductControllerEN');


});


Route::get('about' , 'ARsiteController@about');
Route::post('sendmail' , 'ARsiteController@sendmail');
Route::get('contact' , 'ARsiteController@contact');
Route::resource('/', 'HomeController');
Route::resource('All_Product', 'ProductController');
Route::resource('Categories', 'CategoriesProductController');
 
Auth::routes();
 

/*
|--------------------------------------------------------------------------
|                   admin              admin 
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function ()
{

Route::get('ajax_del_products/{id}/{Product_id}', 'ProductsController@ajax_del_products');
	
Route::resource('products', 'ProductsController');
Route::resource('categoriesProducts', 'Categories_ProductsController');
Route::resource('siteStings', 'siteStingsController');
Route::resource('sliders', 'sliderController');


});