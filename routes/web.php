<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HelpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostNewsController;
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

Route::get('/', [PostNewsController::class, 'ShowNews']);
Route::get('/about', [AboutController::class, 'About']);
Route::get('/help', [HelpController::class, 'Help']);
Route::get('/users', [UsersController::class, 'index']);
Route::get('/admin', [AdminController::class, 'Admin']);


Route::get('/user/{id}', [AdminController::class, 'SingleUser'])->name('user-details');


Route::post('/add', [AdminController::class, 'AddUser'])->name('AddUser');
Route::view('/add-user', 'AddUser');



Route::get('/edit/{id}', [AdminController::class, 'editUser'])->name('edit-user');
Route::post('/edit/{id}', [AdminController::class, 'updateUser'])->name('update-user');


Route::get('/delete/{id}', [AdminController::class, 'DeleteUser'])->name('delete-user');

Route::get('/delete-all-users', [AdminController::class, 'DeleteAllUsers'])->name('delete-all-users');


Route::get('/dashboard', [PostNewsController::class, 'DashboardPage']);


Route::post('/post-news', [PostNewsController::class, 'PostNewsSubmit'])->name('post-news-submit');
Route::view('/add-news', 'PostNewsSubmit');


Route::get('/view-news/{id}', [PostNewsController::class, 'viewNews'])->name('view-news');
