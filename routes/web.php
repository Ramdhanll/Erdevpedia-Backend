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

Route::get('/', 'DashboardController@index')->name('home');

Auth::routes(['register' => false]);

Route::get('products/{id}/gallery','ProductController@gallery')
      ->name('products.gallery');

// Transactions
Route::get('transactions/{id}/set-status','TransactionController@setStatus')
      ->name('transactions.status');
      
Route::resources([
  'products'          => 'ProductController',
  'product-galleries' => 'ProductGalleryController',
  'transactions' => 'TransactionController'
]);
// Product