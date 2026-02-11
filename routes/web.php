<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

//Aboutus route
Route::get('/about-us', function () {
    return view('aboutus');
})->name('about-us');

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


//Certificate route
Route::get('/certification', function () {    
    return view('certification');
})->name('certification');    

