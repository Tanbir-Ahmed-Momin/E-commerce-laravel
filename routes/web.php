<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
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

// Route::view('/','welcome');
Route::get('/', [DashboardController::class,'dashboard']);
Route::get('/about-company', [AboutController::class,'about'])->name('about');
Route::get('/contract', [ContractController::class,'contract'])->name('contract');
Route::get('/login-user', [LoginController::class,'login'])->name('login');

// Route::get('/hello', [HelloController::class,'index']);

//category crud
Route::controller(CategoryController::class)->name('category.')->prefix('category')->group(function(){
Route::get('/', 'index')->name('index');
Route::get('/create', 'create')->name('create');
Route::post('/create', 'store')->name('store');
Route::get('/edit', 'edit')->name('edit');
Route::get('/show','show')->name('show');
Route::post('/update','update')->name('update');

});

Route::fallback(function(){
    
});

