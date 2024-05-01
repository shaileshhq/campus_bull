<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExcelImportExportController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SchoolNoticeController;
use App\Http\Controllers\SchoolPreviosEventController;
use App\Http\Controllers\SchoolUpcomingEventController;
use App\Http\Controllers\StateDocumentController;



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['register' => false]);


Route::group(['middleware' => ['auth', 'can:accessAdminpanel']], function() {
    
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('/ranks-import', [ExcelImportExportController::class, 'index'])->name('ranks_import');
    Route::post('/ranks-upload', [ExcelImportExportController::class, 'bulk_upload'])->name('bulk_upload');
   
    Route::resource('rank', RankController::class);
    
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('student', CustomerController::class);
    
   //Evets 
   Route::get('all_events', [SchoolUpcomingEventController::class, 'all_events'])->name('all_events');
    Route::get('upcoming_events', [SchoolUpcomingEventController::class, 'all_events'])->name('all_events');
    Route::resource('upcoming_events', SchoolUpcomingEventController::class);
    Route::resource('previous_events', SchoolPreviosEventController::class);


    // State Documents
    Route::resource('state_document', StateDocumentController::class);

    //Notice
    Route::resource('notice', SchoolNoticeController::class);
    
    Route::get('/student-bulk-export', [CustomerController::class,'export'])->name('student_bulk_export');
    
    
});
