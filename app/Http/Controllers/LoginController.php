<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index() {
        return view('home');
    }

    function submit(Request $request) {
        $request->validate([
            'username' => 'required|min:2|alpha', //The 'alpha' rule ensures that the 'username' field contains only alphabetic characters.
            'password' => 'required|confirmed|min:6', //The 'confirmed' rule ensures that the 'password' field matches the 'password_confirmation' field.
            'password_confirmation' => 'required'
        ]);

    session()->put('inputData', [
        'username' => $request->input('username'),
        'password' => $request->input('password')
        ]);

    return redirect('/home');
    }
}
