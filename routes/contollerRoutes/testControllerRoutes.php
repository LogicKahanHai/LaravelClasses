<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


/**
 * This route will check the working of a private function through public function in the controller
 */
Route::get('/check-private', [TestController::class, 'display'])->name('check-private');

/**
 * Testing a named redirect to the /check-private route
 */
Route::get('/redirect-to-check', function () {
    return redirect()->route('check-private');
})->name('redirect-to-check');

/**
 * We can also redirect using the action() method
 *
 * The action() method will take the array of the [controller::class, 'function'] as the argument
 * and it will check if there is any route that is associated with this controller and function
 * if there is, it will redirect there. Otherwise, it creates an Error.
 */
Route::get('redirect-with-action', function () {
    return redirect()->action([TestController::class, 'display']);
});

/**
 * This route will check the working of a private function through public function in the controller
 * and will also take a message as the parameter.
 */
Route::get(('check-private-with-message/{message}'), [TestController::class, 'display'])->name('check-private-with-message');

/**
 * Now, to redirect to a route with a parameter, we using the route() method, we need to pass the parameters
 * through any one of these methods studied earlier
 *      1. Associative Array
 *      2. Chaining (with() function)
 *      3. compact() function
 */
Route::get('redirect-with-param/{message}', function ($message) {
    return redirect()->route('check-private-with-message', compact('message'));
});
