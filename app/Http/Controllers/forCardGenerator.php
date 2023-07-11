<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Response;
use App\Models\ins_info;
use App\Models\ins_user;
use App\Models\ins_inslist;
use App\Models\ins_inquirie;
use App\Models\issue_card;
use Illuminate\Support\Facades\DB;


class forCardGenerator extends Controller
{

function idCat($id){

  return view("dashboard/cardCat",['id'=>$id]);

}

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


    
function idcard($id,Fpdf $pdf, Request $req) {
         
        $id = $this->decSess($id);

              $data = DB::table("ins_infos as a")
              ->join('ins_inslists as b',  'a.ins_type', '=', 'b.ins_refNo')
              ->join("ins_addresses as c", "a.ins_address", '=', 'c.ins_add_code')
              ->join("ins_ininfos as d", "a.ins_ref", '=', 'd.ins_clientNo')
              ->where('a.ins_ref',$id)
              ->select('a.*','b.*','c.*','d.*')->get()->collect();
  

            foreach($data as $vData){
            $lName = $vData->ins_lname;
            $fName = $vData->ins_fname;
            $mName = $vData->ins_mname;
            $bday = $vData->ins_bDay;
            $aNumber = $vData->ins_addNo;
            $aStreet = $vData->ins_street;
            $aBrgy = $vData->ins_brgy;
            $aCity = $vData->ins_city;
            $aDistrict = $vData->ins_district;
            $aZip = $vData->ins_zipcode;
            $policy = $vData->ins_policyNo;
            $expire = $vData->ins_dExpire;
            }

            $cardDb = new issue_card();
            $lastVal = issue_card::max('id');
           
            if(empty($lastVal)){
             $cardNum = 1;
            }else{
            $cardNum = $lastVal + 1;
            }
            if($req->cType == 'SILVER'){
              $cardCode = "SL";
             
            }elseif($req->cType == 'GOLD'){
              $cardCode = "GL";
              
            }else{
              $cardCode = "PL";
              
            }

    
                  $cardRef = "PWC" . sprintf("%08d",$cardNum) . "-". $cardCode;
                  $cardDb->ins_id = $id;
                  $cardDb->card_id = $cardRef;
                  $cardDb->card_type = $req->cType;
                  $cardDb->c_name = $fName. " " . $mName ." " . $lName;
                  $cardDb->c_bday =  $bday;
                  $cardDb->c_add = $aNumber . " " . $aStreet . " " . $aBrgy . " " .$aCity ." " . $aDistrict . " " . $aZip;
                  $cardDb->c_policy = $policy;
                  $cardDb->c_expire = $expire;
                  $cardDb->card_issDate = date('Y-m-d');
                  $cardDb->card_expireDate = $expire;
                  $cardDb->save();
                
                 $test = "Card Number: " . $cardRef . "\n" . 
                 " Name: " . $fName. " " . $mName ." " . $lName . "\n" .    
                 "Birth Day: " . $bday . "\n" . 
                 "Address: " . $aNumber . " " . $aStreet . " " . $aBrgy . " " .$aCity ." " . $aDistrict . " " . $aZip . "\n" .
                 "Policy Number: " . $policy . "\n" . 
                 "Card Expiration: " . $expire;

                 $full=urlencode($id);

              $pdf=new FPDF('L','mm',array(86,54));
              $pdf->AddPage();
              $pdf->Image('image/' .$cardCode . ".jpg", 0, 0, 86,54); 
              $pdf->AddPage();
              $pdf->Image('image/cardback.jpg', 0, 0, 85.6,54.5); 
              $pdf->Image('http://chart.apis.google.com/chart?cht=qr&chs=450x450&chl='. $full,57,4,30,30,'PNG');
              $pdf->SetFont('Courier', 'B', 6);
              $pdf->Ln(-5.5);
              
              $pdf->Cell(47,5,$fName. " " . $mName ." " . $lName);
              $pdf->Ln(3);
              $pdf->Cell(47,5,$bday);
              $pdf->Ln(5);
              $pdf->Multicell(47,2,utf8_decode($aNumber . " " . $aStreet . " " . $aBrgy . " " .$aCity ." " . $aDistrict . " " . $aZip));
              $pdf->Ln(0);
              $pdf->SetFont('Courier', 'B', 8);
              $pdf->SetY(18);    // set the cursor at Y position 5
              $pdf->Cell(9);
              $pdf->Cell(47,5,$policy);
              $pdf->Ln(3.5);
              $pdf->Cell(9);
              $pdf->Cell(47,5,$expire);
             
             
          
             
               
          $pdf->SetFont('Courier', 'B', 7);
          $pdf->Ln(7);
          $pdf->Cell(51.5);
          $pdf->Cell(20.9,5,$id,0,0,'C');


              $pdf->Output();
              exit;
    
          }




          public function cardCode($id,Fpdf $pdf)
          {

            $id = $this->decSess($id);
         
            $cardQuery = issue_card::where("card_id", $id)
            ->select("*")
            ->get()
            ->collect()
            ->first();
            
            if($cardQuery->card_type == 'SILVER'){
              $cardCode = "SL";
             
            }elseif($cardQuery->card_type == 'GOLD'){
              $cardCode = "GL";
              
            }else{
              $cardCode = "PL";
              
            }



            $test = "Card Number: " . $id . "\n" . 
            " Name: ". $cardQuery->c_name . "\n" . 
            "Birth Day: " . $cardQuery->c_bday. "\n" . 
            "Address: " . $cardQuery->c_add . "\n" .
            "Policy Number: " . $cardQuery->c_policy  . "\n" . 
            "Card Expiration: " . $cardQuery->c_expire ;

          $full=urlencode($id);

          
          $pdf=new FPDF('L','mm',array(86,54));
          $pdf->AddPage();
          $pdf->Image('image/' .$cardCode . ".jpg", 0, 0, 86,54); 
          $pdf->AddPage();
          $pdf->Image('image/cardback.jpg', 0, 0, 85.6,54.5); 
          $pdf->Image('http://chart.apis.google.com/chart?cht=qr&chs=450x450&chl='. $full,57,4,30,30,'PNG');
          $pdf->SetFont('Courier', 'B', 6);
          $pdf->Ln(-5.5);
          
          $pdf->Cell(47,5,$cardQuery->c_name);
          $pdf->Ln(3);
          $pdf->Cell(47,5,$cardQuery->c_bday);
          $pdf->Ln(5);
          $pdf->Multicell(47,2,utf8_decode($cardQuery->c_add));
          $pdf->Ln(0);
          $pdf->SetFont('Courier', 'B', 8);
          $pdf->SetY(18);    // set the cursor at Y position 5
          $pdf->Cell(9);
          $pdf->Cell(47,5,$cardQuery->c_policy);
          $pdf->Ln(3.5);
          $pdf->Cell(9);
          $pdf->Cell(47,5,$cardQuery->c_expire);
      
         
      
         
          $pdf->SetFont('Courier', 'B', 7);
          $pdf->Ln(7);
          $pdf->Cell(51.5);
          $pdf->Cell(20.9,5,$id,0,0,'C');


          $pdf->Output();
          exit;
          
          }



       


         

}
