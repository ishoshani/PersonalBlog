<div id="mySideNav" class="sidenav" style="width:  0px;">
	<a data-toggle="collapse" href="#Blogscollapse">Blogs</a>
	<div class ="collapse" id="Blogscollapse">
		@foreach($bMonths as $M)
		<a data-toggle="collapse" href="#b{{$loop->index}}collapse" style="font-size:18px">{{$M[0]->getDatePublished()}}</a>
		<div class="collapse" id="b{{$loop->index}}collapse">
			@foreach($M as $b)
			<a href="{{ url('/blog/'.$b->id) }}" style="font-size:14px">{{$b->title}}</a>
			@endforeach
		</div>
	@endforeach
	</div>
	<a data-toggle="collapse" href="#Projectscollapse">Projects</a>
	<div class ="collapse" id="Projectscollapse">
		@foreach($pMonths as $M)
		<a data-toggle="collapse" href="#p{{$loop->index}}collapse" style="font-size:18px">{{$M[0]->getDatePublished()}}</a>
		<div class="collapse" id="p{{$loop->index}}collapse">
			@foreach($M as $p)
			<a href="{{ url('/projects/'.$p->id) }}" style="font-size:14px">{{$p->title}}</a>
			@endforeach
		</div>
	@endforeach
	</div>
</div>
