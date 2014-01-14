
<!DOCTYPE html>
<html>
  <head>
    <title>BBWYF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css & Javascripts -->
    {{ HTML::style('css/bootstrap.css');}}
    {{ HTML::style('css/common.css');}}
    {{ HTML::script('js/jquery.js');}}
    {{ HTML::script('js/bootstrap.js');}}
    {{ HTML::style('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}
    {{ HTML::style('css/animate.css')}}

    <style type="text/css">
      .fa-5x {
        font-size: 150px;
      }
    </style>
  <script>
  $(document).on('keyup', function(e) {
        // if 's' is pressed outside of a form, then search
        if ( ! $(e.target).is('input, textarea')) {
            if (e.keyCode === 83) $('#myModal').modal();
        }
    });
    $(document).ready(function(){
    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
    });  
});
  </script>
  <body>
    <div class="errors">
      @if(Session::get('error'))
        <strong>Error ! </strong>- {{ Session::get('error')}} </div>
        <script type="text/javascript">
            $(".errors").slideDown().css("display", "block").delay(4000).slideUp();
        </script>
     @endif
    </div>

    <div class="success">
      @if(Session::get('success'))
        <strong>Succeess ! </strong>- {{ Session::get('success')}} </div>
        <script type="text/javascript">
                  $(".success").slideDown().css("display", "block").delay(4000).slideUp();
        </script>
     @endif
    </div>
<div class="navbar navbar-inverse navbar-static" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color:#fff" href="{{URL::to('')}}"><i class="fa fa-plus-circle"></i> BBWYF</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="">Home</a></li>
            <li><a class="{{set_active('donors'); }}"href="{{URL::route('donors.index')}}">All Donors</a></li>
            
           <li class="dropdown">
              <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Blood Group <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">A Positive</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">A Negitive</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">B Positive</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">B Negitive</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">O Positive</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">O Negitive</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">AB Positive</a></li>
              </ul>
            </li>

          </ul>
         
           <ul class="nav navbar-nav navbar-right">
             @if(Auth::check())
               <img src="//www.gravatar.com/avatar/{{md5(Auth::user()->email)}}" class="nav-gravatar" alt="pankajadhyapak"> 
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name; }}<b class="caret"></b></a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li class="">
                                <a href="profile">
                                    <i class="fa fa-user"></i> Profile
                                </a>
                            </li>

                            <li class="">
                                <a href="setting">
                                    <i class="fa fa-gear"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="messages">


                                    <i class="fa fa-comment"></i> Requests <span class="badge pull-right">{{ msg_count(Auth::user()->id) }}</span>
                                </a>
                            </li>
                           
                            <li>
                                <a href="logout">
                                    <i class="fa fa-sign-out"></i> Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                  @else
                    <li><a style="color:#fff;" href="{{URL::to('/login')}}"><i class="fa fa-sign-in"></i> Login</a></li> 
                    <li><a style="color:#fff;" href="{{URL::to('/join')}}"><i class="fa fa-users"></i> Register</a></li>

                  @endif
            </ul>
            
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
		
		 @yield('container')
		
	
  <div id="footer">
      <div class="container">
        <ul class="footer-links pull-left">
          <li>&copy 2013 All Rights Reserved.</li>
          <li><a href="about">About</a></li>
          <li class="muted">|</li>
          <li><a href="faqs">Faq's</a></li>
          <li class="muted">|</li>
          <li><a href="contact">Contact</a></li>
          <li class="muted">|</li>
          <li><a href="feed-back">Feed Back</a></li>
        </ul>
             <span class="pull-right" style="margin: 10px 0;"> Powered By <a href="http://w3effects.com">W3effects</a></span>

      </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"> Search </h4>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="col-xs-3">
             <input type="text" class="form-control" placeholder="Donors Name">

          </div>
          <div>
          <input type="button" class="btn btn-primary" value="Search ">
        </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
</html>
