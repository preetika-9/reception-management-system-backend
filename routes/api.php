<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::group(['middleware' => ['role:admin']], function () {
//     Route::get('/admin', function () {
//         return 'Admin Area';
//     });
// });

// Route::group(['middleware' => ['permission:manage users']], function () {
//     Route::get('/manage-users', function () {
//         return 'Manage Users Area';
//     });
// });
