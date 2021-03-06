<?php

use App\Http\Controllers\AdministrativeUnit\AdminUnitIndexController;
use App\Http\Controllers\AdministrativeUnit\AdminUnitShowController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\UserRegisterController;
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

Route::prefix('v1')->group(function () {

    Route::middleware('guest:sanctum')->group(function () {
        Route::post('/register', [UserRegisterController::class, 'register']);
        Route::post('/login', [UserLoginController::class, 'login']);
    });

    Route::middleware('guest:sanctum')->get('/user', function (Request $request) {
        return $request->all();
    });

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/admin-units', [AdminUnitIndexController::class, 'index']);
        Route::get('/admin-units/{id}', [AdminUnitShowController::class, 'show']);
    });

});
