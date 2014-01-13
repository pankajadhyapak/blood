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
  <div class="banner pages">
    <h1 class="animated bounceInLeft">All Members</h1>
  </div>
  <div class="filter"></div>
  <div class="container">
   <aside class="sidebar col-md-3">
    <ul class="nav nav-list well well-fade">

         <li class="nav-header">
            <h5><i class="icon-book"></i>Blood Groups</h5>
         </li>

         <li><a href="#"> O Positive</a></li>
         <li><a href="#"> O Negitive</a></li>
         <li><a href="#"> A Positive</a></li>
         <li><a href="#"> A Negitive</a></li>
         <li><a href="#"> B Positive</a></li>
         <li><a href="#"> B Negitive</a></li>
         <li><a href="#"> AB Positive</a></li>
          
        
        <li class="nav-header">
            <h5><i class="icon-tags"></i>Major Cities</h5>
        </li>
        <li class=""><a href="https://laracasts.com/tags/4.1">4.1</a></li>
    <li class=""><a href="#">architecture</a></li>
    <li class=""><a href="#">Artisan</a></li>
    <li class=""><a href="#">deployment</a></li>
    <li class=""><a href="#">eloquent</a></li>
    <li class=""><a href="#">free</a></li>
    <li class=""><a href="#">frontend</a></li>
    <li class=""><a href="#">fundamentals</a></li>
    <li class=""><a href="#">patterns</a></li>
    <li class=""><a href="#">performance</a></li>
    <li class=""><a href="#">primers</a></li>
    <li class=""><a href="#">questions</a></li>
    <li class=""><a href="#">security</a></li>
    <li class=""><a href="#">testing</a></li>
    <li class=""><a href="#">workflow</a></li>
    </ul>
  </aside>
  <div class="col-md-9 content">
          @foreach(array_chunk($donors->getCollection()->all(), 3) as $row) 
            <div class="row">
              @foreach($row as $donor)
              <a href="donors/{{$donor->id}}">
                <div class="col-md-4 grid" style="text-align:center;padding:10px">
                  <h3 class="caption">{{ $donor->name }}</h3>
                  <img src="{{ $donor->image }}" class="img-circle"></br>
                  <div class="desc">
                    Blood Group : {{ $donor->bgroup}}
                  </div>
                </a>
                </div>
                @endforeach
            </div>
          <hr>
            @endforeach
            <hr>
            <div class="pull-right">{{$donors->links()}}</div>
    </div>
</div>
@stop