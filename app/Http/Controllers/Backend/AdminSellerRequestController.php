<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\SellRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSellerRequestController extends Controller
{
    //pending   
    public function pending()
    {
        $pendingRequests = SellRequest::where('status', '=', 'pending')->get();
        return view('backend.pages.admin-sell-request.pending', compact('pendingRequests'));
    }

    public function accepted()
    {
        $employees = Employee::get();
        $acceptedRequests = SellRequest::where('status', '=', 'accepted')->orWhere('status', '=', 'assigned')->get();
        return view('backend.pages.admin-sell-request.accepted', compact('acceptedRequests','employees'));
    }
    public function rejected()
    {
        $rejectedRequests = SellRequest::where('status', '=', 'rejected')->get();
        return view('backend.pages.admin-sell-request.rejected', compact('rejectedRequests'));
    }


    //accept
    public function accept($id)
    {
        $acceptRequest = SellRequest::find($id);
        $acceptRequest->status = 'accepted';
        $acceptRequest->save();
        Alert::success('Success', 'Request Accepted');
        return redirect()->back();
    }

    //reject
    public function reject(Request $request, $id)
    {
        $rejectRequest = SellRequest::find($id);
        $rejectRequest->status = 'rejected';
        $rejectRequest->reject_reason = $request->reject_reason;
        $rejectRequest->save();
        Alert::success('Success', 'Request Rejected');
        return redirect()->back();
    }

}