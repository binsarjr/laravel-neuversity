<?php

use App\Http\Controllers\DosenController;
use App\Models\Dosen;
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

Route::get('/dosen', [DosenController::class, 'index']);

// View Create
Route::get('/dosen/create', [DosenController::class, 'create']);
// Proses Create
Route::post('/dosen/create', [DosenController::class, 'store']);

// View Edit
Route::get('/dosen/{dosen}', [DosenController::class, 'edit']);
// Proses Dari Edit
Route::put('/dosen/{dosen}', [DosenController::class, 'update']);
// Proses Hapus
Route::get('/dosen/{dosen}/hapus', [DosenController::class, 'destroy']);
