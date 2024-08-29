<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    private function checkPdt($products, $name)
    {
        foreach ($products as $pdt) {
            if ($pdt["productname"] == $name) {
                return $pdt["price"];
            }
        }
        return -1;
    }
    private function calculateDiscount($price, $discount)
    {
        return $price - ($price * $discount / 100);
    }
    public function productsdisplay($name = null)
    {
        $products = [
            ["productname" => "Laptop", "price" => 56000],
            ["productname" => "Smartphone", "price" => 42000],
            ["productname" => "Tab", "price" => 10000],
        ];
        $finalPrice = null;
        $pdtName = null;
        if ($name != null) {
            $price = $this->checkPdt($products, $name);
            if ($price != -1) {
                $finalPrice = $this->calculateDiscount($price, 10);
            }
        }
        return view('products', compact('finalPrice', 'pdtName'));
    }
}
