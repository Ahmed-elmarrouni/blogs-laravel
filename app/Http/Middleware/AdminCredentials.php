<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminCredentials
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the provided email and password match admin credentials
        if ($request->email === 'admin@admin.com' && $request->password === 'admin123456') {
            return $next($request);
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials.']);
    }
}
