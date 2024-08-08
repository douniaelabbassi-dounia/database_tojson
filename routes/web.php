<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResponseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/responses', [ResponseController::class, 'index']);
