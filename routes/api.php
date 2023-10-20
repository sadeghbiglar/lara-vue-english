<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;
use App\Http\Controllers\UserWordsController;

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
Route::get('/words', [WordController::class, 'index']);
Route::get('/copy-words', [UserWordsController::class, 'copyWords']);
//Route::middleware(['auth:sanctum'])->get('/userwords/review1', [UserWordsController::class, 'getUserWordsForReview1']);
Route::get('/userwords/review1', [UserWordsController::class, 'getUserWordsForReview1']);
