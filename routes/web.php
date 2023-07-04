<?php

use App\Http\Controllers\InventarisController;
use App\Models\Inventaris;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('inventaris' , [InventarisController::class, 'index']);
Route::get('inventaris/buat' , [InventarisController::class, 'create']);
Route::post('inventaris' , [InventarisController::class, 'store']);
Route::delete('inventaris/{id}', [InventarisController::class, 'destroy']);

//edit
Route::get('inventaris/{id}/edit' , [InventarisController::class, 'edit']);
Route::patch('inventaris/{id}' , [InventarisController::class, 'update']);
