<?php

namespace sohel40b\Crud\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use sohel40b\crud\Models\Crud;
use sohel40b\crud\Http\Controllers\Mode\Request\CrudRequest;

class CrudController extends Controller
{
    public function index(){
        $data = Crud::get();
        return view('crud::index',compact('data'));
    }

    public function create(){
        return view('crud::create');
    }

    public function store(CrudRequest $request){
        Crud::create($request->validated());
        return redirect(route('todo.index'));
    }

    public function edit($id)
    {
        $data = Crud::find($id);
        return view('crud::edit',compact('data'));
    }

    public function update(CrudRequest $request, $id)
    {
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
