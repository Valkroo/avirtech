<?php

use App\Http\Controllers\adminControllers\DashboardPostsController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/post/{posts:slug}', [FrontendController::class, 'post']);
Route::get('/dashboard', [FrontendController::class, 'dashboard']);

// back end
Route::resource('/dashboard/post', DashboardPostsController::class);
Route::get('/dashboard/cekSlug', [DashboardPostsController::class, 'Slug']);