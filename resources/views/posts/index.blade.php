@extends('layout.app')

@section('content')

<div class="row">

	<div class="appheader">
		<p class="text-center">INDEX OF BLOG POSTS</p>
	</div>

	<div class="col-md-12">

		@include('partial._message')
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>TITLE</th>
					<th>LABEL</th>
					<th>TIMESTAMP</th>
					<th>ACTIONS</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)
				<tr>
					<td>{{ $post->id }}</td>
					<td>{{ $post->title }}</td>
					<td>{{ $post->label }}</td>
					<td>{{ $post->created_at }}</td>
					<td>
						{{ Html::linkRoute('posts.show', 'VIEW', $post->id, array('class' => 'btn btn-default btn-xs') ) }}
						<!--a href="#" class="btn btn-default btn-xs">View</a-->
						{{ Html::linkRoute('posts.edit', 'EDIT', $post->id, array('class' => 'btn btn-default btn-xs') ) }}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>

</div>

@endsection