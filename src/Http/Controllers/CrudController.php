<?php

namespace Sohel\Crud\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use sohel\crud\Models\Crud;

class CrudController extends Controller
{
    public function index(){
        $data = Crud::get();
        return view('crud::index',compact('data'));
    }

    public function create(){
        return view('crud::create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required'
        ]);
        Crud::create($request->all());
        return redirect(route('todo.index'));
    }

    public function edit($id)
    {
        $data = Crud::find($id);
        return view('crud::edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required'
        ]);
        $crud = Crud::find($id);
        $crud->name = $request->name;
        $crud->description = $request->description;
        $crud->save();

        return redirect(route('todo.index'));
    }

    public function destroy($id){
        $crud = Crud::find($id);
        $crud->delete();
        return redirect(route('todo.index'));
    }
}
