<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;

Route::get('/tugas', [TugasController::class, 'index']);
Route::get('/tugas/{id}', [TugasController::class, 'show']);


// Route::get('/', function () {
//     return view('welcome');
// });
