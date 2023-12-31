<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Projects;
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

Route::get('/', Home::class)->name('home');
Route::get('projects', [Projects::class, 'projects'])->name('projects');
Route::get('projects/{project}', [Projects::class, 'project'])->name('project');

Route::view('about', 'pages.about')->name('about');

Route::view('portfolio/single', 'pages.portfolio-single')->name('portfolio.single');
Route::view('contact', 'pages.contact')->name('contact');
