@extends('layouts.frontend')
@section('content') 

<div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
            <div class="covid-wrap">
              
                <?php
                      $user_info=session()->get('user_info');
                      $user_id=($user_info)?$user_info['id']:0;
                      $full_name=($user_info)?$user_info['full_name']:'';
                      $email=($user_info)?$user_info['email']:'';
                      $age=($user_info)?$user_info['age']:'';
                      $gender=($user_info)?$user_info['gender']:0;
                      $state_id=($user_info)?$user_info['state']:0;
                      

                  ?>
              <form action="" >
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
                  <h5><strong> YOUR TONGUE SAY ABOUT YOU:</strong></h5>
                    <h5>Your Current Imbalance (Vikruti)</h5>
                    <h5>KAPHA IMBALANCE</h5>
                    <p><strong>Other revelation are :</strong> </p>
                    <ul id="bullet_points" class="content-list" style="text-align: center;margin-left:30px;padding:10px;">
                        <li>Toxin build up in system</li>
                        <li>Malabsorption of essential nutrients</li>
                        <li>Iron deficiency & low hemoglobin</li>
                        <li>Stress in your Spine (Back pain)</li>
                    
                    </ul>

                    <p>Detailed report will be shared at the end of assessment.</p>
                    <!-- <h3>Your state of origin?</h3> -->
                  
                     <button class="button">Continue</button>
                  </div>
                

                </div>
                
                <div class="covid-test-wrap test-step test-report">
                  <div class="test-progress">
                    <img src="{{ asset('frontend/images/big-green-check.png')}}" class="img-fluid" alt="">
                  </div>
                  <h3>STEP-2 Identify your body constitution(Prakriti)</h3>
                  <p>Answer each question considering the period which was healthiest & most lively period of your life </p>
                 
                  <a href="{{url('/survey')}}" class="button-reload">Continue</a>
                </div>
              </form>
            </div>
          </div>
        </div>




@endsection