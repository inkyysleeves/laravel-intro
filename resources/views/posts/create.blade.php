@extends('layouts.app')
@section('content')
<h1>Create Post</h1>
{{Form::open(array('action' => 'PostsController@store','method' => 'post'))}}
<div>
    {{Form::label('myTitle', 'This is the title')}}
    {{Form::text('myTitle')}}
</div>
<div>
    {{Form::label('body', 'Body of the post')}}
    {{Form::textArea('body')}}
</div>
{{Form::submit('Submit')}}
{{Form::close()}}
@endsection