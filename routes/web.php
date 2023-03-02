<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\ContactController;

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

// front end
Route::get('/', [FrontendController::class, 'index']);
Route::get('/About-Us', [FrontendController::class, 'about']);
Route::get('/Contact-Us', [FrontendController::class, 'contact']);
Route::get('/Careers', [FrontendController::class, 'careers']);
Route::get('/Blog', [FrontendController::class, 'blog']);
Route::get('post/{post:slug}', [FrontendController::class, 'post']);





