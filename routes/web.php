<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\MessageBag;

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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('home', [productController::class, 'index'])->name('home'); /* home page route */

Route::get('create', [productController::class, 'create']); /* create page route */

Route::post('store', [productController::class, 'store']); /* store route */

Route::get('edit/{id}', [productController::class, 'edit']); /* edit page route */

Route::post('update/{id}', [productController::class, 'update']); /* update route */

Route::get('delete/{id}', [productController::class, 'delete']); /* delete route */