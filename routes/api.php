<?php

use App\Http\Controllers\Api\HomeFrontController;
use App\Http\Controllers\Api\UserController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/logout', [UserController::class, 'logout']);
});

//home
Route::group(['middleware' => 'api'], function () {
    Route::post('/project/{id}', [HomeFrontController::class, 'projectDetails']);
    Route::get('/project/all', [HomeFrontController::class, 'projects']);
    Route::get('/sliders', [HomeFrontController::class, 'sliders']);
    Route::get('/services', [HomeFrontController::class, 'services']);
    Route::get('/teams', [HomeFrontController::class, 'team']);
    Route::get('/aboutus', [HomeFrontController::class, 'aboutUs']);
    Route::get('/settings', [HomeFrontController::class, 'settings']);
});
