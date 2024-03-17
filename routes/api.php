<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StreamsController;
use App\Http\Controllers\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AccessTokenController;
use App\Http\Controllers\PusherController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AdminController::class)->group(function() {
    Route::get('/usuarios', 'index');
    Route::post('/usuario', 'store');
    Route::get('/usuario/{id}', 'show');
    Route::put('/usuario/{id}', 'update');
    Route::delete('/usuario/{id}', 'destroy');

});

Route::controller(VideoController::class)->group(function() {
    Route::post('/create', 'storeFile');
    Route::get('/videos/{id}', 'showVideo');
    Route::get('/videos', 'showAllVideos');
});

Route::controller(StreamsController::class)->group(function() {
    Route::get('/streams', 'showView');
    Route::post('/streams/create', 'create')->name('streams.create');
});

Route::get('/access_token', [AccessTokenController::class, 'generate_token']);

Route::get('/chat', [PusherController::class, 'index']);
Route::post('/chat', [PusherController::class, 'broadcast']);
Route::post('/chat', [PusherController::class, 'receive-']);