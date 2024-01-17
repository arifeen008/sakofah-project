<?php

use App\Http\Controllers\AuthController;
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

//  Main page
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
Route::get('/calender', [IndexController::class, 'calender']);
Route::get('/homeList', [IndexController::class, 'homeList']);
Route::get('/vacantList', [IndexController::class, 'vacantList']);
Route::get('/condoList', [IndexController::class, 'condoList']);
Route::get('/home/{asset_number}', [IndexController::class, 'home']);
Route::get('/vacant/{asset_number}', [IndexController::class, 'vacant']);
Route::get('/condo/{asset_number}', [IndexController::class, 'condo']);
Route::get('/document', [IndexController::class, 'document']);
Route::get('/report', [IndexController::class, 'report']);
Route::get('/withus', [IndexController::class, 'withus']);

// Login
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginPost']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'checksession'], function () {
//Officer
    Route::get('/member', [OfficerController::class, 'member']);
    Route::post('/searchMember', [OfficerController::class, 'searchMember']);
    Route::post('/data_member', [OfficerController::class, 'data_member']);
    Route::post('/account_details', [OfficerController::class, 'account_details']);
    Route::post('/loan_details', [OfficerController::class, 'loan_details']);
    Route::get('/credit', [OfficerController::class, 'credit']);
    Route::post('/searchcredit', [OfficerController::class, 'searchcredit']);
    Route::get('/uploadcredit', [OfficerController::class, 'uploadcredit']);
// Route::post('/CreditDownload',[OfficerController::class, 'CreditDownload']);
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

// Admin
// Credit consider status
    Route::get('/credit_consider', [OfficerController::class, 'credit_consider']);
    Route::get('/creditconsider', [OfficerController::class, 'creditconsider']);
    Route::get('/creditconsider_detail/{credit_consider_id}', [OfficerController::class, 'creditconsider_detail']);
    Route::post('/accept_creditconsider', [OfficerController::class, 'accept_creditconsider']);
    Route::post('/reject_creditconsider', [OfficerController::class, 'reject_creditconsider']);
    Route::get('/uploadcredit_consider', [OfficerController::class, 'uploadcredit_consider']);
    Route::post('/postcredit_consider', [OfficerController::class, 'postcredit_consider']);
    Route::get('/creditconsider_process/{credit_consider_id}', [OfficerController::class, 'creditconsider_process']);
    Route::get('/report_creditconsider', [OfficerController::class, 'report_creditconsider']);
    Route::get('/admin_creditconsider', [OfficerController::class, 'admin_creditconsider']);
    Route::get('/data_creditconsider', [OfficerController::class, 'data_creditconsider']);
    Route::get('/delete_creditconsider/{credit_consider_id}', [OfficerController::class, 'delete_creditconsider']);
    Route::get('/status_form_add', [OfficerController::class, 'status_form_add']);
    Route::post('/add_status', [OfficerController::class, 'add_status']);
    Route::get('/status_form_edit/{status_id}', [OfficerController::class, 'status_form_edit']);
    Route::post('/update_status', [OfficerController::class, 'update_status']);
    Route::post('/status_form_delete/{status_id}', [OfficerController::class, 'status_form_delete']);

// Perfomance
    Route::get('/add_performance', [OfficerController::class, 'add_performance']);
    Route::post('/postPerformance', [OfficerController::class, 'postPerformance']);

// Credit
    Route::get('/admin_credit', [OfficerController::class, 'admin_credit']);
    Route::get('/admin_delete_credit/{id_credit}', [OfficerController::class, 'admin_delete_credit']);

// News
    Route::get('/news_upload', [OfficerController::class, 'news_upload']);
    Route::get('/add_news', [OfficerController::class, 'add_news']);
    Route::post('/upload_news', [OfficerController::class, 'upload_news']);
    Route::get('/edit_news/{news_number}', [OfficerController::class, 'edit_news']);
    Route::post('/update_news', [OfficerController::class, 'update_news']);
    Route::get('/delete_news/{news_number}', [OfficerController::class, 'delete_news']);

// Login history
    Route::get('/login_history', [OfficerController::class, 'login_history']);
    Route::get('/login_history_person/{user_id}/{br_no}', [OfficerController::class, 'login_history_person']);
    Route::get('/all_officer', [OfficerController::class, 'all_officer']);

// Asset
    Route::get('/asset_list', [OfficerController::class, 'asset_list']);
    Route::get('/add_asset', [OfficerController::class, 'add_asset']);
    Route::post('/uploadAsset', [OfficerController::class, 'uploadAsset']);
    Route::get('/delete_asset/{asset_number}', [OfficerController::class, 'delete_asset']);
});
