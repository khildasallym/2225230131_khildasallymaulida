<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;

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
    return view('welcome');
});

Route::get('/alumni', [AlumniController::class,'index']);
Route::get('/alumni/create', [AlumniController::class,'create']);
Route::post('/alumni/store', [AlumniController::class,'store']);
Route::get('/alumni/{id}/edit', [AlumniController::class,'edit']);
Route::put('/alumni/{id}', [AlumniController::class,'update']);
Route::delete('/alumni/{id}', [AlumniController::class,'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
