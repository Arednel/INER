<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;

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

//Login
Route::post('/Login', [LoginController::class, 'login']);

//Logout
Route::get('/Logout', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logout']);

//For testing purposes
Route::view('/Test', 'Test');

//Info page 
Route::view('/Info', 'Info');
Route::view('/info', 'Info');

Route::resource('news', NewsController::class)->middleware('auth');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
