<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index page
    public function index()
    {
        $products = Products::with('categoryInfo')->where('status', '=', 'posted')->orderBy('id', 'desc')->get();
        return view('frontend.pages.index', compact('products'));
    }

    //about page
    public function about()
    {
        return view('frontend.pages.about');
    }

    //contact page
    public function contact()
    {
        return view('frontend.pages.contact');
    }
}