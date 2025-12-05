<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
    Route::get('tickets', [TicketController::class, 'index']);
    Route::post('tickets', [TicketController::class, 'store']);
});
