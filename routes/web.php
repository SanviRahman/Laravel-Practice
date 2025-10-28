<?php

use App\Http\Controllers\Example\FirstController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about',function(){
//     return view('about');
// })->name('about.us');


// Route::get('/contact',function(){
//     return view('contact');
// })->name('contact.us');

//Middleware Route
// Route::get('/country',function(){
//     return view('country');
// })->middleware('country');


Route::get('/contact',[FirstController::class,'index'])->name('contact.us');
Route::get('/about',[FirstController::class,'about'])->name('about.us');
Route::get('/country',[FirstController::class,'country'])->middleware('country');

//form Route
Route::post('/student',[FirstController::class,'student'])->name('student');