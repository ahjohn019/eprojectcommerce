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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('eproducts','EproductController');

//eproduct prototype
Route::get('/master', 'EproductController@mastermain');
Route::get('/devbasesample', 'EproductController@mastereshop');
Route::get('/', 'EproductController@eshopdevmain');
Route::get('/devcreate', 'EproductController@eshopdevcreate');
Route::get('/devshopcart', 'EproductController@eshopdevcart');
Route::post('/devcreate','EproductController@eshopdevstore')->name('eproducts.eshopdevstore');