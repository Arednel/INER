<?php

use TCG\Voyager\Facades\Voyager;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
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
Route::view('/', 'Index')->name('Index');
Route::view('/Index', 'Index');
Route::view('/index', 'Index');

//Subjects main page
Route::view('/Subjects', 'Subjects')->middleware('auth');

//Login page
Route::view('/Login', 'Login')->name('Login');
Route::view('/login', 'Login');

//Login logic
Route::post('/Login', [LoginController::class, 'login']);

//Logout
Route::get('/Logout', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logout']);

//Info page 
Route::view('/Info', 'Info');
Route::view('/info', 'Info');

Route::resource('topics', TopicController::class)->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//For testing purposes
Route::view('/Test', 'Test');
