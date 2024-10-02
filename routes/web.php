<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('content.index');
});
Route::get('/shop', function () {
    return view('content.shop');
});
Route::get('/about', function () {
    return view('content.about');
});
Route::get('/contact', function () {
    return view('content.contact');
});
Route::get('/services', function () {
    return view('content.services');
});
Route::get('/listProduct', function () {
    return view('content.listProduct');
});
Route::get('/login', function () {
    return view('content.login');
});
Route::get('/register', function () {
    return view('content.register');
});

Route::get('/',[TestimoniController::class,'index']); 


Route::middleware(['guest'])->group(function(){
    
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login',[LoginController::class,'login']);

});
Route::get('/home', function(){
    return redirect('/');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/logout',[LoginController::class, 'logout']);
    Route::get('/dashboard',[AdminController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/shop',[TestimoniController::class,'shop']); 
    Route::get('/contact',[TestimoniController::class,'contact']); 
    Route::get('/services',[TestimoniController::class,'services']); 
    Route::get('/about',[TestimoniController::class,'about']); 
    Route::get('/listProduct',[TestimoniController::class,'listProduct']); 
    Route::get('/testimoni/create',[TestimoniController::class,'create']); 
    Route::post('/testimoni/create',[TestimoniController::class,'store']); 

});


Route::get('/register',[LoginController::class, 'register'])->name('register')->name('register');
Route::post('/register-proses',[LoginController::class, 'register_proses'])->name('register-proses');

