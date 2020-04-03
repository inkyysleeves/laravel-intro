@extends('layouts.app')
    @section('content')
        <a href="{{route('posts.index')}}">Go Back</a>
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="{{route('posts.index')}}/{{$post->id}}/edit">Edit</a>
                {{ Form::open(array('action' => ['PostsController@destroy', $post->id], 'method' => 'post', 'class' => 'form-group')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete')}}
                {{ Form::close() }}
            @endif
        @endif
@endsection