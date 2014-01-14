@extends('master')

@section('container')
	<style>

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
			color: #d03e44;
		}

		#footer{
			display: none;
		}
	</style>

	<div class="col-md-6 col-md-offset-3" style="text-align: center;margin-top:10%">
  		<h1>oops! The Page You looking For Not Found</h1><br>
		<h1>404 Page Not Found</h1><br>
		<a href="{{URL::to('/')}}">Home Page</a>	

  </div>
@stop
