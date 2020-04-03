@extends('layouts.app')
@section('content')
<h1>This is the {{$title}}</h1>
@if ( count($names) > 0 )
<ul>
    @foreach($names as $name)
    <li>{{$name}}</li>
    @endforeach
</ul>
@endif
@endsection