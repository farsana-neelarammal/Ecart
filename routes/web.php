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
Route::view('/welcome', 'welcome');
Route::view('/', 'home');

// customer
Route::view('/login', 'customer/login');
Route::view('/signup', 'customer/signup');
Route::view('/profile', 'customer/profile');

// admin 
Route::view('/admin-login', 'admin/admin-login');
Route::view('/department', 'admin/department');
Route::view('/category', 'admin/category');
Route::view('/subcategory', 'admin/subcategory');
Route::view('/brand', 'admin/brand');
Route::view('/deliverable-locations', 'admin/deliverable-locations');
Route::view('/notifications', 'admin/notifications');

Route::view('/seller-registration', 'admin/seller-registration');
Route::view('/brand-approval', 'admin/brand-approval');
Route::view('/category-approval', 'admin/category-approval');
Route::view('/subcategory-approval', 'admin/subcategory-approval');
Route::view('/messages', 'admin/messages');

// seller
Route::view('/seller-template', 'seller/seller-template');
Route::view('/product-search', 'seller/product-search');
Route::view('/product-search/add-single-product', 'seller/add-single-product');
Route::view('/product-search/add-multiple-products', 'seller/add-multiple-products');
Route::view('/inventory', 'seller/inventory');
Route::view('/seller-account-info', 'seller/seller-account-info');
Route::view('/manage-orders', 'seller/manage-orders');


