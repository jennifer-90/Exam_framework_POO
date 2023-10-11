<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserAdmin;
use App\Http\Middleware\CheckUserConnect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('les_cours', [CourseController::class, 'index'])->name('routelescours');

Route::get('les_copains', [UserController::class, 'index'])->name('routelescopains')->middleware
(CheckUserAdmin::class);

Route::get('/profil/{id}', [UserController::class, 'show'])->name('profil')->middleware
(CheckUserConnect::class);

Route::get('creation', [UserController::class, 'create'])->name('routecreate');

Route::post('creation', [UserController::class, 'store']);

Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('login', [LoginController::class, 'authenticate']);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('update/{user}', [UserController::class, 'edit'])->name('update')->middleware
(CheckUserConnect::class);;

Route::post('update/{id}', [UserController::class, 'update'])->name('updateUser')->middleware
(CheckUserConnect::class);;

Route::get('export_profile', [UserController::class, 'exportProfile'])->name('exportProfile');



