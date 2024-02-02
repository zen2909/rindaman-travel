<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // public function showLoginForm()
    // {
    //     return view('layouts.login_page');
    // }

    
    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('name', $request->name)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            return redirect('/dashboard')->with('message', 'Login successful');
        } else {
            return response()->json(['failed'], 400);
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users', // Menambahkan aturan unique
            'password' => 'required',
        ]);
    
        // Simpan data user ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        if ($user) {
            return response()->json(['success' => true], 201);
        } else {
            return response()->json(['failed'], 400);
        }
    }
}

