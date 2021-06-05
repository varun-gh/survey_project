@extends('layouts.frontend')
@section('content') 


  <div class="pt70 pb70">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 offset-xl-3 col-lg-6 offset-lg-1">
          <div class="contact-form-wrap">
            @if(session('message'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('message') }}
                  
                </div>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                  <div class="alert alert-danger">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      {{$error}}                      
                  </div>                  
                @endforeach
            @endif
            <?php
              
              $phone='';
              $name='';
              $email='';
              if(session('phone')){
                $phone=session('phone');
                          
              }else{
                $phone='NA';
              }
              if(session('name')){
                $name=session('name');
              }else{
                $name='NA';
              }
              if(session('email')){
                $email=session('email');

              }else{
                $email='NA';
              }
            ?>
            @if (\Session::has('failure'))
              <div class="alert alert-danger">
                <ul>
                <li>{!! \Session::get('failure') !!}</li>
                </ul>
              </div>
            @endif

            <h2>Validate Otp</h2>
            <form action="{{url('/validate-otp')}}" method="post">
            @csrf
            <input type="hidden" name="name" class="form-control" placeholder="Name" value="{{$name}}" >
            <input type="hidden" name="email" class="form-control" placeholder="email" value="{{$email}}" >
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{$phone}}" readonly>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" name="otp" class="form-control" placeholder="Otp">
                     <p>Enter OTP sent on your email/phone</p>
                  </div>
                 
                </div>
                
              </div>
              
              <button class="btn" >Login</button>
            </form>

            <span>Didn’t receive click <a href="{{url('/resend-otp/'.$phone.'/'.$email)}}" ><button>Resend</button></a></span>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- @include('left-aside') -->

<!-- <div class="col-xl-5 offset-xl-3 col-lg-6 offset-lg-1">
  <div class="contact-form-wrap">
      @if(session('message'))
          <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              {{ session('message') }}
            
          </div>
      @endif
      @if ($errors->any())
          @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{$error}}                      
            </div>                  
          @endforeach
      @endif
      <?php
        
        $phone='';
        if(session('phone')){
          $phone=session('phone');
        }
      ?>
      @if (\Session::has('failure'))
        <div class="alert alert-danger">
          <ul>
          <li>{!! \Session::get('failure') !!}</li>
          </ul>
        </div>
      @endif

      <h2>Validate Otp</h2>
      <form action="{{url('/validate-otp')}}" method="post">
      @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{$phone}}" readonly>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="otp" class="form-control" placeholder="Otp">
            </div>
          </div>
          
        </div>
        
        <button class="btn" >Login</button>
      </form>
  </div>
</div> -->
@endsection