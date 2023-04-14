<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Products;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AssignedOrderController extends Controller
{
    public function index()
    {
        $assignedOrder = Order::with('user', 'employee')->where('status', '=', 'assigned')->orWhere('status', '=', 'accepted')->orderBy('id', 'DESC')->get();
        return view('backend.pages.employee.assigned-order', compact('assignedOrder'));
    }

    public function accept($id)
    {
        $acceptedOrders = Order::find($id);
        $acceptedOrders->status = 'accepted';
        $acceptedOrders->save();

        //new product
        $newProduct = Products::find($id);
        $newProduct->sale_status->status = 'sold';
        $newProduct->save();
        Alert::success('Success', 'Order Accepted Successfully');
        return redirect()->back();
    }

    public function deliver($id)
    {
        $deliverOrders = Order::find($id);
        $deliverOrders->status = 'delivered';
        $deliverOrders->sale_status = 'sold';
        $deliverOrders->save();
        Alert::success('Success', 'Order Delivered Successfully');
        return redirect()->back();
    }

    //picked    
    public function delivered()
    {
        $deliveredOrders = Order::with('user')->where('status', '=', 'delivered')->orderBy('id', 'DESC')->get();
        return view('backend.pages.employee.delivered-order', compact('deliveredOrders'));
    }
}