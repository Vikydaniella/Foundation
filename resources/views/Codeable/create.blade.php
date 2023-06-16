@extends('layouts.app')

@section('content')

<div class='wrapper create-foundation'>
<h1>Register for Codeable</h1>
<form action='/foundation' method='POST'>
@csrf
<br>
<h4>Create a Profile</h4> 
<div class='examplediv'>
  <form action='tables.html'>
    <h6>Bio Data</h6>
    <label for='first_name'> First Name:</label>
    <input type='Text' name='first_name' Placeholder='First Name' value="{{old('first_name')}}">
  </div>
   @error('first_name')
   <p class='text-red-500 text-xs my-1'>{{$message}}</p>
   @enderror
    <br>

<div class='wrapper create-foundation'>
   <label for='last_name'> Last Name:</label>
   <input type='Text' name='last_name' placeholder='Last Name' value="{{old('last_name')}}">
</div>
   @error('last_name')
   <p class='text-red-500 text-xs my-1'>{{$message}}</p>
   @enderror
    <br>

<div class='wrapper create-foundation'>
    <label for='email'> Email:</label>
    <input type='email' name='email' Placeholder='Email' value="{{old('email')}}">
</div>
    @error('email')
   <p class='text-red-500 text-xs my-1'>{{$message}}</p>
   @enderror
    <br>

<div class='wrapper create-foundation'>
    <label for='type'>Choose participant type</label>
    <select name='type'> id='type'
    <option value='athlete'>Athlete</option>
    <option value='unified partner' value="{{old('first_name')}}">Unified Partner</option> 
    </select>
</div>
    @error('type')
   <p class='text-red-500 text-xs my-1'>{{$message}}</p>
   @enderror
 <br>
 <div class='wrapper create-foundation'>
    <H6>What's your Gender</H6>
    <!--Radio Button-->
    <input type='Radio' id='Male'name='gender'>
    <label for='Male'>Male</label><br>
     <input type='Radio' id='Female'name='gender'>
    <label for='Female'>Female</label><br>
     <input type='Radio' id='Other'name='gender'>
    <label for='other' value="{{old('first_name')}}">Other</label> <br>
    </div> 
    @error('gender')
   <p class='text-red-500 text-xs my-1'>{{$message}}</p>
   @enderror
    <br>

    <input type='submit' value='Register'>
    </form>
  </div>

@endsection