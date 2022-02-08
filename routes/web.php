<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blog;

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


Route::get('/',[blog::class,'home'])->name('home');
Route::get('/home/kategori/{category}',[blog::class,'category'])->name('category');
Route::get('/home/{category}/{slug}',[blog::class,'single'])->name('single');

