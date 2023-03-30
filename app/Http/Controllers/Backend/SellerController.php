<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index()
    {
        //get all seller from users table       
        $sellers = User::where('role_id', 3)->get();
        return view('backend.pages.seller.index', compact('sellers'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = new User();
        $user->role_id = 3;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->password = bcrypt($request->password);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('backend/images/sellers'), $image_name);
            $user->image = $image_name;
        }

        $user->save();

        //save to seller table
        $seller = new Seller();
        $seller->user_id = $user->id;
        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->phone = $request->phone;
        $seller->address = $request->address;
        $seller->gender = $request->gender;
        $seller->password = bcrypt($request->password);
        $seller->save();

        return redirect()->back()->with('success', 'Seller created successfully');
    }

    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::find($id);
        $user->role_id = 3;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;

        if ($request->hasFile('image')) {
            //unlink image
            if (file_exists('backend/images/sellers/' . $user->image) and !empty($user->image)) {
                @unlink('backend/images/sellers/' . $user->image);
            }
            $image = $request->file('image');
            $image_name = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('backend/images/sellers'), $image_name);
            $user->image = $image_name;
        }

        $user->save();

        //save to seller table
        $seller = Seller::where('user_id', $id)->first();
        $seller->user_id = $user->id;
        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->phone = $request->phone;
        $seller->address = $request->address;
        $seller->gender = $request->gender;
        $seller->save();
        return redirect()->back()->with('success', 'Seller updated successfully');
    }
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        //unlink image
        if (file_exists('backend/images/sellers/' . $user->image) and !empty($user->image)) {
            @unlink('backend/images/sellers/' . $user->image);
        }
        $user->delete();

        //delete from seller table
        $seller = Seller::where('user_id', $id)->first();
        $seller->delete();

        return redirect()->back()->with('success', 'Seller deleted successfully');
    }
}
