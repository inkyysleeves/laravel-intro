@extends('layouts.app')
@section('content')
<h1>The Posts Page</h1>
@if( count($posts)> 0)
@foreach($posts as $post)
<div>
    <h2><a href="{{route('posts.index')}}/{{$post->id}}">{{$post->title}}</a></h2>
</div>

@endforeach
@endif
@endsection













