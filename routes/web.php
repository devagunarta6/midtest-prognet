<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [AuthController::class, 'register']);
Route::post('/registerProccess', [AuthController::class, 'registerProcess']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/loginProcess', [AuthController::class, 'loginProcess']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/keluhan', [KeluhanController::class, 'insert']);
Route::post('/insertKeluhan', [KeluhanController::class, 'insertProcess']);

Route::get('/{id}/edit', [KeluhanController::class, 'edit']);
Route::post('/{id}/editProcess', [KeluhanController::class, 'editProcess'])->name('editProcess');
Route::post('/{id}/delete', [KeluhanController::class, 'delete']);

Route::get('/admin/login', [AuthController::class, 'adminLogin']);
Route::post('/admin/loginProcess', [AuthController::class, 'adminLoginProcess']);
Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard']);
Route::post('/{id}/admin/delete', [KeluhanController::class, 'adminDelete']);
Route::get('/{id}/admin/edit', [KeluhanController::class, 'adminEdit']);
Route::post('/{id}/admin/editProcess', [KeluhanController::class, 'adminEditProcess']);
Route::get('/admin/secRegister', [AuthController::class, 'adminRegister']);
Route::post('/admin/registerProcess', [AuthController::class, 'adminRegisterProcess']);
