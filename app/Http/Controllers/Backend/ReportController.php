<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ProductPurchase;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function sell_report()
    {
        $orders = [];
        return view('backend.pages.report.sell-report', compact('orders'));
    }

    public function sell_reports($day)
    {

        //get all orders by day
        $orders = Order::with('user', 'product', 'category', 'employee')
            ->where('created_at', '>=', Carbon::now()->subDays($day))
            ->where('status', 'delivered')
            ->get();
        // return response()->json($orders);
        return view('backend.pages.report.sell-report', compact('orders'));
    }

    public function date_wise(Request $request)
    {
        $request->validate([
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $orders = Order::with('user', 'product', 'category', 'employee')
            ->whereBetween('created_at', [$start_date, $end_date])
            ->where('status', 'delivered')
            ->get();

        return view('backend.pages.report.sell-report', compact('orders'));
    }

    public function purchase_report()
    {
        $orders = [];
        return view('backend.pages.report.purchase-report', compact('orders'));
    }

    public function purchase_reports($day)
    {

        //get all product purchases by day
        $orders = ProductPurchase::with('category')
            ->where('created_at', '>=', Carbon::now()->subDays($day))
            ->where('status', 'bought')
            ->get();
        // return response()->json($orders);
        return view('backend.pages.report.purchase-report', compact('orders'));
    }

    public function purchase_date_wise(Request $request)
    {
        $request->validate([
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $orders = ProductPurchase::with('category', 'user')
            ->whereBetween('created_at', [$start_date, $end_date])
            ->where('status', 'bought')
            ->get();

        return view('backend.pages.report.purchase-report', compact('orders'));
    }
}
