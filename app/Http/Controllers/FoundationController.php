<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foundation; 
use RealRashid\SweetAlert\Facades\Alert;

class FoundationController extends Controller
{ 
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        
       return view('codeable.index', ['registrations' => Foundation::all()]);
        }
        
        public function show($id){
        $registration = Foundation::find($id);

        return view('codeable.show',['registration'=>$registration]);
    } 
    public function create(){
        return view('codeable.create');
    }
   
    public function store(Request $request, Foundation $registration){
        
        $registration = $request -> validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>['required','email'],
        'type'=>'required',
        'gender'=>'required',
        ]);

        $registration['user_id']= auth()->id();
        
        Foundation::create($registration);
        Alert::success('Success', 'Application successful');
        return redirect('/');
    }
    public function gallery(){
        return view('codeable.gallery');
    }
}
