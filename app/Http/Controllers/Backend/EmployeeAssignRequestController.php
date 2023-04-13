<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EmployeeAssignRequest;
use App\Models\ProductCategory;
use App\Models\SellRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeAssignRequestController extends Controller
{
    public function index()
    {
        $assignedRequests = EmployeeAssignRequest::with('sellRequestInfo')->where('status', '=', 'assigned')->orWhere('status', '=', 'accepted')->orderBy('id', 'DESC')->get();
        return view('backend.pages.admin-sell-request.assigned-request', compact('assignedRequests'));
    }
    public function assigned(Request $request)
    {
        //store to EmployeeAssignRequest table
        $employeeAssignRequest = new EmployeeAssignRequest();
        $employeeAssignRequest->employee_id = $request->employee_id;
        $employeeAssignRequest->sell_request_id = $request->id;
        $employeeAssignRequest->status = 'assigned';
        $employeeAssignRequest->save();

        //update status to SellRequest table
        $sellerSellRequests = SellRequest::find($request->id);
        $sellerSellRequests->status = 'assigned';
        $sellerSellRequests->save();

        Alert::success('Success', 'Request Assigned');
        return redirect()->back();
    }

    //picked
    public function picked()
    {
        $productCategories = ProductCategory::get();
        $pickedRequests = EmployeeAssignRequest::with('sellRequestInfo')->where('status', '=', 'picked')->orWhere('status', '=', 'posted')->orderBy('id', 'DESC')->get();
        return view('backend.pages.admin-sell-request.picked-request', compact('pickedRequests', 'productCategories'));
    }
}