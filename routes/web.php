<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return view('about');
})->name('about.us');

Route::get('/country',function(){
    return view('country');
})->middleware('country');


Route::get('/contact',function(){
    return view('contact');
})->name('contact.us');
