<?php

use App\Http\Controllers\api\PaymentController;
use App\Http\Controllers\api\StudentController;
use App\Http\Controllers\api\ServiceController;
use App\Http\Controllers\api\AdmissionController;
use App\Http\Controllers\api\AccountController;
use App\Http\Controllers\api\ResultController;
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

Route::apiResources([
    'payments'=>PaymentController::class,
    'students'=>StudentController::class,
    'services'=>ServiceController::class,
    'admissions'=>AdmissionController::class,
    'accounts'=>AccountController::class
]);

Route::post('studentShow',[StudentController::class, 'studentshow']);
Route::post('myaccount',[AccountController::class, 'myaccount']);
Route::post('myResult',[ResultController::class, 'myResult']);
Route::post('ClassResult',[ResultController::class, 'ClassResult']);
