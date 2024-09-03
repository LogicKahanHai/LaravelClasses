<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Conditionals extends Controller
{

    public function show()
    {
        $customers = ['Customer1', 'Customer2', 'Customer3', 'Customer4'];
        return view('bladeViews/conditionals', compact('customers'));
    }
    public function noshow()
    {
        $customers = [];
        return view('bladeViews/conditionals', compact('customers'));
    }
    public function switch($i = null)
    {
        return view('bladeViews/conditionals', compact('i'));
    }
}
