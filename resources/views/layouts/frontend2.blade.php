
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Anfra</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend2/css/bootstrap.min.css')}}">

    <!-- External Css -->
    <link rel="stylesheet" href="{{asset('frontend2/css/line-awesome.min.css')}}">

    <!-- Custom Css --> 
    <link rel="stylesheet" type="text/css" href="{{asset('frontend2/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend2/css/covid.css')}}">
 
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend2/images2/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('frontend2/images2/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend2/images2/icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend2/images2/icon-114x114.png')}}">

  
  </head>
  <body>

    <div class="ugf-covid covid-bg">
      <div class="container">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-md anfra-nav">
              <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('frontend2/images2/logo.png')}}" class="main-logo" alt="">
                <img src="{{asset('frontend2/images2/logo-2.png')}}" class="logo-2" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="las la-bars"></i>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                
                  
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact-us')}}">Contact Us</a>
                  </li>

                  @if(Session::has('session_code'))
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dashboard</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="" class="nav-link">Profile</a>
                      </li>
                      <li class="nav-item">
                        <a href="" class="nav-link">History</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                      
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                      </li>
                    </ul>
                  </li>
                  @else
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/user-login')}}">Login</a>
                  </li>
                  @endif

                   
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <div class="pt100">
        <div class="container">
          <div class="row">


            @yield('content')

              </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="footer">
              <div class="footer-social">
                <a href="#"><i class="lab la-facebook-f"></i></a>
                <a href="#"><i class="lab la-twitter"></i></a>
                <a href="#"><i class="lab la-linkedin-in"></i></a>
                <a href="#"><i class="lab la-youtube"></i></a>
                <a href="#"><i class="lab la-instagram"></i></a>
              </div>
              <div class="copyright-text">
                <p>Copyright © 2021 Anfra, All rights reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{asset('frontend2/assets/popper.min.js')}}"></script>
    <script src="{{asset('frontend2/assets/bootstrap.min.js')}}"></script>

    <script src="{{asset('frontend2/assets/custom.js')}}"></script>
  
    <script>
     $(document).ready(function(){
      $( '#login' ).on( 'click', function(e) {
        e.preventDefault();

        var phone = $('#phone').val();
        alert(phone);

        $.ajax() ({
          type: 'POST',
          url: '/send-otp',
          data: {phone:phone},
          dataType: 'json',
          success: function(data){
            alert(data);
          }
        });
      

    });
     });
     setTimeout(function() {
    $('.alert').remove();
      }, 8000); 
    
    </script>
  </body>
</html>
