<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return ;
});
Route::get('/students', [StudentController::class, 'proc']);
Route::get('/kh', [StudentController::class, 'proc']);
Route::get('/students/{arr}', [StudentController::class, 'getByID']);
Route::put('/students/{arr}', [StudentController::class, 'updateOneStd']);