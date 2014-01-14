@extends('master')
@section('container')
<style>
    body {
    background: #d03e44 url('http://demo.cactusthemes.com/emerald2/wp-content/uploads/2013/07/Slider-BG-Violet.jpg');
  }
</style>
	<div class="container wrap">
    <div class="row">
        <div class="col-md-12 content">
            
<div class="row">
    {{Form::open(['url'=>'join','class'=>'col-md-8 col-md-offset-2'])}}
    	<div class="panel panel-default registration">
            <div class="panel-heading">
                <div class="row">
                    <h1 class="panel-title col-lg-7 col-md-5 col-sm-7">
                          Gain access to all videos on the site for $9 a month.
                     </h1>

                    <div class="cc-icons col-lg-5 col-md-4">
                        <img src="/images/icons/credit-card-icons.png">
                    </div>
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
                        	{{Form::text('phno',null,['class'=>'form-control input-md'])}}
                        	{{$errors->first('phno','<p class="verror">:message</p>');}}
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
                    <p>
                        So you want to further your education? Smart choice! Please note that, by signing up, you agree to
                        enter a subscription, until you choose to cancel.
                    </p>
                </div>

                <div class="pull-right sign-up-buttons">
                    <button class="btn btn-primary" type="submit">Sign Up</button>
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
</div>

@stop