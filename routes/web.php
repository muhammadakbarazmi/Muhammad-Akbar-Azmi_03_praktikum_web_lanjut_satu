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

Route::get('/home', function () {
    return view('home',['cafe' => 'Cafe']);
});


//Halaman Products
Route::prefix('product')->group(function(){
    Route::get('/',[App\Http\Controllers\productController::class,'product']);
});


//Halaman News
Route::get('/news/{id}',[App\Http\Controllers\newsController::class,'news']);


//Halaman Program
Route::prefix('program')->group(function(){
    Route::get('/',[App\Http\Controllers\programController::class,'program']);
});



//Halaman About Us
Route::get('/about-us', function() {
    return view('aboutUs', ['aboutus' => 'Toko ini merupakan pusat oleh-oleh yang berdiri sejak 2010']);
});


//Halaman Contact Us
Route::resource('/contact', App\Http\Controllers\ContactController::class, ['only' => ['index']
]);


