<?php

use App\Http\Middleware\SomeMiddleware;
use Illuminate\Support\Facades\Route;

Route::get("basic", function () {
    return "<br>This route is using middleware";
})->middleware("Some");

/**
 * Grouping routes with common middleware
 */
Route::middleware("Some")->group(function () {
    Route::get('sign', function () {
        return "<br>Sign here!";
    });
    Route::get('log', function () {
        return "<br>Log here!";
    });
    /**
     * If you want to exclude only one route from the middleware but still keep in the group
     * for organisation, we can use the `withoutMiddleware('SomeMiddlewareName')` function in
     * chain of that route
     */
    Route::get("no-mid-log", function () {
        return "<br>Without Middleware log<br>";
    })->withoutMiddleware('Some');
});

/**
 * If we want to use multiple middlewares one by one, we can pass them in an array
 */
Route::get('many-mid', function () {
    return "<br>I have been called after many middlewares<br>";
})->middleware(['Some', 'SomeOther']);

/**
 * Multi middleware group
 */
Route::middleware(["Some", "SomeOther"])->group(function () {
    Route::get('many-sign', function () {
        return "<br>Sign here!";
    });
    Route::get('many-log', function () {
        return "<br>Log here!";
    });
    /**
     * If you want to exclude only one route from the middleware but still keep in the group
     * for organisation, we can use the `withoutMiddleware('SomeMiddlewareName')` function in
     * chain of that route
     */
    Route::get("many-one-mid-log", function () {
        return "<br>Without Middleware log<br>";
    })->withoutMiddleware('Some');
});


/**
 * This is to use the middleware group
 */
Route::middleware("someGroup")->group(function () {
    Route::get('group-sign', function () {
        return "<br>Sign here!<br>";
    });
    Route::get('group-log', function () {
        return "<br>Log here!<br>";
    });
    /**
     * If you want to exclude only one route from the middleware but still keep in the group
     * for organisation, we can use the `withoutMiddleware('SomeMiddlewareName')` function in
     * chain of that route
     */
    Route::get("group-one-mid-log", function () {
        return "<br>Without Middleware log<br>";
    })->withoutMiddleware('Some');
});
