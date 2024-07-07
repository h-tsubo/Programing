<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\Main\NameSpaceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CtrlController;
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

Route::get('ctrl/plain', [CtrlController::class, 'plain']);
Route::get('ctrl/header', [CtrlController::class, 'header']);
Route::get('ctrl/headers', [CtrlController::class, 'headers']);
Route::get('ctrl/outJson', [CtrlController::class, 'outJson']);
Route::get('ctrl/outJsonAsAssoc', [CtrlController::class, 'outJsonAsAssoc']);
Route::get('ctrl/outFile', [CtrlController::class, 'outFile']);
Route::get('ctrl/outCsv', [CtrlController::class, 'outCsv']);
Route::get('ctrl/outImage', [CtrlController::class, 'outImage']);
Route::get('ctrl/redirectBasic', [CtrlController::class, 'redirectBasic']);
Route::get('ctrl/redirectRoute', [CtrlController::class, 'redirectRoute']);
Route::get('ctrl/redirectParam', [CtrlController::class, 'redirectParam']);
Route::get('ctrl/redirectActionParam', [CtrlController::class, 'redirectActionParam']);
Route::get('ctrl/redirectAway', [CtrlController::class, 'redirectAway']);
Route::get('ctrl/index', [CtrlController::class, 'index']);
Route::get('ctrl/hoge/{id?}', [CtrlController::class, 'hoge']);
Route::get('ctrl/form', [CtrlController::class, 'form']);
Route::post('ctrl/result', [CtrlController::class, 'result']);
Route::get('ctrl/upload', [CtrlController::class, 'upload']);
Route::post('ctrl/uploadfile', [CtrlController::class, 'uploadfile']);
Route::get('ctrl/middle', [CtrlController::class, 'middle'])->middleware(LogMiddleware::class);

Route::get('ctrl/18+', [CtrlController::class, 'overEighteen'])->middleware('check-age');

Route::middleware(['check-age'])->group(function () {
    Route::get('ctrl/18+', [CtrlController::class, 'overEighteen']);
    Route::get('ctrl/18+/a', [CtrlController::class, 'overEighteen']);
    Route::get('ctrl/18+/b', [CtrlController::class, 'overEighteen']);
    Route::get('ctrl/18+/c', [CtrlController::class, 'overEighteen']);
});

Route::get('verify-age', [CtrlController::class, 'showVerificationForm'])->name('verify.age');
Route::post('check-age', [CtrlController::class, 'checkAge'])->name('check.age');




Route::fallback(function () {
    return view('route.error');
});
