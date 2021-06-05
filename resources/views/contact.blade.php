@extends('layouts.frontend')
@section('content') 

<div class="pt70 pb70">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <div class="contact-form-wrap">
              <h2>We’re Here to Help You</h2>
                <p>We always want to hear from you! Let us know how we can best help you and we'll do our very best.</p>
                <form action="{{url('/send-enquiry')}}" method="post">
                @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full name">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email address">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Tell us a few words"></textarea>
                  </div>
                  <button class="btn">Send Your Message</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pb30">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="contact-block">
                <div class="contact-info">
                  <div class="icon">
                    <img src="{{asset('frontend/images/icon-1.png')}}" class="img-fluid2" alt="">
                  </div>
                  <h4>Anfra HQ</h4>
                  <p>Anfra Inc, 06 Highley St,  Victoria, Germany</p>
                </div>
                <div class="contact-info">
                  <div class="icon">
                    <img src="{{asset('frontend/images/icon-2.png')}}" class="img-fluid2" alt="">
                  </div>
                  <h4>Call Us</h4>
                  <ul>
                    <li>Mobile:  (+61) - 1990 - 6886</li>
                    <li>Hotline:  1800 - 1102</li>
                  </ul>
                </div>
                <div class="contact-info">
                  <div class="icon">
                    <img src="{{asset('frontend/images/icon-3.png')}}" class="img-fluid2" alt="">
                  </div>
                  <h4>Mail Us</h4>
                  <ul>
                    <li>Info:  ask@domain.com</li>
                    <li>Support:  wearehere@domain.com</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




<!-- @include('left-aside') -->
  <!-- <div class="col-xl-5 offset-xl-3 col-lg-6 offset-lg-1">
              
                
      <div class="pt70 pb70">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <div class="contact-form-wrap">
                <h2>We’re Here to Help You</h2>
                <p>We always want to hear from you! Let us know how we can best help you and we'll do our very best.</p>
                <form action="{{url('/send-enquiry')}}" method="post">
                @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full name">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email address">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Tell us a few words"></textarea>
                  </div>
                  <button class="btn">Send Your Message</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pb30">
        <div class="container">
          <div class="row">
        
            <div class="col-md-12">
              <div class="contact-block">
                <div class="contact-info">
                  <div class="icon">
                    <img src="images/contact/icon-1.png" class="img-fluid" alt="">
                  </div>
                  <h4>Anfra HQ</h4>
                  <p>Anfra Inc, 06 Highley St,  Victoria, Germany</p>
                </div>
                <div class="contact-info">
                  <div class="icon">
                    <img src="images/contact/icon-2.png" class="img-fluid" alt="">
                  </div>
                  <h4>Call Us</h4>
                  <ul>
                    <li>Mobile:  (+61) - 1990 - 6886</li>
                    <li>Hotline:  1800 - 1102</li>
                  </ul>
                </div>
                <div class="contact-info">
                  <div class="icon">
                    <img src="images/contact/icon-3.png" class="img-fluid" alt="">
                  </div>
                  <h4>Mail Us</h4>
                  <ul>
                    <li>Info:  <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82e3f1e9c2e6edefe3ebecace1edef">[email&#160;protected]</a></li>
                    <li>Support:  <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5423313526313c31263114303b39353d3a7a373b39">[email&#160;protected]</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>      -->
@endsection