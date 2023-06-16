@extends('layouts.app')

@section('content')

<div class="lg:grid lg:grid-col-2 gap-4 space-y-4 md:space-y-0 mx-4">

<h1>Codeable Registered Candidates</h1>
<table class='w-full table-auto rounded-sm'>
    <tbody>
    @unless(count($registrations)==0)

@foreach($registrations as $registration)
<registration=$registration/>
<table><tr><th>{{$registration->first_name}}</th><th>{{$registration->last_name}}</th><th>{{$registration->email}}</th><th>{{$registration->type}}</th><th>{{$registration->gender}}</th></tr>

@endforeach
@else
<p> No Registration found</p>
@endunless
</tr>
    </tbody>
</table>

</div>

<a href='/foundation/1' class="ml-1 underline"><h3> View A Registered Candidate</h3></a>

@endsection           
