<?php


namespace App\Http\Controllers;

use App\Models\ins_info;
use App\Models\issue_card;
use App\models\est_tran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Support\Facades\DB;

class repMeminfo extends Fpdf
{

    // START CELL FITT
    function CellFit($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $scale=false, $force=true)
    {
        //Get string width
        $str_width=$this->GetStringWidth($txt);

        //Calculate ratio to fit cell
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $ratio = ($w-$this->cMargin*2)/$str_width;

        $fit = ($ratio < 1 || ($ratio > 1 && $force));
        if ($fit)
        {
            if ($scale)
            {
                //Calculate horizontal scaling
                $horiz_scale=$ratio*100.0;
                //Set horizontal scaling
                $this->_out(sprintf('BT %.2F Tz ET',$horiz_scale));
            }
            else
            {
                //Calculate character spacing in points
                $char_space=($w-$this->cMargin*2-$str_width)/max(strlen($txt)-1,1)*$this->k;
                //Set character spacing
                $this->_out(sprintf('BT %.2F Tc ET',$char_space));
            }
            //Override user alignment (since text will fill up cell)
            $align='';
        }

        //Pass on to Cell method
        $this->Cell($w,$h,$txt,$border,$ln,$align,$fill,$link);

        //Reset character spacing/horizontal scaling
        if ($fit)
            $this->_out('BT '.($scale ? '100 Tz' : '0 Tc').' ET');
    }

    //Cell with horizontal scaling only if necessary
    function CellFitScale($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,true,false);
    }

    //Cell with horizontal scaling always
    function CellFitScaleForce($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,true,true);
    }

    //Cell with character spacing only if necessary
    function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,false);
    }

    //Cell with character spacing always
    function CellFitSpaceForce($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        //Same as calling CellFit directly
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,true);
    }
    // END CELL FITT

    

//START HEADER AND FOOTER
    
    function HeaderP()
    {
        // Logo
        $this->Image('image/logo.png', 5, 5, 40);
        // Arial bold 15
        $this->SetFont('Times', 'B', 17);
        // Move to the right
        $this->Cell(25);
        $this->Cell(160, 10, 'Secure Prime Insurance Agency Corporation ', 0, 0, 'C');

        $this->SetFont('Times', 'B', 10);
        $this->Ln(7);
        $this->Cell(25);
        $this->Cell(160, 10, '17E Room 202 2nd Floor ISecure Bldng. T. Serrano St. Brgy Marulas Valenzuela City, 1440' , 0, 0, 'C');
        $this->Ln(7);
        $this->Cell(25);
        $this->Cell(160, 10, 'Tel: (02) 8292-0508' . " " . "Cell: 09177561264", 0, 0, 'C');
        $this->Ln(25);
        // Line break
     
    }

    function HeaderL()
    {
        // Logo
        $this->Image('image/logo.png', 5, 5, 45);
        // Arial bold 15
        $this->SetFont('Times', 'B', 17);
        // Move to the right
        $this->Cell(280, 10, 'Secure Prime Insurance Agency Corporation ', 0, 0, 'C');
        $this->SetFont('Times', 'B', 10);
        $this->Ln(7);
        $this->Cell(280, 10, '17E Room 202 2nd Floor ISecure Bldng. T. Serrano St. Brgy Marulas Valenzuela City, 1440' , 0, 0, 'C');
        $this->Ln(7);
        $this->Cell(280, 10, 'Tel: (02) 8292-0508' . " " . "Cell: 09177561264", 0, 0, 'C');
        $this->Ln(20);
        
       
    }



    function FooterP()
    {
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    $this->AliasNbPages();
    $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }


    function FooterL()
    {
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    $this->SetX(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->AliasNbPages();
    $this->Cell(0, 10, 'Page ' . $this->PageNo() . ' / {nb}', 0, 0, 'C');

    }


  public function Header()
    {
        if ($this->CurOrientation === 'L') {
            $this->HeaderL();
        } else {
            $this->HeaderP();
        }
    }



    function Footer()
    {

        if ($this->CurOrientation === 'L') {
            $this->FooterL();
        } else {
            $this->FooterP();
        }
    }
//END HEADER AND FOOTER




  //START MEMBER
    private function repList($civil,$gender,$educ,$reg, $aFrom, $aTo){

        if(empty($civil)){
            $civil = "%";  
        }
        if(empty($gender)){
            $gender = "%";
        }
        if(empty($educ)){
            $educ = "%";
        }
        if(empty($reg)){
            $reg = "%";
        }
        if(empty($aFrom)){
            $aFrom=1;
        }
        if(empty($aTo)){
            $aTo=100;
        }

        
        $repQuery = ins_info::where('ins_civil', "like", $civil)
        ->where('ins_gender', "like", $gender)
        ->where('ins_educ', "like", $educ)
        ->where('ins_religion', "like", $reg)
        ->whereBetween(DB::raw('TIMESTAMPDIFF(YEAR, ins_bDay, CURDATE())'), [$aFrom,$aTo])
        ->select("*")
        ->get()->collect();
       
        return $repQuery;

    }


    function bCon($inCivil,$inGender, $inEduc, $inRel, $aFrom, $aTo){
        
        if(empty($inCivil)){ $inCivil = " All Status"; }
        if(empty($inGender)){ $inGender = " All Gender"; }
        if(empty($inEduc)){ $inEduc = " All Education"; }
        if(empty($inRel)){ $inRel = " All Religion"; }
        if(empty($aFrom) || empty($aTo)){ $bracket = "All Ages" ; }else{ $bracket = $aFrom . " / " . $aTo;  }
    
        $this->Ln(5);
        $this->SetFont('Times', '', 11);
        $this->Cell(25, 5, "Civil Status : " , 0,0, "L");
        $this->SetFont('Times', 'B', 11);
        $this->Cell(28, 5,  $inCivil, 0,0, "L");
        
        $this->SetFont('Times', '', 11);
        $this->Cell(18, 5, "Gender : " , 0,0, "L");
        $this->SetFont('Times', 'B', 11);
        $this->Cell(28, 5,  $inGender, 0,0, "L");

        $this->SetFont('Times', '', 11);
        $this->Cell(23, 5, "Education : " , 0,0, "L");
        $this->SetFont('Times', 'B', 11);
        $this->Cell(35, 5,  $inEduc, 0,0, "L");

        $this->SetFont('Times', '', 11);
        $this->Cell(20, 5, "Religion : " , 0,0, "L");
        $this->SetFont('Times', 'B', 11);
        $this->Cell(35, 5,  $inRel, 0,0, "L");
        
        $this->SetFont('Times', '', 11);
        $this->Cell(25, 5, "Age Bracket : " , 0,0, "L");
        $this->SetFont('Times', 'B', 11);
        $this->Cell(20, 5,   $bracket , 0,0, "L");
    }




    // MAIN BODY 
    function mainbody($request){

        $this->SetFont('Times', '', 18);
        $this->Cell(280, 6, "Members Information Reports" , 0,0, "C");
        $this->SetFont('Times', 'B', 11);
        $this->Ln(12);
        $this->Cell(220);
        $this->Cell(40, 5,"Date As Of : " . date("F d, Y")  ,0,0,"L");
        $this->Ln(10);   
        $this->bCon($request->civil, $request->gender, $request->educ, $request->rel, $request->ageFrom, $request->ageTo);
        $this->Ln(10);   
       
        $this->SetFont('Times', 'B', 11);
        $this->Cell(30, 5, "Ref #", 1,0, "C");
        $this->Cell(40, 5, 'Full Name', 1, 0, 'C');
        $this->Cell(30, 5, 'Birth Place', 1, 0, 'C');
        $this->Cell(30, 5, 'BirthDay', 1, 0, 'C');
        $this->Cell(30, 5, 'Age', 1, 0, 'C');
        $this->Cell(30, 5, 'Civil Status', 1, 0, 'C');
        $this->Cell(30, 5, 'Gender', 1, 0, 'C');
        $this->Cell(30, 5, 'Education', 1, 0, 'C');
        $this->Cell(30, 5, 'Religion', 1, 0, 'C');
        
        $this->SetFont('Times', '', 9);

        $repConQue = $this->repList($request->civil, $request->gender, $request->educ,$request->rel, $request->ageFrom, $request->ageTo);

        if(!empty($repConQue[1])){
            //START OF LOOPING
        for($i = 0; $i< count($repConQue);$i++){

            //START GET AGE
            $bdate = Carbon::parse($repConQue[$i]->ins_bDay);
            $today = Carbon::now();
            $ageFor = $today->diff($bdate);
            $age = $ageFor->y;
            //END GET AGE

        $this->Ln(5);
        $this->Cell(30, 5, $repConQue[$i]->ins_ref, 1,0, "C");
        $this->CellFitScale(40, 5,$repConQue[$i]->ins_fname . " " . $repConQue[$i]->ins_mname . " " . $repConQue[$i]->ins_lname ." " . $repConQue[$i]->ins_suffix,1,0,"C");
        $this->Cell(30, 5, $repConQue[$i]->ins_bPlace, 1, 0, 'C');
        $this->Cell(30, 5, $repConQue[$i]->ins_bDay, 1, 0, 'C');
        $this->Cell(30, 5, $age, 1, 0, 'C');
        $this->Cell(30, 5, $repConQue[$i]->ins_civil, 1, 0, 'C');
        $this->Cell(30, 5, $repConQue[$i]->ins_gender, 1, 0, 'C');
        $this->Cell(30, 5, $repConQue[$i]->ins_educ, 1, 0, 'C');
        $this->Cell(30, 5, $repConQue[$i]->ins_religion, 1, 0, 'C');
      
                 }
                 //END OF LOOPING
}else{
    $this->Ln(5);
    $this->SetFont('Times', 'B', 12);
    $this->SetTextColor(255, 0, 0);
    $this->Cell(280, 10,"No Record Found", 1,0, "C");
}

    }

    //MAIN OUTPUT
    function repMemIn(Request $request)
    {
        $pdf = new repMeminfo('L', 'mm', 'A4');

        $pdf->AddPage();
       
        $pdf->mainbody($request);
        $pdf->Output();
        exit;
    }

    //END MEMBER REPORT







    //START CARD



   public function cardQuery($cardType, $cardAqFrom, $cardAqTo){

        if(empty($cardType)){
            $cardType = "%";
        }
        if(empty($cardAqFrom)){
            $cardAqFrom = "0000-00-00";
        }
        if(empty($cardAqTo)){
            $cardAqTo = "9999-12-31";
        }

        $cQuery = issue_card::where('card_type' , 'like', $cardType)
        ->where('card_issDate', '>=', $cardAqFrom)
        ->where('card_issDate', '<=', $cardAqTo)
        ->get();
        return $cQuery;         
    }




    

    public function cardBody($request){

        $this->SetFont('Times','B',16);
        $this->Cell(280, 10,"Released Card", 0, 0, 'C');
        $this->Ln(15);
        $this->SetFont('Times','B',10);
        $this->Cell(280, 5,  "Date As Of : ". date("F d, Y"), 0, 0, 'R');

        $cardQueryHandel = $this->cardQuery($request->cType, $request->dFrom, $request->dTo);

        if(empty($request->cType)){
            $cardT = "All Types of Card";
        }else{
            $cardT = $request->cType;
        }
        if(empty($request->dFrom) || empty($request->dTo)){
           $dCFrom = $dCTo  = "All Dates";
           
        }else{
            $dCFrom = $request->dFrom;
            $dCTo = $request->dTo;
        }
       
        $this->Ln(5);
        $this->SetFont('Times','',12);
        $this->Cell(40, 6,"Card Type : ", 0, 0, 'C');
        $this->SetFont('Times','B',12);
        $this->Cell(40, 6,$cardT, 0, 0, 'C');
        $this->SetFont('Times','',12);
        $this->Cell(50, 6,"Date Issued From : ", 0, 0, 'C');
        $this->SetFont('Times','B',12);
        $this->Cell(50, 6,$dCFrom, 0, 0, 'L');
        $this->SetFont('Times','',12);
        $this->Cell(50, 6,"Date Issued From : ", 0, 0, 'C');
        $this->SetFont('Times','B',12);
        $this->Cell(50, 6,$dCTo, 0, 0, 'L');

        $this->Ln(10);
        $this->SetFont('Times','B',12);
        $this->Cell(50, 6,"Card #", 1, 0, 'C');
        $this->Cell(40, 6,"Card Type", 1, 0, 'C');
        $this->Cell(60, 6,"Card Holder", 1, 0, 'C');
        $this->Cell(50, 6,"Policy Number", 1, 0, 'C');
        $this->Cell(40, 6,"Card Aquired", 1, 0, 'C');
        $this->Cell(40, 6,"Expiration Date", 1, 0, 'C');
        $this->Ln(6);
        
        for($i=0; $i < count($cardQueryHandel); $i++){

           
            $this->SetFont('Times','',12);
            $this->Cell(50, 5,$cardQueryHandel[$i]->card_id, 1, 0, 'C');
            $this->Cell(40, 5,$cardQueryHandel[$i]->card_type, 1, 0, 'C');
            $this->Cell(60, 5,$cardQueryHandel[$i]->c_name, 1, 0, 'C');
            $this->Cell(50, 5,$cardQueryHandel[$i]->c_policy, 1, 0, 'C');
            $this->Cell(40, 5,$cardQueryHandel[$i]->card_issDate, 1, 0, 'C');
            $this->Cell(40, 5,$cardQueryHandel[$i]->c_expire, 1, 0, 'C');
            $this->Ln(5);
        }
      

        // 
        // $this->Cell(0, 10, $request->cType, 0, 0, 'C');
      
    }






    //CARD BODY OUTPUT
    function repCardIn(Request $request)
    {
        $pdf = new repMeminfo('L', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->cardBody($request);
        $pdf->Output();
        exit;
    }


    //END CARD




    //START ESTABLISHEDMENT REPORT


    function estQuery($tDFrom,$tDTo){

            if(empty($tDFrom)|| empty($tDTo)){
                $tDFrom = "0000-00-00";
                $tDTo= "9999-12-31";
            }

            $estSql = DB::table("est_trans as a")
            ->join("est_estabinfos as b", "a.est_id", '=', 'b.est_id')
            ->join("ins_infos as c", "a.ins_id", "c.ins_ref")
           
            ->select("a.*", 'a.id as TransID', "b.*", "c.*")
            ->get();

            return $estSql;
    }



    function estBody($request){


        $estHandel = $this->estQuery($request->tFrom, $request->tTo);

        if(empty($request->tFrom)||empty($request->tTo)){
            $tfrom = $tto = "All Transaction Date was Selected";
        }else{
            $tfrom = $request->tFrom;
            $tto = $request->tTo;
        }




        $this->SetFont('Times','B',16);
        $this->Cell(280, 10,"Establishedment Transcation Report", 0, 0, 'C');
        $this->Ln(15);
        $this->SetFont('Times','B',10);
        $this->Cell(280, 5,  "Date As Of : ". date("F d, Y"), 0, 0, 'R');
        $this->Ln(15);
        $this->SetFont('Times','B',12);
        $this->Cell(70, 5,"Transcation Date Form:", 0, 0, 'C');
        $this->Cell(70, 5,$tfrom, 0, 0, 'C');
        $this->Cell(70, 5,"Transcation Date To:", 0, 0, 'C');
        $this->Cell(70, 5,$tto, 0, 0, 'C');
       
        $this->Ln(7);
        $this->Cell(40, 5,"Trans #", 1, 0, 'C');
        $this->Cell(50, 5,"Card #", 1, 0, 'C');
        $this->Cell(60, 5,"Client Name", 1, 0, 'C');
        $this->Cell(50, 5,"Discount %", 1, 0, 'C');
        $this->Cell(40, 5,"Trans Date", 1, 0, 'C');
        $this->Cell(40, 5,"Trans Time", 1, 0, 'C');

        for($i = 0; $i < count($estHandel); $i++){

            $this->Ln(5);
            $this->SetFont('Times','',10);
            $this->Cell(40, 5,$estHandel[$i]->TransID, 1, 0, 'C');
            $this->Cell(50, 5,$estHandel[$i]->card_id, 1, 0, 'C');
            $this->Cell(60, 5,$estHandel[$i]->ins_fname . " " . $estHandel[$i]->ins_mname. " " . $estHandel[$i]->ins_lname . " " . $estHandel[$i]->ins_suffix , 1, 0, 'C');
            $this->Cell(50, 5,$estHandel[$i]->est_discount, 1, 0, 'C');
            $this->Cell(40, 5,$estHandel[$i]->est_date, 1, 0, 'C');
            $this->Cell(40, 5,$estHandel[$i]->est_time, 1, 0, 'C');

      
        }

        
        
      


    }




    function repEstIn(Request $request){
        $pdf = new repMeminfo('L', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->estBody($request);
        $pdf->Output();
        exit;
        
    }
    






//END ESTABLISHEDMENT REPORT



}





