<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller

{
    public function index()
    {
        return view('index');
    }

    public function store() 
    {

        return redirect('index');
    }
}
