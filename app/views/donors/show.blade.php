@extends('master')
@section('container')
<style>
	
	.banner{
		height: 150px;
	}
	.banner h1{
		padding-top: 24px;
	}
</style>
	<div class="banner">
		<h1 class="animated bounceInUp">{{ $donor->name }}</h1>
	</div>
	<div class="filter"></div>
	<div class="container">
	 <div class="row">
  <div class="col-md-6 col-md-offset-2 ">
  	<div class="memberdetails">
  		<div class="col-md-3">
  			<img src="{{$donor->image }}" alt="" class="img-circle">
  		</div>
  		<div class="col-md-9 memdetail">
  			<p>{{Form::label('Name')}} : {{$donor->name}}</p>
			<p>{{Form::label('City')}} : {{$donor->city}}</p>
  			<p>{{Form::label('Gender')}} : {{$donor->gender}}</p>
  			<p>{{Form::label('Blood Group')}} : {{$donor->bgroup}}</p>
  		</div>
  		@if($donor->description)
  		<p>{{Form::label('Description')}}</p>
  			<p style="text-align:justify">{{$donor->description;}} </p>
  		@endif
  		</div>
		<div class="others memberdetails">
			fyughjhjg
			hvghhhhghg
			cyvgubyhnj
		</div>
  </div>

  <div class="col-md-3 memberdetails side">
  	<h4>Send Enquiry</h4>
  	<hr>
  	<?php
  	if(Auth::check()){
  	$loguser=Auth::user()->name;
  }else{$loguser='';}
  ?>
  	{{Form::open()}}
		<div class="form-group">
  			{{Form::label('name','Your Name')}}
			{{Form::text('name',$loguser,['class' => 'form-control'])}}
 		 </div>

 		 <div class="form-group">
  			{{Form::label('city','Your City')}}
			{{Form::text('city',null,['class' => 'form-control'])}}
 		 </div>

 		 <!-- <div class="form-group">
  			{{Form::label('Blood Group Required')}}
			{{Form::text('Blood Group Required ',$donor->bgroup,['class' => 'form-control'])}}
 		 </div> -->


 		 <div class="form-group">
  			{{Form::label('email','Your Email')}}
			{{Form::text('email',null,['class' => 'form-control'])}}
 		 </div>
 		 <div class="form-group">
  			{{Form::label('no','Your Number')}}
			{{Form::text('no',null,['class' => 'form-control'])}}
 		 </div>

 		 <div class="form-group">
  			{{Form::label('msg','Message(optional)')}}
			{{Form::textarea('msg',null,['class' => 'form-control','rows'=>'2'])}}
 		 </div>

 		 {{Form::submit('Send Enquirey',['class' => 'btn btn-primary'])}}
 		&nbsp;&nbsp; {{Form::label('copy','Send Copy')}} {{Form::checkbox('copy','copy')}}
	{{ Form::close()}}  		
  </div>
</div>
    </div>
</div>
@stop