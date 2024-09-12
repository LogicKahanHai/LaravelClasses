<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserStatus extends Controller
{
    public function displayUserStatus()
    {
        $users = [
            [
                "name" => "Alice",
                "status" => "active",
            ],
            [
                "name" => "Bob",
                "status" => "inactive",
            ],
            [
                "name" => "Charlie",
                "status" => "active",
            ],
            [
                "name" => "David",
                "status" => "inactive",
            ],
            [
                "name" => "Eve",
                "status" => "active",
            ],
        ];
        return view("user.status", compact("users"));
    }
}
