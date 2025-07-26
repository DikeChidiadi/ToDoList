<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $todos = session('todos', []);
        $username = session('username', 'User'); // <-- FIXED: get from session
        return view('home', compact('todos', 'username'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'todo' => 'required|string|max:255',
        ]);

        $todos = session('todos', []);
        $todos[] = ['todo' => $request->todo];
        session(['todos' => $todos]);

        return redirect()->route('home');
    }

    public function delete($id)
    {
        $todos = session('todos', []);
        unset($todos[$id]);
        session(['todos' => array_values($todos)]);
        return redirect()->route('home');
    }
}
