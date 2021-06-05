@extends('layouts.frontend')
@section('content') 
<style>
.file{
  padding:5px 10px;
  background:#00ad2d;
  border:1px solid #00ad2d;
  position:relative;
  color:#fff;
  border-radius:2px;
  text-align:center;
  float:center;
  cursor:pointer;
  width: fit-content;
  margin-right: 40px;
  right: -120px;
  left: 120px;
}
.hide_file {
    position: absolute;
    z-index: 1000;
    opacity: 0;
    cursor: pointer;
    right: 0;
    top: 0;
    height: 100%;
    font-size: 24px;
    width: auto;
    
}
.source_file{
    height: auto;
    width: auto;
    text-align: center;
    border: 1px solid;
    padding: 13px;
    margin: 40px;
    right: -120px;
    left: 120px;
}

</style>

<div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
            <div class="covid-wrap">
              
              <?php
                      $user_info=session()->get('user_info');
                     $user_id=($user_info)?$user_info['id']:0;
                     $full_name=($user_info)?$user_info['full_name']:0;
                      

                  ?>
                 <div class="covid-test-wrap test-step active">
                  <div class="test-progress">
                    <div class="test-progress-step">
                      <span class="step-number">1/7</span>
                      <svg>
                        <circle class="step-1" cx="30" cy="30" r="28" stroke-width="4" fill="none" role="slider" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"></circle>
                      </svg>
                    </div>
                  </div>
                  <!-- <h3>Have you been in close contact with a confirmed case of Covid-19?</h3> -->
                  <div class="step-block">
                    <div class="form-group">
                    <h3>Hello {{$full_name}} </h3>
                    <p>Let’s start to Assess your real self</p>
                    <button class="button">Next</button>
                    </div>
                   
                    
                  </div>
                </div>

                <div class="covid-test-wrap test-step">
                  <div class="test-progress">
                    <a href="" class="prev-btn"><img src="{{asset('frontend/images/arrow-left-grey.png')}}" alt="">Previous</a>
                    <div class="test-progress-step">
                      <span class="step-number">2/7</span>
                      <svg>
                        <circle class="step-2" cx="30" cy="30" r="28" stroke-width="4" fill="none" role="slider" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"></circle>
                      </svg>
                    </div>
                  </div>
                  <form action="{{url('/update-portfolio')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$user_id}}">


                    <h3>Tongue Analysis</h3>
                    <div class="step-block">
                      <p>Our AI will help in Determining accurate view of your inner health</p>
                      <p>For assessment we require your tongue selfie.Please take out your tongue as long as possible like below picture</p>
                      
                      
                      <div class="form-group">

                      <div class="file">
                          Choose Tongue Image
                        <input type="file" class="hide_file" name="image" accept="image/*" required onchange="readURL(this);" capture >
                        </div>
                      
                      </div>
                      <div class="source_file">
                      
                      <img id="blah" src="{{asset('frontend/images/tongue.png')}}" alt="your image" style="right: -120px;left: 120px;max-width:250px;max-height:250px;"/>
                      
                      
                      </div>
          
                  
                    
                      

                      <button class="btn-success2" type="submit" style="font-size: 1.5rem;font-weight: 700; color: #ffffff;background: #1e85ff;width: 100%;border-radius: 30px;height: 60px;">Next</button>
                    
                      </div>

                  </form>

                </div>
                <!-- <div class="covid-test-wrap test-step active">
                  <div class="test-progress">
                    <div class="test-progress-step">
                      <span class="step-number">1/7</span>
                      <svg>
                        <circle class="step-1" cx="30" cy="30" r="28" stroke-width="4" fill="none" role="slider" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"></circle>
                      </svg>
                    </div>
                  </div>
                  
                  <div class="step-block">
                   
                    
                    <div class="form-group">

                    <h3>Hello {{$full_name}} </h3>
                    <p>Let’s start to Assess your real self</p>
                      
                         
                   
                   <button class="button">Continue</button>                  
                  </div>
                

                </div> -->

                <!-- <form action="{{url('/update-portfolio')}}" method="post" enctype="multipart/form-data">
                @csrf
                  <input type="hidden" name="id" value="{{$user_id}}">


                  <div class="covid-test-wrap test-step">
                    <div class="test-progress">
                      <div class="test-progress-step">
                        <span class="step-number">2/7</span>
                        <svg>
                          <circle class="step-2" cx="30" cy="30" r="28" stroke-width="4" fill="none" role="slider" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"></circle>
                        </svg>
                      </div>
                    </div>
             
                  

                  </div>
               
                </form> -->
            </div>
          </div>
        </div>




@endsection