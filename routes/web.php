<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\DefaultController@index');

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
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

});

Route::get('/textBlock/{pageBlock}','App\Http\Controllers\TextBlockController')->name('textBlock');

Route::get('/image/{fname}','App\Http\Controllers\ImageController')->name('thumb.image');