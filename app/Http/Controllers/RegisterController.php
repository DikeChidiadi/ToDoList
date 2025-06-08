<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $todos = session('todos', []);
        $username = session('$username', 'User'); // Or fetch from auth/session if available
        return view('home', compact('todos', 'username'));
    }

    public function register(Request $request)
    {
        // Validate the username input
        $request->validate([
            'username' => 'required|string|max:255',
        ]);

        // Store username in session
        session(['username' => $request->username]);

        // Redirect to home
        return redirect()->route('home');
    }
}