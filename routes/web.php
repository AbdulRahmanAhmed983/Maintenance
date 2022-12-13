<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatamaintenanceController;


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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
################################ Begin Mintenance ##################################################################
Route::get('/maintenance/home', [DatamaintenanceController::class,'showTable'])->name('showTable');
Route::get('/create/new/maintenance', [DatamaintenanceController::class,'createMain'])->name('createMain');
Route::post('/store/new/maintenance', [DatamaintenanceController::class,'Addmaintenance'])->name('Addmaintenance');
Route::get('/edit/maintenance/{id}',  [DatamaintenanceController::class,'editmaintenance'])->name('editmaintenance');
Route::post('/update/maintenance/{id}',[DatamaintenanceController::class,'updatemaintenance'])->name('updatemaintenance');
Route::get('/archieved/maintenance/{id}',[DatamaintenanceController::class,'archievedMain'])->name('archievedMain');
Route::delete('/maintenance/home/{id}',[DatamaintenanceController::class,'deleteMain'])->name('deleteMain')->withTrashed();
Route::get('/close/maintenance',[DatamaintenanceController::class,'closeMaintenance'])->name('closeMaintenance');
Route::post('/maintenance/home/{id}/restore',[DatamaintenanceController::class,'restore'])->withTrashed();
################################ End Mintenance ####################################################################################

################################ Begin process ##################################################################
Route::get('/process/home', [DatamaintenanceController::class,'showTableprocess'])->name('showTableprocess');
Route::get('/create/new/addprocess', [DatamaintenanceController::class,'addProcess'])->name('addProcess');
Route::post('/store/new/process', [DatamaintenanceController::class,'storeprocess'])->name('storeprocess');
Route::get('/edit/process/{id}',  [DatamaintenanceController::class,'editprocess'])->name('editprocess');
Route::post('/update/process/{id}',[DatamaintenanceController::class,'updateprocess'])->name('updateprocess');
Route::get('/delete/process/{id}',[DatamaintenanceController::class,'deleteprocess'])->name('deleteprocess');

################################ Begin process ##################################################################
Route::get('/maintenance/invoice', [DatamaintenanceController::class,'invoice'])->name('invoice');

######################################################### Begin Create Piece #################################
Route::get('/process/createPiece', [DatamaintenanceController::class,'createPiece'])->name('createPiece');
Route::post('/process/storePiece', [DatamaintenanceController::class,'storePiece'])->name('storePiece');
Route::get('/process/deletePiece/{id}', [DatamaintenanceController::class,'deletePiece'])->name('deletePiece');


######################################################### End Create Piece #################################
