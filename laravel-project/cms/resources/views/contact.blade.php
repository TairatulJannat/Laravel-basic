@extends('layout.app')

@section('body')
<h1>Contact page</h1>
<h2>This is from contact page</h2>
@if(count($people))
@foreach($people as $person)

<li>{{$person}}</li>

@endforeach

@endif


@stop

@section('footer')
<!-- <script>alert('Hello!!')</script> -->
<h1>contact page footer</h1>

@stop