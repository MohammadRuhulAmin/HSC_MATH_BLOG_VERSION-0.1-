<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use DB;
class LogRegistrationController extends Controller
{
    public function logRegView(){
        return view('log.logreg');
    }
    public function logVarify(Request  $request){
        $logEmail = $request->userEmail;
        $logPassword = $request->userPassword;
        $res = Register::where(['userEmail'=>$logEmail,'userPassword'=>$logPassword])->get();
        if(count($res)==1){
            $userInfo = DB::table('registers')->where('userEmail',$logEmail)->first();
            //session()->put('handleId',$userInfo->id);
            return view('User.profilePage',compact('userInfo'));
        }
        else {
            return "No Such User Like this userEmail";
        }

    }
    public function register(Request $request){
        $register = new Register;
        $register->userName = $request->userName;
        $register->userEmail = $request->userEmail;
        $register->userPassword = $request->userPassword;
        $register->save();
        return "registration is done successfully!";
    }

}
