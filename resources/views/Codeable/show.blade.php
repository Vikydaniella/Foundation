@extends('layouts.layout')

@section('content')

<div class='wrapper foundation-show'>
<h1>Order for {{$pizza->name}}</h1>
<p class='type'>Type - {{$pizza->type}}</p>
<p class='base'>Base - {{$pizza->base}}</p>
</div>
<a href='/pizza' class= 'back'>< - Back to all pizzas</a>


@endsection