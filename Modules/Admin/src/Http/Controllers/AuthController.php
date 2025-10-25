<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // We'll use the User model for admin login

class AuthController extends Controller
{
    /**
     * Show the admin login form.
     */
    public function showLogin()
    {
        return view('admin::auth.login');
    }

    /**
     * Handle the admin login request.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Try to log in
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Optional: check if user is admin
            if ($user->role !== 'admin') {
                Auth::logout();
                return redirect()->back()->withErrors(['email' => 'Access denied.']);
            }

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    /**
     * Show the registration form for admin.
     */
    public function showRegister()
    {
        return view('admin::auth.register');
    }

    /**
     * Register a new admin user.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create new admin
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin', // Add this column in users table if not exists
        ]);

        Auth::login($user);

        return redirect()->route('admin.dashboard');
    }

    /**
     * Logout the admin user.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'Logged out successfully!');
    }

    /**
     * Show the admin dashboard.
     */
    public function dashboard()
    {
        return view('admin::dashboard.index');
    }
}
