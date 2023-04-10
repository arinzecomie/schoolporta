<?php
require_once 'core/init.php';
require('fpdf.php');
$user = new User();

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo headerbosco
    $this->Image('resault/logobuss.png',10,6,30);
    $this->Image('resault/headerbosco.png',170,6,28);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'ST. JOHN BOSCO SEMINARY ISUANIOCHA',0,0,'C');
    // Line break
    $this->Ln(12);
   // Times 12
   $this->Cell(80);
   $this->SetFont('Times','',12);
    $this->Cell(30,10,'P.O.BOX 170 Awka, Anambra State,Nigeria',0,0,'C');
    $this->Ln(12);
    
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function  headerTable($stdid){
  $dates =  $_SESSION['t_colle'][$stdid][ array_keys($_SESSION['t_colle'][$stdid])[0]];
  $studclass= array('NA','A','B','C','D','E','F','G');
$dater = explode('_', Session::get('asst'));
 switch ( Session::get('termst')) {
    case 1:
        $ttit = 'First Term';
        $tnam = '1st';
        break;
    case 2:
         $ttit = 'Second Term';
        $tnam = '2nd';
        break;
    case 3:
        $ttit = 'Third Term';
        $tnam = '3rd';
        break;
}
        
        
//   print_r($dates);
    // die();
     $this->SetFont('Arial','B',15);
     $this->SetFillColor(51,153,255);
     $this->SetTextColor(255,255,255);
    $this->Cell(0,10, $ttit." ". $dater[1]."/".$dater[2]." Session Report",0,0,'C',true);
    // Line break
    $this->Ln(); 
    $this->SetFont('Times','B',12);
    $this->SetFillColor(242,242,242);
     $this->SetTextColor(0); 
    $this->Cell(40,10,'Registration Number ',0,0,'C',true);
    $this->Cell(85,10,'Name of Student ',0,0,'C',true); 
    $this->Cell(35,10,'Class',0,0,'C',true); 
    // $this->Cell(40,10,'Session',0,0,'C',true); 
    $this->Cell(30,10,'Term',0,0,'C',true);
    $this->Ln();
     $this->SetTextColor(51,153,255);
    $this->Cell(40,8,$stdid,0,0,'C',true);
    $this->Cell(85,8,ucwords(strtolower($_SESSION['t_colle'][$stdid][ array_keys($_SESSION['t_colle'][$stdid])[0]][3])),0,0,'C',true); 
    $this->Cell(35,8,$_SESSION['clas'][$_SESSION['idcls']].$studclass[$_SESSION['t_colle'][$stdid][ array_keys($_SESSION['t_colle'][$stdid])[0]][12]],0,0,'C',true); 
    $this->Cell(30,8,$tnam,0,0,'C',true);
    $this->Ln();
}

function  resutd($stdid){
    $dates =  $_SESSION['t_colle'][$stdid][ array_keys($_SESSION['t_colle'][$stdid])[0]];
    $this->SetFont('Arial','B',15);
     $this->SetFillColor(120,145,186);
     $this->SetTextColor(255,255,255);
    $this->Cell(0,8,'Result Status',0,0,'C',true);
    // Line break
    $this->Ln(); 
    $this->SetFont('Times','B',12);
    $this->SetFillColor(242,242,242);
     $this->SetTextColor(18,48,59); 
     $this->Cell(38,10,'Total score',0,0,'C',true); 
    $this->Cell(38,10,'Average Score',0,0,'C',true);
    $this->Cell(38,10,'Group Position',0,0,'C',true); 
    $this->Cell(38,10,'Class Position',0,0,'C',true); 
    $this->Cell(38,10,'Pass Status',0,0,'C',true); 
    $this->Ln();
    $this->SetTextColor(0);
    $this->Cell(38,8,$_SESSION['stud_pos'][$stdid],0,0,'C',true);
    $this->Cell(38,8,round($_SESSION['stud_avr'][$stdid],2).'%',0,0,'C',true);
    $this->Cell(38,8,$_SESSION['overcls_pos'][ $dates[12]][$stdid] .' out of '.count($_SESSION['overcls_pos'][ $dates[12]]),0,0,'C',true); 
    $this->Cell(38,8,$_SESSION['over_pos'][$stdid] .' out of '.count($_SESSION['over_pos']),0,0,'C',true); 
    if($_SESSION['idcls'] > 3){
    $pass=(in_array(26, $_SESSION[passer][$stdid])||in_array(27, $_SESSION[passer][$stdid])||in_array(31, $_SESSION[passer][$stdid])||in_array(40, $_SESSION[passer][$stdid])||count($_SESSION[passer][$stdid]) > 4) ?  0 : 1;
    }else{
    $pass=(in_array(5, $_SESSION[passer][$stdid])||in_array(8, $_SESSION[passer][$stdid])||in_array(16, $_SESSION[passer][$stdid])||in_array(13, $_SESSION[passer][$stdid])||count($_SESSION[passer][$stdid]) > 4) ?  0 : 1;   
    }
    
    if($pass){
    $this->SetTextColor(0,204,0);
    $this->Cell(38,8,'Passed ',0,0,'C',true); 
    }else{
     $this->SetTextColor(234,6,6);
    $this->Cell(38,8,'Failed ',0,0,'C',true);     
    }
    $this->Ln();
}

function Shead(){
    $this->SetFont('Times','',8); 
    $this->SetDrawColor(255,255,255); 
    $this->SetTextColor(255,255,255);
    $this->SetFillColor(51,153,255);
    $this->Cell(23,7,'Subjects',1,0,'C',true);
    $this->Cell(23,7,'1st Test',1,0,'C',true); 
    $this->Cell(23,7,'2nd Test',1,0,'C',true); 
    $this->Cell(23,7,'Assignment',1,0,'C',true); 
    $this->Cell(21,7,'Examination',1,0,'C',true);
    $this->Cell(17,7,'Avg. Score',1,0,'C',true);
    $this->Cell(12,7,'Grade',1,0,'C',true);
    $this->Cell(24,7,'Class Position',1,0,'C',true);
    $this->Cell(24.5,7,'Group Position',1,0,'C',true);
    $this->Ln();
}

function viewTable($stdid,$user){
    
    $this->SetFont('Times','',7); 
     $i = 0;
     $j =0;
     foreach ($_SESSION['t_colle'][$stdid] as $key => $value) { 
        $user->findoder('subject',array('subj_id', '=',$key ));
        $sbjname =  $user->newdata()[0]; 
        //each subject class student positioning
        foreach ($_SESSION['clsub_pos']  as $ky =>  $cls) { 
            if($ky == $key) {
                
             arsort($cls[$value[12]]);
              $i = 1;
               foreach ($cls[$value[12]] as $pk => $vl) {
                  $sbjcls_pos[$key][$pk] = $i;
                  $i++;
               }
               
            }
            
          }
          
          
        $this->SetTextColor(0,0,102);
        if($j == 1){
            $j = 0;
            $this->SetFillColor(253,254,255); 
            
        }else{
            $this->SetFillColor(234,239,247);
            $j = 1; 
        }
        $w = $this->GetStringWidth($sbjname->subj_name);
        $w = floor($w);
        if($w > 21){
            $this->SetFont('Times','',6); 
            $dv = 2.5;
        } 
        if($w > 25 && $w > 21){
            $this->SetFont('Times','',6); 
            $dv = 2.5; 
        }else{ 
            $dv = 5;
  
        }
        
        $this->MultiCell(23,$dv,$sbjname->subj_name,1,'C',true);
        $this->SetFont('Times','',7);
        $this->Ln(-5);
        $this->Cell(23);
        $this->Cell(23,5,$value[4],1,0,'C',true); 
        $this->Cell(23,5,$value[5],1,0,'C',true);
        $this->Cell(23,5,$value[6],1,0,'C',true);
        $this->Cell(21,5,$value[7],1,0,'C',true);
        $this->Cell(17,5,$value[8],1,0,'C',true);
        if(strlen($value[9])> 1){
            $this->SetTextColor(251, 0, 6);
           
            $this->Cell(12,5,'F',1,0,'C',true); 
            $this->SetTextColor(0,0,102);
        }else{
         
         $this->Cell(12,5,$value[9],1,0,'C',true);
        }
        
        $this->Cell(24,5,$sbjcls_pos[$key][$value[2]].' out of '.count($sbjcls_pos[$key]),1,0,'C',true); 
        $this->Cell(24.5,5,$_SESSION['oversbj_pos'][$key][$value[2]].' out of '.count($_SESSION['oversbj_pos'][$key]),1,0,'C',true);
        $this->Ln();
        
    }


     $this->SetFillColor(51,153,255);
     $this->SetTextColor(255,255,255);
     $this->SetFont('Arial','',12);
     $user->getdata(array('rector_not') ,'stud_de',array('stud_code', '=', $stdid));
  $class =  $user->newdata()[0]; 
  $rcomment = json_decode($class->rector_not);
  //$rcomment[0]
   $this->Cell(0,7,$rcomment[0],0,0,'C',true);
   
    $this->Ln(9);
}

function coment($stdid,$user){
    $comment= $_SESSION['thenot'][$stdid];
    if (isset($comment['stud_note'])) {$tcomment = $comment['stud_note'];  }else{  $tcomment[0]='No comment yet';$tcomment[1]='No name yet';} 
     if (isset($comment['rector_not'])) { $rcomment  = $comment['rector_not'];  }else{  $rcomment[0]='No comment yet';$rcomment[1]='No name yet';} 
    $this->SetFillColor(120,145,186);
    $this->SetTextColor(255,255,255);
    $this->Cell(127,7,'Rector\'s Comment',0,0,'C',true);
    // Cognitive Keys head
    $this->Cell(3);
    $this->Cell(60,6,'Cognitive Keys',0,0,'C',true);
     // Cognitive Keys
     $this->Ln();
     $this->Cell(130);
     $this->SetFillColor(253,254,255);
     $this->SetTextColor(0,0,102);
     $this->Cell(20,6,'Distinction',0,0,'C',true);
     $this->Cell(20,6,'A',0,0,'C',true);
     $this->Cell(20,6,'70 to 100',0,0,'C',true);
     $this->Ln();
     $this->Cell(130);
     $this->SetFillColor(234,239,247);
     $this->Cell(20,6,'Credit',0,0,'C',true);
     $this->Cell(20,6,'C',0,0,'C',true);
     $this->Cell(20,6,'55 to 69',0,0,'C',true);
     $this->Ln();
     $this->Cell(130);
     $this->SetFillColor(253,254,255);
     $this->Cell(20,6,'Pass',0,0,'C',true);
     $this->Cell(20,6,'P',0,0,'C',true);
     $this->Cell(20,6,'44 to 54',0,0,'C',true);
     $this->Ln();
     $this->Cell(130);
     $this->SetFillColor(234,239,247);
     $this->Cell(20,6,'Fail',0,0,'C',true);
     $this->SetTextColor(251, 0, 6);
     $this->Cell(20,6,'F',0,0,'C',true);
     $this->SetTextColor(0,0,102);
     $this->Cell(20,6,'0 to 44',0,0,'C',true);
     $this->Ln();
     $this->Cell(130);
     $this->SetTextColor(255,255,255);
     $this->SetFillColor(120,145,186);
     $this->Cell(60,6,'',0,0,'C',true);
    $this->Ln(-23);
    $this->SetTextColor(0);
    $this->SetDrawColor(120,145,186); 
    // Coments rector
    $this->SetFont('Arial','I',8);
    $this->MultiCell(127,4,$rcomment[0],1);
    $this->Ln(-0.5);
    $this->SetTextColor(255,255,255);
    $this->SetFillColor(120,145,186);
    $this->Cell(127,5,'By '.$rcomment[1],0,0,'C',true);
    // Line break
    $this->Ln(7);
    $this->SetFillColor(120,145,186);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','',12);
    $this->Cell(127,7,'Form Master\'s Comment',0,0,'C',true);
    $this->Ln();
    $this->SetTextColor(0);
    $this->SetDrawColor(120,145,186); 
    // Coments rector
    $this->SetFont('Arial','I',8);
    $this->MultiCell(127,4,$tcomment[0],1);
    $this->Ln(-0.5);
    $this->SetTextColor(255,255,255);
    $this->SetFillColor(120,145,186);
    $this->Cell(127,5,'By '.$tcomment[1],0,0,'C',true);
    $this->Ln(7);
    $this->SetFillColor(51,153,255);
    $this->SetTextColor(255,255,255);
   $this->Cell(0,7,'Notices',0,0,'C',true);
   $this->Ln();
    $this->SetTextColor(0);
    $this->SetDrawColor(51,153,255); 
    $user->getdata(array('comments') ,'trem_note',array('id', '=', 1));
 $cmt =  $user->newdata()[0];   
    // Coments zone
    $this->MultiCell(0,7,$cmt->comments,1);
}
function PrintChapter($num, $user)
{
    $this->AddPage();
    $this->headerTable($num);
    $this->resutd($num);
    $this->Shead();
    $this->viewTable($num,$user);
    $this->coment($num,$user);
    
}
}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->PrintChapter(Input::get('studid'), $user);   
$pdf->Output();
   // 

//
?>