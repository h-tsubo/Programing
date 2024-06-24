<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Home\MyTaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'action_test']);

Route::get('/mytask', [MyTaskController::class, 'show'])->name('mytask.show');

Route::post('/mytask/create', [MyTaskController::class, 'create'] )->name('mytask.create');

Route::post('/mytask/destroy', [MyTaskController::class, 'destroy'] )->name('mytask.destroy');

