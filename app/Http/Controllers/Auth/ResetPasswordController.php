<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = '/home';

    public function showResetForm(Request $request, $token = null)
    {
        return View::make('auth.passwords.reset')->with(
            [
                'token' => $token, 
                'email' => $request->email
            ]
        );
    }
}
