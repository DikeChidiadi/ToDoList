<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    public function index()
    {
        return view('home', [
            'username' => Auth::user()->username,
            'todos' => Auth::user()->todos()->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'todo' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        Auth::user()->todos()->create([
            'todo' => $request->todo,
            'category' => $request->category,
        ]);

        return redirect()->route('home');
    }

    public function delete(Todo $todo)
    {
        dd($todo);
        // Authorization check
        if ($todo->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        $todo->delete();
        return redirect()->route('home');
    }

    public function update(Request $request, Todo $todo)
    {
        // Authorization check
        if ($todo->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        $request->validate(['todo' => 'required|string|max:255']);
        $todo->update(['todo' => $request->todo]);
        return redirect()->route('home');
    }

    public function toggle(Todo $todo)
    {
        // Authorization check
        if ($todo->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        $todo->update(['done' => !$todo->done]);
        return redirect()->route('home');
    }

    // The edit method can be simplified or removed if using inline editing
    public function edit(Todo $todo)
    {
        // Authorization check
        if ($todo->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('home', [
            'username' => Auth::user()->username,
            'todos' => Auth::user()->todos()->get(),
            'editingId' => $todo->id
        ]);
    }
}
