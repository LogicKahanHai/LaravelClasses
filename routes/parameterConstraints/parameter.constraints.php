<?php

use Illuminate\Support\Facades\Route;

/**
 * Working with parameter constraints
 *
 * Here, we have passed the constraint that the userid must be a number
 * '[0-9]+' means any repitions of the digits 0-9.
 *
 * If we pass something other than the constraint, it displays the 404 not found page.
 */
Route::get('login/{userid}', function ($userid) {
    return "The userId is $userid";
})->where('userid', '[0-9]+');

/**
 * Let's try for chars as the constraint
 */
Route::get('username/{username}', function ($username) {
    return "the username is: $username";
})->where('username', '[aA-zZ]+');

/**
 * We can chain the where() function to add multiple constraints.
 */
Route::get('signin/{username}/{userid}', function ($username, $userid) {
    return "The username is $username, and the userid is $userid";
})->where('username', '[aA-zZ]+')
    ->where('userid', '[0-9]+');

/**
 * To reduce this cumbersome chaining we can pass constriants for each variable as a key-value pair
 * in the associative array
 */
Route::get('login/{userid}/{username}', function ($userid, $username) {
    return "The username is $username, and the userid is $userid";
})->where(['userid' => '[0-9]+', 'username' => '[aA-zZ]+']);

/**
 * Instead of using the normal 'where()' we can use some special where functions like
 *      1. whereNumber()
 *      2. whereAlpha()
 *      3. whereAlphaNumeric()
 * These give the constraints automatically
 */
Route::get('getuser/{userid}/{username}', function ($userid, $username) {
    return "ID: $userid, Name: $username";
})->whereNumber('userid')
    ->whereAlpha('username');

Route::get('signup/{username}/{password}', function ($username, $password) {
    return "Username: $username, Password: $password";
})->whereAlpha('username')
    ->whereAlphaNumeric('password');


/**
 * Just to make the whereAlphaNumeric() manually
 */
Route::get('signup/{userid}', function ($userid) {
    return "Userid is $userid";
})->where('userid', '[a-zA-Z0-9]+');

/**
 * We can make a global constraint in the 'app/Providers/AppServiceProvider.php' in the boot() function
 *
 * I have added a constraint for the 'id' variable, now it is set as a global constraint.
 * If I give a new constraint in this route, it will override the global constraint
 */
Route::get('checkuser/{id}', function ($id) {
    return "The user is: $id";
});
