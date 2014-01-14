@extends('master')
@section('container')
	<div class="banner">
		<h1 class="animated bounceInUp">Blood Bank With You Forever</h1>
		<button onclick="$('#myModal').modal()" class="btn btn-transparent animated bounceInLeft"><i class="fa fa-search"></i> Search Blood</button>
	</div>
	<div class="container">
    <div class="row home-points section hm">
        <div class="col-md-4 col-sm-4 home-box">
            <i class="fa fa-youtube-play fa-5x"></i>
            <h2>Watch</h2>
            <p>
                If you enjoy concise, visual training, then you'll feel right at home here. Exclusive new screencasts will be
                published on the site.
            </p>
        </div>

        <div class="col-md-4 col-sm-4 home-box">
            <i class="fa fa-question fa-5x"></i>
            <h2>Ask</h2>
            <p>
                Once you've finished a lesson, if you still have questions, then ask away! I (and the rest of the community) will do our best to help.
            </p>
        </div>

        <div class="col-md-4 col-sm-4 home-box">
            <i class="fa fa-bullhorn fa-5x"></i>
            <h2>Gather</h2>
            <p>Laravel is growing like wild-fire. Join the Laracasts community, and take your skills to the next level.</p>
        </div>
       </div>

       <div class="tagline">
        	"Needy Hand is Waiting for your Helping Hand"
        </div>

</div>
<div class="testinomals">
	<div class="container">
		<div class="row">
                    <div class="col-md-4 testimonial">
                <div class="avatar col-md-3">
                    <a href="http://laravel.com"><img class="pull-left img-circle" src="/images/reviews/taylor-otwell.jpg"></a>
                </div>

                <div class="testimonial-main col-md-9">
                    <h4 class="media-heading"><a href="http://laravel.com">Taylor Otwell</a></h4>
                    <p class="testimony-body">Laracasts is insane!</p>
                </div>
            </div>
                    <div class="col-md-4 testimonial">
                <div class="avatar col-md-3">
                    <a href="http://heybigname.com/"><img class="pull-left img-circle" src="/images/reviews/shawn-mccool.jpg"></a>
                </div>

                <div class="testimonial-main col-md-9">
                    <h4 class="media-heading"><a href="http://heybigname.com/">Shawn McCool</a></h4>
                    <p class="testimony-body">Laracasts is the shit.</p>
                </div>
            </div>
                    <div class="col-md-4 testimonial">
                <div class="avatar col-md-3">
                    <a href="http://besnappy.com"><img class="pull-left img-circle" src="/img/reviews/ian-landsman.jpg"></a>
                </div>

                <div class="testimonial-main col-md-9">
                    <h4 class="media-heading"><a href="http://besnappy.com">Ian Landsman</a></h4>
                    <p class="testimony-body">Really, Laracasts is totally off the hook. Jeffrey Way is an amazing teacher.</p>
                </div>
            </div>
            </div>
	</div>
</div>
@stop