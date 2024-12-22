<?php

use App\Http\Controllers\PairController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/find-pair',[PairController::class,'findPair']);
