<?php

use Illuminate\Support\Facades\Route;

/**
 * A .blade.php file is called just like a normal view file.
 */
Route::get('display', function () {
    return view('display');
});

/**
 * To pass some parameters we can pass them like a normal
 */
Route::get('greetme/{name}', function ($name) {
    return view('display', ['name' => $name]);
});
