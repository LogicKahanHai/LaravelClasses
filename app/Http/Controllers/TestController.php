<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function display($message = null)
    {
        $message = $this->show($message);
        return $message;
    }
    private function show($message = null)
    {
        if ($message == null) {
            return "This is a private space.";
        }
        return "This is a private space. The message is: " . $message;
    }

    public function test()
    {
        return "This is a test function";
    }
}
