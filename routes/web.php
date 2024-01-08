<?php

use Illuminate\Support\Facades\Route;

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


Route::get('locale/{locale}',function($locale){
    \Session::put('locale',$locale);
    return redirect()->back();
});
Route::get('/', function () {
    return view('layouts.index');
})->name('index');
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');
Route::get('/toehori', function () {
    return view('layouts.toehori');
})->name('toehori');
Route::get('/toehice', function () {
    return view('layouts.toehice');
})->name('toehice');
Route::get('/sumberjaya', function () {
    return view('layouts.sumberjaya');
})->name('sumberjaya');
Route::get('/sumberjayasupreme', function () {
    return view('layouts.sumberjayasupreme');
})->name('sumberjayasupreme');
Route::get('/blog', function () {
    return view('layouts.blog');
})->name('blog');
Route::get('/distributor', function () {
    return view('layouts.distributor');
})->name('distributor');
Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');
Route::get('/blog1', function () {
    return view('layouts.blog1');
})->name('blog1');
Route::get('/blog2', function () {
    return view('layouts.blog2');
})->name('blog2');
Route::get('/blog3', function () {
    return view('layouts.blog3');
})->name('blog3');