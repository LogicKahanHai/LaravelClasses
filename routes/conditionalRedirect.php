<?php

use Illuminate\Support\Facades\Route;

Route::get('hello', function(){
    return view("namedRedirect", ["msg" => "I say Hello"]);
});
Route::get('greet', function(){
    return view("namedRedirect", ["msg" => "I say Greetings!"]);
});
Route::get('welcome', function(){
    return view("namedRedirect", ["msg" => "I say Welcome!"]);
});

Route::get('generic/{command}', function($command){
    return view("namedRedirect", ["msg" => "I say $command"]);

});

Route::get('simon-says/{command}', function($command) {
    switch ($command) {
        case 'hello':
            return redirect("/activity/hello");
        case 'greet':
            return redirect("/activity/greet");
        case 'welcome':
            return redirect("/activity/welcome");
        
        default:
            return redirect("/activity/generic/$command");
    }
});

/**
 * You have been recently selected as an intern in XYZ company and the HR asked you 
 * to build a fun game for the employees to play. You have to build a Simon Says Game.
 *  Where if the users says "hello" the website should give a good greeting. 
 * if the user says thank you the website should say welcome. 
 * Think of 2 more such cases to keep the employees engaged while the HR decides how to give salaries with the limited funds they have.
 */


?>


