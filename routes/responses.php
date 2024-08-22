<?php

use Illuminate\Support\Facades\Route;

/**
 * We can use the 'response()' funciton while returning the response, that is a 
 * helper function which helps us provide the headers and the response codes for 
 * better communication and error handling.
 */

Route::get('check-my-headers', function() {
    return response("Hello, please check my headers from the developer tools")
            ->header("whoami", "Logic")
            ->header("Content-Type", "text/plain");
});

/**
 * Writing the Headers in the chaining format can be cumbersome, so we use the 
 * withHeaders() function to pass all the headers as an Associative array.
 */

Route::get('new-way-to-send-headers', function(){

    // Some operation to get student data

    $student = [
        "name" => "Logic",
        "comments" => "He's the Best!"
    ];

    return response("I am sending the Headers at once, without chaning.")
            -> withHeaders([
                "data" => $student,
                "LoL" => "Laugh Out Loud"
            ]);
});

/**
 * We can send JSON data also using the the json() method in chaining
 */

Route::get('send-json-student', function(){
    return response()->json([
        "name" => "Logic",
        "address" => "127.0.0.1",
    ]);
});

/**
 * If we want to send headers with 'view()' we have to chain the view also to response.
 */
Route::get('header-with-view', function() {
    return response()
            -> view('simple')
            -> withHeaders([
                "data" => "Logic",
                "LoL" => "Laugh Out Loud"
            ]);
});

/**
 * We can set cookies also using the cookie() function.
 * It takes 3 arguments:-
 *      1. Key
 *      2. Value
 *      3. TTL (in minutes)
 * 
 * This method is Laravel Specific. It will always encrypt the cookie while storing.
 */
Route::get('set-cookie-encrypt', function(){
    return response("The cookie is ser. Please open the dev tools to check your stored cookie.")
            -> cookie("empname", "Logic", 1)
            -> header("data", "employee data");

});

/**
 * To store the cookie unencrypted, we can use the php way of setting a cookie which 
 * is by using 'setcookie()' function. It is used standalone, not chained with response().
 * 
 * It also takes 3 arguments:-
 *      1. Key
 *      2. Value
 *      3. TTL (in seconds) - we have to give it as "time() + 30" to set as 30 seconds from now
 */
Route::get('set-cookie-no-encrypt', function() {
    setcookie("empname", "Logic", time()+30);
    return response("The not encrypted cookie is stored");
});

?>