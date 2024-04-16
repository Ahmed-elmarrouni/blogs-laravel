<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
// use Illuminate\Auth\Notifications\ResetPassword;
// use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // ResetPassword::createUrlUsing(function (User $user, string $token) {
        //     return 'https://127.0.0.1/reset-password?token=' . $token;
        // });
        // http://127.0.0.1:8000/forgot-password
        // http://127.0.0.1:8000/
    }
}
