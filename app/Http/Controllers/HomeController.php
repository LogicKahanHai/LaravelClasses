<?php
/**
 * To create this controller we use the command 
 * `php artisan make:controller HomeController
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * We can use all 3 access specifiers here --> public, protected, private
     * 
     * index is like the default function, but we can use any name for the function.
     */
    public function helloWorld() {
        return "Hello World!";
    }

    /**
     * So, if we want to make it such that the values can be null in the query, 
     * we need to set the default value as null in this function else it will give error.
     */

    public function addNumbers($n1 = null, $n2 = null) {
        if ($n1 == null && $n2 == null) {
            return "No values passed";
        }
        return $n1 + $n2;
    }

    /**
     * To send a view as a response from the controller.
     */
    public function simpleView() {
        return view('simple');
    }
}
