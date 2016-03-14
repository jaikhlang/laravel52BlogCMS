<!DOCTYPE html>
<html>
<head>
	<title>Laravel Blog</title>
	{!! Html::style('assets/css/style.css') !!}
	{!! Html::style('assets/css/bootstrap.css') !!}
</head>
<body>
	<header>
		<ul class="list-unstyled list-inline">
			<li><a href="#">Home</a></li>
			<li><a href="#">Admin</a></li>
		</ul>
	</header>
	<!--end of header-->

	<div class="container">
		
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route' => 'posts.store', 'method' => 'POST']) !!}
				{{ Form::label('title', 'TITLE:') }}
				{{ Form::text('title', null, array('class' => 'form-control')) }}
				{{ Form::label('label', 'LABEL:') }}
				{{ Form::text('label', null, array('class' => 'form-control')) }}
				{{ Form::label('body', 'BODY:') }}
				{{ Form::textarea('body', null, array('class' => 'form-control')) }}
				{{ Form::label('source', 'SOURCE:') }}
				{{ Form::text('source', null, array('class' => 'form-control')) }}
				<br/>
				{{ Form::submit('Save Post', array('class' => 'btn btn-primary btn-sm')) }}
			{!! Form::close() !!}
		</div>
	</div>

	</div>
	<!--end of container-->

	{!! Html::script('assets/js/script.js') !!}
	{!! Html::script('assets/js/bootstrap.js') !!}
</body>
</html>