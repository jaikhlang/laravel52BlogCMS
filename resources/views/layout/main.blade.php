<!--
|This main.blade.php is only for frontend layout/template.
-->

@include('layout._header')
<!--include header-->

@include('layout._nav')
<!--include navigation-->

@yield('content')
<!--yield content section-->

@include('partial._modal')

<!--include sidebar-->

@include('layout._quicklink')
<!--include quicklinks-->

@include('layout._footer')
<!--include footer-->