<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ins_info;
use App\Models\est_estabinfo;
use App\Models\ins_inquirie;
use App\Models\ins_user;
use App\Models\est_tran;
use App\Models\est_user;
use App\Models\opt_educ;
use App\Models\opt_region;
use App\Models\opt_reglist;
use Illuminate\Support\Facades\DB;

class forNavigationControl extends Controller
{  
    
    function dashboard(){


        $memCounter = ins_info::count();
        $estCounter = est_estabinfo::count();
        $useCounter = ins_user::count();
        $inqCounter = ins_inquirie::count();

        return view("dashboard/index", ['memCount' => $memCounter, 'estCount'=> $estCounter, 'userCount'=> $useCounter, 'inqCount'=> $inqCounter]);
    }

    function formFire(){
        return view("dashboard/form_fire");
    }
    function fireData(){
        return view("dashboard/fireData");
    }
 
    
            function userLink(){
             return view("dashboard/userList");
            }

function userAdd(){
    return view("dashboard/addUser");
}
function estabAdd(){
  
    return view("dashboard/addEstab");
}

function estlink(){
    $id=session("id");
     $dCount = est_tran::where("est_id", $id)->count();

    return view("establishment/index", ['estTran'=>$dCount]);
}

function qrLinks(){
 
    return view("establishment/qrscan");
    
}

function addcomp(){

    $memInfo = DB::table('com_meminfos as a')
    ->rightJoin('ins_infos as b', 'a.ins_id', '=', 'b.ins_ref')
    ->whereNull("a.ins_id")
    ->select("a.*", "b.*")
    ->get()
    ->collect();
  
    //return $memInfo;

    return view("dashboard/addComp",['memInfos'=>$memInfo]);
}

function repMemCon(){

    $optEd = opt_educ::all();
    $optReligion = opt_reglist::all();


    return view("dashboard/repMeminfo", ['optEd'=>$optEd , 'optRel'=>$optReligion]);

}


function repCardCom(){

    return view("dashboard/repCardReleased");

}


function repEstCon(){

    return view("dashboard/repEstablishement");

}


function agentLink(){
    return view(""); 
    
}

function accSet(){
    
    $id = session("id");
    $query = est_user::where('est_id', $id)->get();
    
    
    return view("establishment/accountSett",['estData'=>$query]);
}
function securepowercards(){

    return view("securepowercard");

}
function grouplifes(){

    return view("grouplife");

}

}
