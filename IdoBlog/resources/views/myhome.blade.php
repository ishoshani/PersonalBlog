@extends('layouts.mylayout')
@section('content')
@include("sidebar",["months"=>$byMonth])
<div id="main">
	<div class="container">
	@foreach($blogs as $blog)
	<div class="panel panel-default" style="border: thin; border-color: #111;" >
		<div class="panel-heading" style="background-color: #40B1A8">
		<h1>{{$blog->title}}</h1>
		<small>{{$blog->month}}-{{$blog->year}}</small>
		</div>
		<div class="panel-body">
			{!! $blog->getBody(true) !!}
		</div>
	</div>

	@endforeach
	</div>
</div>
@endsection