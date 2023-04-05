<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class SellRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //get price from product category
        $price = ProductCategory::where('id', $request->category)->select('product_categories.*', 'price_per_unit as price')->get();
        return response()->json([
            'price' => $price
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    //price 
    public function price($id)
    {
        $price = ProductCategory::where('id', $id)
            ->select('price_per_unit as price')
            ->first();
        return response()->json($price);
    }

}