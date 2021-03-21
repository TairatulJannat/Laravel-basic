@extends('layout.app')

@section('body')
<h1>Edit post</h1>
{!! Form::model($post,['method'=>'PATCH','action'=>['PostController@update',$post->id]])!!}

@csrf
<div class="form-group">
{!! Form:: label('title','Title:') !!}
{!! Form:: text('title',null,['class'=>'form-control']) !!}
{!! Form:: label('content','Content:') !!}
{!! Form:: text('content',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit ('Update Post',['class'=>'btn btn-info']) !!}
</div>
{!!Form::close()!!}



{!! Form::open(['method'=>'DELETE','action'=>['PostController@destroy',$post->id]])!!}

@csrf

<div class="form-group">
{!! Form::submit ('Delete Post',['class'=>'btn btn-denger']) !!}
</div>

{!!Form::close()!!}






@endsection