<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller

{
    public function index()
    {
        $Todos = Todo::all();
        
        return view('index', ['todos' => $Todos]);
    }

    public function add()
    {
    return view('add');
    }

    public function create(TodoRequest $request)
    {
    $form = $request->all();
    Todo::create($form);
    return redirect('/');
    }

    public function edit(TodoRequest $request)
    {
    $Todos = Todo::find($request->id);
    return view('edit', ['form' => $Todos]);
    }

    public function update(TodoRequest $request)
    {
    $form = $request->all();
    unset($form['_token']);
    Todo::where($request->id)->update($form);
    return redirect('/');
    }

    public function delete(TodoRequest $request)
    {
    $Todos = Todo::find($request->id);
    return view('delete', ['form' => $Todos]);
    }

    public function remove(TodoRequest $request)
    {
    Todo::find($request->id)->delete();
    return redirect('/');
    }
}
