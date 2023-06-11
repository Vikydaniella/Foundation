<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foundation; 

class FoundationController extends Controller
{
    public function index(){
        
        $numbers = foundation::all();

        return view('Codeable.index',[
        'numbers'=> $numbers,
        'name'=> request('name'),//query parameters
        'age'=> request('age')
        ]);
    }
    
    public function show($id){
        $Codeable = Foundation::findOrFail($id);

        return view('Codeable.show', ['foundation' => $Codeable]);
    } 
    public function create(){
        return view('Codeable.create');
    }
   
    public function store(){
        $foundation = new Foundation();

        $foundation -> name = request ('name');
        $foundation -> type = request ('type');
        $foundation -> age = request ('age');

        $foundation->save();
    
        return redirect('/')->with('mssg', 'Thanks for registering');
    }
}
