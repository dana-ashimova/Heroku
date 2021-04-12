<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\OrdersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('project');
});

Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('project');});

Route::get('ajax/request', [CustomerController::class, 'ajaxRequest'])->name('ajax.request');
Route::post('ajax/request/store', [CustomerController::class, 'ajaxRequestStore'])->name('ajax.request.store');


Route::post('/send', [MailController::class,'send']);

Route::get('/uploadfile', [UploadFileController::class,'index']);
Route::post('/uploadfile', [UploadFileController::class,'showUploadFile']);
Route::get('/multiuploads', [UploadController::class,'uploadForm']);
Route::post('/multiuploads', [UploadController::class,'uploadSubmit']);

/*Route::post('/create', [OrdersController::class,'create']);
Route::post('/store', [OrdersController::class,'index']);
Route::get('/index', [OrdersController::class,'index']);*/
