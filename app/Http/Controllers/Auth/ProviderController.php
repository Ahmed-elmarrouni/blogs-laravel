<?php

// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// use App\Models\User;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Support\Facades\Auth;
// use Laravel\Socialite\Facades\Socialite;

// class ProviderController extends Controller
// {
//     public function redirect($provider)
//     {
//         return Socialite::driver($provider)->redirect();
//     }


//     public function callback($provider): RedirectResponse
//     {
//         $socialUser = Socialite::driver($provider)->user();

//         // If user admin
//         if ($socialUser->email === 'admin@admin.com' && request('password') === 'admin123456') {
//             $user = User::updateOrCreate(
//                 [
//                     'provider_id' => $socialUser->id,
//                     'provider' => $provider,
//                 ],
//                 [
//                     'name' => $socialUser->name,
//                     'email' => $socialUser->email,
//                     'provider_token' => $socialUser->token,
//                 ]
//             );

//             Auth::login($user);

//             return redirect()->route('/admin/admindashboard');
//         }

//         // If not admin 
//         $user = User::updateOrCreate(
//             [
//                 'provider_id' => $socialUser->id,
//                 'provider' => $provider,
//             ],
//             [
//                 'name' => $socialUser->name,
//                 'email' => $socialUser->email,
//                 'provider_token' => $socialUser->token,
//             ]
//         );

//         Auth::login($user);

//         return redirect()->route('/dashboard');
//     }
// }




namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider): RedirectResponse
    {
        $socialUser = Socialite::driver($provider)->user();

        // If user is admin
        if ($socialUser->email === 'admin@admin.com' && request('password') === 'admin123456') {
            $user = User::updateOrCreate(
                [
                    'provider_id' => $socialUser->id,
                    'provider' => $provider,
                ],
                [
                    'name' => $socialUser->name,
                    'email' => $socialUser->email,
                    'provider_token' => $socialUser->token,
                ]
            );

            Auth::login($user);

            return redirect()->route('admin.dashboard');
        }

        // If not admin 
        $user = User::updateOrCreate(
            [
                'provider_id' => $socialUser->id,
                'provider' => $provider,
            ],
            [
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'provider_token' => $socialUser->token,
            ]
        );

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
