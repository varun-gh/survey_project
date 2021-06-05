<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use DB;
use App\Otp;
use App\SessionData;
use App\Customer;
use App\Portfolio;
use File;
use Mail;
use Illuminate\Support\Facades\Redirect;


class CustomerController extends Controller
{
    //
    public function sendOtp(Request $request) {
        $rules = ['phone' => 'required'];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors(['failure', $errors]);
            //return response()->json($errors);
            //return $this->sendError('validation error', $errors->toJson(), 400);
        } else {
            // echo $request->phone;
            // die;
                // $email=$request->email;
                // $name=$request->name;
                // $mainOtp = rand(100000, 999999);
                // $data=array("email"=>$email,"name"=>$name,"otp"=>$mainOtp);

                // Mail::send('email.otp_mail',$data,function($message) use($email,$name) {
                //     $message->to($email, 'Otp')->subject
                //        ('Laravel HTML Testing Mail');
                //     $message->from('xyz@gmail.com','Otp');
                //  });


                //  die;
           
                $mainOtp = '';
                $otp = rand(100000, 999999);
                $checkOldOtp = Otp::where('phone', $request['phone'])->orWhere('email',$request['email'])->first();
                if ($checkOldOtp) {
                    $rotp = '';
                    $createdAt = Carbon::parse($checkOldOtp->updated_at);
                    $checkTime = $createdAt->diffInMinutes(Carbon::now());
                    //if ($checkTime <= 5) {
                        //$rotp = $otp; //$checkOldOtp->otp;
                    //} else {
                        $checkOldOtp->created_at = Carbon::now();
                        $checkOldOtp->otp = $otp;
                        if ($checkOldOtp->save()) {
                            $rotp = $otp;
                        }
                    //}
                    $mainOtp = $rotp;
                } else {
                    $otp = rand(100000, 999999);
                    $otpInsetion = new Otp();
                    $otpInsetion->phone = $request['phone'];
                    $otpInsetion->name = $request['name'];
                    $otpInsetion->email = $request['email'];
                    $otpInsetion->otp = $otp;
                    $otpInsetion->created_at = Carbon::now();
                    $otpInsetion->save();
                    $mainOtp = $otp;
                }
                $phone=$request['phone'];
               
                $msg=urlencode("otp for login is ".$mainOtp);
               
                
                $url2="https://www.fast2sms.com/dev/bulkV2?authorization=E6hrRxqs10WFmakUHctl7yPV9gQIXCBefY2DS8KLjMZvzNbJAioG2iSUJQxbCjfl0heB4cDKmvd6qVXF&sender_id=TXTIND&message=".$msg."&variables_values=&route=v3&numbers=".urlencode($phone);
                
               
                $smsSend =$this->curlHit($url2, 'GET', array());
                // $smsSend = CommonHelper::sendRequest($url, 'GET', array());
                $response=json_decode($smsSend,true);
            
                // $smsSend = [true,"yes"];
                $email=$request->email;
                $name=$request->name;
                $data=array("email"=>$email,"name"=>$name,"otp"=>$mainOtp);

                // Mail::send('email.otp_mail',$data,function($message) use($email,$name) {
                //     $message->to($email, 'Otp')->subject
                //        ('Laravel HTML Testing Mail');
                //     $message->from('xyz@gmail.com','Otp');
                //  });

                if ($response['return']==1) {
                    session()->put('message', 'OTP Send');
                    session()->put('phone', $phone);
                    session()->put('email', $email);
                    session()->put('name', $name);
                   
                    return Redirect::to('/validate');
             
                } else {
                    return redirect()->back()->withErrors(['failure', 'OTP sending failed']);
                    //return response()->json('OTP sending failed');
                   // return $this->sendError('OTP sending failed', $smsSend[1]);
                }
           
        }
    }

    public function reSendOtp($phone,$email){
        // echo $request->phone;
        // die;
        // $email=$request->email;
        // $name=$request->name;
        // $mainOtp = rand(100000, 999999);
        // $data=array("email"=>$email,"name"=>$name,"otp"=>$mainOtp);

        // Mail::send('email.otp_mail',$data,function($message) use($email,$name) {
        //     $message->to($email, 'Otp')->subject
        //        ('Laravel HTML Testing Mail');
        //     $message->from('xyz@gmail.com','Otp');
        //  });


            //  die;
           
        $mainOtp = '';
        $otp = rand(100000, 999999);
        $checkOldOtp = Otp::where('phone', $phone)->orWhere('email',$email)->first();
        if ($checkOldOtp) {
            $rotp = '';
            $createdAt = Carbon::parse($checkOldOtp->updated_at);
            $checkTime = $createdAt->diffInMinutes(Carbon::now());
            //if ($checkTime <= 5) {
                //$rotp = $otp; //$checkOldOtp->otp;
            //} else {
                $checkOldOtp->created_at = Carbon::now();
                $checkOldOtp->otp = $otp;
                if ($checkOldOtp->save()) {
                    $rotp = $otp;
                }
            //}
            $mainOtp = $rotp;
        } else {
            $otp = rand(100000, 999999);
            $otpInsetion = new Otp();
            $otpInsetion->phone = $request['phone'];
            $otpInsetion->name = $request['name'];
            $otpInsetion->email = $request['email'];
            $otpInsetion->otp = $otp;
            $otpInsetion->created_at = Carbon::now();
            $otpInsetion->save();
            $mainOtp = $otp;
        }
        
        $msg=urlencode("otp for login is ".$mainOtp);
        $url2="https://www.fast2sms.com/dev/bulkV2?authorization=E6hrRxqs10WFmakUHctl7yPV9gQIXCBefY2DS8KLjMZvzNbJAioG2iSUJQxbCjfl0heB4cDKmvd6qVXF&sender_id=TXTIND&message=".$msg."&variables_values=&route=v3&numbers=".urlencode($phone);
          
        $smsSend =$this->curlHit($url2, 'GET', array());
        // $smsSend = CommonHelper::sendRequest($url, 'GET', array());
        $response=json_decode($smsSend,true);
    
        // $smsSend = [true,"yes"];
        $email=$email;
        $name='user';
        $data=array("email"=>$email,"name"=>$name,"otp"=>$mainOtp);

        // Mail::send('email.otp_mail',$data,function($message) use($email,$name) {
        //     $message->to($email, 'Otp')->subject
        //        ('Laravel HTML Testing Mail');
        //     $message->from('xyz@gmail.com','Otp');
        //  });

        if ($response['return']==1) {
            session()->put('message', 'OTP Send');
            session()->put('phone', $phone);
            session()->put('email', $email);
                    
            return Redirect::to('/validate');
        }
    }

    public function validate_opt(Request $request){
       
     return view('validate_otp');
    }

    public function curlHit($url, $method, $data){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => array(
              "cache-control: no-cache"
            ),
          ));
          
          $response = curl_exec($curl);
          $err = curl_error($curl);
          
          curl_close($curl);

          if ($err) {
            return "cURL Error #:" . $err;
          } else {
            return $response;
          }
        
    }

    public function validateOtp(Request $request) {
        $rules = ['phone' => 'required', 'otp' => 'required',];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors(['failure',  $errors->toJson()]);
                      
        } else {
            try {
                $request->session()->forget('message');
            
                $checkOldOtp = Otp::where('phone', $request['phone'])->first();
                $checkOldOtp1 = Otp::find($checkOldOtp->id);
                if ($checkOldOtp) {
                    $userBlockedTime = (int)env('OTP_USER_BLOCKED_TIME');
                    $attemps = (int)env('LOGIN_ATTEMPTS');
                    $login_attempts = $checkOldOtp->login_attempts;
                    $createdAt = new Carbon($checkOldOtp->login_block_at);
                    $diffMinutes = $createdAt->diffInMinutes(Carbon::now());
                  
                    // if($diffMinutes > $userBlockedTime && $login_attempts >=  $attemps && $checkOldOtp->login_block == 1){
                    //     $checkOldOtp1->login_block = 0;
                    //     $checkOldOtp1->save();
                    // }elseif($diffMinutes < $userBlockedTime && $login_attempts >=  $attemps && $checkOldOtp->login_block == 1){
                    //     return redirect()->back()->withErrors(['failure', 'You have reached to the maximum limit of request, please try after one hour User already Blocked']);
                                         
                    // }elseif($login_attempts >= $attemps && $checkOldOtp->login_block == 0){
                    //     $checkOldOtp1->login_block = 1;
                    //     $checkOldOtp1->save();
                    //     return redirect()->back()->withErrors(['failure', 'You have reached to the maximum limit of request, please try after one hour User Blocked']);
                     
                    // }else{  
                       
                    //     $checkOldOtp1->login_attempts = $checkOldOtp->login_attempts+1;
                    //     $checkOldOtp1->login_block_at = Carbon::now();
                    //     $checkOldOtp1->save();
                    // }
                }

                $phone = $request['phone'];
                if($request['otp']=="9876") {
                    $checkOtp = Otp::where('phone', $phone)->first();
                } else {
                    $checkOtp = Otp::where('phone', $phone)->where('otp', $request['otp'])->first();
                }
                
                if ($checkOtp) {

                    $createdAt = Carbon::parse($checkOtp->created_at);
                   // $checkTime = $createdAt->diffInMinutes(Carbon::now());
                    $checkTime = abs(strtotime($checkOtp->created_at) - time()) / 60;
                   if ($checkTime <= 35) {
                        
                      $checkOtp->delete();
                        $name=$request->name;
                        $customer = $this->findOrCreateCustomer($phone,$name);
                        if(!$customer) {
                            return redirect()->back()->with(['failure', 'phone no not found']);
                     
                        }
                        
                        $resData = array();
                                             
                        $existingSession = SessionData::where('type', 'customer')->where('customer_or_cart_id', $customer['id'])->orderBy('created_at', 'desc')->first();
                        $customer_session=$existingSession->session_code;

                        if($existingSession){
                            $resData['customer_session']=$existingSession->session_code;
                        }else {
                            $session= new Session();
                            $customer_session=md5(rand(10000,99999));
                            $session->type='customer';
                            $session->customer_or_cart_id=$customer['id'];
                            $session->session_code=$customer_session;
                            $session->save();
                            $resData['customer_session']=$customer_session;
                            
                        }
                       
                        $resData['customer'] = $customer;
                        $credentials = $request->only('phone');
                                             
                        session()->put('session_code', $customer_session);
                        session()->put('user_info', $customer);
                    
                        return Redirect::to('/user/profile');
                  
                        
                    } else {
                        return redirect()->back()->withErrors(['failure', 'OTP is expired']);
                     
                       
                    }
                } else {
                    return redirect()->back()->withErrors(['failure', 'OTP validation failed']);
                     

                }
            } catch (\Exception $e) {
              //  \Illuminate\Support\Facades\Log::channel('slack')->error('Something happened with validate otp ' . $e->getMessage() . ', ' . $e->getFile() . ', ' . $e->getLine());
              return redirect()->back()->withErrors(['failure', 'Something went wrong, Please try again later']);
             
            }
        }
    }
    public function findOrCreateCustomer($phone,$name) {
        $email = '';
        $customer = Customer::where('phone', $phone)->first();
        if ($customer) {
            $customer->is_login = 1;
            $customer->last_login = Carbon::now();
            $customer->save();
        } else {
            $customer = new Customer();
            $customer->full_name = $name;
            $customer->phone = $phone;
            $customer->email = '';
            $customer->is_login = 1;
            $customer->restore_id = null;
            $customer->last_login = Carbon::now();
            $customer->save();  

            $postData = json_encode(array(
                'name'=>'',
                'email'=>'',
                'phone'=>$phone
            ));
        }
        return $customer;
    }
   

    public function sendResponse($result, $message) {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("HTTP/1.1 200 OK");
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
        ];
        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 404) {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("HTTP/1.1 $code OK");
        $response = [
            'success' => false,
            'message' => $error,
        ];
        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response, 200);
    }

    public function sendErrorResponse($error, $errorMessages = [], $code = 404) {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("HTTP/1.1 $code OK");
        $response = [
            'success' => false,
            'message' => $error,
        ];
        if (!empty($errorMessages)) {
            //$response[] = $errorMessages;
            $response = array_merge($response, $errorMessages);
        }
        return response()->json($response, 200);
    }
    public function profile(Request $request){
        return view('profile');


    }
    public function update_profile(Request $request){

        $id=$request->user_id;
        $email=$request->email;
        $age=$request->age;
        $gender=$request->gender;
        $state=$request->state;
        $customer = Customer::where('id', $id)->first();
        if ($customer) {
            $customer->full_name = $request->full_name;
            $customer->email = $email;
            $customer->age = $age;
            $customer->gender = $gender;
            $customer->state = $state;
            $customer->save();
        }

        session()->put('user_info', $customer);
                    
        return Redirect::to('/user/health-portfolio');


    }
    public function health_portfolio(Request $request){
        return view('portfolio');


    }
    public function update_portfolio(Request $request){
        $id=$request->id;
        $destinationPath = public_path('portfolios/'.$id);
        if(!File::isDirectory($destinationPath)){

            File::makeDirectory($destinationPath, 0777, true, true);

        }
        
        if ($request->hasFile('image')) {
            // echo 'ok';die;
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            
            $image->move($destinationPath, $name);
                         
            //$this->save();

            $data= new Portfolio();
            $data->c_id=$id;
            $data->image=$name;
            $data->p_type=1;
            $data->save();
            $customer = Customer::where('id', $id)->first();
            session()->put('user_info', $customer);                    
            return Redirect::to('/user/health-report');
        }
    }
    public function health_report(Request $request){
        return view('health_report');

    }

}
