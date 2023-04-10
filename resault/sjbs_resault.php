<?php
session_start();
require('../fpdf.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bbk";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo headerbosco
    $this->Image('logobuss.png',10,6,30);
    $this->Image('headerbosco.png',170,6,28);
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
function  headerTable(){
    $this->SetFont('Arial','B',15);
     $this->SetFillColor(51,153,255);
     $this->SetTextColor(255,255,255);
    $this->Cell(0,10,'First Term 2019/2020 Session Report',0,0,'C',true);
    // Line break
    $this->Ln(); 
    $this->SetFont('Times','B',12);
    $this->SetFillColor(242,242,242);
     $this->SetTextColor(0); 
    $this->Cell(40,10,'Registration Number ',0,0,'C',true);
    $this->Cell(45,10,'Name of Student ',0,0,'C',true); 
    $this->Cell(35,10,'Class',0,0,'C',true); 
    $this->Cell(40,10,'Session',0,0,'C',true); 
    $this->Cell(30,10,'Term',0,0,'C',true);
    $this->Ln();
     $this->SetTextColor(51,153,255);
    $this->Cell(40,8,'SDSS/2018/18/001',0,0,'C',true);
    $this->Cell(45,8,'Abonyi Kingsley',0,0,'C',true); 
    $this->Cell(35,8,'JSS2A',0,0,'C',true); 
    $this->Cell(40,8,'2019/2020',0,0,'C',true); 
    $this->Cell(30,8,'1st',0,0,'C',true);
    $this->Ln();
}

function  resutd(){
    $this->SetFont('Arial','B',15);
     $this->SetFillColor(120,145,186);
     $this->SetTextColor(255,255,255);
    $this->Cell(0,8,'Result Status',0,0,'C',true);
    // Line break
    $this->Ln(); 
    $this->SetFont('Times','B',12);
    $this->SetFillColor(242,242,242);
     $this->SetTextColor(18,48,59); 
    $this->Cell(45,10,'Average Score',0,0,'C',true);
    $this->Cell(55,10,'Class Position Year',0,0,'C',true); 
    $this->Cell(47,10,'Group Position',0,0,'C',true); 
    $this->Cell(43,10,'Pass Status',0,0,'C',true); 
    $this->Ln();
     $this->SetTextColor(0);
    $this->Cell(45,8,'82.61%',0,0,'C',true);
    $this->Cell(55,8,'2 out of 40',0,0,'C',true); 
    $this->Cell(47,8,'2 out of 116',0,0,'C',true); 
    $this->SetTextColor(0,204,0);
    $this->Cell(43,8,'Passed ',0,0,'C',true); 
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

function viewTable($cone){
    $this->SetFont('Times','',7); 
    $stmt = $cone->prepare("SELECT * FROM tests");
    $stmt->execute();
     $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $result =$stmt->fetchAll();
     $i = 0;
     foreach($result as $row)
    {
        $this->SetTextColor(0,0,102);
        if($i == 1){
            $i = 0;
            $this->SetFillColor(253,254,255); 
            
        }else{
            $this->SetFillColor(234,239,247);
            $i = 1; 
        }
        $w = $this->GetStringWidth($row['subject']);
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
        
        $this->MultiCell(23,$dv,$row['subject'],1,'C',true);
        $this->SetFont('Times','',7);
        $this->Ln(-5);
        $this->Cell(23);
        $this->Cell(23,5,$w,1,0,'C',true); 
        $this->Cell(23,5,$row['st'],1,0,'C',true);
        $this->Cell(23,5,$row['assin'],1,0,'C',true);
        $this->Cell(21,5,$row['exam'],1,0,'C',true);
        $this->Cell(17,5,$row['avra'],1,0,'C',true);
        $this->Cell(12,5,$row['gavr'],1,0,'C',true); 
        $this->Cell(24,5,$row['fg'],1,0,'C',true); 
        $this->Cell(24.5,5,$row['sg'],1,0,'C',true);
        $this->Ln();
        
    }


     $this->SetFillColor(51,153,255);
     $this->SetTextColor(255,255,255);
     $this->SetFont('Arial','',12);
    $this->Cell(0,7,'Congratulation. You satisfied all pass requirements. Well done!',0,0,'C',true);
    $this->Ln(9);
}

function coment(){
    $txt =' In lighthearted countries,people joked about thisphenomenon, but such serious,practical countries as England,America. ';
    $this->SetFillColor(120,145,186);
    $this->SetTextColor(255,255,255);
    $this->Cell(127,7,'Rector Comment',0,0,'C',true);
    // Cognitive Keys head
    $this->Cell(3);
    $this->Cell(60,6,'Cognitive Key',0,0,'C',true);
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
     $this->Cell(20,6,'40 to 54',0,0,'C',true);
     $this->Ln();
     $this->Cell(130);
     $this->SetFillColor(234,239,247);
     $this->Cell(20,6,'Fail',0,0,'C',true);
     $this->SetTextColor(251, 0, 6);
     $this->Cell(20,6,'F',0,0,'C',true);
     $this->SetTextColor(0,0,102);
     $this->Cell(20,6,'0 to 39',0,0,'C',true);
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
    $this->MultiCell(127,4,$txt,1);
    $this->Ln(-0.5);
    $this->SetTextColor(255,255,255);
    $this->SetFillColor(120,145,186);
    $this->Cell(127,5,'By: Fr. Okonkwo Maximus',0,0,'C',true);
    // Line break
    $this->Ln(7);
    $this->SetFillColor(120,145,186);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','',12);
    $this->Cell(127,7,'Form Master',0,0,'C',true);
    $this->Ln();
    $this->SetTextColor(0);
    $this->SetDrawColor(120,145,186); 
    // Coments rector
    $this->SetFont('Arial','I',8);
    $this->MultiCell(127,4,$txt,1);
    $this->Ln(-0.5);
    $this->SetTextColor(255,255,255);
    $this->SetFillColor(120,145,186);
    $this->Cell(127,5,'By CHOIR MASTER OGBONNAYA BARTHOLOMEW',0,0,'C',true);
    $this->Ln(7);
    $this->SetFillColor(51,153,255);
    $this->SetTextColor(255,255,255);
   $this->Cell(0,7,'Notices',0,0,'C',true);
   $this->Ln();
    $this->SetTextColor(0);
    $this->SetDrawColor(51,153,255); 
    // Coments rector
    $this->MultiCell(0,7,$txt,1);
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->headerTable();
$pdf->resutd();
$pdf->Shead();
$pdf->viewTable($conn);
$pdf->coment();
$pdf->Output();
?>