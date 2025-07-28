<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $todos = session('todos', []);
        $username = session('username', 'User');
        return view('home', compact('todos', 'username'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'todo' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        $todos = session('todos', []);
        $todos[] = [
            'todo' => $request->todo,
            'category' => $request->category,
            'done' => false
        ];
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

    public function edit($id)
    {
        $todos = session('todos', []);
        $username = session('username', 'User');
        return view('home', [
            'todos' => $todos,
            'username' => $username,
            'editingId' => $id
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'todo' => 'required|string|max:255',
        ]);
        $todos = session('todos', []);
        if (isset($todos[$id])) {
            $todos[$id]['todo'] = $request->todo;
            session(['todos' => $todos]);
        }
        return redirect()->route('home');
    }

    public function toggle($id)
    {
        $todos = session('todos', []);
        if (isset($todos[$id])) {
            $todos[$id]['done'] = !$todos[$id]['done'];
            session(['todos' => $todos]);
        }
        return redirect()->route('home');
    }
}
