<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        //get all employees from users table
        $employees = User::where('role_id', 2)->get();
        return view('backend.pages.employee.index', compact('employees'));
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
        $user->role_id = 2;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->password = bcrypt($request->password);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('backend/images/employees'), $image_name);
            $user->image = $image_name;
        }

        $user->save();

        //save to employees table
        $employee = new Employee();
        $employee->user_id = $user->id;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->gender = $request->gender;
        $employee->password = bcrypt($request->password);
        $employee->save();

        return redirect()->back()->with('success', 'Employee created successfully');
    }

    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::find($id);
        $user->role_id = 2;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;

        if ($request->hasFile('image')) {
            //unlink image
            if (file_exists('backend/images/employees/' . $user->image) and !empty($user->image)) {
                @unlink('backend/images/profile/' . $user->image);
            }
            $image = $request->file('image');
            $image_name = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('backend/images/employees'), $image_name);
            $user->image = $image_name;
        }

        $user->save();

        //save to employees table
        $employee = Employee::where('user_id', $id)->first();
        $employee->user_id = $user->id;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->gender = $request->gender;
        $employee->save();

        return redirect()->back()->with('success', 'Employee updated successfully');
    }
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        //unlink image
        if (file_exists('backend/images/employees/' . $user->image) and !empty($user->image)) {
            @unlink('backend/images/employees/' . $user->image);
        }
        $user->delete();

        //delete from employees table
        $employee = Employee::where('user_id', $id)->first();
        $employee->delete();

        return redirect()->back()->with('success', 'Employee deleted successfully');
    }
}
