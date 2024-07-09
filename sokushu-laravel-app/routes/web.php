<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\Main\NameSpaceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CtrlController;
use App\Http\Controllers\StateController;
use App\Http\Middleware\LogMiddleware;
use App\Http\Middleware\CheckAgeMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/hello/view', [HelloController::class, 'view']);
Route::get('/hello/list', [HelloController::class, 'list'])->name('list');

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

Route::get('/route/param/{id?}', [RouteController::class, 'param'])->name('param');
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

Route::prefix('ctrl')->controller(CtrlController::class)->group(function () {
    Route::get('plain', 'plain');
    Route::get('header', 'header');
    Route::get('headers', 'headers');
    Route::get('outJson', 'outJson');
    Route::get('outJsonAsAssoc', 'outJsonAsAssoc');
    Route::get('outFile', 'outFile');
    Route::get('outCsv', 'outCsv');
    Route::get('outImage', 'outImage');
    Route::get('redirectBasic', 'redirectBasic');
    Route::get('redirectRoute', 'redirectRoute');
    Route::get('redirectParam', 'redirectParam');
    Route::get('redirectActionParam', 'redirectActionParam');
    Route::get('redirectAway', 'redirectAway');
    Route::get('index', 'index');
    Route::get('hoge/{id?}', 'hoge');
    Route::get('form', 'form');
    Route::post('result', 'result');
    Route::get('upload', 'upload');
    Route::post('uploadfile', 'uploadfile');
    Route::get('middle', 'middle')->middleware(LogMiddleware::class);

    Route::middleware(['check-age'])->group(function () {
        Route::get('18+', 'overEighteen');
        Route::get('18+/a', 'overEighteen');
        Route::get('18+/b', 'overEighteen');
        Route::get('18+/c', 'overEighteen');
    });
});

Route::get('verify-age', [CtrlController::class, 'showVerificationForm'])->name('verify.age');
Route::post('check-age', [CtrlController::class, 'checkAge'])->name('check.age');

Route::prefix('state')->controller(StateController::class)->group(function () {
    Route::get('recCookie', 'recCookie');
    Route::get('readCookie', 'readCookie');
    Route::get('session1', 'session1');
    Route::get('session2', 'session2');
});


Route::fallback(function () {
    return view('route.error');
});
