<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foundation; 
use RealRashid\SweetAlert\Facades\Alert;

class FoundationController extends Controller
{
    public function index(){ 
       return view('Codeable.index');
        }
        
        public function show($id){
        $Codeable = Foundation::findOrFail($id);

        return view('Codeable.show', ['foundation' => $Codeable]);
    } 
    public function create(){
        return view('Codeable.create');
    }
   
    public function store(Request $request){
        $foundation = new Foundation();

        $foundation->first_name =request('first_name');
        $foundation->last_name =request('last_name');
        $foundation->email =request('email');
        $foundation->type =request('type');
        $foundation->gender =request('gender');

        $foundation->save();
        Alert::success('Success', 'Application successful');
        return redirect('/');
    }
}
