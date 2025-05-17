<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('home');
    }

    function login(Request $request) {
        $request->validate([
            'username' => 'required|min:3|max:20',
            'password' => 'required|min:6',
        ]);

        session()->put('inputData', [
            'username' => $request->username,
            'password' => $request->password,
        ]);

        return redirect('/home')->with('success', 'You have been logged in');
    }

    function home() {
        $inputData = session()->get('inputData');
        
        return view('home', ['inputData' => $inputData]);
    }

    function logout(Request $request) {
        $request->session()->flush();
        return redirect('/')->with('success', 'You have been logged out');
    }
}
