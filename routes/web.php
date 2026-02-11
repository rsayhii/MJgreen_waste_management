<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

//Aboutus route
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

//Services route
Route::get('/services', function () {
    return view('services');
})->name('services');   

//career route
Route::get('/career', function () {
    return view('career');
})->name('career');

//Contact route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Blog route
Route::get('/blog', function () {
    return view('blog');
})->name('blog');  

//Gallery route
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');    

//Gallery2 route
Route::get('/gallery2', function () {
    return view('gallery2');
})->name('gallery2');    

//Gallery3 route    
Route::get('/gallery3', function () {
    return view('gallery3');
})->name('gallery3');

//Certificate route
Route::get('/certification', function () {    
    return view('certification');
})->name('certification');    

