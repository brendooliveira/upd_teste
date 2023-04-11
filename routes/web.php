<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'index']);
Route::get('/created', [WebController::class, 'create']);
Route::post('/created', [WebController::class, 'created']);
Route::get('/update/{id}', [WebController::class, 'edit']);
Route::put('/update/{id}', [WebController::class, 'update']);
Route::delete('/deleted/{id}', [WebController::class, 'destroy']);