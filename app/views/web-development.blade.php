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
			<h1>Web Development</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p>We program in PHP using the most popular and latest frameworks (Laravel, Zend, Codeigniter, etc..)</p>
			<p>These are our current clients:</p>

			<ul>
			    <li><a href="http://www.stayinbritain.co.uk" target="_blank">www.stayinbritain.co.uk</a></li>
			    <li><a href="http://www.huntingmouse.co.uk" target="_blank">www.huntingmouse.co.uk</a></li>
			    <li><a href="http://www.bank-smart.co.uk" target="_blank">www.bank-smart.co.uk</a></li>
			</ul>

			<p>Well, I did tell you we only have a small number of clients. But they are very happy clients!</p>
		</div>
	</div>

@stop
