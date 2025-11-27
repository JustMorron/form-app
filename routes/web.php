<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Form::class, 'index']);
Route::post('/form', [Form::class, 'create']);
