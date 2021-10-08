<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswasController;

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


Route::get('/', [SiswasController::class, 'import']);
Route::post('/import', [SiswasController::class, 'store'])->name('importexcel');
Route::get('/export', [SiswasController::class, 'export'])->name('exportexcel');
Route::delete('delete/{siswas}',[SiswasController::class, 'delete']); 
Route::get('/exportpdf', [SiswasController::class, 'exportpdf'])->name('exportpdf');
