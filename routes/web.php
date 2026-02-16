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

// Privacy Policy route
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

// Disclaimer route
Route::get('/disclaimer', function () {
    return view('disclaimer');
})->name('disclaimer');

// Individual Blog Routes
Route::get('/blog/revolutionizing-waste-management', function () {
    return view('blogs.revolutionizing-waste-management');
})->name('blog.revolutionizing-waste-management');

Route::get('/blog/sustainable-infrastructure', function () {
    return view('blogs.sustainable-infrastructure');
})->name('blog.sustainable-infrastructure');

Route::get('/blog/responsible-recycling-for-businesses', function () {
    return view('blogs.responsible-recycling-for-businesses');
})->name('blog.responsible-recycling-for-businesses');

Route::get('/blog/eco-friendly-home-practices', function () {
    return view('blogs.eco-friendly-home-practices');
})->name('blog.eco-friendly-home-practices');

Route::get('/blog/sustainable-collection', function () {
    return view('blogs.sustainable-collection');
})->name('blog.sustainable-collection');

