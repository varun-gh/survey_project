<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Survey;
use App\SurveyQuestion;
use App\SurveyOptions;
use App\Category;
use session;
use \Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\File; 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.home');
    }
    public function surveyList(Request $request){
        
        $survey_list=Survey::orderBy('id','DESC')->get() ;
        return view('backend.surveyList',compact('survey_list'));
    }
    public function addSurvey(Request $request){
        
        try{
            $rules = [
                'title' => 'required',
                'startDate' => 'required',
                'endDate' => 'required',
                
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $errors = $validator->errors();
                return redirect()->back()->withErrors(['failure', $errors]);
               
            } else {
                                              
                $list=new Survey();
                $list->title=$request->title;
                $list->description=$request->description;
                $list->thanks_message=$request->thank_msg;
                $list->start_at=DateTime::createFromFormat('d/m/Y', $request->startDate)->format('Y-m-d');
                $list->end_at=DateTime::createFromFormat('d/m/Y', $request->endDate)->format('Y-m-d');
                $list->save();
                $notification = array(
                    'message' => 'Survey Created successfully!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
               
            }

            

        }catch(\Exception $e){

            return redirect()->back()->withErrors(['failure',$e->getMessage()]);
        }
       
    }
    public function deleteSurvey($id){
        Survey::where('id',$id)->delete();
        $notification = array(
            'message' => 'Survey Deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
    public function statusSurvey($id,$status){

        $data=Survey::find($id);
        $data->status=($status==1)?0:1;
        $data->save();
        $notification = array(
            'message' => 'Survey Status updated successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
    public function editSurvey(Request $request){
        $list=Survey::find($request->id);
        $list->title=$request->title;
        $list->description=$request->description;
        $list->thanks_message=$request->thank_msg;
        $list->start_at=DateTime::createFromFormat('d/m/Y', $request->startDate)->format('Y-m-d');
        $list->end_at=DateTime::createFromFormat('d/m/Y', $request->endDate)->format('Y-m-d');
        $list->save();
        $notification = array(
            'message' => 'Survey Updated successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
    public function questionSurvey($id){
        $survey_list=Survey::where('id',$id)->first() ;
        $questions=SurveyQuestion::where('survey_id',$id)->orderBy('id','DESC')->with('getSurvey')->with('getCategory')->get() ;
        $categories=Category::all();
        // dd($questions);
        return view('backend.surveyQuestions',compact('survey_list','questions','categories'));

    }
    public function surveyQuestions(Request $request){
        $survey_list=Survey::orderBy('id','DESC')->get() ;
        $questions=SurveyQuestion::orderBy('id','DESC')->with('getSurvey')->with('getOptions')->get() ;
        $categories=Category::all();
       
        // dd($questions);
        return view('backend.surveyQuestions',compact('survey_list','questions','categories'));
    }
    public function options($id){
        $questions=SurveyQuestion::where('id',$id)->with('getOptions')->first() ;
        // echo '<pre>';
        // print_r($questions->getOptions);
        // die;
        return view('backend.surveyOptions',compact('questions'));
    }
    public function addQuestion(Request $request){
       
        try{
            $rules = [
                'category_id'=>'required',
                'survey_id' => 'required',
                'question' => 'required',
                'position' => 'required',
                'q_type' => 'required',
                
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                
                $errors = $validator->errors();
                return redirect()->back()->withErrors(['failure', $errors]);
               
            } else {
                // $imageName = time().'.'.$request->file->extension();  
   
                // $request->file->move(public_path('question_images'), $imageName);
        
                $list=new SurveyQuestion();
                $list->survey_id=$request->survey_id;
                $list->category_id=$request->category_id;
                $list->question=$request->question;
                $list->description=$request->description;
                $list->position=$request->position;
                $list->q_type=$request->q_type;
                $list->is_image=$request->is_image;
                $list->save();
                $notification = array(
                    'message' => 'Question Added successfully!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
               
            }

            

        }catch(\Exception $e){

            return redirect()->back()->withErrors(['failure',$e->getMessage()]);
        }
       
    }
    public function editQuestion(Request $request){
        $id=$request->id;
       
     
        $list= SurveyQuestion::updateOrCreate(
            ['id'=>$id],
            ['category_id'=>$request->category_id,'question'=>$request->question,'description'=>$request->description,'position'=>$request->position,'q_type'=>$request->q_type,'is_image'=>$request->is_image]
        );

       
        $notification = array(
            'message' => 'Question Updated successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
    public function questionsOptions(Request $request){
        $survey_list=Survey::orderBy('id','DESC')->get() ;
        $questions=SurveyQuestion::orderBy('id','DESC')->get() ;
        $options=SurveyOptions::orderBy('id','DESC')->get() ;

        return view('backend.questionsOptions',compact('survey_list','questions','options'));
    }
    public function editOptions(Request $request){
       
        SurveyOptions::updateOrCreate(['id'=>$request->id],['option'=>$request->option,"position"=>$request->position,"status"=>$request->status]);
       
        $notification = array(
            'message' => 'Options Updated successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);


    }
    public function addOptions(Request $request){
       
        $survey=$request->survey_id;
        $question=$request->question_id;
        $options=$request->options;
        $status=$request->status;
        $position=$request->positions;
        foreach($options as $key=>$value){
           $list= new SurveyOptions();
           $list->survey_id=$survey;
           $list->ques_id=$question;
           $list->option=$options[$key];
           $list->status= $status[$key];
           $list->position=$position[$key];
           $list->save();
        }
        $notification = array(
            'message' => 'Options Added successfully!',
            'alert-type' => 'success'
        );

        return  $notification;
       
       
    }
    public function deleteOptions($id){
        SurveyOptions::where('id',$id)->delete();
        $notification = array(
            'message' => 'Options Deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);


    }
    public function category(Request $request){
        $categories=Category::all();
        return view('backend.category',compact('categories'));
    }
    public function addCategory(Request $request){
        try{
            $rules = [
                'name' => 'required',
                               
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                
                $errors = $validator->errors();
                return redirect()->back()->withErrors(['failure', $errors]);
               
            } else {
                
                $list=new Category();
                $list->name=$request->name;
                $list->save();
                $notification = array(
                    'message' => 'Category Added successfully!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
               
            }

            

        }catch(\Exception $e){

            return redirect()->back()->withErrors(['failure',$e->getMessage()]);
        }
           
       
    }
    public function editCategory(Request $request){
        Category::updateOrCreate(['id'=>$request->id],['name'=>$request->name]);
        
        $notification = array(
            'message' => 'Category updated successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
       
    }
    public function deleteCategory($id){
        $categories=Category::where('id',$id)->delete();
        $notification = array(
            'message' => 'Category Deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

        
    }
}
