@extends('layouts.default')

@section('on-page-style')
@parent
	<style type="text/css">
	</style>
@stop

@section('on-page-script')
@parent
	<script type="text/javascript">
	</script>
@stop

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Welcome To<br />Flexible Programming Solutions</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu laoreet odio, et dictum enim. Vivamus gravida pretium tempus. Suspendisse rhoncus sagittis ipsum eget interdum. Donec bibendum rhoncus fermentum. Curabitur ac maximus erat. Nunc placerat lobortis vehicula. Sed ultrices dui id felis tempus, quis scelerisque risus commodo. Integer ut nisl porttitor, accumsan metus facilisis, mattis eros. Cras sed magna eros. Phasellus varius maximus sollicitudin. Nam lorem nisi, ornare in sagittis nec, consequat quis eros. Vestibulum a dolor vitae tellus facilisis tempus id sit amet tortor. Donec ornare nisl ac laoreet congue. Aliquam pulvinar mauris non sem laoreet, at pulvinar nibh fermentum. Etiam semper dui eu lectus porta maximus. Aliquam erat volutpat.</p>
		</div>
		<div class="col-md-4">
			<img src="{{ asset('assets/img/right_photo.png') }}">
		</div>
	</div>
	
@stop
