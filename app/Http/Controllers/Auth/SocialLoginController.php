<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Socialite;

class SocialLoginController extends Controller
{
    public function redirectToGoogle()
    {
        // Use stateless() to prevent InvalidStateException
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Find or create user
            $user = User::updateOrCreate(
                [
                    'email' => $googleUser->getEmail(),
                ],
                [
                    'name' => $googleUser->getName(),
                    'password' => Hash::make(uniqid()), // dummy password
                    'google_id' => $googleUser->getId(), // optional
                    'avatar' => $googleUser->getAvatar(), // optional profile image
                ]
            );

            // Login user
            Auth::login($user);

            return redirect()->route('dashboard'); // change to your route

        } catch (\Exception $e) {
            // If error, return to login page
            return redirect()->route('login')->with('error', 'Google login failed.');
        }
    }
}
