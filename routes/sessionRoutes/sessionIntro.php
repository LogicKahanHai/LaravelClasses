<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get("setSession", [SessionController::class, 'setSession']);
Route::get("fetchSession", [SessionController::class, 'fetchSessionData']);
Route::get("deleteSession", [SessionController::class, 'deleteSession']);
