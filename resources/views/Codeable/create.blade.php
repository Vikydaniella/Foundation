@extends('layouts.layout')

@section('content')

<div class='wrapper create-foundation'>
<h1>Register for Codeable</h1>
<form action='/foundation' method='POST'>
@csrf
<label for='name'>Your name</label>
<input type='text'> id='name' name='name'>
<label for='Type'>Choose participant type</label>
<select name='type'> id='type'
<option value='athlete'>Athlete</option>
<option value='unified partner'>Unified Partner</option>
</select>
<input type='submit' value='Register'>
</form>
</div>


@endsection