@extends('layout.app')
	@section('content')		
	<div class="row">

		<div class="appheader">
			<p class="text-center">CREATE NEW POST</p>
		</div>
		<div class="col-md-12">
			@include('partial._message')
			
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
	@endsection

