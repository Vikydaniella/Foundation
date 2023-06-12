@extends('layouts.layout')

@section('content')

<div class='ref-center position-ref full-height'>

<div class='wrapper create-foundation'>
<h1>Join us</h1>
<form action='/foundation' method='POST'>
@csrf
<br>
<div class='examplediv'>
  <form action='tables.html'>
    <label for='name of company/organisation'> Name of Organisation:</label>
    <input type="Text" value='' Placeholder='Name of Company/Organisation'>
   <br> <br>
  
   <label for='name of company representative'> Name of Company Representative:</label>
   <input type='Text' value='' placeholder='Name of Company Representative'>
    <br><br>
   
    <label for='email'> Email:</label>
    <input type='email' value='' Placeholder='Email'>
    <br><br>
    <label for='Choose Area of Interest'>Choose Area of Interest</label>
    <select name='type'> id='type'
    <option value='athlete'>Become a Partner</option>
    <option value='athlete'>Sponsor a Programme</option>
    <option value='unified partner'>Volunteer as Facilitator</option>
    </select>
    <br>
    <input type='submit' value='Register'>
    </form>
  </div>
  
@endsection           
