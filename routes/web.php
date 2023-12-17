<?php

use TCG\Voyager\Facades\Voyager;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuizController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\SubjectController;

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
Route::get('/Subjects', [SubjectController::class, 'index'])->middleware('auth');

//All topics with this subject id
Route::get('/Subject/{id}', [TopicController::class, 'index'])->middleware('auth');

//Show topic
Route::get('/Topic/{id}', [TopicController::class, 'show'])->middleware('auth');

//Show topic questions
Route::get('/Topic/{id}/quiz', [TopicController::class, 'quiz'])->middleware('auth');

//When completing quiz
Route::post('/Quiz/Complete', [QuizController::class, 'Complete'])->middleware('auth');

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//For testing purposes
Route::view('/Test', 'Test');
