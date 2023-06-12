@extends('layouts.layout')

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
    <input type='Text' name='first_name' Placeholder='First Name'>
   <br> <br>
  
   <label for='last_name'> Last Name:</label>
   <input type='Text' name='last_name' placeholder='Last Name'>
    <br><br>
   
    <label for='email'> Email:</label>
    <input type='email' name='email' Placeholder='Email'>
    <br><br>
    <label for='type'>Choose participant type</label>
    <select name='type'> id='type'
    <option value='athlete'>Athlete</option>
    <option value='unified partner'>Unified Partner</option>
    </select>


    <br>
    <H6>What's your Gender</H6>
    <!--Radio Button-->
    <input type='Radio' id='Male'name='gender'>
    <label for='Male'>Male</label><br>
     <input type='Radio' id='Female'name='gender'>
    <label for='Female'>Female</label><br>
     <input type='Radio' id='Other'name='gender'>
    <label for='other'>Other</label><br>
    <br>
    <input type='submit' value='Register'>
    </form>
  </div>

@endsection