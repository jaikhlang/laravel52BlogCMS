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
			<li><a href="{{ url('admin') }}">Dashboard</a></li>
			<!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li><a href="#">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>   
            @endif
		</ul>
	</header>
	<!--end of header-->

	<div class="container">

		<ul class="list-unstyled list-inline">
		  <li><a href=" {{url('posts')}} ">Posts</a></li>
		  <li><a href=" {{url('posts/create')}} ">New Post</a></li>
		</ul>

		@yield('content')

	</div>
	<!--end of container-->

	{!! Html::script('assets/js/script.js') !!}
	{!! Html::script('assets/js/bootstrap.js') !!}
</body>
</html>
