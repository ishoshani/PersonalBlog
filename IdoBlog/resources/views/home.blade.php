@extends('layouts.layout')
@section('content')
@include("sidebar",["months"=>$byMonth])
<div id="main">
	@foreach($blogs as $blog)
		<h1>{{$blog->title}}</h1>
			<small>{{$blog->month}}, {{$blog->year}}</small>
			{!! $blog->getBody(true) !!}
	@endforeach
@include('newBlog')
</div>
@endsection