<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
        $acceptedRequests = SellRequest::where('status', '=', 'accepted')->get();
        return view('backend.pages.admin-sell-request.accepted', compact('acceptedRequests'));
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
    public function reject($id)
    {
        $rejectRequest = SellRequest::find($id);
        $rejectRequest->status = 'rejected';
        $rejectRequest->save();
        Alert::success('Success', 'Request Rejected');
        return redirect()->back();
    }

}