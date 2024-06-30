<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\Main\NameSpaceController;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/hello/view', [HelloController::class, 'view']);
Route::get('/hello/list', [HelloController::class, 'list']);

Route::prefix('view')->group(function () {
    Route::controller(ViewController::class)->group(function () {
        Route::get('/escape', 'escape');
        Route::get('/comment', 'comment');
        Route::get('/if', 'if');
        Route::get('/unless', 'unless');
        Route::get('/isset_empty', 'isset_empty');
        Route::get('/switch', 'switch');
        Route::get('/while', 'while');
        Route::get('/for', 'for');
        Route::get('/foreach_assoc', 'foreach_assoc');
        Route::get('/foreach_loop', 'foreach_loop');
        Route::get('/forelse', 'forelse');
        Route::get('/style_class', 'style_class');
        Route::get('/checked', 'checked');
        Route::get('/master', 'master');
        Route::get('/comp', 'comp');
        Route::get('/use_dynamic_comp', 'use_dynamic_comp');
        Route::get('/sub_view', 'sub_view');
    });
});


Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'postForm']);

Route::get('/route/param/{id?}', [RouteController::class, 'param']);
Route::get(
    '/route/{year}/{month}/{day}',
    [RouteController::class, 'date']
)->where(
    [
        'year' => '[0-9]{4}',
        'month' => '[0-9]|1[0-2]',
        'day' => '0[1-9]|[12][0-9]|3[01]'
    ]
);

Route::get('/route/search/{keywd?}', [RouteController::class, 'search'])->where('keywd', '.*');
Route::namespace('App\Http\Controllers\Main')->group(function(){
    Route::get('/route/ns', [NameSpaceController::class, 'ns']);
});

Route::view('/route', 'route.view', ['name' => 'Laravel!']);

Route::get('/route/enum_param/{category?}', [RouteController::class, 'enum_param']);

Route::redirect('/hoge', '/', 301);

Route::resource('/articles', ArticleController::class);
