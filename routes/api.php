<?php

use App\Http\Controllers\Api\Admin\CabangController;
use App\Http\Controllers\Api\Admin\JenisOutletController;
use App\Http\Controllers\Api\Admin\PetugasController;
use App\Http\Controllers\Api\Admin\SalesController;
use App\Http\Controllers\Api\Admin\WarehouseController;
use App\Http\Controllers\API\Admin\ListProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//route login
Route::post('/login', [App\Http\Controllers\Api\Auth\LoginController::class, 'index']);

//group route with middleware "auth"
Route::group(['middleware' => 'auth:api'], function() {

    //logout
    Route::post('/logout', [App\Http\Controllers\Api\Auth\LoginController::class, 'logout']);
    
});


//group route with prefix "admin"
Route::prefix('admin')->group(function () {
    //group route with middleware "auth:api"
    Route::group(['middleware' => 'auth:api'], function () {
        //dashboard
        Route::apiResource('cabang', CabangController::class);
        Route::apiResource('jenisoutlet', JenisOutletController::class);
        Route::apiResource('sales', SalesController::class);
        Route::apiResource('warehouse', WarehouseController::class);
        Route::apiResource('petugas', PetugasController::class);
        Route::apiResource('listproduk', ListProdukController::class);
    });
});
