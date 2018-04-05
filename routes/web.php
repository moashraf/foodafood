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

Route::get('about', function () { return view('main.about');});
Route::get('contact', function () { return view('main.contact');});
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

	
Route::resource('products', 'ProductsController');
Route::resource('categoriesProducts', 'Categories_ProductsController');
Route::resource('siteStings', 'siteStingsController');
Route::resource('sliders', 'sliderController');


});