@extends('layouts.app')

@section('content')
<div class='wrapper foundation-show'>
<h2>A Registered Candidate</h2>
<p class='first_name'>first_name - {{$registration->first_name}}</p>
<p class='last_name'>last_name - {{$registration->last_name}}</p>
<p class='email'>email - {{$registration->email}}</p>
<p class='type'>type - {{$registration->type}}</p>
<p class='gender'>gender - {{$registration->gender}}</p>
</div>
@endsection
