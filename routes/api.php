<?php

use App\Http\Controllers\FormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});



/*** Post Routes ***/
Route::post('process', [FormController::class, 'process']);
Route::get('get_ip', [FormController::class, 'getIpAddress']);

/*** Check Status Routes ***/
//Route::get('check-status/{check_status_id}', [FormController::class, 'CheckStatusNew']);
