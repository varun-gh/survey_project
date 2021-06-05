<?php

namespace App\Http\Controllers;

use App\SurveyQuestion;
use App\SurveyResponse;

use App\Survey;
use App\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class SurveyResponseController extends Controller
{
    //
    public function store(Request $request){
      
        $rules = [
            'survey_id' => 'required',
            'customer_id' => 'required',
            
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors(['failure', $errors]);
           
        } else {

            $total_questions=SurveyQuestion::where('survey_id',$request->survey_id)->where('status',1)->orderBy('position','ASC')->get();
            $survey_id=$request->survey_id;
            $customer_id=$request->customer_id;

            $res=new Response();
            $res->survey_id=$survey_id;
            $res->user_id=$customer_id;
            $res->save();
            foreach($total_questions as $list){
                $option_response=$request->input('ques_'.$list->id);
                $data=new SurveyResponse();
                $data->response_id=$res->id;
                $data->survey_id=$survey_id;
                $data->customer_id=$customer_id;
                $data->ques_id=$list->id;
                if($list->q_type==2){
                    $data->options_id=implode(',',$option_response);
                }else{
                    $data->options_id=$option_response;
                }
              
                $data->save();
              
            }

        }
        
        return Redirect::to('/survey-thanks/'.$survey_id);


    }
    public function thanks($id){
        $survey_info=Survey::find($id);

        return view('thanks',compact('survey_info'));
    }
}
