<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\SellRequest;
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
        //store to SellRequest table
        $sellRequest = new SellRequest();
        $sellRequest->name = auth()->user()->name;
        $sellRequest->phone = auth()->user()->phone;
        $sellRequest->email = auth()->user()->email;
        $sellRequest->address = $request->address;
        $sellRequest->product_category_id = $request->category;
        $sellRequest->product_weight = $request->weight;
        $sellRequest->product_price = $request->price;
        $sellRequest->total_price = $request->totalPrice;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('backend/images/sell-request'), $imageName);
            $sellRequest->image = $imageName;
        }

        $sellRequest->save();

        return redirect()->back()->with('success', 'Sell Request Send Successfully');

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