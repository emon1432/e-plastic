<?php

namespace App\Actions\Fortify;

use App\Models\Admin;
use App\Models\Buyer;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{

    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        $user = User::find($user->id);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->phone = $input['phone'];
        $user->address = $input['address'];
        $user->gender = $input['gender'];

        if (isset($input['photo'])) {
            if ($user->image) {
                $image_path = public_path('backend/images/profile/' . $user->image);
                if (file_exists($image_path)) {
                    @unlink($image_path);
                }
            }
            $image = $input['photo'];
            $name = time() . '_' . rand(0, 9999999) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('backend/images/profile');
            $image->move($destinationPath, $name);
            $user->image = $name;
        }
        $user->save();

        if ($user->role_id == 1) {
            //update admin
            $admin = Admin::where('user_id', $user->id)->first();
            $admin->name = $input['name'];
            $admin->email = $input['email'];
            $admin->phone = $input['phone'];
            $admin->address = $input['address'];
            $admin->gender = $input['gender'];
            $admin->save();
        } elseif ($user->role_id == 2) {
            //update employee
            $employee = Employee::where('user_id', $user->id)->first();
            $employee->name = $input['name'];
            $employee->email = $input['email'];
            $employee->phone = $input['phone'];
            $employee->address = $input['address'];
            $employee->gender = $input['gender'];
            $employee->save();
        } elseif ($user->role_id == 3) {
            //update customer
            $seller = Seller::where('user_id', $user->id)->first();
            $seller->name = $input['name'];
            $seller->email = $input['email'];
            $seller->phone = $input['phone'];
            $seller->address = $input['address'];
            $seller->gender = $input['gender'];
            $seller->save();
        } elseif ($user->role_id = 4) {
            //update buyer
            $buyer = Buyer::where('user_id', $user->id)->first();
            $buyer->name = $input['name'];
            $buyer->email = $input['email'];
            $buyer->phone = $input['phone'];
            $buyer->address = $input['address'];
            $buyer->gender = $input['gender'];
            $buyer->save();
        }
    }


    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
