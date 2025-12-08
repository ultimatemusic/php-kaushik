<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\registration;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\OTPEmailController;
use App\Http\Controllers\adminusers;
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
// front end route
Route::get('/',[ProductController::class,'showproduct']);
Route::get('/view-product/{id}',[ProductController::class,'viewproduct']);
// stores route
Route::get('/stores',[HomeController::class,'index']);
// category route
Route::get('/admin/add-category',[CategoryController::class,'index']);
Route::post('/admin/add-category',[CategoryController::class,'store']);
Route::get('/admin/edit-category/{id}',[CategoryController::class,'shocategory']);
Route::post('/admin/edit-category/{id}',[CategoryController::class,'update']);
Route::get('/admin/delete-category/{id}',[CategoryController::class,'destroy']);
Route::get('/admin/add-subcategory',[SubCategoryController::class,'index']);
Route::post('/admin/add-subcategory',[SubCategoryController::class,'store']);
Route::get('/admin/edit-subcategory/{id}',[SubCategoryController::class,'showsubcategory']);
Route::post('/admin/edit-subcategory/{id}',[SubCategoryController::class,'update']);
Route::get('/admin/delete-subcategory/{id}',[SubCategoryController::class,'destroy']);

// user registration route
Route::get('/create-account',[registration::class,'index']);
Route::post('/create-account',[registration::class,'store']);
Route::get('/sign-in',[registration::class,'signin']);
Route::post('/sign-in',[registration::class,'login']);
Route::get('/logout',[registration::class,'logout']);
Route::get('/profile',[registration::class,'profile']);
// Route::get('/update-Profile',[registration::class,'editprofile']);
Route::post('/update-Profile',[registration::class,'updateprofile']);
// category
Route::get('/category/{id}',[ProductController::class,'viewcategory']);
Route::get('/category-page/{id}',[ProductController::class,'categorypage']);
// add to cart route
Route::post('/add-to-cart',[CartController::class,'store']); 
Route::get('/cart/{id}',[CartController::class,'index']);
Route::get('/delete-product-from-cart/{id}',[CartController::class,'destroy']);
// manage orders route


// admin logon route
Route::get('/admin-login',[adminusers::class,'index']);
Route::post('/admin-login',[adminusers::class,'adminlogin']);
Route::get('/admin/admin-logout',[adminusers::class,'adminlogout']);




Route::get('/admin/Manage-orders',[CartController::class,'show']);
Route::get('/admin/Manage-orders/complete/{id}',[CartController::class,'complete']);
Route::get('/admin/Manage-orders/cancel/{id}',[CartController::class,'cancel']);


// Route::get('/admin/view-order-details/{id}',[CartController::class,'vieworderdetails']);



// contact us route
Route::get('/contact-us',[ContactController::class,'index']);
Route::post('/contact-us',[ContactController::class,'store']);
Route::get('/admin/Menage-contact',[ContactController::class,'show']);
Route::get('/admin/delete-contact/{id}',[ContactController::class,'destroy']);
// admin route
// Route::get('/admin',[ProductController::class,'index']);
Route::get('/admin/addproduct',[ProductController::class,'addproduct']);
Route::post('/admin/addproduct',[ProductController::class,'store']);
Route::get('/admin/Menage-product',[ProductController::class,'show']);
Route::get('/admin/edit-product/{id}',[ProductController::class,'ShowEditProduct']);
Route::post('/admin/edit-product/{id}',[ProductController::class,'update']);
Route::get('/admin/delete-product/{id}',[ProductController::class,'destroy']);
// addmin menage customers
Route::get('/admin',[registration::class,'show']);
Route::get('/admin/Menage-customers',[registration::class,'menagecustomers']);
Route::get('/admin/delete-customers/{id}',[registration::class,'deletecustomers']);
// feedback route
Route::get('/feedback',[FeedBackController::class,'index']);
Route::post('/feedback',[FeedBackController::class,'store']);
Route::get('/admin/Menage-FeedBack',[FeedBackController::class,'show']);
Route::get('/admin/delete-FeedBack/{id}',[FeedBackController::class,'destroy']);
// otp verification route
Route::post('/otp-verification',[OTPEmailController::class,'store']);

