<div class="panel panel-default">
	<div class="panel-heading">
		<h3>New Blog</h3>
		<small><a href="https://daringfireball.net/projects/markdown/syntax" target="_blank">Markdown Help</a></small>
		</div>
	<div class="panel-body">
		<form method="post" action= {{url('/blog')}} accept-charset="UTF-8">
		{{ csrf_field() }}
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Title" name="title">
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="15" name="body"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</form>
	</div>
</div>