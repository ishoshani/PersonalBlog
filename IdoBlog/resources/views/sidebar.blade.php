<div id="mySideNav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a data-toggle="collapse" href="#Blogscollapse">Blogs</a>
	<div class ="collapse" id="Blogscollapse">
		@foreach($months as $M)
		<a data-toggle="collapse" href="#{{$loop->index}}collapse">{{$M[0]->getDatePublished()}}</a>
		<div class="collapse" id="{{$loop->index}}collapse">
			@foreach($M as $b)
			<a href="{{ url('/blog/'.$b->id) }}">{{$b->title}}</a>
			@endforeach
		</div>
	@endforeach
	</div>
</div>