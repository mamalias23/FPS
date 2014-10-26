<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Flexible Programming Solutions</title>
	@include('layouts.partials.styles')

	@section('on-page-style')
	<!-- on page style -->
	@show
</head>
<body>
	<div class="container">
		@include('layouts.partials.header')

		<div class="content">
			@yield('content')
		</div>

		@include('layouts.partials.footer')
	</div>

	@include('layouts.partials.scripts')

	@section('on-page-script')
	<!-- on page script -->
	@show
</body>
</html>
