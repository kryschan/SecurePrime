<?php

namespace App\Http\Controllers;

use App\Models\ins_address;
use Illuminate\Http\Request;
use App\Models\ins_info;
use App\Models\ins_ininfo;
use App\Models\est_address;
use App\Models\est_estabinfo;
use App\Models\est_user;
use App\Models\com_meminfo;
use App\Models\activity_log;
use App\Models\ins_govid;
use App\Models\ins_bene_married;
use App\Models\ins_bene_single;
use App\Models\ins_bene_mdepend;
use App\Models\com_info;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class forDeletingControl extends Controller
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






    function delClient($id){
        
        $sel = ins_info::where('ins_ref', $id)->first();

        $delAc = ins_info::where('ins_ref', $id)->delete();
        $delAdd = ins_address::where('ins_ref', $id)->delete();
        $delIns = ins_ininfo::where('ins_clientNo', $id)->delete();
        $delGov = ins_govid::where('ins_id', $id)->delete();
        $delSing = ins_bene_single::where('ins_id', $id)->delete();
        $delMar = ins_bene_married::where('ins_id', $id)->delete();
        $delMem = ins_bene_mdepend::where('ins_id', $id)->delete();
        if ($delAc && $delAdd && $delIns && $delGov && $delSing && $delMar && $delMem) {

        $logAct = "DELETE DATA - CLIENT";
        $encodedID =  "DELETED CLIENT ID: " . $id;
        $encodedName =  "DELETED CLIENT NAME: " . $sel->ins_fname . " " . $sel->ins_mname . " " . $sel->ins_lname. " " . $sel->ins_suffix;
        $userID =   session("id");
        $userSID = "ADMIN ID: " . $userID;
        $userName = session("name");
        $userSName = "ADMIN NAME: " . session("name");
    
        $decs = "Attempt to DELETE STATUS: Successfully Deleted" . "\n" . $encodedID . "\n" . $encodedName ."\n"  .  $userSID . "\n" .  $userSName;
        $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);
     
            Alert::success("Success", "Successfully Deleted");
            return redirect("formData");
        } else {
            Alert::error("Fail", "Failed to Delete");
            return redirect("formData");
        }

        
    }

    function estDelPro($estID){
        $sel = est_estabinfo::where('est_id', $estID)->first();

        $delInfo = est_estabinfo::where("est_id",$estID)->delete();
        $delAdd = est_address::where("est_id", $estID)->delete();
        $delUser = est_user::where("est_id", $estID)->delete();

        if ($delInfo && $delAdd && $delUser) {
            $logAct = "DELETE DATA - ESTABLISHEMENT";
            $encodedID =  "DELETED ESTABLISHEMENT ID: " . $estID;
            $encodedName =  "DELETED ESTABLISHEMENT NAME: " . $sel->est_name ;
            $userID =   session("id");
            $userSID = "ADMIN ID: " . $userID;
            $userName = session("name");
            $userSName = "ADMIN NAME: " . session("name");
            $decs = "Attempt to DELETE STATUS: Successfully Deleted" . "\n" . $encodedID . "\n" . $encodedName ."\n"  .  $userSID . "\n" .  $userSName;
            $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);

            Alert::success("Success", "Successfully Deleted");
            return redirect("establishment");
        } else {
            Alert::error("Error", "Failed to Delete");
            return redirect("establishment");
        }
       
     
    }

    function comMemDel($compID){
        $delQue = com_meminfo::where('mem_id', $compID)->first();
        $delMem = com_meminfo::where('mem_id', $compID)->delete();

        $logAct = "DELETE DATA - GROUP MEMBER";
        $encodedID =  "DELETED ESTABLISHEMENT ID: " . $compID;
        $encodedName =  "DELETED ESTABLISHEMENT NAME: " . $delQue->com_memName ;
        $userID =   session("id");
        $userSID = "ADMIN ID: " . $userID;
        $userName = session("name");
        $userSName = "ADMIN NAME: " . session("name");
        $decs = "Attempt to DELETE STATUS: Successfully Deleted" . "\n" . $encodedID . "\n" . $encodedName ."\n"  .  $userSID . "\n" .  $userSName;
        $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);

        Alert::success("Successfully Deleted");
       return redirect()->back();
       
    }

    



}
