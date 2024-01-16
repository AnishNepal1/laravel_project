<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// });
// Route::get('/',[HomeController::class,'index']);

Route::get('/add-student',[HomeController::class,'add']);
Route::post('/add-student',[HomeController::class,'store']);

Route::get('/all-student',[HomeController::class,'display']);

Route::get('edit-student/{id}',[HomeController::class,'edit']);
Route::post('edit-student/{id}',[HomeController::class,'update']);

Route::get('delete-student/{id}',[HomeController::class,'delete']);

Route::get('register',[HomeController::class,'register']);
Route::post('register',[HomeController::class,'StoreUser']);

Route::get('login',[HomeController::class,'login'])->name('login');
Route::post('login',[HomeController::class,'auth']);

Route::middleware('auth')->get('/',[HomeController::class,'home']);











