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
			<p>What do we provide? Well, Flexible Programming Solutions.</p>
			<p>We offer the multi skill set and commitment an agency can provide along with the affordability and personal touch of independent freelancers or permanent staff.</p>
		</div>
		<div class="col-md-4">
			<img src="{{ asset('assets/img/right_photo.png') }}">
		</div>
	</div>
	
@stop
