<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', action: [AuthController::class, 'login']);


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

YajTech\Crud\Helper\CrudRoute::generateRoutes('permission', App\Http\Controllers\PermissionController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('category', App\Http\Controllers\CategoryController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('course', App\Http\Controllers\CourseController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('student', App\Http\Controllers\StudentController::class);