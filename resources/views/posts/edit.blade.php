@extends('layout.app')
	@section('content')		
	<div class="row">

		<div class="appheader">
			<p class="text-center">MODIFY/EDIT POST {{ $post->id }}</p>
		</div>
		<div class="appheader">
			<p class="text-center">
			{{ Html::linkRoute('posts.index', 'POSTS', null, array('class' => 'btn btn-default btn-xs') ) }}
			{{ Html::linkRoute('posts.show', 'CANCEL', $post->id, array('class' => 'btn btn-danger btn-xs') ) }}
			</p>
		</div>
		<div class="col-md-12">

			{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
				{{ Form::label('title', 'TITLE:') }}
				{{ Form::text('title', null, array('class' => 'form-control')) }}
				{{ Form::label('label', 'LABEL:') }}
				{{ Form::text('label', null, array('class' => 'form-control')) }}
				{{ Form::label('body', 'BODY:') }}
				{{ Form::textarea('body', null, array('class' => 'form-control')) }}
				{{ Form::label('source', 'SOURCE:') }}
				{{ Form::text('source', null, array('class' => 'form-control')) }}
				<br/>
				{{ Form::submit('Save Change', array('class' => 'btn btn-primary btn-sm')) }}
			{!! Form::close() !!}
		</div>
	</div>
	@endsection

