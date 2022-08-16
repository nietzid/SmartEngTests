<?php

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cbt', [App\Http\Controllers\Cbt::class, 'index'])->name('home');

Route::get('/cbt/create-test', [App\Http\Controllers\Cbt::class, 'createTest'])->name('home');

Route::get('/cbt/start-test', [App\Http\Controllers\Cbt::class, 'startTest'])->name('home');

Route::get('/cbt/test-landing-page', [App\Http\Controllers\Cbt::class, 'testLandingPage'])->name('home');

Route::get('/cbt/add-question', [App\Http\Controllers\Cbt::class, 'addQuestion'])->name('home');

Route::get('/cbt/cbt-dashboard', [App\Http\Controllers\Cbt::class, 'cbtDashboard'])->name('home');

Route::get('/cbt/test-result', [App\Http\Controllers\Cbt::class, 'testResult'])->name('home');

Route::get('/generate', [App\Http\Controllers\QuestionController::class, 'index'])->name('home');

Route::get('/generate/question-type', [App\Http\Controllers\QuestionController::class, 'generate'])->name('home');

Route::get('/question-collection', [App\Http\Controllers\QuestionController::class, 'question_collection'])->name('home');

Route::get('/generate/add-question-manual', [App\Http\Controllers\QuestionController::class, 'add_question_manual'])->name('home');

Route::get('/generate/add-question-test', [App\Http\Controllers\QuestionController::class, 'add_question_test'])->name('home');

Route::get('/cbt/test-detail', [App\Http\Controllers\Cbt::class, 'cbtDetail'])->name('home');

Route::get('/cbt/test-page', [App\Http\Controllers\Cbt::class, 'cbtLandingPage'])->name('home');

Route::get('/userpages/upgrade-account', [App\Http\Controllers\UpgradeAccountController::class, 'index'])->name('home');

Route::post('/store-create-test', [App\Http\Controllers\Cbt::class, 'storeNewTest'])->name('home');
