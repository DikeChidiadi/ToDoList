<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    function index() {
        return view('home');
    }

    function login(Request $request) {
        $request->validate([
            'username' => 'required|min:2|alpha', //The 'alpha' rule ensures that the 'username' field contains only alphabetic characters.
            'password' => 'required|confirmed|min:6', //The 'confirmed' rule ensures that the 'password' field matches the 'password_confirmation' field.
        ]);

        session()->put('inputData', [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ]);

        return redirect()->route('home');
    }
    

    function home() {
        $inputData = session('inputData');
        return view('home', $inputData);
    }

    
    function register(Request $request) {
        $request->validate([
            'firstname' => 'required|min:2|alpha',
            'lastname' => 'required|min:2|alpha',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ]);

        session()->put('inputData', [
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'password' => $request->input('password'),
            'password_confirmation' => $request->input('password_confirmation')
        ]);

        return redirect()->route('home');
    }
}
