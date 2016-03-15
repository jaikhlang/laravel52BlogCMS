@extends('layout.app')

@section('content')

<div class="row">

	<div class="appheader">
		<p class="text-center">POST WITH ID {{ $post->id }}</p>
	</div>
	<div class="appheader">
		<p class="text-center">
			{{ Html::linkRoute('posts.index', 'POSTS', null, array('class' => 'btn btn-default btn-xs') ) }}
			{{ Html::linkRoute('posts.edit', 'EDIT', $post->id, array('class' => 'btn btn-primary btn-xs') ) }}
			{{ Html::linkRoute('posts.edit', 'DELETE', $post->id, array('class' => 'btn btn-danger btn-xs') ) }}
		</p>
	</div>

	<div class="col-md-12">

		<article>
			<h4>{{ $post->title }}</h4>
			<p>#<span>{{ $post->created_at->diffForHumans() }}</span> #<span>{{ $post->label }}</span></p>
			<p>{{ $post->body }}</p>
			<a href="#">{{ $post->source }}</a>
		</article>


	</div>
	<!--end of col-md-12-->

</div>

@endsection