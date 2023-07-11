<?php

namespace App\Http\Controllers;

use App\Models\est_address;
use App\Models\est_estabinfo;
use App\Models\est_user;
use App\Models\ins_address;
use Illuminate\Http\Request;
use App\Models\ins_info;
use App\Models\ins_ininfo;
use App\Models\ins_user;
use App\Models\ins_govid;
use App\Models\ins_bene_married;
use App\Models\ins_bene_mdepend;
use App\Models\ins_bene_single;
use App\Models\com_info;
use App\Models\activity_log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use function PHPSTORM_META\type;
class forEditingControl extends Controller
{

    private function decSess($ref){
        
        if(!session()->forget('memRef')){
            session()->forget('memRef');
        } 
        if (!session()->has('memRef')) {
            session()->put('memRef', $ref);
        }
       
        try {
            $ref = decrypt(session('memRef'));
            return $ref;
            // Further processing
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            // Handle the exception, log the error, or display an error message.
        }
      
      
      
      }


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







    function cEdit(Request $req){
 
        
        $id = $req->ref;
        $lname = $req->input('lName');
        $fname = $req->input('fName');
        $mname = $req->input('mName');
        $sname = $req->input('sName');
        $pbirth = $req->input('pBirth');
        $bdate = $req->input('dBirth');
        $contact = $req->input('contact');
        $civil = $req->input("cStat");
        $gender = $req->input("gender");
        $religion = $req->input("cRegs");
        $educ = $req->input("cEduc");
      

        //address
        $aNum = $req->input('aNum');
        $aStreet = $req->input('aStreet');
        $aBrgy = $req->input('aBrgy');
        $aCity = $req->input('aCity');
        $aProvince = $req->input('aProv');
        $aRegion = $req->input("region");
        $aZip = $req->input("aZip");



        //GOV IDS
        $TIN = $req->input("gTin");
        $SSS = $req->input("gSss");
        $Pass = $req->input("gPass");
        $National = $req->input("gVN");
        $GSIS = $req->input("gGsis");
        $Philhealth = $req->input("gPhilhealth");
        $Drivers = $req->input("gDrivers");

        $govID = ins_govid::where("ins_id", $id)
        ->update([
            'gov_tin'=>$TIN,
            'gov_sss'=>$SSS,
            'gov_passport'=>$Pass,
            'gov_voters'=>$National,
            'gov_gsis'=>$GSIS,
            'gov_philhealth'=>$Philhealth,
            'gov_drivers'=>$Drivers
        ]);
        

        //insurance Info
        $type = $req->input('iType');
        $policy = $req->input('iPolicy');
        $aDate = $req->input("iAdate");
        $eDate = $req->input("iEdate");

        //Single Benefits
        $sBeneMN =$req->input('sMFName');
        $sBeneMB =$req->input('sMBDay');
        $sBeneMC =$req->input('sMContact');
        $sBeneFN =$req->input('sFFName');
        $sBeneFB =$req->input('sFBDay');
        $sBeneFC =$req->input('sFContact');
        $sBeneSN =$req->input('sSFName');
        $sBeneSB =$req->input('sSBDay');
        $sBeneSC =$req->input('sSContact');
        
        $sBene = ins_bene_single::where("ins_id", $id)
        ->update([
            'sb_f_name'=>$sBeneFN,
            'sb_f_bday'=>$sBeneFB,
            'sb_f_contact'=>$sBeneFC,
            'sb_m_name'=>$sBeneMN,
            'sb_m_bday'=>$sBeneMB,
            'sb_m_contact'=>$sBeneMC,
            'sb_s_name'=>$sBeneSN,
            'sb_s_bday'=>$sBeneSB,
            'sb_s_contact'=>$sBeneSC
           
        ]);




        //MARRIED 
        $mBeneSN = $req->input('sFname');
        $mBeneSB = $req->input('sHBdate');
        $mBeneSC = $req->input('sHContact');

        $mBene = ins_bene_married::where('ins_id', $id)
        ->update([
            'mb_h_name'=>$mBeneSN,
            'mb_h_bdate'=>$mBeneSB,
            'mb_h_contact'=>$mBeneSC
        ]);


        //MARRIED DEPENDENT
        $mDeptN = $req->input("sDept");
        $mDeptB = $req->input("sBday");

         $Query = ins_bene_mdepend::where("ins_id", $id)
         ->select("*")->get();

       

       for($i = 0; $i < count($req->input("sDept")); $i++){

        $mBene = ins_bene_mdepend::where('id', $Query[$i]->id)
        ->update([
            'dp_name'=> $mDeptN[$i],
            'dp_bdate'=>$mDeptB[$i]
        ]);

       }



     
        $upPro = ins_info::where('ins_ref', $id)
        ->update([
            'ins_lname'=> $lname, 
            'ins_fname'=>$fname, 
            'ins_mname'=>$mname, 
            'ins_suffix'=>$sname, 
            'ins_bPlace'=>$pbirth,
            'ins_bDay'=>$bdate,
            'ins_civil'=>$civil,
            'ins_gender'=>$gender,
            'ins_educ'=>$educ,
            'ins_religion'=>$religion,
            'ins_contact'=>$contact,
            'ins_type'=>$type
             ]);
          
        $addPro = ins_address::where('ins_ref', $id)
        ->update([
            'ins_addNo'=>$aNum,
            'ins_street'=>$aStreet,
            'ins_brgy'=>$aBrgy,
            'ins_city'=>$aCity,
            'ins_district'=>$aProvince,
            'ins_region'=>$aRegion,
            'ins_zipcode' => $aZip
        ]);



        $insPro = ins_ininfo::where('ins_clientNo', $id)
        ->update([
            "ins_policyNo"=>$policy,
            "ins_dAcquire"=>$aDate,
            "ins_dExpire"=>$eDate
        ]);


        
        $logAct = "EDITING DATA - CLIENT";
        $encodedID =  "EDITED CLIENT ID: " . $id;
        $encodedName =  "EDITED CLIENT NAME: " . $fname . " " . $mname . " " . $lname . " " . $sname;
        $userID =   session("id");
        $userSID = "ADMIN ID: " . $userID;
        $userName = session("name");
        $userSName = "ADMIN NAME: " . session("name");
    
        $decs = "Attempt to EDIT STATUS: Successfully Edited" . "\n" . $encodedID . "\n" . $encodedName ."\n"  .  $userSID . "\n" .  $userSName;
        $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);



    
            if($upPro || $addPro ||  $insPro){
                Alert::success("SuccessFully Save", "You Can Now Poceed to the Next Step");
                return redirect("formData");
            }else{
                return redirect("clientEdits/" . encrypt($id));
            }
           
    }

   function estEditPro($id, Request $req){

   $estName = $req->eName;
   $estBranch = $req->eBranch;
   $estDis = $req->eDis;
   $estEmail = $req->eEmail;
   $estContact = $req->contact;
   $estYear = $req->eYear;
   $adNumber = $req->aNum;
   $adStreet = $req->aStreet;
   $adBrgy = $req->aBrgy;
   $adCity = $req->aCity;
   $adProv = $req->aProv;
   $adZip = $req->aZip;


   $estQuery = est_estabinfo::where('est_id', $id)
   ->update([
    'est_name'=>$estName,
    'est_branch'=>$estBranch,
    'est_discount'=>$estDis,
    'est_email'=>$estEmail,
    'est_contact'=>$estContact,
    'est_year'=>$estYear
   ]); 
   
   $estAddQuery = est_address::where('est_id', $id)
   ->update([
    'a_num'=>$adNumber,
    'a_street'=>$adStreet,
    'a_brgy'=>$adBrgy,
    'a_city'=>$adCity,
    'a_district'=>$adProv,
    'a_zip'=>$adZip
   ]); 

   $logAct = "EDITING DATA - ESTABLISHEMETN";
   $encodedID =  "EDITED EST ID: " . $id;
   $encodedName =  "EDITED EST NAME: " . $estName;
   $userID =   session("id");
   $userSID = "ADMIN ID: " . $userID;
   $userName = session("name");
   $userSName = "ADMIN NAME: " . session("name");

   $decs = "Attempt to EDIT STATUS: Successfully Edited" . "\n" . $encodedID . "\n" . $encodedName ."\n"  .  $userSID . "\n" .  $userSName;
   $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);


    return redirect("establishment");

   }



   function uEdPro(Request $req, $id){
   
        $fName = $req->fName;
        $uName = $req->uName;
        $uPass = $req->uPass;
        $uPower = $req->uPower;

        $uQuery = ins_user::where('u_id', $id)
        ->update([
            'u_name'=>$fName,
            'u_username'=>$uName,
            'u_power'=>$uPower            
        ]);

        if(!empty($uPass)){
            $pasQuery = ins_user::where('u_id', $id)
        ->update([
            'u_pass'=>Hash::make($uPass)        
        ]);
        }

        $logAct = "EDITING DATA - USERACCOUNT";
        $encodedID =  "EDITED EST ID: " . $id;
        $encodedName =  "EDITED EST NAME: " . $fName ;
        $userID =   session("id");
        $userSID = "ADMIN ID: " . $userID;
        $userName = session("name");
        $userSName = "ADMIN NAME: " . session("name");
     
        $decs = "Attempt to EDIT STATUS: Successfully Edited" . "\n" . $encodedID . "\n" . $encodedName ."\n"  .  $userSID . "\n" .  $userSName;
        $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);

        return redirect("usersList");

   }



   function edComp($cpId, Request $reqIn){

        $compName=$reqIn->comName;
        $compDate= $reqIn->comDate;
        $compPolicy=$reqIn->comPolicy;
        $compAqDate =$reqIn->comAqDate;
        $compExDate = $reqIn->comExDate;

        $upCom = com_info::where("com_id", $cpId)
        ->update([
            'com_name'=>$compName,
            'com_memDate'=>$compDate,
            'com_policy'=>$compPolicy,
            'com_aqDate'=>$compAqDate,
            'com_exDate'=>$compExDate
        ]);

        $logAct = "EDITING DATA - GROUP";
        $encodedID =  "EDITED EST ID: " . $cpId;
        $encodedName =  "EDITED EST NAME: " . $compName;
        $userID =   session("id");
        $userSID = "ADMIN ID: " . $userID;
        $userName = session("name");
        $userSName = "ADMIN NAME: " . session("name");
     
        $decs = "Attempt to EDIT STATUS: Successfully Edited" . "\n" . $encodedID . "\n" . $encodedName ."\n"  .  $userSID . "\n" .  $userSName;
        $actLogVar =  self::actLogs($userID, $userName,$logAct,$decs);
        
        
        return redirect("CompanyMember");
   }

   function edestuser(Request $req){
    
    $estId = session("id");
    $email = $req->estEmail;
    $pass = $req->Pass;

    if(empty($pass)){
        $estUser = est_user::where("est_id", $estId)
        ->update([
            'u_username'=> $email
        ]);

    }else{


    $estUser = est_user::where("est_id", $estId)
    ->update([
        
        'u_username'=> $email,
        'u_password'=>Hash::make($pass)

    ]);
}
 return redirect("EstDash");
   }
    
}
