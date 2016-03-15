@extends('layout.app')

@section('content')

<div class="row">

	<div class="appheader">
		<p class="text-center">INDEX OF BLOG POSTS</p>
	</div>

	<div class="col-md-12">

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
					<td><a href="#" class="btn btn-default btn-xs">View</a> <a href="#" class="btn btn-default btn-xs">Edit</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
	</div>

</div>

@endsection