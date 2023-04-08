<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\SellRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SellRequestController extends Controller
{
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

        Alert::success('Success', 'Sell Request Sent Successfully');
        return redirect()->back();
    }

    //sell request update
    public function update(Request $request, $id)
    {
        //update to SellRequest table
        $pendingRequest = SellRequest::find($id);
        $pendingRequest->name = auth()->user()->name;
        $pendingRequest->phone = auth()->user()->phone;
        $pendingRequest->email = auth()->user()->email;
        $pendingRequest->address = $request->address;
        $pendingRequest->product_category_id = $request->category;
        $pendingRequest->product_weight = $request->weight;
        $pendingRequest->product_price = $request->price;
        $pendingRequest->total_price = $request->totalPrice;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('backend/images/sell-request'), $imageName);
            $pendingRequest->image = $imageName;
        }
        //unlink old image
        $oldImage = public_path('backend/images/sell-request/' . $pendingRequest->image);
        if (file_exists($oldImage)) {
            @unlink($oldImage);
        }

        $pendingRequest->save();

        Alert::success('Success', 'Sell Request Updated Successfully');
        return redirect()->back();
    }

    //price
    public function price($id)
    {
        $price = ProductCategory::where('id', $id)
            ->select('price_per_unit as price')
            ->first();
        return response()->json($price);
    }
    public function pending()
    {
        $productCategories = ProductCategory::get();
        $pendingRequests = SellRequest::where('status', '=', 'pending')->get();
        return view('backend.pages.seller.pending-request', compact('pendingRequests', 'productCategories'));
    }

    public function accepted()
    {
        $acceptedRequests = SellRequest::where('status', '=', 'accepted')->get();
        return view('backend.pages.seller.accepeted-request', compact('acceptedRequests'));
    }

    public function completed()
    {
        $completedRequests = SellRequest::where('status', '=', 'completed')->get();
        return view('backend.pages.seller.completed-request', compact('completedRequests'));
    }

    public function rejected()
    {
        $rejectedRequests = SellRequest::where('status', '=', 'rejected')->get();
        return view('backend.pages.seller.rejected-request', compact('rejectedRequests'));
    }
}
