<?php

use App\Http\Controllers\Loops;
use Illuminate\Support\Facades\Route;

Route::get('displayusers', [Loops::class, 'displayusers']);
Route::get('displaynone', [Loops::class, 'displaynone']);
