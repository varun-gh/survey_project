@extends('layouts.frontend2')
@section('content') 

@include('left-aside')          

            <div class="col-xl-5 offset-xl-3 col-lg-6 offset-lg-1">
              @if (\Session::has('failure'))
                <div class="alert alert-danger">
                  <ul>
                  <li>{!! \Session::get('failure') !!}</li>
                  </ul>
                </div>
              @endif
              <div class="covid-wrap">
                <h2>{{$survey_info->title}}</h2>
               <p>{{$survey_info->description}}</p>
                <form action="{{url('/submit-survey')}}" method="post">
                <input type="hidden" name="survey_id" value="{{$survey_info->id}}">
                @if(Session::has('session_code'))

                <?php $user_infos= session('user_info'); ?>
                <input type="hidden" name="customer_id" value="{{$user_infos->id}}">
                @else
                <input type="hidden" name="customer_id" value="0">
                @endif
                
                @csrf
                       @php  $question_cnt=count($questions); @endphp
                     
                  @if(count($questions)>0)
                    @php $i=1   ; @endphp
                      @foreach($questions as $q_list)
                        @if($i==1)
                          <div class="covid-test-wrap test-step active">
                            <div class="test-progress">
                              <div class="test-progress-step">
                              
                                <span class="step-number">{{$i}}/{{$question_cnt}}</span>
                                <svg>
                                  <circle class="step-{{$i}}" cx="30" cy="30" r="28" stroke-width="4" fill="none" role="slider" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"></circle>
                                </svg>
                              </div>
                            </div>

                            <h3>{{$q_list->question}}</h3>
                            <p>{{$q_list->description}}</p>
                            <div class="step-block">
                                @php $j=1;    @endphp
                              @foreach($q_list->getOptions as $opt)
                                @if($q_list->q_type==1)
                                  <div class="form-group">
                                    <input type="radio" name="ques_{{$q_list->id}}" value="{{$opt->id}}" class="form-control" id="{{$i}}-{{$j}}">
                                    <label for="{{$i}}-{{$j}}">{{$opt->option}}</label>
                                  </div>
                                  @else
                                  <div class="form-group">
                                    <input type="checkbox" name="ques_{{$q_list->id}}[]" value="{{$opt->id}}" class="form-control" id="{{$i}}-{{$j}}">
                                    <label for="{{$i}}-{{$j}}">{{$opt->option}}</label>
                                  </div>

                                @endif
                                @php $j=$j+1;  @endphp
                              @endforeach

                              <a href="" class="button">Next</a>
                            </div>
                          </div>
                        @else

                          <div class="covid-test-wrap test-step">
                            <div class="test-progress">
                              <a href="" class="prev-btn"><img src="{{asset('frontend/images/arrow-left-grey.png')}}" alt="">Previous</a>
                              <div class="test-progress-step">
                                <span class="step-number">{{$i}}/{{$question_cnt}}</span>
                                <svg>
                                  <circle class="step-{{$i}}" cx="30" cy="30" r="28" stroke-width="4" fill="none" role="slider" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"></circle>
                                </svg>
                              </div>
                            </div>
                            <h3>{{$q_list->question}}</h3>
                            <p>{{$q_list->description}}</p>
                            <div class="step-block">
                              @php $j=1;    @endphp
                              @foreach($q_list->getOptions as $opt)
                                  @if($q_list->q_type==1)
                                <div class="form-group">
                                <input type="radio" name="ques_{{$q_list->id}}" value="{{$opt->id}}" class="form-control" id="{{$i}}-{{$j}}">
                                <label for="{{$i}}-{{$j}}">{{$opt->option}}</label>
                                </div>
                                  @else
                                  <div class="form-group">
                                    <input type="checkbox" name="ques_{{$q_list->id}}[]" value="{{$opt->id}}" class="form-control" id="{{$i}}-{{$j}}">
                                    <label for="{{$i}}-{{$j}}">{{$opt->option}}</label>
                                  </div>

                                  @endif
                                  @php $j=$j+1;  @endphp
                                @endforeach
                                                               
                              <a href="#" class="button">Next</a>
                            </div>
                          </div>


                        @endif
                        @php $i=$i+1; @endphp
                      @endforeach
                  @endif

                         
                <div class="covid-test-wrap test-step asign-info">
                  <div class="test-progress">
                    <img src="{{asset('frontend/images/result.png')}}" class="img-fluid" alt="">
                  </div>
                  <h3>High risk of infection</h3>
                  <p>Fillup the form below, Your nearest sample collector team contact immediately</p>
                  <div class="step-block">
                                   
                    <button class="btn-success2" type="submit" style="font-size: 1.5rem;font-weight: 700; color: #ffffff;background: #1e85ff;width: 100%;border-radius: 30px;height: 60px;">Submit info</button>
                  </div>
                </div>

             
                </form>
              </div>
@endsection

             
                    


          