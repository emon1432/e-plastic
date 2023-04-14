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
        $pendingOrders = Order::with('user', 'product', 'category')->where('status', 'pending')->orWhere('status', 'assigned')->orderBy('id', 'desc')->get();
        $employees = User::where('role_id', 2)->get();
        // return response()->json($pendingOrders);
        return view('backend.pages.admin-buyer-order.pending', compact('pendingOrders', 'employees'));
    }

    public function employeeAssign(Request $request)
    {
        // return response()->json($request->all());
        $order = Order::find($request->order_id);
        $order->assign_employee_id = $request->employee_id;
        $order->status = 'assigned';
        $order->save();
        Alert::success('Success', 'Employee Assigned Successfully');
        return redirect()->back();
    }

    public function assigned()
    {
        $assignedOrders = Order::with('user', 'product', 'category', 'employee')->where('status', 'assigned')->orWhere('status', 'accepted')->orderBy('id', 'desc')->get();
        return view('backend.pages.admin-buyer-order.assigned', compact('assignedOrders'));
    }

    public function delivered()
    {
        $deliveredOrders = Order::with('user', 'product', 'category', 'employee')->where('status', 'delivered')->orderBy('id', 'desc')->get();
        return view('backend.pages.admin-buyer-order.delivered', compact('deliveredOrders'));
    }
}