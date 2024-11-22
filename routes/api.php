<?php

use App\Http\Controllers\API\SesiApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register',[SesiApiController::class,'register']);
Route::post('login',[SesiApiController::class,'login']);
