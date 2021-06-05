@extends('layouts.frontend2')
@section('content') 

@include('left-aside')          

            <div class="col-xl-5 offset-xl-3 col-lg-6 offset-lg-1">
                <div class="covid-wrap">



                    <h2>{{$survey_info->title}}</h2>
                                   
                    <div class="covid-test-wrap test-step test-report active">
                        <div class="test-progress">
                            <img src="{{asset('frontend/images/big-green-check.png')}}" class="img-fluid" alt="">
                        </div>
                        <h3>Thank you for submission</h3>
                        <p>{{$survey_info->thanks_message}}</p>
                        
                    
                    </div>
                </div>
            </div>

@endsection

             
                    


          