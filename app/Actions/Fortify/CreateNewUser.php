<?php

namespace App\Actions\Fortify;

use App\Models\Buyer;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        //save to user table
        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->phone = $input['phone'];
        $user->address = $input['address'];
        $user->role_id = $input['role_id'];
        $user->password = Hash::make($input['password']);
        $user->save();

        if ($input['role_id'] == 3) {
            //save to seller table
            $seller = new Seller();
            $seller->name = $input['name'];
            $seller->user_id = $user->id;
            $seller->email = $input['email'];
            $seller->phone = $input['phone'];
            $seller->address = $input['address'];
            $seller->password = Hash::make($input['password']);
            $seller->save();
        } elseif ($input['role_id'] == 4) {
            //save to buyer table
            $buyer = new Buyer();
            $buyer->user_id = $user->id;
            $buyer->name = $input['name'];
            $buyer->email = $input['email'];
            $buyer->phone = $input['phone'];
            $buyer->address = $input['address'];
            $buyer->password = Hash::make($input['password']);
            $buyer->save();
        }
        return User::find($user->id);
    }
}