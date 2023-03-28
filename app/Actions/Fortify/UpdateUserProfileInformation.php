<?php

namespace App\Actions\Fortify;

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
