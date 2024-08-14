<?php

use Illuminate\Support\Facades\Route;

/**
 * This adds the new file 
 */

Route::prefix('redirect')->group(base_path('routes/redirect.php'));
Route::prefix('activity')->group(base_path('routes/conditionalRedirect.php'));


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/names', function () {
    $name1 = 'Rishi';
    $name2 = 'Raj';
    echo 'The name of the first person is '. $name1. '<br>';
    echo 'The name of the second person is '. $name2;
});


/**
 * This is general way to pass the values to a view.
 * 
 * 
 * By passing the variable names in the route, we can make it
 * compulsory to pass these values when coming to this path on the
 * browser to then pass it to the function to then render it properly.
 * 
 * This method of passing the parameters is called - 'By using Associative Array'
 * 
 * @view-file - [views/employee.php]
 */

Route::get('employee/{empname}/{salary}', function($empname, $salary) {
    return view("employee", ["empname"=>$empname, "salary"=>$salary]);
});

/**
 * This is to pass values using "with"
 * 
 * This type of method to pass the parameters is called - 'Chaining method'
 * 
 * Under the hood, this also creates an associative array.
 * 
 * @view-file - [views/employee.php]
 */

Route::get('employee/with/{empname}/{salary}', function($empname, $salary) {
    return view("employee")->with("empname", $empname)->with("salary", $salary);
});

/**
 * This is to pass the values using the 'compact()' function.
 * 
 * This type of method to pass the parameters to the view is called - 'Compact method'
 * 
 * Under the hood, this also creates an associative array.
 * 
 * @view-file - [view/employee.php]
 */

Route::get('employeeCompact/{empname}/{salary}', function($empname, $salary){
    return view("employee", compact("empname", "salary"));
});