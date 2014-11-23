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
			<h1>Contact Us</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p>If you would like more information please do not hesitate to get in touch with us.</p>
			<table class="table">
			    <tr>
			        <td valign="top" style="border: 0px; width: 200px">By email:</td>
			        <td valign="top" style="border: 0px"><a href="mailto:enquiries@flexi-pro.co.uk">enquiries@flexi-pro.co.uk</a></td>
			    </tr>
			    <tr>
                    <td valign="top" style="border: 0px">By phone:</td>
                    <td valign="top" style="border: 0px">0778 6115 886</td>
                </tr>
                <tr>
                    <td valign="top" style="border: 0px">By post:</td>
                    <td valign="top" style="border: 0px">173 Station Road,<br>
                        Liss,<br>
                        Hampshire,<br>
                        GU33 7AW</td>
                </tr>
			</table>
		</div>
	</div>

@stop
