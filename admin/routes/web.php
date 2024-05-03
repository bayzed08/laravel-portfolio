<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\visitorController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homeController::class,'HomeIndex']);
Route::get('/visitor',[visitorController::class,'VisitorIndex']);
Route::get('/service',[serviceController::class,'ServiceIndex']);
