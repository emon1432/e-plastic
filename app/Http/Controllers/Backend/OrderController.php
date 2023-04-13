<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class OrderController extends Controller
{
    //

    public function pending()
    {
        $pendingOrders = Order::with('user', 'product', 'category')->where('status', 'Processing')->where('assign_employee_id', null)->get();
        $employees = User::where('role_id', 2)->get();
        // return response()->json($pendingOrders);
        return view('backend.pages.buyer-order.pending', compact('pendingOrders', 'employees'));
    }

    public function employeeAssign(Request $request)
    {
        // return response()->json($request->all());
        $order = Order::find($request->order_id);
        $order->assign_employee_id = $request->employee_id;
        $order->status = 'Processing';
        $order->save();
        Alert::success('Success', 'Employee Assigned Successfully');
        return redirect()->back();
    }

    public function accepted()
    {
        $acceptedOrders = Order::with('user', 'product', 'category', 'employee')->where('status', 'processing')->where('assign_employee_id', '!=', null)->get();
        return response()->json($acceptedOrders);
        return view('backend.pages.buyer-order.accepted', compact('acceptedOrders'));
    }
}
