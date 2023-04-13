<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EmployeeAssignRequest;
use App\Models\ProductPurchase;
use App\Models\Products;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PostProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get products
        $products = Products::with('categoryInfo')->orderBy('id', 'desc')->get();

        return view('backend.pages.products.index', compact('products'));
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
        //store product
        $product = new Products();
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_category_id = $request->product_category_id;
        $product->product_weight = $request->product_weight;
        $product->product_price = $request->product_price;
        $product->buying_price = $request->buying_price;
        $product->selling_price = $request->selling_price;
        $product->status = 'posted';

        //create purchase product
        $purchase_product = new ProductPurchase();
        $purchase_product->product_name = $request->product_name;
        $purchase_product->product_description = $request->product_description;
        $purchase_product->product_category_id = $request->product_category_id;
        $purchase_product->product_weight = $request->product_weight;
        $purchase_product->product_price = $request->product_price;
        $purchase_product->buying_price = $request->buying_price;
        $purchase_product->status = 'bought';

        //update employee assign 
        $employeeAssignRequest = EmployeeAssignRequest::find($request->id);
        $employeeAssignRequest->status = 'posted';
        $employeeAssignRequest->save();

        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('backend/images/products'), $image_name);
            $product->image1 = $image_name;
            $product->save();
            $purchase_product->save();
        }

        if ($request->hasFile('image2')) {
            $image = $request->file('image2');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('backend/images/products'), $image_name);
            $product->image2 = $image_name;
            $product->save();
            $purchase_product->save();
        }
        if ($request->hasFile('image3')) {
            $image = $request->file('image3');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('backend/images/products'), $image_name);
            $product->image3 = $image_name;
            $product->save();
            $purchase_product->save();
        }
        $product->save();
        $purchase_product->save();

        Alert::success('Product Posted Successfully', 'Success');
        return redirect()->route('product.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}