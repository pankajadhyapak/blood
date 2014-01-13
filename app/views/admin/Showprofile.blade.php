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
    <h1 class="animated bounceInLeft"> Page</h1>
  </div>
  <div class="filter"></div>
  <div class="container">
   <aside class="sidebar col-md-3">
    <h3>Pages Menu</h3>
    <div class="list-group">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item">About</a>
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>
  </aside>

  <div class="col-md-9 content">
    <p class="cont" style="margin-top: 35px;">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, maxime, excepturi, libero facilis quaerat nam quod earum saepe ipsum modi nesciunt molestias. Accusamus, maiores nesciunt ipsum rerum iusto. Voluptate, id.
    </p>
</div>
</div>
@stop