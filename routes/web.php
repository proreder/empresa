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

Route::view('/', 'login') ->name('login');
Route::view('/welcome', 'welcome') ->name('home');
Route::view('/contacto', 'contacto') ->name('contacto');
Route::view('/blog', 'blog') ->name('blog');
Route::view('/about', 'about') ->name('about');

