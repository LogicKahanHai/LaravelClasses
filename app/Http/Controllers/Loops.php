<?php

/**
 * This controller is made to work with the loops.blade.php file in the views dir
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Loops extends Controller
{
    public function displayusers()
    {
        $users = ["User 1", "User 2", "User 3", "User 4"];
        return view('bladeViews/loops', compact('users'));
    }
    public function displaynone()
    {
        $users = [];
        return view('bladeViews/loops', compact('users'));
    }
}
