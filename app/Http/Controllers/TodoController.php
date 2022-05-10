<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }


    public function show(Todo $todo)
    {
        return view('todos.show')->with('todos', $todo);
    }


    public function create()
    {
        return view('todos.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'todoTitle' => 'required|max:255',
            'todoDescription' => 'required',
        ]);

        $todo = new Todo();
        $todo->title = $request->get('todoTitle');
        $todo->description = $request->get('todoDescription');
        $todo->completed = false;
        $todo->save();

        session()->flash('success', 'Todo Created Successfully!');

        return redirect(route('todos.index'));
    }


    public function edit(Todo $todo)
    {
        return view('/todos.edit')->with('todo', $todo);
    }


    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'todoTitle' => 'required|max:255',
            'todoDescription' => 'required',
        ]);

        $todo->title = $request->get('todoTitle');
        $todo->description = $request->get('todoDescription');
        $todo->completed = false;
        $todo->save();

        session()->flash('success', 'Todo Updated Successfully!');

        return redirect(route('todos.index'));
    }


    public function complete(Todo $todo)
    {
        $todo->completed = true;
        $todo->save();

        return redirect(route('todos.index'));
    }


    public function delete(Todo $todo)
    {
        $todo->delete();

        session()->flash('delete', 'Todo Deleted Successfully!');

        return redirect(route('todos.index'));
    }
}
