<?php
/**
 * These routes will show the usage of controllers with routes.
 */

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/**
 * The syntax of the Route will change to accomodate the usage of controllers.
 * 
 * 
 * As the second argument we pass a list, with the first item as the controller class
 * to use, and the second item is the function to use.
 */
Route::get("home/hello-world", [HomeController::class, 'helloWorld']);

/**
 * To take some data from the query parameters, just create a function in the controller
 * class that accepts the parameters with the same names and it will simply work
 */
Route::get("home/add/{n1?}/{n2?}", [HomeController::class, 'addNumbers']);


?>