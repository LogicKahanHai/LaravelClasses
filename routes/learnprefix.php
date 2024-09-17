<?php

use Illuminate\Support\Facades\Route;
Route::prefix('rishi')->group(function () {
    Route::get('hello', function () {
        return "World!";
    });
    Route::get('contact', function () {
        return "me!";
    });
    Route::get('about', function () {
        return "logic";
    });
});

Route::get("hello", function () {
    return "HI!";
});

/**
 * Named prefix - not route
 */
Route::name("ck.")->group(function () {
    Route::get("cloud/visit/services", function () {
        return "welcome to our services";
    })->name("serv");
});

Route::get("myservices", function () {
    return redirect()->route("ck.serv");
});

/**
 * Trial and Error
 */
Route::prefix("ckck")->group(function () {

    Route::name("ck")->group(function () {
        Route::get("cloud/visit/service", function () {
            return "welcome to our services";
        })->name("serv");
    });


});


Route::get("myservicestrial", function () {
    return redirect()->route("ckserv");
});
