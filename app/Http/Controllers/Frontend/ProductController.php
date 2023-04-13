<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productDetails($id)
    {
        $productDetails= Products::with('categoryInfo')->where('id', $id)->orderBy('id', 'desc')->first();
        return view('frontend.pages.product-details', compact('productDetails'));
    }
    public function checkout()
    {
        $products = Products::with('categoryInfo')->where('status', '=', 'posted')->orderBy('id', 'desc')->get();
        return view('frontend.pages.checkout', compact('products'));
    }
}