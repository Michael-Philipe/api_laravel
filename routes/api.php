<?php

use App\Http\Controllers\Api\V1\InvoiceController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Support\Facades\Route;




Route::prefix('v1')->group(function () {
    // Route::apiResource('users', UserController::class);
    Route::get('/users',[UserController::class, 'index']);
    Route::get('/users/{user}',[UserController::class, 'show']);
    Route::get('/invoices',[InvoiceController::class, 'index']);
    Route::get('/invoice/{invoice}',[InvoiceController::class, 'show']);
});

