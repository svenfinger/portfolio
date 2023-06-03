<?php

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

Route::get('/', [\App\Http\Controllers\PageDisplayController::class, 'home'])->name('frontend.home');
Route::get('projects', [\App\Http\Controllers\ProjectDisplayController::class, 'index'])->name('frontend.projects');
Route::get('projects/{slug}', [\App\Http\Controllers\ProjectDisplayController::class, 'show'])->name('frontend.project');
Route::get('{slug}', [\App\Http\Controllers\PageDisplayController::class, 'show'])->name('frontend.page');
