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

        if ($input['role_id'] == 3) {
            //save to customer table
            $customer = new Seller();
            $customer->name = $input['name'];
            $customer->email = $input['email'];
            $customer->phone = $input['phone'];
            $customer->address = $input['address'];
            $customer->password = Hash::make($input['password']);
            $customer->save();
        } elseif ($input['role_id'] == 4) {
            //save to buyer table
            $customer = new Buyer();
            $customer->name = $input['name'];
            $customer->email = $input['email'];
            $customer->phone = $input['phone'];
            $customer->address = $input['address'];
            $customer->password = Hash::make($input['password']);
            $customer->save();
        }
        return User::create([
            'role_id' => $input['role_id'],
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'address' => $input['address'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
