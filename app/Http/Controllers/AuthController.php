<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function register(CreateUserRequest $request)
    {
        $fields = $request->validated();

        $fields['password'] = Hash::make($fields['password']);

        User::create($fields);

        return redirect('/')->with('success', 'You have successfully registered!');
    }

    public function loginForm()
    {
        return view('auth.login');
    }
    public function login(LoginRequest $request)
    {
        $fields = $request->validated();

        if (auth()->attempt(['email' => $fields['email'], 'password' => $fields['password']])) {
            $request->session()->regenerate();
            return redirect()->route('index')->with('success', 'You have logged in!');
        } else {
            return redirect()->route('auth.login')->with('failure', 'Invalid credentials.');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('index')->with('success', 'You have logged out');
    }
}
