<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ViewController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/hello/view', [HelloController::class, 'view']);
Route::get('/hello/list', [HelloController::class, 'list']);
Route::get('/view/escape', [ViewController::class, 'escape']);
Route::get('/view/comment', [ViewController::class, 'comment']);
