<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index']);
Route::post('/', [ContactController::class, 'index']);

Route::get('/confirm', [ContactController::class, 'confirm']);
Route::post('/confirm', [ContactController::class, 'confirm']);

Route::get('/edit', [ContactController::class, 'edit']);
Route::post('/edit', [ContactController::class, 'edit']);

Route::get('/create', [ContactController::class, 'create']);
Route::post('/create', [ContactController::class, 'create']);

Route::get('/manegement', [ContactController::class, 'getAll']);
Route::post('/manegement', [ContactController::class, 'getAll']);

Route::get('/delete', [ContactController::class, 'delete']);
Route::post('/delete', [ContactController::class, 'delete']);