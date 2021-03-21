@extends('layout.app')

@section('body')
<h1><a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a></h1>
@endsection