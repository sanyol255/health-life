<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
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
    }
}
