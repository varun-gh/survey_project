<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\SurveyQuestion;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SurveyController extends Controller
{
    //
    public function index(Request $request){
        if(Session::has('session_code')){
            $survey_info=Survey::latest()->first();
            $survey_id= $survey_info->id;
            $questions=SurveyQuestion::withAndWhereHas('getOptions',function($q){
            
                $q->where('status',1)->orderBy('position','ASC');
    
            })->with('getCategory')->where('survey_id',$survey_id)->where('status',1)->orderBy('position','ASC')->get();
            
            return view('survey',compact('survey_info','questions'));

        }else{
            return Redirect::to('/user-login');
            
        }
       
       
    }
}
