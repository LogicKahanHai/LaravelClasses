<?php

use Illuminate\Support\Facades\Route;

Route::get('nav', function () {
    return (view('layoutInheritance/layouts'));
});

Route::get('homepage', function () {
    return (view('layoutInheritance/children/home'));
});

Route::get('aboutpage', function () {
    return (view('layoutInheritance/children/about'));
});

Route::get('productspage', function () {
    return (view('layoutInheritance/children/products'));
});

Route::get('contactpage', function () {
    return (view('layoutInheritance/children/contact'));
});
