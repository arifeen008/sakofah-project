<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\OfficerController;
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
Route::get('/credit_service', [IndexController::class, 'credit_service']);
Route::get('/marry', [IndexController::class, 'marry']);
Route::get('/maternity', [IndexController::class, 'maternity']);
Route::get('/oldage', [IndexController::class, 'oldage']);
Route::get('/medical', [IndexController::class, 'medical']);
Route::get('/dead', [IndexController::class, 'dead']);
Route::get('/activity', [IndexController::class, 'activity']);
Route::get('/news/{id}', [IndexController::class, 'news']);
Route::get('/calendar', [IndexController::class, 'calendar']);
Route::get('/homeList', [IndexController::class, 'homeList']);
Route::get('/vacantList', [IndexController::class, 'vacantList']);
Route::get('/condoList', [IndexController::class, 'condoList']);
Route::get('/home/{asset_number}', [IndexController::class, 'home']);
Route::get('/vacant/{asset_number}', [IndexController::class, 'vacant']);
Route::get('/condo/{asset_number}', [IndexController::class, 'condo']);
Route::get('/document', [IndexController::class, 'document']);
Route::get('/report', [IndexController::class, 'report']);
Route::get('/withus', [IndexController::class, 'withus']);

//Officer
Route::get('/login', [OfficerController::class, 'login']);
Route::post('/login', [OfficerController::class, 'loginPost']);
Route::get('/logout', [OfficerController::class, 'logout']);
Route::get('/member', [OfficerController::class, 'member']);
Route::post('/searchMember', [OfficerController::class, 'searchMember']);
Route::get('/data_member/{mem_id}/{br_no}', [OfficerController::class, 'data_member']);
Route::get('/account_details/{account_no}/', [OfficerController::class, 'account_details']);
Route::get('/loan_details/{code}/{br_no}', [OfficerController::class, 'loan_details']);
Route::get('/credit', [OfficerController::class, 'credit']);
Route::post('/searchcredit', [OfficerController::class, 'searchcredit']);
Route::get('/uploadcredit', [OfficerController::class, 'uploadcredit']);
Route::post('/postcredit', [OfficerController::class, 'postcredit']);
Route::get('/publish', [OfficerController::class, 'publish']);
Route::get('/upload_publish', [OfficerController::class, 'upload_publish']);
Route::post('/add_publish', [OfficerController::class, 'add_publish']);
Route::get('/edit_publish', [OfficerController::class, 'edit_publish']);
Route::get('/delete_publish/{internal_id}', [OfficerController::class, 'delete_publish']);
Route::get('/rules', [OfficerController::class, 'rules']);
Route::get('/order', [OfficerController::class, 'order']);
Route::get('/form', [OfficerController::class, 'form']);
Route::get('/performance', [OfficerController::class, 'performance']);
Route::get('/credit_consider', [OfficerController::class, 'credit_consider']);
Route::get('/creditconsider', [OfficerController::class, 'creditconsider']);
Route::get('/creditconsider_detail/{credit_consider_id}', [OfficerController::class, 'creditconsider_detail']);
Route::post('/result_creditconsider', [OfficerController::class, 'result_creditconsider']);
Route::get('/uploadcredit_consider', [OfficerController::class, 'uploadcredit_consider']);
Route::post('/postcredit_consider', [OfficerController::class, 'postcredit_consider']);
Route::get('/creditconsider_process/{credit_consider_id}', [OfficerController::class, 'creditconsider_process']);
Route::get('/report_creditconsider', [OfficerController::class, 'report_creditconsider']);
// Admin

// Credit consider status
Route::get('/admin_creditconsider', [OfficerController::class, 'admin_creditconsider']);
Route::get('/data_creditconsider', [OfficerController::class,'data_creditconsider']);
Route::get('/delete_creditconsider/{credit_consider_id}', [OfficerController::class,'delete_creditconsider']);
Route::get('/status_form_add', [OfficerController::class, 'status_form_add']);
Route::post('/add_status', [OfficerController::class, 'add_status']);
Route::get('/status_form_edit/{status_id}', [OfficerController::class, 'status_form_edit']);
Route::post('/update_status', [OfficerController::class, 'update_status']);
Route::post('status_form_delete/{status_id}', [OfficerController::class, 'status_form_delete']);

// News
Route::get('/news_upload', [OfficerController::class, 'news_upload']);
Route::get('/add_news', [OfficerController::class, 'add_news']);
Route::post('/upload_news', [OfficerController::class, 'upload_news']);
Route::get('/edit_news/{news_number}', [OfficerController::class, 'edit_news']);
Route::post('/update_news', [OfficerController::class, 'update_news']);
Route::get('/delete_news/{news_number}', [OfficerController::class, 'delete_news']);
// Route::prefix('officer')->group(function () {
// });

// Auth::routes();
