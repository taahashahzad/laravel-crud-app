<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;

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
    return view('home');
});

Route::get('/categories', [categoryController::class, 'index']);

Route::get('/createCategory',[categoryController::class,'create']);

Route::post('/category-store',[categoryController::class,'store']);

Route::get('/edit-category/{id}',[categoryController::class,'edit']);

Route::put('/update-category/{id}',[categoryController::class,'update']);

Route::get('/delete-category/{id}',[categoryController::class,'delete']);

