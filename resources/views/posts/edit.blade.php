@extends('layouts.app')
@section('content')
<h1>Edit content</h1>
{{Form::open(array('action' => ['PostsController@update', $post->id],'method' => 'post'))}}
<div>
    {{Form::label('myTitle', 'This is the title')}}
    {{Form::text('myTitle', $post->title)}}
</div>
<div>
    {{Form::label('body', 'This is the post body')}}
    {{Form::textArea('body', $post->body)}}
</div>
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Submit')}}
{{Form::close()}}
@endsection



<!-- {{ Form::textArea('body', $post->body,['class' => 'form-control']) }} -->