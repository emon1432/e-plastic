<?php

namespace App\Http\Responses;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        $user = User::find(Auth::user()->id);
        if ($user->role_id == 1 || $user->role_id == 2) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('home');
        }
    }
}
