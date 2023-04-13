<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EmployeeAssignRequest;
use App\Models\SellRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AssignedRequestController extends Controller
{
    public function index()
    {
        $assignedRequests = EmployeeAssignRequest::with('sellRequestInfo', 'employeeInfo')->where('status', '=', 'assigned')->orWhere('status', '=', 'accepted')->orderBy('id', 'DESC')->get();
        return view('backend.pages.employee.assigned-request', compact('assignedRequests'));
    }

    public function accept($id)
    {
        $acceptedRequests = EmployeeAssignRequest::find($id);
        $acceptedRequests->status = 'accepted';
        $acceptedRequests->save();
        Alert::success('Success', 'Request Accepted Successfully');
        return redirect()->back();
    }

    public function pick($id)
    {
        $pickedRequests = EmployeeAssignRequest::find($id);
        $pickedRequests->status = 'picked';
        $pickedRequests->save();

        $sellRequest = SellRequest::find($id);
        $sellRequest->status = 'completed';
        $sellRequest->save();
        Alert::success('Success', 'Request Picked Successfully');
        return redirect()->back();
    }

    //picked    
    public function picked()
    {
        $pickedRequests = EmployeeAssignRequest::with('sellRequestInfo')->where('status', '=', 'picked')->orWhere('status', '=', 'posted')->orderBy('id', 'DESC')->get();
        return view('backend.pages.employee.picked-request', compact('pickedRequests'));
    }
}