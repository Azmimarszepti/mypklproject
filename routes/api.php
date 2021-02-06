<?php

use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('provinsi',[ProvinsiController::class,'index']);
Route::post('provinsi', [ProvinsiController::class, 'store']);
Route::get('provinsi/{id}', [ProvinsiController::class, 'show']);
Route::delete('provinsi/{id}', [ProvinsiController::class, 'destroy']);
Route::get('indonesia/provinsi',[ProvinsiController::class,'indonesia']);

//API Controller
Route::get('indonesia', [ApiController::class, 'index']);
Route::get('kasuslokal/{id}', [ApiController::class, 'provinsi']);
Route::get('kasuslokal2/{id}', [ApiController::class, 'nampilkeun']);
Route::get('indonesia/provinsi/kota', [ApiController::class, 'dkota']);
Route::get('indonesia/provinsi/kota/kecamatan',[ApiController::class,'dkecamatan']);
Route::get('indonesia/provinsi/kota/kecamatan/kelurahan',[ApiController::class,'dkelurahan']);
Route::get('global', [ApiController::class, 'global']);