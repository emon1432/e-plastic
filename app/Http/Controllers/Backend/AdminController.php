<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class AdminController extends Controller
{
    public function index()
    {
        //get all admins from users table       
        $admins = User::where('role_id', 1)->get();
        return view('backend.pages.admin.index', compact('admins'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = new User();
        $user->role_id = 1;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->password = bcrypt($request->password);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('backend/images/profile'), $image_name);
            $user->image = $image_name;
        }

        $user->save();

        //save to admin table
        $admin = new Admin();
        $admin->user_id = $user->id;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->gender = $request->gender;
        $admin->password = bcrypt($request->password);
        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Admin created successfully');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::find($id);
        $user->role_id = 1;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;

        if ($request->hasFile('image')) {
            //unlink image
            if (file_exists('backend/images/profile/' . $user->image) and !empty($user->image)) {
                @unlink('backend/images/profile/' . $user->image);
            }
            $image = $request->file('image');
            $image_name = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('backend/images/profile'), $image_name);
            $user->image = $image_name;
        }

        $user->save();

        //save to admin table
        $admin = Admin::where('user_id', $id)->first();
        $admin->user_id = $user->id;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $user->gender = $request->gender;
        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Admin updated successfully');
    }

    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        //unlink image
        if (file_exists('backend/images/profile/' . $user->image) and !empty($user->image)) {
            @unlink('backend/images/profile/' . $user->image);
        }
        $user->delete();

        //delete from admin table
        $admin = Admin::where('user_id', $id)->first();
        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully');
    }
}
