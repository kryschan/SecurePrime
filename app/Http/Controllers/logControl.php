<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use Illuminate\Support\Facades\Session;
use App\Model\User;
use App\Models\ins_user;
use App\Models\User as ModelsUser;
use App\Models\est_user;
use App\Models\est_estabinfo;
use App\Models\est_address;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Psy\Readline\Userland;
use App\Models\activity_log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use RealRashid\SweetAlert\Facades\Alert;

class logControl extends Controller
{

    function actLogs($uId, $uFname, $act, $decs){
        date_default_timezone_set('Asia/Manila');
        
        $tDay = date("Y-m-d");
        $tTime = date("h:i:sa");

        $clientIP = request()->ip();
        $actLog = new activity_log();

        $actLog->user_id = $uId;
        $actLog->user_fname = $uFname;
        $actLog->log_activity = $act;
        $actLog->log_decs = $decs;
        $actLog->log_date = $tDay;
        $actLog->log_time = $tTime;
        $actLog->log_ipAdd = $clientIP;
        $actLog->save();
           
        }



    function homePage(){
        return view("index");
    }
    function loginFuction(){
        return view("login");
    }
    function fireIn(){
        return view("fireinsurance");
    }
    function motorCar(){
        return view("motorcarinsurance");
    }
    function engInsure(){
        return view("engineeringinsurance");
    }
    function marine(){
        return view("marineandaviationinsurance");
    }
    function liability(){
        return view("liabilityinsurance");
    }
    function bondsFuc(){
        return view("bonds");
    }
    function quote(){
        return view("quote");
    }
    function aboutUs(){
        return view("about");
    }
    function news(){
        return view("news");
    }
    function officers(){
        return view("officers");
    }
    function certificates(){
        return view("certificates");
    }
    function claimsGpa(){
        return view("claimsgpa");
    }
    function claimsMotor(){
        return view("claimsmotor");
    }
    function contactUs(){
        return view("contact");
    }
    function est(){

       $estList = DB::table('est_estabinfos as a')
        ->join("est_addresses as b", "a.est_id", "=", "b.est_id")->get()->collect();

        return view("establishment", ['estList'=>$estList]);
    }
    function part(){
        return view('partners');
    }
    function client(){
        return view('client');
    }




  public function logout(Request $request){
      Auth::logout(); // Logout the currently authenticated user
    $request->session()->invalidate(); // Invalidate the current session
    $request->session()->regenerateToken();
    session()->flush();
    return redirect("Credentials");
    }


   



    

    public function logVal(Request $request)
    {
        $logAct = "LOG IN - AGENT";

        $credentials = $request->only('uname', 'psw');
        $user = ins_user::where('u_username', $credentials['uname'])->first();
        $hashDis = Hash::make($credentials['psw']);
        
        if (!$user || !Hash::check($credentials['psw'], $user->u_pass)) {
            Alert::error("Fail To Login", "Your Data is Not Match");
            $decs = "Attempt to login STATUS: Fail To Log In " . "\n" . "ATTEMPT USER: " . $credentials['uname'] . "\n" .  "ATTEMPT PASS: " . $credentials['psw'];
            $userID = "";
            $userName = "";
            $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);
            return redirect("Credentials");
        }else{
            $request->session()->put('id', $user->u_id);
            $request->session()->put('name', $user->u_name);
            $request->session()->put('power', $user->u_power);
            $decs = "Attempt to login STATUS: Successfully Login " . "\n"  . " USER ID: " . $user->u_id . "\n" . " USER INFO: " . $user->u_name;
            $actLogVar =  self::actLogs($user->u_id, $user->u_name,$logAct,$decs);
            return redirect("dash");
        }
    }



   function estLog(Request $requ){
            
        $uname = $requ->uname;
        $pass = $requ->psw;
        $logAct = "LOG IN - ESTABLISHEMENT";

        $que = est_user::where('u_username', $uname)->first();
       

        if(!$que || !Hash::check($pass,$que->u_password)){
            $userID = "";
            $userName = "";
            Alert::error("Fail To Login", "Your Data is Not Match");
            $decs = "Attempt to login STATUS: Fail To Login " . "\n"  . " ATTEMPT USER: " . $uname . "\n" . " ATTEMPT PASS: " .  $pass;
            $actLogVar =  self::actLogs($userID,$userName,$logAct,$decs);
            return redirect("EstCredentials");
        }else{
            $sel = est_estabinfo::where('est_id', $que->est_id)->first();
            $requ->session()->put("id", $que->est_id);
            $requ->session()->put('name', $sel->est_name);
            $decs = "Attempt to login STATUS: Successfully Login " . "\n"  . " EST ID: " . $que->est_id . "\n" . " EST INFO: " . $sel->est_name;
            $actLogVar =  self::actLogs($que->est_id,$sel->est_name,$logAct,$decs);
            return redirect("EstDash");
        }

           
          
        
    


   }
  

}
