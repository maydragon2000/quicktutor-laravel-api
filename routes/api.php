<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\UserAuthController;
use App\Http\Controllers\GoogleController;


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
Route::middleware('auth:api')->group( function () {
    Route::get('/user', [UserAuthController::class, 'home']);
});
Route::post('/login', [UserAuthController::class, 'login']);
Route::post('/register', [UserAuthController::class, 'register']);
Route::get('/verified', [UserAuthController::class, 'verified']);
Route::post('/resend', [UserAuthController::class, 'resend']);
Route::post('/forgot', [UserAuthCOntroller::Class, 'forgot']);
Route::post('/passwordreset', [UserAuthController::class, 'resetPassword']);
//login as google
Route::get('google', [GoogleController::class, 'loginWithGoogle']);
Route::any('callback', [GoogleController::class, 'callbackFromGoogle']);
