<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * This function is used to set the session data
     * @return void
     */
    public function setSession(Request $req): void {
        /**
        * we can use the session() helper function to set the session data
        *   1. session() -> put('key', 'value')
        *   2. session() -> put(['key1' => 'value1', 'key2' => 'value2'])
        *   3. session(['key1' => 'value1', 'key2' => 'value2'])
        *   4. $req -> session() -> push('key', 'value') // to push the value in the array of the key
        */
        // $req -> session() -> put('username', 'Rishi');
        // $req -> session() -> put(['username' => 'Rishi', 'email' => 'rishi@email.com']);
        // session(['username' => 'Rishi', 'email' => 'rishi@gmail.com']);
        $req -> session() -> push('emails', 'rishi@gmail.com');
        echo "Session data has been set";
    }
    /**
     * This function is used to fetch the session data
     * @return void
     */
    public function fetchSessionData(Request $req): array {
        /**
        * we can use the session() helper function to fetch the session data
        *   1. session() -> get('key')
        *   2. session() -> all()
        *   3. session('key')
        */
        // echo "Welcome ".$req -> session() -> get('username');
        return $req -> session() -> all();
        // echo "Welcome ".session('username');
    }

    /**
     * This function is used to delete the session data
     * @return void
     */
    public function deleteSession(Request $req): void {
        /**
        * we can use the session() helper function to delete the session data
        * session() -> forget('key')
        * session() -> flush() // to delete all the session data
        * $req -> session() -> pull('key') // to delete the session data and return the value
        */
        // $req -> session() -> forget('username');
        // return $req -> session() -> pull('emails');
        $req -> session() -> flush();
        echo "Session data has been deleted";
    }

}
