<?php

use Illuminate\Support\Facades\Route;

Route::view("homepage", "layoutInheritance.children.myhomepage");
Route::view("productpage", "layoutInheritance.children.myproductpage");
Route::view("aboutpage", "layoutInheritance.children.myaboutpage");
Route::view("contactpage", "layoutInheritance.children.mycontactpage");
