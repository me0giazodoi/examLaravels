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

Route::get('/', [\App\Http\Controllers\WebController::class, "index"]);

Route::get('/list_student', [\App\Http\Controllers\WebController::class, "listStudent"]);

Route::get('/create_student', [\App\Http\Controllers\WebController::class, "createStudent"]);

Route::post('/create_student', [\App\Http\Controllers\WebController::class, "saveStudent"]);

