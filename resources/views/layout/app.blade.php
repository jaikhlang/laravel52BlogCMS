<!DOCTYPE html>
<html>
<head>
	<title>Laravel Blog</title>
	{!! Html::style('assets/css/appstyle.css') !!}
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

		@yield('content')

	</div>
	<!--end of container-->

	{!! Html::script('assets/js/script.js') !!}
	{!! Html::script('assets/js/bootstrap.js') !!}
</body>
</html>
