<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/semanticui/semantic.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom/custom.css') }}">
	<title>@yield('title')</title>
</head>
<body>
 @include('master.header.header')
 @yield('content')
<script type="text/javascript" src="{{ asset('js/semanticui/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/semanticui/semantic.min.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.ui .radio').checkbox();
	})
</script>
@yield('additionalJS')
</body>
</html>
