<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();
        return view("todo.index", compact('todos'));
    }
    public function add() {
        $todos = Todo::all();
        return view("todo.form", compact('todos'));
    }
    public function edit() {
        return view("todo.form");
    }
    public function store(Request $request) {
        $todo = new Todo();
        $todo->task = $request->get('task');
        $todo->description = $request->get('description');

        $todo->save();
        return redirect("/todo");
    }
}
