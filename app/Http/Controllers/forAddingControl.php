<?php

namespace App\Http\Controllers;

use App\Models\est_estabinfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\ins_info;
use App\Models\ins_address;
use App\Models\ins_user;
use App\Models\ins_ininfo;
use App\Models\est_address;
use App\Models\est_user;
use App\Models\ins_bene_married;
use App\Models\ins_bene_mdepend;
use App\Models\ins_bene_single;
use App\Models\ins_govid;
use App\Models\ins_inquirie;
use App\Models\com_info;
use App\Models\com_meminfo;
use App\Models\activity_log;
use App\Models\ins_assagent;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;

class forAddingControl extends Controller
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




    function cInfo(Request $request){
        date_default_timezone_set('Asia/Manila');
        $client = new ins_info();
        $add = new ins_address();
        $ins = new ins_ininfo();
        $sBene = new ins_bene_single();
        $mBene = new ins_bene_married();
        $agent = new ins_assagent();
        $gIds = new ins_govid();
        
        

        $maxValue = ins_info::max('id');
        if($maxValue==0){
             $maxValue = 1; 
            }else{
                $maxValue+=1;
            }
        $clientRef = "REF" . sprintf("%08d",$maxValue);
        $addRef = "ADD" . sprintf("%08d",$maxValue);
        $insRef ="INS" . sprintf("%08d",$maxValue);
        $depts ="MDS" . sprintf("%08d",$maxValue);

        //CLIENT INFO
        $client->ins_ref= $clientRef;
        $client->ins_lname=$request->lName;
        $client->ins_fname=$request->fName;
        $client->ins_mname=$request->mName;
        $client->ins_suffix=$request->sName;
        $client->ins_bPlace=$request->pBirth;
        $client->ins_bDay=$request->dBirth;
        $client->ins_contact=$request->contact;
        $client->ins_address=$addRef;
        $client->ins_type=$request->iType;
        $client->ins_gender = $request->gender;
        $client->ins_educ= $request->cEduc;
        $client->ins_civil = $request->cStat;
        $client->ins_religion = $request->cRegs;
        $client->save();
        
        //CLIENT ADDRESS
        $add->ins_add_code = $addRef;
        $add->ins_ref = $clientRef; 
        $add->ins_addNo = $request->aNum;
        $add->ins_street = $request->aStreet;
        $add->ins_brgy = $request->aBrgy;
        $add->ins_district = $request->aProv;
        $add->ins_city = $request->aCity;
        $add->ins_zipcode = $request->aZip;
        $add->ins_region = $request->region;
        $add->save();
        
        //CLIENT INSURANCE INFO
        $ins->ins_refNo = $insRef;
        $ins->ins_clientNo = $clientRef;
        $ins->ins_policyNo = $request->iPolicy;
        $ins->ins_dAcquire = $request->iAdate;
        $ins->ins_dExpire = $request->iEdate;
        $ins->save();

       //CLIENT BENEFICIARY FOR SINGLE
        $sBene->ins_id = $clientRef;
        $sBene->sb_f_name = $request->sFFName;
        $sBene->sb_f_bday=$request->sFBDay;
        $sBene->sb_f_contact = $request->sFContact;
        $sBene->sb_m_name = $request->sMFName;
        $sBene->sb_m_bday = $request->sMBDay;
        $sBene->sb_m_contact = $request->sMContact;
        $sBene->sb_s_name = $request->sSFName;
        $sBene->sb_s_bday = $request->sSBDay;
        $sBene->sb_s_contact = $request->sSContact;
        $sBene->save();
       
        //CLIENT BENEFICIARY FOR MARRAIGE
       $mBene->ins_id = $clientRef;
       $mBene->mb_dept_id =  $depts;
       $mBene->mb_h_name = $request->sFname;
       $mBene->mb_h_bdate = $request->sHBdate;
       $mBene->mb_h_contact = $request->sHContact;
       $mBene->save();
        //CLIENT GOV ISSUED ID
       $gIds->ins_id = $clientRef;
       $gIds->gov_tin = $request->gTin;
       $gIds->gov_sss = $request->gSss;
       $gIds->gov_passport = $request->gPass;
       $gIds->gov_voters = $request->gVN;
       $gIds->gov_gsis = $request->gGsis;
       $gIds->gov_philhealth = $request->gPhilhealth;
       $gIds->gov_drivers = $request->gDrivers;
       $gIds->save();
       


       for($i = 0; $i< count($request->sDept); $i++){
        //CLIENT BENEFICIARY MARRAGE DEPENDETS
        $mDBene = new ins_bene_mdepend();
        $mDBene->ins_id  = $clientRef;
        $mDBene->mb_dept_id = $depts;
        $mDBene->dp_name =$request->sDept[$i];
        $mDBene->dp_bdate = $request->sBday[$i]; 
        $mDBene->save();
       
       }
       
       //CLIENT ENCODED AGENT 
       $agent->user_id = session("id");
       $agent->ins_id = $clientRef;
       $agent->agent_name = session("name");
       $agent->d_encode = date("Y-m-D h:i:sa");
       $agent->save();
          

      // return $request->sDept[0];

      $logAct = "INSERT DATA - CLIENT";
      $userID = session("id");
      $userName = session("name");
      $encodedID = $clientRef;
      $encodedName = $request->fName . " " . $request->mName . " " . $request->lName . " " . $request->sName;
      
     
      
         if(!$client->save() && !$add->save() && !$ins->save()  && !$sBene->save()  && !$mBene->save() && !$mDBene->save()){
             Alert::error("Error", "Data is Fail to insert");
             $decs = "Attempt to INSERT STATUS: FAIL TO INSERT " . "\n" . "ENCODING AGENT ID: " . session("id") . "\n" .  "ENCODING AGENT NAME: " . session("name");
             $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);
             return redirect('AddNewClient');
         }else{
             Alert::success("Success", "Successfully Inserted");
             $decs = "Attempt to INSERT STATUS: Successfully Inserted" . "\n". "ENCODED CLIENT ID: " . $encodedID. "\n" . "ENCODED CLIENT NAME: " . $encodedName   . "\n" . "ENCODING AGENT ID: " .  $userID . "\n" .  "ENCODING AGENT NAME: " . $userName;
             $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);
             return redirect('formData');
         }
       
    }



    function userPros(Request $req){
   
        $userInfo = new ins_user();
         $ids = ins_user::max("id");
    
    
        if(empty($ids)){
          $ids = 1;
          
         }else{
            $ids+=1;
         }
        $idsFormat = "UREF".sprintf("%08d",$ids);
        $userInfo->u_id = $idsFormat;
        $userInfo->u_name=$req->fName;
        $userInfo->u_username=$req->usName;
        $userInfo->u_pass= Hash::make($req->uPass);
        $userInfo->u_power=$req->uPower;

        
    if($userInfo->save()){

        $logAct = "INSERT DATA - USER";
        $encodedID =  "ENCODED NEW USER ID: " . $idsFormat;
        $encodedName =  "ENCODED NEW USER NAME: " . $req->fName ;
        $userID =   session("id");
        $userSID = "ENCODER ID: " . $userID;
        $userName = session("name");
        $userSName = "ENCODER NAME: " . session("name");
    
        $decs = "Attempt to INSERT STATUS: Successfully Inserted" . "\n" . $encodedID . "\n" . $encodedName ."\n"  .  $userSID . "\n" .  $userSName;
        $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);


        Alert::success("SuccessFully Save", "You Can Now Poceed to the Next Step");
        return redirect("usersList");
      
    }
    
    
    
    }



    function estabPro(Request $req){

        $est = new est_estabinfo();
        $estAdd = new est_address();
        $estUser = new est_user();
        
        $genEstId = est_estabinfo::max('id');
        $genAddId = est_address::max('id');
        $genUserId = est_user::max('id');
        
        if (empty($genEstId)){
            $genEstId = 1;
        }else{
            $genEstId+=1;
        }
        if (empty($genAddId)){
            $genAddId = 1;
        }else{
            $genAddId+=1;
        }
        if (empty($genUserId)){
            $genUserId = 1;
        }else{
            $genUserId+=1;
        }

        $estId ="EST" . sprintf("%08d",$genEstId);
        $addId ="AD" . sprintf("%08d",$genAddId);
        $userId ="US" . sprintf("%08d",$genUserId);
       
      
        //Credentials Establishment
        $estUser->u_id =$userId;
        $estUser->est_id = $estId;
        $estUser->u_username = $req->email;
        $estUser->u_password = hash::make($req->eYear);
        $estUser->u_status = "ACTIVE";
        $estUser->u_power = "1";
        $estUser->save();
       
        //Establishment Info
        $est->est_id = $estId;
        $est->est_name = $req->eName;
        $est->est_branch = $req->bName;
        $est->est_discount = $req->eDis;
        $est->est_email = $req->email;
        $est->est_contact = $req->contact;
        $est->est_address = $addId;
        $est->est_year = $req->eYear;
        $est->save();

        //Address Info
        $estAdd->a_id = $addId;
        $estAdd->est_id = $estId;
        $estAdd->a_num = $req->aNum;
        $estAdd->a_street = $req->aStreet;
        $estAdd->a_brgy = $req->aBrgy;
        $estAdd->a_city = $req->aCity;
        $estAdd->a_district = $req->aProv;
        $estAdd->a_zip = $req->aZip;
        $estAdd->save();


        $logAct = "INSERT DATA - ESTABLISHEMENT";
        $encodedID =  "ENCODED ESTAB ID: " . $estId;
        $encodedName =  "ENCODED NEW USER NAME: " . $req->eName ;
            $userID =   session("id");
            $userSID = "ENCODER ID: " . $userID;
            $userName = session("name");
            $userSName = "ENCODER NAME: " . session("name");
        
    
        $decs = "Attempt to INSERT STATUS: Successfully Inserted" . "\n" . $encodedID . "\n" . $encodedName ."\n"  .  $userSID . "\n" .  $userSName;
        $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);


        return redirect("establishment");
        

    }

    function inquiry(Request $request){
            
        $tbInq = new ins_inquirie();
        $inqId =ins_inquirie::max('id');
        if (empty($inqId)){
            $inqId = 1;
        }else{
            $inqId+=1;
        }
        $inqId ="NQ" . sprintf("%08d",$inqId);
        $tbInq->ins_inqNo = $inqId;
         $tbInq->ins_fname =  $request->inFname;
         $tbInq->ins_mname =  $request->inMname;
         $tbInq->ins_lname =  $request->inLname;
         $tbInq->ins_suffix =  $request->inSname;
         $tbInq->ins_email =  $request->email;
         $tbInq->ins_contact =  $request->phone;
         $tbInq->save();

         $logAct = "INSERT DATA - INQUIRY";
         $encodedID =  "ENCODED INQUIRY ID: " . $inqId;
         $encodedName =  "ENCODED INQUITY NAME: " . $request->inFname . " " . $request->inMName . " " . $request->inLname. " " .  $request->inSname;
         $userID = "";
         $userName = "";
     
         $decs = "Attempt to INSERT STATUS: Successfully Inserted" . "\n" . $encodedID . "\n" . $encodedName ."\n"  .  $userID . "\n" .  $userName;
         $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);

        return view("inquireSub");
    }



    
        function compAdd(Request $req){

            $company = new com_info();
            $max = com_info::max('id');

            if(empty($max)){
                $max = 1;
            }else{
                $max+=1;
            }
            $id ="CP" . sprintf("%08d",$max);
            
            $company->com_id = $id;
            $company->com_name = $req->comName;
            $company->com_memDate = $req->comDate;
            $company->com_policy = $req->comPolicy;
            $company->com_aqDate= $req->comAqDate;
            $company->com_exDate=$req->comExDate;

            for($i = 0; $i < count($req->compMem); $i++){
                $comMember = new com_memInfo();
            
                $query = ins_info::where('ins_ref', $req->compMem[$i])->first();
               
                $fullname = $query->ins_fname . " " . $query->ins_mname . " " . $query->ins_lname . " " . $query->ins_sname;
                $idCount=$i+1;
                $memId = $id. "-"  . sprintf("%04d",$idCount);

                $comMember->mem_id = $memId;
                $comMember->com_id = $id;
                $comMember->ins_id = $req->compMem[$i];
                $comMember->com_memName = $fullname;
                $comMember->save();
            }
           
            $logAct = "INSERT DATA - CREATE GROUP";
            $encodedID =  "ENCODED GROUP ID: " . $id;
            $encodedName =  "ENCODED GROUP NAME: " . $req->comName;
            $userID =   session("id");
            $userSID = "ENCODER ID: " . $userID;
            $userName = session("name");
            $userSName = "ENCODER NAME: " . session("name");
        
            $decs = "Attempt to INSERT STATUS: Successfully Inserted" . "\n" . $encodedID . "\n" . $encodedName ."\n"  .  $userSID . "\n" .  $userSName;
            $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);



            if(!$company->save()){
                Alert::error("Error", "Please Contact the IT guy name Christian");
                return redirect("addCompany");
            }else{
                Alert::success("Successfully Inserted", "Ugh!! refreshing");
                return redirect("CompanyMember");
            }
            
             
        }


        function additionalMem($cmpId, Request $reqss){
            
            $query = com_meminfo::where("com_id", $cmpId)
            ->count("id");
            $actName = com_info::where("com_id", $cmpId)
            ->select('*')->first();

            for($i=0; $i < count($reqss->compMem); $i++){
                $query+=1;
                $memCouterid =$cmpId ."-". sprintf("%04d",$query);
                $memInfo = ins_info::where('ins_ref', $reqss->compMem[$i])->first();
                $memIn = new com_meminfo();

                $fullname = $memInfo->ins_fname . " " . $memInfo->ins_mname . " " . $memInfo->ins_lname . " " . $memInfo->ins_suffix;

                $memIn->mem_id = $memCouterid;
                $memIn->com_id = $cmpId;
                $memIn->ins_id = $reqss->compMem[$i];
                $memIn->com_memName = $fullname;
                $memIn->save();
            
            }

            
            $logAct = "INSERT DATA - CREATEGROUP / EDIT / ADD MEMBER";
            $encodedID =  "ENCODED GROUP ID: " .$cmpId;
            $encodedName =  "ENCODED GROUP NAME: " . $actName->com_name;
            $userID =   session("id");
            $userSID = "ENCODER ID: " . $userID;
            $userName = session("name");
            $userSName = "ENCODER NAME: " . session("name");
        
            $decs = "Attempt to INSERT STATUS: Successfully Inserted" . "\n" . $encodedID . "\n" . $encodedName ."\n"  .  $userSID . "\n" .  $userSName;
            $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);

            return redirect("GroupEdit/" . $cmpId);
         

        }


}
