<?php

use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\ReviewController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SkillController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\BackPagesController;
use App\Http\Controllers\FrontPagesController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [FrontPagesController::class, 'index'])->name('home');
Route::get('/about', [FrontPagesController::class, 'about'])->name('about');
Route::get('/models', [FrontPagesController::class, 'models'])->name('models');
Route::get('/model-details', [FrontPagesController::class, 'modelDetails'])->name('model-details');
Route::get('/blog', [FrontPagesController::class, 'blog'])->name('blog');
Route::get('/blog-details', [FrontPagesController::class, 'blogDetails'])->name('blog-details');
Route::get('/service', [FrontPagesController::class, 'service'])->name('service');
Route::get('/contact', [FrontPagesController::class, 'contact'])->name('contact');

Route::prefix('backend')->group(function(){
    Route::get('dashboard', [BackPagesController::class, 'dashboard'])->name('dashboard');
    Route::get('orders', [OrderController::class, 'index'])->name('orders');
    Route::get('accounts', [UserController::class, 'index'])->name('accounts');

    Route::post('skill/{user_id}', [ SkillController::class, 'store'])->name('skill.store');
    Route::patch('skill/{id}', [ SkillController::class, 'update'])->name('skill.update');
    Route::post('service/{user_id}', [ ServiceController::class, 'store'])->name('service.store');
    Route::patch('service/{id}', [ ServiceController::class, 'update'])->name('service.update');

    Route::resource('user', UserController::class);
    Route::resource('order', OrderController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('skill', SkillController::class)->except(['store', 'update']);
    Route::resource('service', ServiceController::class)->except(['store', 'update']);
});

Auth::routes();
