<?php

use App\Http\Controllers\MeController;
use Illuminate\Support\Facades\{Route, Auth};


Auth::loginUsingId(1);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('me', [MeController::class, '__invoke']);
    Route::prefix('test')->group(function () {
        // Route::get('store', [MeController::class, 'store']);
    });
});
