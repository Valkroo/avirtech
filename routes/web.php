<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\PostController;
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
    return view('home', [
        "title" => "Landing Page"
    ]);
});

Route::get('/about-us', [aboutController::class, 'index']);

Route::get('/contact-us', [ContactController::class, 'index']);

Route::get('/Blog', [PostController::class, 'show']);

Route::get('post/{post:slug}', [PostController::class, 'index']);

Route::get('/Careers', [CareersController::class, 'index']);
