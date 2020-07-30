<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
    public function index(){


        // $todos=Todo::all();

        return view('todos.index')->with('todos',Todo::all());
    }

    public function show(Todo $todo){
        // dd($todo); 
        return view('todos.show')->with('todos',$todo);
    }


    public function create(){
        return view('todos.create');
    }

    public function store(){
        // dd(request());
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required'
        ]);
        $data=request()->all();

        $todo=new Todo();
        $todo->name=$data['name'];
        $todo->description=$data['description'];
        $todo->completed= false;
        $todo->save();

        session()->flash('success','Todo Create successfully');

        return redirect('todos');

    }


    public function edit(Todo $todo){
        // $todo=Todo::find($todoId);

        return view('todos.edit')->with('todo',$todo);
    }

    public function update(Todo $todo){
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required'
        ]);
        $data=request()->all();

        $todo->name=$data['name'];
        $todo->description=$data['description'];
        $todo->save();
        session()->flash('edit','Todo Update Successfully');

        return redirect('todos');   


    }

    public function delete(Todo $todo){
        $todo->delete();
        session()->flash('delete','Todo Delete Successfully');

        return redirect('todos');
    }

    public function complete(Todo $todo){
        $todo->completed=true;
        $todo->save();
        session()->flash('complete','Todo Completed Successfully');

        return redirect('todos');
    }

    
}

