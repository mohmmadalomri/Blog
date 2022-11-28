<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\front\FrontControler;

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
    return view('front.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.layout.layout');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/front/contact', [FrontControler::class, 'contact'])->name('contact');
Route::get('/front/about', [FrontControler::class, 'about'])->name('about');
Route::get('/front/details', [FrontControler::class, 'details'])->name('details');
Route::get('/front/postdetal{post}', [FrontControler::class, 'post'])->name('postdetal');
Route::get('/front/CategoryPost{category}', [FrontControler::class, 'CategoryPost'])->name('CategoryPost');

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth'], function () {

    Route::get('/setting', function () {
        return view('dashboard.setting');
    })->name('setting');
    Route::post('/setting/update/{setting}', [SettingController::class, 'update'])->name('setting.update');
    Route::get('/users/all', [UserController::class, 'getUserAll'])->name('users.all');


    Route::resource('user', UserController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
});




Route::resource('front', FrontControler::class);
