<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('home');
    }

    function register(Request $request) {
        $request->validate([
            'firstname' => 'required|min:3|max:20',
            'lastname' => 'required|min:3|max:20',
            'password' => 'required|min:6',
        ]);

        session()->put('inputData', [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'password' => $request->password,
        ]);
        return redirect('/home')->with('success', 'You have been registered');
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