<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\TreatmentsController;

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

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);

    // Route::apiResources([
    //     'treatment' => TreatmentsController::class,
    //     'order' => OrderController::class
    // ]);
});

Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
Route::post('/treatment/store', [App\Http\Controllers\API\TreatmentsController::class, 'store']);
Route::get('/treatment/index', [App\Http\Controllers\API\TreatmentsController::class, 'index']);
Route::get('/treatment/show', [App\Http\Controllers\API\TreatmentsController::class, 'show']);
Route::put('/treatment/update/{id}', [App\Http\Controllers\API\TreatmentsController::class, 'update']);
Route::delete('/treatment/delete', [App\Http\Controllers\API\TreatmentsController::class, 'destroy']);
Route::post('/order/store', [App\Http\Controllers\API\OrderController::class, 'store']);
Route::get('/order/index', [App\Http\Controllers\API\OrderController::class, 'index']);
Route::get('/order/show', [App\Http\Controllers\API\OrderController::class, 'show']);
Route::put('/order/update/{id}', [App\Http\Controllers\API\OrderController::class, 'update']);
Route::delete('/order/delete', [App\Http\Controllers\API\OrderController::class, 'destroy']);
