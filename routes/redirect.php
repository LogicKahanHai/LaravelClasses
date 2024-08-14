<?php

use Illuminate\Support\Facades\Route;

/**
 * This file was added using the "Route::prefix" in the web.php file.
 * So, all the routes in this file have to be prefixed by 'redirect' while
 * requesting on the browser.
 */






Route::get('greetings', function(){
    return "Greetings, you have been redirected to me! :)";
});

/**
 * There is a 'redirect()' function which takes the path to which you need to redirect to,
 * as the input and then redirects the page to that path.
 * 
 * This method is called "Return redirect()"
 * 
 */

Route::get('employee/{empname}/{salary}', function($empname, $salary){
    return redirect("employee/{$empname}/{$salary}");
});



/**
 * There is another way to redirect, its directly available. 
 * instead of defining 'Route::get', we write 'Route::redirect'
 * 
 * The first argument is 'From', the second is 'To'.
 * 
 * This method is called "Route::redirect()"
 * 
 */
Route::redirect('greet', 'greetings');

/**
 * When this is used, if we use the "same variable names at the same position" 
 * then it will be directly mapped to the redirected route.
 */

Route::redirect('empredirect/{salary}/{empname}', '/employee/{empname}/{salary}');


/**
 * Here we pass the name of the route we want to redirect to. 
 * For this, we need to assign name to the route we want to reditect to.
 * 
 * This is called "Named redirection"
 */


//This is the original route for named redirect.
Route::get('redirect-to-me', function(){
    return view("namedRedirect");
})->name("rtm");

//This is the new route from which will redirect by name.
Route::get("redirect-from-me", function(){
    return redirect()->route("rtm");
});

?>