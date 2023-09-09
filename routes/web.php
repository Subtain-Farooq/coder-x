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

Route::view('/', 'pages.home')->name('home');
Route::view('about', 'pages.about')->name('about');
Route::view('portfolio', 'pages.portfolio-list')->name('portfolio');
Route::view('portfolio/single', 'pages.portfolio-single')->name('portfolio.single');
Route::view('contact', 'pages.contact')->name('contact');
