<?php
/**
 * This is part of a question in class.
 * 
 * Q - 
 * 
 * Create a controller with the name ItemsController. Now create a function with the name
 * itemsdata in this controller. Declare a variable $items as follows: -
 * 
 * $items = [
 *      ["name" => "laptop", "price"=> 56000]
 *      ["name" => "smartphone", "price"=> 40000]
 *      ["name" => "smartwatch", "price"=> 10500]
 * ]
 * 
 * Now, create a view with the name 'items.php' and display the itemsdata in the form
 * of a Table.
 * 
 * Finally, return the View inside the itemsdata function of the controller
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function itemsdata() {
        $items = [
            ["name" => "laptop", "price"=> 56000],
            ["name" => "smartphone", "price"=> 40000],
            ["name" => "smartwatch", "price"=> 10500]
        ];
        return view('items')-> with("items", $items);
    }
}
