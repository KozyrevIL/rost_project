<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\DefaultController@index')->name('home');

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->middleware('auth')->group( function () {
    Route::get('/', function () {return view('admin');})->name('admin');
    Route::group(['namespace' => 'Page'], function () {
        Route::get('/pages', 'IndexController')->name('admin.page.index');
        Route::get('/pages/create', 'CreateController')->name('admin.page.create');
        Route::post('/pages', 'StoreController')->name('admin.page.store');
        Route::get('/pages/{page}/edit', 'EditController')->name('admin.page.edit');
        Route::patch('/page/{page}', 'UpdateController')->name('admin.page.update');
    });
    Route::group(['namespace' => 'PageBlock'], function () {
        Route::get('/page_blocks/{page}', 'IndexController')->name('admin.pageBlock.index');
        Route::get('/page_blocks/{page}/create', 'CreateController')->name('admin.pageBlock.create');
        Route::post('/page_blocks/{page}', 'StoreController')->name('admin.pageBlock.store');
        Route::get('/page_blocks/{page}/{pageBlock}/edit', 'EditController')->name('admin.pageBlock.edit');
        Route::patch('/page_blocks/{page}/{pageBlock}', 'UpdateController')->name('admin.pageBlock.update');
    });
    Route::group(['namespace' => 'CallBack'], function () {
        Route::get('/call_backs', 'IndexController')->name('admin.callBack.index');
//        Route::get('/call_backs/{callBack}/edit', 'EditController')->name('admin.callBack.edit');
        Route::patch('/call_backs/{callBack}', 'UpdateController')->name('admin.callBack.update');
    });

});

Route::get('/textBlock/{pageBlock}','App\Http\Controllers\TextBlockController')->name('textBlock');
Route::get('/pageBlock/{page}','App\Http\Controllers\PageBlockController')->name('pageBlock');
Route::get('/pageText/{page}','App\Http\Controllers\PageTextController')->name('pageText');
Route::get('/gallery/{page}','App\Http\Controllers\GalleryController')->name('gallery');

Route::get('/FormCallBack','App\Http\Controllers\CallBack\CreateController')->name('callback.create');
Route::post('/FormCallBack','App\Http\Controllers\CallBack\StoreController')->name('callback.store');

Route::get('/image/{fname}','App\Http\Controllers\ImageController')->name('thumb.image');

Route::get('/login', function () { return view('auth.login'); })-> name('login');
Route::post('/login', [AuthController::class,'postSignin']);
Route::get('/logout', [AuthController::class,'Logout'])->name('logout');
Route::get('/register', function () {return view('auth.register');})->name('register');
Route::post('/register', [AuthController::class,'postReg']);