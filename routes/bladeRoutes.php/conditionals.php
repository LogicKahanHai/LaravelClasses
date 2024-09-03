<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Conditionals;

/**
 * This will put the customers in the blade view, so it will show Customers available
 */
Route::get('show', [Conditionals::class, 'show']);

/**
 * This route will not put any customers in the blade view
 */
Route::get('noshow', [Conditionals::class, 'noshow']);

/**
 * This will use the switch case
 */
Route::get('switch/{i?}', [Conditionals::class, 'switch']);
