@extends('layouts.frontend')
@section('content') 

<!-- @include('left-aside') -->

      <div class="pt70 pb70">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 offset-xl-3 col-lg-6 offset-lg-1">
              <div class="contact-form-wrap">


                @if (\Session::has('failure'))
                  <div class="alert alert-danger">
                    <ul>
                    <li>{!! \Session::get('failure') !!}</li>
                    </ul>
                  </div>
                @endif
                <?php  $session_id = session()->getId();     ?>
                <h3>Let’s begin with verification</h3>
                <form action="{{url('/send-otp')}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Provide Your Name" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Provide Your Email" required>
                        <p>Please use Email if you are outside India</p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                      </div>
                    </div>
                   
                  </div>
                 
                  <button class="btn">Send Otp</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

            <!-- <div class="col-xl-5 offset-xl-3 col-lg-6 offset-lg-1">
            <div class="contact-form-wrap">
            @if (\Session::has('failure'))
              <div class="alert alert-danger">
                <ul>
                <li>{!! \Session::get('failure') !!}</li>
                </ul>
              </div>
            @endif
                <?php
               //  $session_id = session()->getId();
                ?>
                <h2>Take Assessment</h2>
                <form action="{{url('/send-otp')}}" method="post">
                @csrf
                  <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Provide Your Name" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                      </div>
                    </div>
                   
                  </div>
                 
                  <button class="btn">Send Otp</button>
                </form>
              </div> -->
@endsection