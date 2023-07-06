<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitController;

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

//Main page
Route::view('/', 'Index')->name('index');
Route::view('/index', 'Index');
Route::view('/Index', 'Index');

//Info page 
Route::view('/Info', 'Info');
Route::view('/info', 'Info');

Route::get('/Visit/{link}', [VisitController::class, 'Index']);