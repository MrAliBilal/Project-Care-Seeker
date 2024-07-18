<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CareSeekerController;
use App\Http\Controllers\SupportWorkerController;

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

// Index pages
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/testimonials', [HomeController::class, 'testimonials']);
Route::get('/find-worker', [HomeController::class, 'returnfindworker'])->middleware('guest');
Route::get('/postjob', [HomeController::class, 'returmpostjob'])->middleware('guest');
Route::get('/home', [HomeController::class, 'homereturn']);


// Login & Sign ups
Route::get('/login', [HomeController::class, 'login'])->middleware('guest');
Route::get('/join', [HomeController::class, 'registerPage'])->middleware('guest');
Route::get('/register/careseeker', [HomeController::class, 'registerCareseeker'])->middleware('guest');
Route::post('/register', [HomeController::class, 'storeCareseeker'])->middleware('guest');
Route::get('/register/supportworker', [HomeController::class, 'registerSupportworker'])->middleware('guest');
Route::post('/registersupportworker', [HomeController::class, 'storeSupportworker'])->middleware('guest');
Route::post('/logout', [HomeController::class, 'logout'])->middleware('auth');
Route::post('/users/authenticate', [HomeController::class, 'authenticate'])->middleware('guest');

// CareSeeker Pages
Route::get('/careseeker/postjob', [CareSeekerController::class, 'postJob'])->middleware('auth');
Route::get('/careseeker/manage-job', [CareSeekerController::class, 'manageJob'])->middleware('auth');
Route::post('/careseeker/addpostjob', [CareSeekerController::class, 'addJob'])->middleware('auth');
Route::delete('/careseeker/{listing}', [CareSeekerController::class, 'destroy'])->middleware('auth');
Route::get('/careseeker/{listing}/edit', [CareSeekerController::class, 'editJob'])->middleware('auth');
Route::put('/careseeker/{listing}', [CareSeekerController::class, 'updateJob'])->middleware('auth');
Route::get('/careseeker/worker-list', [CareSeekerController::class, 'workerlist'])->middleware('auth');
Route::get('/careseeker/worker-list/{listing}', [CareSeekerController::class, 'findworker'])->middleware('auth');

// SupportWoker Pages
Route::get('/supportworker/joblist', [SupportWorkerController::class, 'joblist'])->middleware('auth');
Route::get('/supportworker/joblist/{listing}', [SupportWorkerController::class, 'show'])->middleware('auth');
Route::get('/supportworker/create-profile', [SupportWorkerController::class, 'createProfile'])->middleware('auth');
Route::post('/supportworker/add-profile', [SupportWorkerController::class, 'addprofile'])->middleware('auth');
Route::get('/supportworker/profile', [SupportWorkerController::class, 'showprofile'])->middleware('auth');
