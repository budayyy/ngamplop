<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallbackGoogle()
    {
        $userGoogle = Socialite::driver('google')->stateless()->user();

        $user = User::updateOrCreate([
            'google_id' => $userGoogle->id,
        ], [
            'name' => $userGoogle->name,
            'email' => $userGoogle->email,
            'google_id' => $userGoogle->id,
        ]);

        Auth::login($user);

        return redirect()->intended('dashboard');
    }
}
