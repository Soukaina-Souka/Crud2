<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\TacheController;
use App\Http\Employe;
// use App\Http\Controllers\EmployeMiddlewareController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(EmployeController::class)->group(function () {
    Route::get('/employe', 'index');
    Route::get('/employe/create', 'create');
    Route::get('/employe/{employe}', 'show');
    Route::get('/employe/{employe}/edit', 'edit');
    Route::post('/employe', 'store');
    Route::patch('/employe/{employe}', 'update');
    Route::delete('/employe/{employe}', 'destroy');
});
Route::controller(TacheController::class)->group(function () {
    Route::get('/tache', 'index');
    Route::get('/tache/create', 'create');
    Route::get('/tache/{id}', 'show');
    Route::get('/tache/{id}/edit', 'edit');
    Route::post('/tache', 'store');
    Route::patch('/tache/{id}', 'update');
    Route::delete('/tache/{id}', 'destroy');
    });
    
// Route::get('/employe', 'index')->middleware('testEmployeM');
// Route::get('/INDEX', 'index')->middleware('testEmployeM');
// Route::get('/index',[EmployeMiddlewareController::class,'index'])->middleware('testEmployeM');


