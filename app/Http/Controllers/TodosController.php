<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    function index() {
        return view('home');
    }

    function todos(Request $request) {
        $request->validate([
            'todo' => 'nullable|max:500',
        ]);

        session()->put('todoData', [
            'todo' => $request->todo,
            'completed' => $request->has('completed') ? true : false,
        ]);

        return redirect()->route('home')->with('success', 'Todo item has been added successfully');
    }

    function home() {
        $todoData = session()->get('todoData', []);
        return view('home', compact('todoData'));
    }

    public function speichern(Request $request) {
        $request->validate([
        'todo' => 'nullable|max:500',
        ]);
    }
}
