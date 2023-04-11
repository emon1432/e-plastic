<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('frontend.pages.products');
    }
    public function productDetails()
    {
        return view('frontend.pages.product-details');
    }

    public function checkout()
    {
        return view('frontend.pages.checkout');
    }
}
