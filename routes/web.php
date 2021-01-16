<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/logout', 'HomeController@logout')->name('user.logout');

// admin routes
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showlogin')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');


//admin section
//categories
Route::get('admin/categories', 'Admin\Category\CategoryController@category')->name('categories');
Route::post('admin/store/category', 'Admin\Category\CategoryController@storecategory')->name('store.category');
Route::get('delete/category/{id}', 'Admin\Category\CategoryController@deletecategory');
Route::get('edit/category/{id}', 'Admin\Category\CategoryController@editcategory');
Route::post('update/category/{id}', 'Admin\Category\CategoryController@updatecategory');

//brands
Route::resource('brands', 'Admin\Category\BrandController');

//subcategory
Route::resource('subcategory', 'Admin\Category\SubcategoryController');

//coupans
Route::get('admin/newsletter', 'Admin\Category\CoupanController@newsletter')->name('admin.newsletter');
Route::get('admin/newsletter_delete/{id}','Admin\Category\CoupanController@delete_letter')->name('admin.delete_letter');
Route::resource('coupans', 'Admin\Category\CoupanController');

//frontend
Route::post('store/newsletter', 'FrontendController@storeletter')->name('store.newsletter');

//Products
Route::resource('products', 'Admin\ProductController');