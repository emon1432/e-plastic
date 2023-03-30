<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use App\Models\User;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index()
    {
        //get all Buyer from users table       
        $buyers = User::where('role_id', 4)->get();
        return view('backend.pages.buyer.index', compact('buyers'));
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
        $user->role_id = 4;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->password = bcrypt($request->password);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('backend/images/buyers'), $image_name);
            $user->image = $image_name;
        }

        $user->save();

        //save to Buyer table
        $buyer = new Buyer();
        $buyer->user_id = $user->id;
        $buyer->name = $request->name;
        $buyer->email = $request->email;
        $buyer->phone = $request->phone;
        $buyer->address = $request->address;
        $buyer->gender = $request->gender;
        $buyer->password = bcrypt($request->password);
        $buyer->save();

        return redirect()->back()->with('success', 'Buyer created successfully');
    }

    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::find($id);
        $user->role_id = 4;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;

        if ($request->hasFile('image')) {
            //unlink image
            if (file_exists('backend/images/buyers/' . $user->image) and !empty($user->image)) {
                @unlink('backend/images/buyers/' . $user->image);
            }
            $image = $request->file('image');
            $image_name = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('backend/images/buyers'), $image_name);
            $user->image = $image_name;
        }

        $user->save();

        //save to Buyer table
        $buyer = Buyer::where('user_id', $id)->first();
        $buyer->user_id = $user->id;
        $buyer->name = $request->name;
        $buyer->email = $request->email;
        $buyer->phone = $request->phone;
        $buyer->address = $request->address;
        $buyer->gender = $request->gender;
        $buyer->save();
        return redirect()->back()->with('success', 'Buyer updated successfully');
    }
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        //unlink image
        if (file_exists('backend/images/buyers/' . $user->image) and !empty($user->image)) {
            @unlink('backend/images/buyers/' . $user->image);
        }
        $user->delete();

        //delete from Buyer table
        $buyer = Buyer::where('user_id', $id)->first();
        $buyer->delete();

        return redirect()->back()->with('success', 'Buyer deleted successfully');
    }
}
