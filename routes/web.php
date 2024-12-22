<?php

use App\Http\Controllers\PairController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/findpair',[PairController::class,'index'])->name('findPair');
Route::post('/findpair',[PairController::class,'submitForm'])->name('submitForm');
