<?php

use App\Http\Controllers\WEB\AuthWebController;
use App\Http\Controllers\WEB\DosenWebController;
use App\Http\Controllers\WEB\MahasiswaWebController;
use App\Http\Controllers\WEB\MataKuliahWebController;
use App\Http\Controllers\WEB\PertanyaanWebController;
use App\Http\Controllers\WEB\ViewWebController;
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

Route::get('/loginIndex', [ViewWebController::class, 'loginIndex']);
Route::get('/registerIndex', [ViewWebController::class, 'registerIndex']);
Route::post('/register', [AuthWebController::class, 'register']);
Route::post('/login', [AuthWebController::class, 'login']);
Route::get('/logout', [AuthWebController::class, 'logout']);

Route::middleware(['session.token'])->prefix('')->group(function () {
    Route::get('/', [ViewWebController::class, 'berandaView']);

    // pertanyaan
    Route::get('/pertanyaan/index', [ViewWebController::class, 'pertanyaanIndex']);
    Route::post('/pertanyaan/create', [PertanyaanWebController::class, 'create']);
    Route::post('/pertanyaan/edit', [PertanyaanWebController::class, 'update']);
    Route::get('/pertanyaan/delete/{id}', [PertanyaanWebController::class, 'delete']);
    Route::get('/pertanyaan/create-index', [ViewWebController::class, 'pertanyaanCreateIndex']);
    Route::get('/pertanyaan/edit-index/{id}', [ViewWebController::class, 'pertanyaanEditIndex']);
    // mataKuliah
    Route::get('/mataKuliah/index', [ViewWebController::class, 'mataKuliahIndex']);
    Route::post('/mataKuliah/create', [MataKuliahWebController::class, 'create']);
    Route::post('/mataKuliah/edit', [MataKuliahWebController::class, 'update']);
    Route::get('/mataKuliah/delete/{id}', [MataKuliahWebController::class, 'delete']);
    Route::get('/mataKuliah/create-index', [ViewWebController::class, 'mataKuliahCreateIndex']);
    Route::get('/mataKuliah/edit-index/{id}', [ViewWebController::class, 'mataKuliahEditIndex']);
    // mahasiswa
    Route::get('/mahasiswa/index', [ViewWebController::class, 'mahasiswaIndex']);
    Route::post('/mahasiswa/create', [MahasiswaWebController::class, 'create']);
    Route::post('/mahasiswa/edit', [MahasiswaWebController::class, 'update']);
    Route::get('/mahasiswa/delete/{id}', [MahasiswaWebController::class, 'delete']);
    Route::get('/mahasiswa/create-index', [ViewWebController::class, 'mahasiswaCreateIndex']);
    Route::get('/mahasiswa/edit-index/{id}', [ViewWebController::class, 'mahasiswaEditIndex']);
    // dosen
    Route::get('/dosen/index', [ViewWebController::class, 'dosenIndex']);
    Route::post('/dosen/create', [DosenWebController::class, 'create']);
    Route::post('/dosen/edit', [DosenWebController::class, 'update']);
    Route::get('/dosen/delete/{id}', [DosenWebController::class, 'delete']);
    Route::get('/dosen/create-index', [ViewWebController::class, 'dosenCreateIndex']);
    Route::get('/dosen/edit-index/{id}', [ViewWebController::class, 'dosenEditIndex']);
});
