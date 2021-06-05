@extends('layouts.frontend')
@section('content') 

<div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
            <div class="covid-wrap">
              <!-- <h2>Manage Your Profile</h2> -->
                <?php
                      $user_info=session()->get('user_info');
                      $user_id=($user_info)?$user_info['id']:0;
                      $full_name=($user_info)?$user_info['full_name']:'';
                      $email=($user_info)?$user_info['email']:'';
                      $age=($user_info)?$user_info['age']:'';
                      $gender=($user_info)?$user_info['gender']:0;
                      $state_id=($user_info)?$user_info['state']:0;
                      

                  ?>
              <form action="{{url('update-profile')}}" method="post">
               @csrf
               <input type="hidden" name="user_id" value="{{$user_id}}">
                <div class="covid-test-wrap test-step active">
                  <div class="test-progress">
                    <div class="test-progress-step">
                      <span class="step-number">1/1</span>
                      <svg>
                        <circle class="step-1" cx="30" cy="30" r="28" stroke-width="4" fill="none" role="slider" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"></circle>
                      </svg>
                    </div>
                  </div>
                 
                  <div class="step-block">
                    <div class="form-group">
                      <h4>What is your good name?</h4>
                      <input type="text" name="full_name" class="form-control" placeholder="" value="{{$full_name}}">
                    </div>

                    <div class="form-group">
                      <h4>What is your Email Id?</h4>
                      <input type="text" name="email" class="form-control" placeholder="" value="{{$email}}">
                    </div>

                   
                  
                 
                    <div class="form-group">
                      <h4>How young are you?</h4>
                      <input type="text" name="age" placeholder="Age"  placeholder="" class="form-control" value="{{$age}}" id="five">
                      
                    </div>


                    <!-- <h3>What is your gender</h3> -->
                  
                  
                    <div class="form-group">
                        <h4>What is your gender?</h4>
                        <select name="gender" class="form-control" placeholder="">
                            <option value="0" @if($gender=='0') selected @endif>Select Gender</option>
                            <option value="1" @if($gender=='1') selected @endif >Male</option>
                            <option value="2" @if($gender=='2') selected @endif>Female</option>
                            <option value="3" @if($gender=='3') selected @endif>Others</option>
                        
                        </select>
                      
                    </div>
                    <!-- <h3>Your state of origin?</h3> -->
                    <div class="form-group">
                        <h4>Your State of Origin?</h4>
                        
                        <select name="state" class="form-control">
                        <option value="0" @if($state_id===0) selected @endif> Select State</option>
                        <?php    $states= \App\State::where('status',1)->get();                   ?>
                        @if(!empty($states))
                            @foreach($states as $state)
                                <option value="{{$state->id}}" @if($state_id===$state->id) selected @endif>{{$state->name}}</option>
                            @endforeach
                        @endif
                        </select>
                        <p>(Select which state you belong not where you are living currently)</p>
                    
                    </div>
                    <button class="btn-success2" type="submit" style="font-size: 1.5rem;font-weight: 700; color: #ffffff;background: #1e85ff;width: 100%;border-radius: 30px;height: 60px;">Next</button>
                    <!-- <button class="button">Submit info</button> -->
                  </div>
                

                </div>
                
                <div class="covid-test-wrap test-step test-report">
                  <div class="test-progress">
                    <img src="{{ asset('frontend/images/big-green-check.png')}}" class="img-fluid" alt="">
                  </div>
                  <h3>Thank you for updating your profile</h3>
                  <p>Let’s start to Assess your real self </p>
                 
                  <a href="" class="button-reload">Back to main demo</a>
                </div>
              </form>
            </div>
          </div>
        </div>




@endsection