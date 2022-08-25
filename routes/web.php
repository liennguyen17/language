<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/topics/{id}',[HomeController::class,'topics']);

Route::get('/lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'jp', 'vn'])) {
        abort(400);
    }
 
    App::setLocale($locale);
 
    Session::put('locale',$locale);
    return redirect()->back();
});

Route::resource('category',CategoryController::class);
Route::resource('post',PostController::class);