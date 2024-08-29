<?php

use App\Http\Controllers\PracticeQuestion;
use Illuminate\Support\Facades\Route;

Route::get('calculate-discount/{price}/{discount?}', [PracticeQuestion::class, 'showDiscount']);
