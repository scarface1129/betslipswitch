<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register/', [PassportController::class, 'register']);
Route::post('login/', [PassportController::class, 'login']);
Route::post('forget_password/', [PassportController::class, 'forgot_password']);
Route::post('verify_code/', [PassportController::class, 'verify_code']);
Route::post('email_verification/', [PassportController::class, 'email_verification']);
Route::post('reset_password/', [PassportController::class, 'reset_password']);
Route::post('resend_code/', [PassportController::class, 'resend_code']);
Route::get('conversion/', [PassportController::class, 'conversion']);
Route::post('bookies', [PassportController::class, 'bookies']);
Route::post('convert/', [PassportController::class, 'convert']);



// put all api protected routes here
Route::middleware('auth:api')->group(function () {
    Route::post('user-detail', [PassportController::class, 'userDetail']);
    Route::post('logout', [PassportController::class, 'logout']);
    Route::post('update', [PassportController::class, 'update']);
    Route::post('change_password', [PassportController::class, 'change_password']);
    Route::post('delete_user', [PassportController::class, 'delete']);

    


});