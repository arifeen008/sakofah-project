<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/history', [IndexController::class, 'history']);
Route::get('/vision', [IndexController::class, 'vision']);
Route::get('/board', [IndexController::class, 'board']);
Route::get('/office', [IndexController::class, 'office']);
Route::get('/structure', [IndexController::class, 'structure']);
Route::get('/register', [IndexController::class, 'register']);
Route::get('/deposit', [IndexController::class, 'deposit']);
Route::get('/credit', [IndexController::class, 'credit']);
Route::get('/marry', [IndexController::class, 'marry']);
Route::get('/maternity', [IndexController::class, 'maternity']);
Route::get('/oldage', [IndexController::class, 'oldage']);
Route::get('/medical', [IndexController::class, 'medical']);
Route::get('/dead', [IndexController::class, 'dead']);
Route::get('/activity', [IndexController::class, 'activity']);
Route::get('/news/{id}',[IndexController::class,'news']);
Route::get('/calendar', [IndexController::class, 'calendar']);
Route::get('/homeList', [IndexController::class, 'homeList']);
Route::get('/vacantList', [IndexController::class, 'vacantList']);
Route::get('/condoList', [IndexController::class, 'condoList']);
Route::get('/document', [IndexController::class, 'document']);
Route::get('/report', [IndexController::class, 'report']);
Route::get('/withus', [IndexController::class, 'withus']);
