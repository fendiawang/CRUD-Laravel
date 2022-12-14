<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view ('welcome');
});

Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/create',[AdminController::class,'create'])->name('create');

Route::get('/index',[AdminController::class,'input'])->name('index');
Route::post('/insertdata',[AdminController::class,'insertdata'])->name('insertdata');

Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');
Route::post('/updatedata/{id}',[AdminController::class,'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[AdminController::class,'delete'])->name('delete');





