<?php

namespace App\Http\Controllers\Client\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\ResponsesTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Client\CheckPhoneExists;
use App\Http\Requests\Client\CheckPhoneRequest;
use App\Http\Controllers\Driver\Auth\LoginController;
use App\Http\Requests\Client\CheckClientExistsRequest;
use DB;

class UserAuthController extends Controller
{
    use ResponsesTrait;
    public function checkClientExists(CheckClientExistsRequest $request){
        $user = User::where("email" , $request->email)->orWhere("phone" , $request->phone)->first();
        if($user)
            return $this->failed(null, trans('lang.emailorphone'));
        return $this->success();
    }

    public function register(RegisterRequest $request){
        $data=$request->validated();
        $user = User::withTrashed()->where("email" , $request->email)->orWhere("phone" , $request->phone)->first();
        if($user && !is_null($user->deleted_at)){
            $data['deleted_at'] = null ;
            $user->update($data);
        }elseif($user){
            return $this->failed(null, trans('lang.emailorphone'));
        }
        else{
            $user = User::create($data);
        }
        $user->token = $user->createToken('API Token')->accessToken;
        return $this->success($user);
    }

    public function login(LoginRequest $request){
        $data['password']=$request->password;
        if(!filter_var($request->phone, FILTER_VALIDATE_EMAIL))
            $data['phone']=$request->phone;
        else{          
            $data['email']=$request->phone;
        }
           
        if (!auth()->attempt($data)) 
            return $this->failed(null,trans('lang.incorrect_details'));
        
        $user=auth()->user();
        $user->token = $user->createToken('API Token')->accessToken;
        $user->type =1;
        return $this->success($user) ;
    }

    public function logout(Request $request)
    {
        if(auth()->user())
        {
            auth()->user()->update(['device_id'=>null]);
            auth()->user()->token()->revoke();
        }
        return $this->success(null,trans('logout_success')) ;
    }

    public function sendOtpPassword(CheckPhoneExists $request){
        $code   = rand(1111,9999);
        $phone = '+965'.$request->phone;
        $this->sendSMS($phone, "OTP code is: $code" );
        $data['otp_code'] = $code;
        return $this->success($data);
    }

    public function sendOtpRegister(CheckPhoneRequest $request){
        $code   = rand(1111,9999);
        $phone = '+965'.$request->phone;
        // $phone = "+96597266997";
        // return "here";
        $this->sendSMS($phone, "OTP code is: $code" );
        $data['otp_code'] = $code;
        return $this->success($data);
    }
    
    public function sendSMS($phone, $message){
        $curl = curl_init();
        $obj=json_encode(["src"=> "+14152225555",
            "dst"=> $phone,
            "text"=> $message,
            "type"=> "sms",
            "url"=> "https://foo.com/sms status",
            "method"=> "POST",
            "log"=> "true",
            "trackable"=> false
        ]);
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.plivo.com/v1/Account/MAZGY3ZJC0OTQXNTJMYJ/Message/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>$obj,
          CURLOPT_HTTPHEADER => array(
            'Authorization: Basic TUFaR1kzWkpDME9UUVhOVEpNWUo6Tmpsak9XVTFPRGs0TlRnek56UmlZbUpqWXpVM01XVmpObVZqTmpabQ==',
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        // echo $response;
    }


}
