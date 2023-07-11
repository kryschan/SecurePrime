<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ins_info;
use App\Models\ins_user;
use App\Models\ins_inslist;
use App\Models\ins_inquirie;
use App\Models\est_estabinfo;
use App\Models\opt_educ;
use App\Models\opt_region;
use App\Models\est_address;
use App\Models\est_tran;
use App\Models\est_user;
use App\Models\ins_bene_mdepend;
use App\Models\issue_card;
use App\Models\opt_reglist;
use App\Models\com_info;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\com_meminfo;


class forListingControl extends Controller
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


  
        //selecting data to TABLE
        function selUserlist(){
            $data = ins_user::all();
            return view('dashboard/userList',['userListData'=>$data]);  
         }

        function editClient($ref){

            $ref = $this->decSess($ref);

            $otpReg = opt_reglist::all();
            $otpEd = opt_educ::all();
            $otprel = opt_region::all();
            
           
            $data = DB::table("ins_infos as a")
            ->join('ins_inslists as b',  'a.ins_type', '=', 'b.ins_refNo')
            ->join("ins_addresses as c", "a.ins_address", '=', 'c.ins_add_code')
            ->join("ins_ininfos as d", "a.ins_ref", '=', 'd.ins_clientNo')
            ->join("ins_govids as e", "a.ins_ref", "=", "e.ins_id")
            ->join("ins_bene_singles as f", "a.ins_ref", "=", "f.ins_id")
            ->join("ins_bene_marrieds as g", "a.ins_ref", "=", "g.ins_id")
            ->where('a.ins_ref',$ref)
            ->select('a.*','b.*','c.*','d.*','e.*','f.*','g.*')->get()->collect();
              $list = ins_insList::all();

              $marriedQue = ins_bene_mdepend::where("ins_id", $ref)
              ->select("*")
              ->get()->collect();

             return view('dashboard/clientEdit',['clientInfo'=>$data, 'insList'=> $list, 'optRels'=>$otpReg ,'optEds'=>$otpEd, 'optRegs'=> $otprel, "marriedData"=> $marriedQue]);

         }
 
         function selList(){
            $data = ins_info::all();
            $educList = opt_educ::all();
            return view('dashboard/fireData',['clientList'=>$data]);
        }


        private $data; // Class-level variable to hold the data

    
    
        public function insList()
        {
        
            $data = ins_insList::all();
            $optEd = opt_educ::all();
            $optReg = opt_region::all();
            $optRel = opt_reglist::all();



           return view("dashboard/clientAdd",['insList'=>$data, 'optEds'=>$optEd, 'optRegs'=>$optReg, 'optRels'=>$optRel]);
           
        }


        function joinList(){

            if(session("power")=='1'){
                $data = DB::table("ins_infos as a")
                ->join('ins_inslists as b',  'a.ins_type', '=', 'b.ins_refNo')
                ->select('a.Id','a.ins_ref','a.ins_lname','a.ins_fname','a.ins_mname', 'a.ins_suffix','b.ins_name')->get()->collect();
        

            }else{
                $data = DB::table("ins_infos as a")
                ->join('ins_inslists as b',  'a.ins_type', '=', 'b.ins_refNo')
                ->join('ins_assagents as c', "a.ins_ref", "=", "c.ins_id")
                ->select('a.Id','a.ins_ref','a.ins_lname','a.ins_fname','a.ins_mname', 'a.ins_suffix','b.ins_name')
                ->where("c.user_id", session('id'))
                ->get()->collect();
        
            }

          
        
            return view('dashboard/fireData',['clientList'=>$data]);

        }

       

        function inqList(){
            
            $list = ins_inquirie::all();
            return view("dashboard/inquiry",['inqList'=>$list]);

        }
      

        function vClient($ref){

            $ref = $this->decSess($ref);

            $data = DB::table("ins_infos as a")
            ->join('ins_inslists as b',  'a.ins_type', '=', 'b.ins_refNo')
            ->join("ins_addresses as c", "a.ins_address", '=', 'c.ins_add_code')
            ->join("ins_ininfos as d", "a.ins_ref", '=', 'd.ins_clientNo')
            ->join("ins_govids as e", "a.ins_ref", "=", "e.ins_id")
            ->join("ins_bene_singles as f", "a.ins_ref", "=", "f.ins_id")
            ->join("ins_bene_marrieds as g", "a.ins_ref", "=", "g.ins_id")
            ->where('a.ins_ref',$ref)
            ->select('a.*','b.*','c.*','d.*',"e.*","f.*","g.*")->get()->collect();
            $marriedQue = ins_bene_mdepend::where("ins_id", $ref)
            ->select("*")
            ->get()->collect();
            
            
                

             return view('dashboard/clientView',['viewData'=>$data, "marriedData"=>$marriedQue]);

         }

         function estab(){
            $data= est_estabinfo::all();
            return view("dashboard/estabList", ['estabData'=>$data]);

         }

         function estSel($id){
           
            $id = $this->decSess($id);
           
            $estData = DB::table("est_estabinfos as a")
            ->join('est_addresses as b', 'a.est_id', '=', 'b.est_id')
            ->where('a.est_id', $id)
            ->select('a.*','b.*')->get()->collect();
            return view("dashboard/estEdit", ['estData'=>$estData]);
            
         }


         function qrScanList(){
        $estId = session("id");

        $estTranData = DB::table("est_trans as a")
        ->join('issue_cards as b',  'a.card_id', '=', 'b.card_id')
        ->join("ins_infos as c", "a.ins_id", '=', 'c.ins_ref')
        ->join("ins_addresses as d", "a.ins_id", '=', 'd.ins_ref')
        ->join("ins_ininfos as e", "a.ins_id","=","e.ins_clientNo")
        ->where('a.est_id',$estId)
        ->select('a.*','b.*','c.*','d.*','e.*')->get()->collect();
       
        return view("establishment/qrScanList", ['qrList'=>$estTranData]);
       
         }

         function estDis(){
         
    
            $estTranData = DB::table("est_trans as a")
            ->join('issue_cards as b',  'a.card_id', '=', 'b.card_id')
            ->join("ins_infos as c", "a.ins_id", '=', 'c.ins_ref')
            ->join("ins_addresses as d", "a.ins_id", '=', 'd.ins_ref')
            ->join("ins_ininfos as e", "a.ins_id","=","e.ins_clientNo")
            ->join("est_estabinfos as f", "a.est_id", "=", "f.est_id")
            ->select('a.*','b.*','c.*','d.*','e.*','f.*')->get()->collect();
    
            return view("dashboard/estTransList", ['qrList'=>$estTranData]);
           
             }

             function spc(){

                $spcQuery = DB::table("issue_cards as a")
                ->join("ins_infos as b", "a.ins_id", "=", "b.ins_ref")
                ->select("a.*", "b.*")->get()->collect();
               
                return view("dashboard/spcList", ['spcData'=>$spcQuery]);
   
             }

    function uEd($uId){
       
        $queryUser = ins_user::where('u_id', $uId)
        ->select("*")->get()->collect();

      return view("dashboard/userEd", ['useData'=>$queryUser]);

    }

    function comMem(){
    
        $comList = com_info::all();

        return view("dashboard/compMem",['comInfo'=>$comList]);
    }

function comDeInfo($cpId){
    $cpId = $this->decSess($cpId);

    $compName = com_info::where('com_id', $cpId)->get()->collect();
    $compMem = com_meminfo::where('com_id', $cpId)->get()->collect();

    return view("dashboard/compView", ['comName'=>$compName, 'comMem'=>$compMem]);
    
}



private function memList($ids){
    
    $memInfo = DB::table('com_meminfos as a')
    ->rightJoin('ins_infos as b', 'a.ins_id', '=', 'b.ins_ref')
    ->where("a.com_id", $ids)
    ->select("a.*", "b.*")
    ->get()
    ->collect();
    return $memInfo;
  
}



function grpEd($grpId){

    $grpId = $this->decSess($grpId);
    $memInfo = $this->memList($grpId);

    $grpQ = com_info::where("com_id", $grpId)->get();

    return view("dashboard/compEdit",['memInfos'=>$memInfo, 'grpInfo'=>$grpQ]);

}





public function addNMemList($id){

    $memList = $this->memList(Null);
    return view("dashboard/addCompMem",['memInfos'=>$memList, 'compId'=>$id]);
  

}




}
