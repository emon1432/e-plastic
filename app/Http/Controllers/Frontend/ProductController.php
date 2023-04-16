<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::with('categoryInfo')->where('status', '=', 'posted')->orderBy('id', 'desc')->paginate(9);
        return view('frontend.pages.products', compact('products'));
    }
    
    public function productDetails($id)
    {
        $productDetails = Products::with('categoryInfo')->where('id', $id)->first();
        return view('frontend.pages.product-details', compact('productDetails'));
    }
}
