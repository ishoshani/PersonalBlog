@extends('layouts.layout')
@section('content')
Hello!
@foreach($blogs as $blog)
<h1>{{$blog->title}}</h1>
{!! $blog->getBody(true) !!}
@endforeach
@include('newBlog')
@endsection