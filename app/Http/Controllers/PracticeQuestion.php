<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeQuestion extends Controller
{
    private function validateDiscount($discount = null)
    {
        if ($discount == null) {
            return false;
        }
        if ($discount < 0 || $discount > 50) {
            return false;
        }
        return true;
    }
    private function calculateDiscount($price, $discount)
    {
        if ($this->validateDiscount($discount) == false) {
            return -1;
        }
        return $price - ($price * $discount / 100);
    }
    public function showDiscount($price, $discount = null)
    {
        $initial = $price;
        $final = $this->calculateDiscount($price, $discount);
        if ($final != -1) {
            return view('simple', compact('initial', 'final'));
        } else {
            $final = null;
            return view('simple', compact('initial', 'final'));
        }
    }
}
