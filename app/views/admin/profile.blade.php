@extends('master')
@section('container')
<style type="text/css">
  .banner{
    height: 200px;
  }
  .banner h1{
    padding-top: 50px;
  }
</style>
@include('pages/page-banner')
  <div class="col-md-9 content">
   <div class="row">
    {{Form::model($donor,['url'=>'donors/'.Auth::user()->id.'','class'=>'col-md-offset-2','method'=>'PATCH'])}}
    	<div class="panel panel-default registration">
            <div class="panel-heading">
                <div class="row">
                    <h1 class="panel-title col-lg-7 col-md-5 col-sm-7">
                         Update Your Profile
                     </h1>
                </div>
            </div>

            <div class="panel-body">
                <fieldset>
                    <div class="form-group row">
                    	{{Form::label('name','Name',['class'=>'col-md-4 control-label'])}}
						<div class="col-md-8">
                        	{{Form::text('name',null,['class'=>'form-control input-md'])}}
                        	{{$errors->first('name','<p class="verror">:message</p>');}}
                        </div>
                    </div>

                     <div class="form-group row">
                    	{{Form::label('email','E-Mail',['class'=>'col-md-4 control-label'])}}
						<div class="col-md-8">
                        	{{Form::email('email',null,['class'=>'form-control input-md'])}}
                        	{{$errors->first('email','<p class="verror">:message</p>');}}
                        </div>
                    </div>

                     <div class="form-group row">
                    	{{Form::label('password','Password',['class'=>'col-md-4 control-label'])}}
						<div class="col-md-8">
                        	{{Form::password('password',['class'=>'form-control input-md'])}}
                        	{{$errors->first('password','<p class="verror">:message</p>');}}
                        </div>
                    </div>
					 <div class="form-group row">
                    	{{Form::label('password_confirmation','Confrim Password',['class'=>'col-md-4 control-label'])}}
						<div class="col-md-8">
                        	{{Form::password('password_confirmation',['class'=>'form-control input-md'])}}
                        	{{$errors->first('password_confirmation','<p class="verror">:message</p>');}}
                        </div>
                    </div>
                    <div class="form-group row">
                    	{{Form::label('bgroup','Blood Group',['class'=>'col-md-4 control-label'])}}
						<div class="col-md-8">
							{{Form::select('bgroup', [
														'a+' => 'A +ve',
							 							'a-' => 'A -ve',
							 							'b+' => 'B +ve',
							 							'b-' => 'B -ve',
							 							'o+' => 'O +ve',
							 							'o-' => 'O -ve',
							 							'ab+' => 'AB +ve'
													]);}}
                        </div>
                    </div>


                </fieldset> 
						</br></br>
                  <fieldset >
                    <div class="form-group row">
                    	{{Form::label('city','City',['class'=>'col-md-4 control-label'])}}
						<div class="col-md-8">
                        	{{Form::text('city',null,['class'=>'form-control input-md'])}}
                        	{{$errors->first('city','<p class="verror">:message</p>');}}
                        </div>
                    </div>
 
                     <div class="form-group row">
                    	{{Form::label('phno','Phone Number',['class'=>'col-md-4 control-label'])}}
						<div class="col-md-8">
                        	{{Form::text('phoneNo',null,['class'=>'form-control input-md'])}}
                        	{{$errors->first('phoneNo','<p class="verror">:message</p>');}}
                        </div>
                    </div>

                     <div class="form-group row">
                    	{{Form::label('bio','About You (optional)',['class'=>'col-md-4 control-label'])}}
						<div class="col-md-8">
                        	{{Form::textarea('bio',null,['class'=>'form-control input-md','rows' =>'5'])}}
                        </div>
                    </div>



                </fieldset> 
            </div> <!-- panel-body -->

            <div class="panel-footer clearfix">
                <div class="pull-left col-md-7 terms">
                    
                </div>

                <div class="pull-right sign-up-buttons">
                    <button class="btn btn-primary" type="submit">Update </button>
                    <a href="login" class="btn">Or Log In</a>
                </div>

                <div class="payment-errors col-md-8 text-danger" style="display:none">
                                    </div>
            </div> <!-- panel-footer -->
        </div> <!-- panel -->
   {{Form::close() }}
</div> <!-- row -->
</div>
</div>
@stop