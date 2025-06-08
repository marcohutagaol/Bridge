<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LearningProgressController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Learning Progress Routes (Protected by auth:sanctum middleware)
Route::middleware(['auth:sanctum'])->prefix('learning-progress')->group(function () {
    // Update progress
    Route::post('/update', [LearningProgressController::class, 'updateProgress'])
         ->name('api.learning.progress.update');
    
    // Get specific progress by order_id
    Route::get('/{order_id}', [LearningProgressController::class, 'getProgress'])
         ->name('api.learning.progress.get');
    
    // Get all user progress
    Route::get('/user/all', [LearningProgressController::class, 'getUserProgress'])
         ->name('api.learning.progress.user.all');
});

// Alternative jika tidak menggunakan Sanctum, gunakan web middleware
Route::middleware(['web', 'auth'])->prefix('api/learning-progress')->group(function () {
    Route::post('/update', [LearningProgressController::class, 'updateProgress']);
    Route::get('/{order_id}', [LearningProgressController::class, 'getProgress']);
    Route::get('/user/all', [LearningProgressController::class, 'getUserProgress']);
});