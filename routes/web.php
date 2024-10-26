<?php

use TCG\Voyager\Facades\Voyager;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserTopicResultsController;
use App\Http\Controllers\TaskController;

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

//Show topic task
Route::get('/Topic/{id}/task', [TopicController::class, 'task'])->middleware('auth');
//When completing topic
Route::post('/Task/Complete', [TaskController::class, 'Complete'])->middleware('auth');

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

    Route::get('topic/questions/{topic_id}', [TopicController::class, 'questions'])->name('topic_questions');

    //Show results
    Route::get('topic/results/{topic_id}', [TopicController::class, 'results'])->name('topic_results');
    Route::get('user/results/{user_id}', [UserController::class, 'results'])->name('user_results');
    Route::get('subject/results/{main_subject_id}', [SubjectController::class, 'results'])->name('subject_results');

    Route::get('ExcelExport/User/{user_id}', [UserTopicResultsController::class, 'ExcelExportFromUser'])->name('results_download_from_user');
    Route::get('ExcelExport/Subject/{subject_id}', [UserTopicResultsController::class, 'ExcelExportFromSubject'])->name('results_download_from_subject');
    Route::get('ExcelExport/Topic/{topic_id}', [UserTopicResultsController::class, 'ExcelExportFromTopic'])->name('results_download_from_topic');

    //Review task answer
    Route::get('user-task-answers/{task_id}/edit')->name('review_task_answer');
});

//Redirects to subjects
Route::redirect('/admin', '/admin/subjects');

//For testing purposes
Route::view('/Test', 'Test');
