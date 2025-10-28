<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Example default route for API
Route::get('/test', function () {
    return response()->json(['message' => 'API is working fine!']);
});
