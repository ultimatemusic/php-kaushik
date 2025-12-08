<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\registration;
use App\Http\Controllers\ProductController;
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

Route::get('/create-account',[registration::class,'index']);
Route::post('/create-account',[registration::class,'store']);
Route::get('/sign-in',[registration::class,'signin']);
Route::post('/sign-in',[registration::class,'login']);
Route::get('/logout',[registration::class,'logout']);





// admin route
Route::get('/admin',[ProductController::class,'index']);
Route::get('/admin/addproduct',[ProductController::class,'addproduct']);
Route::post('/admin/addproduct',[ProductController::class,'store']);
Route::get('/admin/Menage-product',[ProductController::class,'show']);
Route::get('/admin/edit-product/{id}',[ProductController::class,'edit']);
Route::post('/admin/edit-product/{id}',[ProductController::class,'update']);
Route::get('/admin/delete-product/{id}',[ProductController::class,'destroy']);