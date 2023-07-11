<?php

namespace App\Http\Controllers;

use App\Models\est_estabinfo;
use app\Models\ins_info;
use app\models\ins_address;
use App\Models\issue_card;
use App\Models\est_tran;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class qrScanner extends Controller
{
    
    function qrPost(Request $req){

       date_default_timezone_set('Asia/Manila');
       $estId = session("id");
       $pwc = $req->code;
       $trans = new est_tran();
       $estDate = date("Y-m-d");
       $estTime = date("h:i:sa");

    //    $filter=substr($pwc,13);
        
    //    $split = explode(" ", $filter);
    //    $indi = $split[0];
    //    $pwc = implode(" ", array($indi));

        

        $query = issue_card::where('card_id', $pwc)
        ->select("*")->first();
        $cardIn = issue_card::where('card_id', $pwc)
        ->select("*")->get()->collect();
        $disCount = est_estabinfo::where('est_id', $estId)
        ->select("*")->get()->collect();
       
        if(empty($query->ins_id)){
            return view("establishment/qrPrev",['person'=>"No Records Found"]);
        }else{
        
        $refid = $query->ins_id;
        $forInfo = DB::table("ins_infos as a")
        ->join('ins_inslists as b',  'a.ins_type', '=', 'b.ins_refNo')
        ->join("ins_addresses as c", "a.ins_address", '=', 'c.ins_add_code')
        ->join("ins_ininfos as d", "a.ins_ref", '=', 'd.ins_clientNo')
        ->where('a.ins_ref',$refid)
        ->select('a.*','b.*','c.*','d.*')->get()->collect();

         

        $trans->est_id = $estId;
        $trans->card_id = $pwc;
        $trans->ins_id = $refid;
        $trans->est_date = $estDate;
        $trans->est_time = $estTime;
        $trans->save();

            
       return view("establishment.qrPrev", [
        'person' => $forInfo,
        'cardInfo' => $cardIn,
        'estinfo' => $disCount
    ]);

       
       }
        
  
    }
}
