<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
    $animals = Animal::all();
    return view("welcome", compact("animals"));
    }

    public function create(){
        return view("pages.createAnimal");
    }

    public function store(Request $request){
        $store = new Animal;
        $store->genre = $request->genre;
        $store->age = $request->age;
        $store->save();
        return redirect()->back();
    }

    public function show($id){
        $show = Animal::find($id);
        return view("pages.showAnimal", compact("show"));
    }

    public function edit($id){
        $edit = Animal::find($id);
        return view("pages.editAnimal", compact("edit"));
    }

    public function update(Request $request, $id){
        $update = Animal::find($id);
        $update->genre = $request->genre;
        $update->age = $request->age;
        $update->save();
        return redirect('/');
    }

    public function destroy($id){
    $destroy = Animal::find($id);
    $destroy->delete();
    return redirect("/");
    }

}
