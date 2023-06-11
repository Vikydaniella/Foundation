@extends('layouts.layout')

@section('content')

<div class='ref-center position-ref full-height'>

    <div class='content'>
    <div class='title m-b-md'>
    Seamless4Good
    </div>
    </div>
</div>

<p>{{$tab1}} - {{$tab2}}- {{$tab3}}- {{$tab4}}- {{$tab5}}- {{$tab6}}- {{$tab7}}- {{$tab8}}</p>
@if($tab3 ='Join us')
<p>Join us</p>
@elseif($tab3 = 'Nothing')
<p>Be a Partner</p>
@else($tab3 = 'Someday')
<p>Sponsor</p>
@endif

@unless($tab2 == 'Something')
<p>What we do </p>
@endunless

@for ($i =0; $i < 5; $i++)
<p>The value of $i is {{$i}}</p>
@endfor

@for ($i =0; $i < count($numbers); $i++)
<p>{{$numbers [$i]['type']}} - {{$numbers [$i]['number']}}</p>
@endfor

@php
$csr='Community Social Responsibility';
echo ($csr);
@endphp

@foreach($numbers as $number)
<div>{{$loop-> index}} {{$number['type']}} - {{$number['number']}}</div>
@if($loop-> first)
<span>Cohorts</span>
@endif
@if($loop-> last)
<span>Interns</span>
@endif
@endforeach

<p>{{$name}}</p>
<p>{{$age}}</p>
@endsection           
