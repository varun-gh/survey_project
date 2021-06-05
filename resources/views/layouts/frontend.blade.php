<!DOCTYPE html>
<!-- saved from url=(0059)https://uigaint.com/demo/html/anfra_2/version1/covid-1.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags --> 
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Anfra</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

    <!-- External Css -->
    <link rel="stylesheet" href="{{asset('frontend/css/line-awesome.min.css')}}">

    <!-- Custom Css --> 
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/covid.css')}}">
 
    <!-- Fonts -->
    <link href="{{asset('frontend/css/css2')}}" rel="stylesheet">
     <!-- Fonts -->
     <!-- <link href="{{asset('frontend/css/style_new.css')}}" rel="stylesheet"> -->
     <link href="{{asset('frontend/css/new_design.css')}}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="https://uigaint.com/demo/html/anfra_2/images/favicon.png">
    <link rel="apple-touch-icon" href="https://uigaint.com/demo/html/anfra_2/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://uigaint.com/demo/html/anfra_2/images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://uigaint.com/demo/html/anfra_2/images/icon-114x114.png">
    <style>
      .img-fluid{
        max-height: 200px;
        min-height: 200px;
        text-align: center;  
      }
      .flex-parent {
        display: flex!important;
      }

      .jc-center {
        justify-content: center!important;
      }
      .margin-right {
        margin-left: 120px!important;
      }
      /* medicine start */
      /* .pa-medicine-box {
          text-align: center;
          box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.07);
          border-radius: 10px;
          padding: 30px;
          transition: 0.3s;
          border-bottom: 3px solid transparent;
      }
      .pa-medicine-box p{
        text-align: initial!important;
      }  */
     .content-list li {
      font-size: 14px;
      margin-left: 10px;
      list-style-type: circle!important;
      text-align: initial!important;
      list-style: block!important;
    }
    /* #top-nav{
      background-color: #aee677;
    } */
    .container{
      background-color: #ffffff;
    }
    .test-progress{
      display: none;
    }
    </style>

  </head>
  <body>

    <div class="ugf-covid covid-bg2">
      <div class="container">
        <div class="row" id="top-nav">
          <div class="col">
            <nav class="navbar navbar-expand-md anfra-nav">
              <a class="navbar-brand" href="">
                <img src="{{asset('frontend/images/logo.png')}}" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="las la-bars"></i>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  
                @if(Session::has('session_code'))
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dashboard</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="{{ url('user/health-portfolio')}}" class="nav-link">Health Portfolio</a>
                      </li>
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
                  
                  
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="{{url('user-login')}}">Login</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('contact-us')}}">Contact Us</a>
                  </li>
                 
                </ul>
              </div>
            </nav>
          </div>
        </div>
         @yield('content')
        <div class="row">
          <div class="col">
            <div class="footer">
              <div class="footer-social">
                <a href=""><i class="lab la-facebook-f"></i></a>
                <a href=""><i class="lab la-twitter"></i></a>
                <a href=""><i class="lab la-linkedin-in"></i></a>
                <a href=""><i class="lab la-youtube"></i></a>
                <a href=""><i class="lab la-instagram"></i></a>
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
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('frontend/js/custom.js')}}"></script>
  
    <script>
     function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    </script>
</body></html>