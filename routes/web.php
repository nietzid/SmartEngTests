<?php

use App\Http\Controllers\GenerateController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// anyone can access this route
Route::get('/', function () {
    return view('welcome');
});
Route::get('/demo', [App\Http\Controllers\UserController::class, 'demo']);
Route::get('/demo/input-passage', [App\Http\Controllers\UserController::class, 'demo_input_passage']);
Route::get('/demo/preview-passage', [App\Http\Controllers\UserController::class, 'demo_preview_passage']);
Route::get('/demo/result', [App\Http\Controllers\UserController::class, 'demo_generate_result']);
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'postRegister'])->middleware('guest');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'authenticating'])->middleware('guest');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth');
Route::get('/about', [App\Http\Controllers\UserController::class, 'about'])->middleware('auth');

// only login user can access this route. basic and premium user can access this route
Route::get('/cbt', [App\Http\Controllers\CbtController::class, 'index'])->middleware('auth');
Route::get('/generate', [App\Http\Controllers\GenerateController::class, 'index'])->middleware('auth');
Route::get('/upgrade-account', [App\Http\Controllers\UserController::class, 'upgrade_account'])->middleware('auth');
Route::get('/upgrade-account/account-information', [App\Http\Controllers\UserController::class, 'account_information'])->middleware('auth');
Route::get('/upgrade-account/plan-option', [App\Http\Controllers\UserController::class, 'plan_option'])->middleware('auth');
Route::get('/upgrade-account/payment', [App\Http\Controllers\UserController::class, 'payment'])->middleware('auth');
Route::get('/upgrade-account/success-upgrade', [App\Http\Controllers\UserController::class, 'success_upgrade'])->middleware('auth');
Route::post('/upgrade-account/store-payment', [App\Http\Controllers\UserController::class, 'store_payment'])->middleware('auth');

// only admin can access this route
Route::get('/admin-dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->middleware(['auth', 'admin-middleware']);
Route::get('/user-dashboard', [App\Http\Controllers\Admin\AdminController::class, 'user_dashboard'])->middleware(['auth', 'admin-middleware']);
Route::get('/payment-request', [App\Http\Controllers\Admin\AdminController::class, 'payment_request'])->middleware(['auth', 'admin-middleware']);
Route::post('/decline-request/{id}', [App\Http\Controllers\Admin\AdminController::class, 'decline_request'])->middleware(['auth', 'admin-middleware']);
Route::post('/accept-request/{id}', [App\Http\Controllers\Admin\AdminController::class, 'accept_request'])->middleware(['auth', 'admin-middleware']);
Route::get('/pronoun', [App\Http\Controllers\Admin\AdminController::class, 'pronoun'])->middleware(['auth', 'admin-middleware']);
Route::get('/question', [App\Http\Controllers\Admin\AdminController::class, 'question'])->middleware(['auth', 'admin-middleware']);

// only user premium can access this route
Route::get('/cbt/cbt-dashboard', [App\Http\Controllers\CbtController::class, 'cbtDashboard'])->middleware(['auth', 'premium-middleware']);
Route::get('/cbt/create-test', [App\Http\Controllers\CbtController::class, 'createTest'])->middleware(['auth', 'premium-middleware']);
Route::get('/cbt/test/{testCode}', [App\Http\Controllers\CbtController::class, 'validateTest'])->middleware(['auth', 'premium-middleware']);
Route::get('/cbt/test/{testCode}/{id}', [App\Http\Controllers\CbtController::class, 'startTest'])->middleware(['auth', 'premium-middleware']);
Route::get('/cbt/test-landing-page', [App\Http\Controllers\CbtController::class, 'testLandingPage'])->middleware(['auth', 'premium-middleware']);
Route::get('/cbt/add-question', [App\Http\Controllers\CbtController::class, 'addQuestion'])->middleware(['auth', 'premium-middleware']);
Route::get('/cbt/test-result', [App\Http\Controllers\CbtController::class, 'testResult'])->middleware(['auth', 'premium-middleware']);
Route::get('/cbt/test-detail', [App\Http\Controllers\CbtController::class, 'cbtDetail'])->middleware(['auth', 'premium-middleware']);
Route::get('/cbt/test-page', [App\Http\Controllers\CbtController::class, 'cbtLandingPage'])->middleware(['auth', 'premium-middleware']);
Route::get('/cbt/admin-test-detail/{id}', [App\Http\Controllers\CbtController::class, 'cbtAdminDetailTest'])->middleware(['auth', 'premium-middleware']);
Route::post('/store-create-test', [App\Http\Controllers\CbtController::class, 'storeNewTest'])->middleware(['auth', 'premium-middleware']);
Route::get('/cbt/select-question/{id}', [App\Http\Controllers\CbtController::class, 'selectQuestionTest'])->middleware(['auth', 'premium-middleware']);
Route::get('/cbt/detail-select-question/{id}/{question_type}', [App\Http\Controllers\CbtController::class, 'detailSelectQuestionTest'])->middleware(['auth', 'premium-middleware']);
Route::get('/cbt/preview-test', [App\Http\Controllers\CbtController::class, 'preview'])->middleware(['auth', 'premium-middleware']);

Route::get('/generate/question-type', [App\Http\Controllers\QuestionController::class, 'generate'])->middleware('auth');
Route::get('/question-collection', [App\Http\Controllers\QuestionController::class, 'question_collection'])->middleware('auth');
Route::get('/detail-collection/{question_type}', [App\Http\Controllers\QuestionController::class, 'detail_collection'])->middleware('auth');
Route::get('/generate/add-question-manual', [App\Http\Controllers\QuestionController::class, 'add_question_manual'])->middleware('auth');
Route::get('/generate/add-question-test', [App\Http\Controllers\QuestionController::class, 'add_question_test'])->middleware('auth');

Route::get('/remove-question/{id}', [App\Http\Controllers\QuestionController::class, 'removeQuestion'])->middleware('auth');
Route::get('/add-question-to-test/{testId}/{id}', [App\Http\Controllers\QuestionController::class, 'addQuestiontoTest'])->middleware('auth');
Route::get('/generate/input-passage', [App\Http\Controllers\GenerateController::class, 'input_passage'])->middleware('auth');
Route::get('/generate/preview-passage', [App\Http\Controllers\GenerateController::class, 'preview_passage'])->middleware('auth');
Route::get('/generate/store-passage', [App\Http\Controllers\GenerateController::class, 'store_passage'])->middleware('auth');
Route::get('/generate/result', [App\Http\Controllers\GenerateController::class, 'generate_result'])->middleware('auth');
Route::get('/scrapping', [GenerateController::class, 'scrapping'])->name('scrape')->middleware('auth');
