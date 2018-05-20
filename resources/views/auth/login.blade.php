@extends('slayout.basic')

@section('title','MediHelp')

@section('style')


.formbox{
  width:100%;
  background-color:white;
}

@endsection

@section('main')
<div class="container" style="border:1px solid;width:100%;height:650px;position:relative;background-image:url('images/1.jpg ')">

<div class="page-header " style="margin-top: -20px;">
<h1 class="text-center " style="font-size: 45px;font-family:serif;
      color:red;font-weight:bold">{{ config('app.name', 'laravel') }}</h1>
</div>

{{session('message')}}

<div class="nav">

  <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
      @guest
          <li style="font-size:20px;font-weight:bold;font-family:cursive;"><a href="{{ route('login') }}">Login</a></li>
          <li style="font-size:20px;font-weight:bold;font-family:cursive;"><a href="{{ route('register') }}">Register</a></li>
      @else
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu">
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>
      @endguest
  </ul>

</div>



    <div class="row" style="border:0px solid;" >

        <div class="col-md-8 col-md-offset-2 " style="border:0px solid;width:35%;height:auto;float:right;margin-left:35%">

            <div class="panel panel-default formbox" style="background:rgba(255,255,255, 0.8);">

                <div class="panel-heading" style="color:orange;font-weight:bold">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label" style="color:orange;">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" style="color:orange;">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span style="color:orange;"> Remember Me</span>
                                      
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <span style="color:orange;">Forgot Your Password?</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="map" style="width:600px;height:400px;background:yellow"></div>

<script>
var latitude;
var longitude;
/*start();
function start() {
      navigator.geolocation.getCurrentPosition( geolocationCallback );
      alert("hjkhkj");  
 }
function geolocationCallback( position ){
  
   latitude = position.coords.latitude;
   longitude = position.coords.longitude;
alert(latitude);
alert("hkh");
}
  function myma() {
//var lati;
//var longi;

  //      navigator.geolocation.getCurrentPosition(function(position){
    //      lati=(position.coords.latitude);
      //    alert(position.coords.latitude);
        //  longi=position.coords.longitude;
        //});
alert(longitude);
        var loc={lat:latitude, lng:longitude};
         var map = new google.maps.Map(document.getElementById("map"),{
               center:loc, 
                zoom: 4,
                mapTypeId: google.maps.MapTypeId.ROADMAP
          });
}
*/
 function myma() {

             if(navigator.geolocation)
                { navigator.geolocation.getCurrentPosition( function(position){
                       latitude = position.coords.latitude;
                       longitude = position.coords.longitude;
              alert("latitude");
                      } );
           }

           else alert("khkjhkjh");



alert("hjhkj");
alert(longitude);
        var loc={lat:latitude, lng:longitude};
         var map = new google.maps.Map(document.getElementById("map"),{
               center:loc, 
                zoom: 4,
                mapTypeId: google.maps.MapTypeId.ROADMAP
          });
}



</script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDp8ZXmq2eYiudQxe_qz0NbN5YcNdcUaEc&callback=myma"></script>
@endsection
