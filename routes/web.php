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
Route::group(['middleware'=>'admin'],function(){
 Route::resource('products','ProductsController');
  Route::resource('categories','CategoriesController');


});
 Route::resource('products','ProductsController');

Route::resource('addresses','AddressesController');

Route::resource('orders','OrdersController');

Route::resource('order_products','Orders_ProductsController');

Route::resource('shopping_carts','ShoppingCartsController',['only'=>['store','destroy']]);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/main','MainController@main');
Route::get('/home', 'HomeController@index')->name('home');
