<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, "index"])->middleware('guest')->name('home');
Route::get('/resume', [HomeController::class, "resume"])->middleware('guest');
Route::get('/contact', [HomeController::class, "contact"])->middleware('guest');

Route::post('/signin', [AuthController::class, "signin"]);

// Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, "index"]);
    Route::get('/dashboard/profile', [DashboardController::class, "profile"]);
    Route::get('/dashboard/profile/edit', [DashboardController::class, "edit_profile"]);
    Route::post('/dashboard/profile/edit', [DashboardController::class, "post_edit_profile"]);
    Route::get('/dashboard/user', [DashboardController::class, "user"]);
    Route::get('/dashboard/user/tambah', [DashboardController::class, "add_user"]);
    Route::get('/dashboard/user/edit/{user_edit:id}', [DashboardController::class, "edit_user"]);
    Route::post('/dashboard/user/edit/{user_edit:id}', [DashboardController::class, "post_edit_user"]);
    Route::get('/dashboard/user/delete/{id}', [DashboardController::class, "delete_user"]);
    Route::post('/dashboard/user/tambah', [DashboardController::class, "post_add_user"]);
    Route::get('/dashboard/resume', [DashboardController::class, "resume"]);
    Route::get('/dashboard/resume/tambah', [DashboardController::class, "add_resume"]);
    Route::get('/dashboard/resume/edit/{resume:id}', [DashboardController::class, "edit_resume"]);
    Route::post('/dashboard/resume/edit/{resume:id}', [DashboardController::class, "post_edit_resume"]);
    Route::post('/dashboard/resume/tambah', [DashboardController::class, "post_add_resume"]);
    Route::get('/dashboard/resume/delete/{id}', [DashboardController::class, "delete_add_resume"]);
    Route::post('/dashboard/logout', [AuthController::class, "logout"]);
});
