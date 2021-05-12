<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('portfolio.home');
})->name('home');

// controller
Route::get('projects', function () {
    return view('portfolio.project');
})->name('projects');

Route::get('contact', function () {
    return view('portfolio.contact');
})->name('contact');


//controller
Route::get('dashboard.admin', function () {
    return view('dashboard.index');
})->name('dashboard.admin');
