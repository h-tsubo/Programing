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
Route::get('/view/if', [ViewController::class, 'if']);
Route::get('/view/unless', [ViewController::class, 'unless']);
Route::get('/view/isset_empty', [ViewController::class, 'isset_empty']);
Route::get('/view/switch', [ViewController::class, 'switch']);
Route::get('/view/while', [ViewController::class, 'while']);
Route::get('/view/for', [ViewController::class, 'for']);
Route::get('/view/foreach_assoc', [ViewController::class, 'foreach_assoc']);
Route::get('/view/foreach_loop', [ViewController::class, 'foreach_loop']);
Route::get('/view/forelse', [ViewController::class, 'forelse']);
Route::get('/view/style_class', [ViewController::class, 'style_class']);
Route::get('/view/checked', [ViewController::class, 'checked']);
Route::get('/view/master', [ViewController::class, 'master']);
Route::get('/view/comp', [ViewController::class, 'comp']);
Route::get('/view/use_dynamic_comp', [ViewController::class, 'use_dynamic_comp']);
Route::get('/view/sub_view', [ViewController::class, 'sub_view']);

