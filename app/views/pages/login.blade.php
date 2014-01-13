@extends('master')
@section('container')
<style>
  #footer{
    display: none;
  }
  body {
    background: #d03e44 url('http://demo.cactusthemes.com/emerald2/wp-content/uploads/2013/07/Slider-BG-Violet.jpg');
  }
  .loginn{
    margin-top: 6%;
  }
</style>
{{Form::open(array('url'=>'/login'))}}
  <div class="col-md-3 col-md-offset-4 loginn">
  <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <div>
          {{Form::label('email')}}
        {{ Form::text('email',null,['class' => 'form-control'])}}<br/>
        {{Form::label('password')}}
        {{ Form::password('password',['class' => 'form-control'])}}
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
       
      {{ Form::submit('Login ',array('class' => 'btn btn-large btn-primary')) }}
      <a href="#" style="margin-left: 20%;">Forgot Password?</a>
        </form>

      </div>
@stop
