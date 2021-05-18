<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\mainController;
use App\Http\controllers\adminController;
use App\Http\controllers\userController;
use App\Http\controllers\managerController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});


Route::post('/store',[mainController::class , 'store']);
Auth::routes();

Route::get('/admin', [adminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/manager', [managerController::class, 'index'])->name('manager')->middleware('manager');
Route::get('/user', [userController::class, 'index'])->name('user')->middleware('user');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
