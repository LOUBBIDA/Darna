<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaisonsController;
use App\Http\Controllers\VillesController;
use App\Http\Controllers\WebController;
use App\Models\villes;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/annonces', [App\Http\Controllers\HomeController::class, 'annonces'])->name('annonces');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('category', CategoryController::class)->middleware('auth','admin');
Route::resource('villes', VillesController::class)->middleware('auth','admin');
Route::resource('maisons', MaisonsController::class)->middleware('auth','admin');
Route::middleware('ayoub-admin')->group(function(){

Route::get('dashboard',[WebController::class,'admin'])->name('dashboard');
 });
