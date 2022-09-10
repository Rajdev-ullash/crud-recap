<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

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

// Route::get('/app', function () {
//     $names='Abid';
//     $emails='abid@gmail.com';
//     return view('welcome',['name'=>$names,'email'=>$emails]);
// });

Route::get('/app',[PersonController::class,'demo']);
Route::get('/create',[PersonController::class,'create']);
Route::get('/view',[PersonController::class,'view']);
Route::post('/store-crud',[PersonController::class,'store']);
