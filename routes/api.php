<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\PeageController;
use App\Http\Controllers\TrajetController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/administrateurs', [AdminController::class, 'create']);
Route::post('/super_administrateurs', [SuperAdminController::class, 'create']);
Route::post('/agents', [AgentController::class, 'create']);
Route::post('/coupons', [CouponController::class, 'create']);
Route::post('/lots', [LotController::class, 'create']);
Route::post('/trajets', [TrajetController::class, 'create']);
Route::post('/peages', [PeageController::class, 'create']);

