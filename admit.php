<?php
require('fpdf.php');

class PDF extends FPDF
{
    
protected $B = 0;
protected $I = 0;
protected $U = 0;
protected $HREF = '';   
// Page header



function WriteHTML($html)
{
    // HTML parser
    $html = str_replace("\n",' ',$html);
    $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
    foreach($a as $i=>$e)
    {
        if($i%2==0)
        {
            // Text
            if($this->HREF)
                $this->PutLink($this->HREF,$e);
            else
                $this->Write(5,$e);
        }
        else
        {
            // Tag
            if($e[0]=='/')
                $this->CloseTag(strtoupper(substr($e,1)));
            else
            {
                // Extract attributes
                $a2 = explode(' ',$e);
                $tag = strtoupper(array_shift($a2));
                $attr = array();
                foreach($a2 as $v)
                {
                    if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                        $attr[strtoupper($a3[1])] = $a3[2];
                }
                $this->OpenTag($tag,$attr);
            }
        }
    }
}

function OpenTag($tag, $attr)
{
    // Opening tag
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,true);
    if($tag=='A')
        $this->HREF = $attr['HREF'];
    if($tag=='BR')
        $this->Ln(5);
}

function CloseTag($tag)
{
    // Closing tag
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,false);
    if($tag=='A')
        $this->HREF = '';
}

function SetStyle($tag, $enable)
{
    // Modify style and select corresponding font
    $this->$tag += ($enable ? 1 : -1);
    $style = '';
    foreach(array('B', 'I', 'U') as $s)
    {
        if($this->$s>0)
            $style .= $s;
    }
    $this->SetFont('',$style);
}

function PutLink($URL, $txt)
{
    // Put a hyperlink
    $this->SetTextColor(0,0,255);
    $this->SetStyle('U',true);
    $this->Write(5,$txt,$URL);
    $this->SetStyle('U',false);
    $this->SetTextColor(0);
}


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
    $this->Ln(20);
    
}

}


$servername = "127.0.0.1";
$username = "stjohqse_root";
$password = 'g#dqWT^8U3@a';
$dbname = "stjohqse_Wizarddb";
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if(isset($_GET['id'])){
     $dat = $_GET['id'];

    $data = $pdo->query("SELECT * FROM admit where id = $dat")->fetch();  
     
  }


$namer =  ucwords(strtolower(trim($data['name'])));
   $examn = $data['exam_n'];
if(trim($data['stats']) =='PASSED'){
   
    $semi = array('','St. John Bosco Seminary Isuaniocha','Ekwulobia Seminary','Onitsha Seminary');
    $semina = $semi[1];
    $subj = 'INVITATION FOR  INTERVIEW 2022';
   if($data['class'] == 1){ 
$html = 'Dear '.$namer.' ,<br><br>

This is to inform you that you passed the entrance exam into '.$semina.', which took place on Saturday, 12th March, 2022. Congratulations! You are hereby invited for an interview, which will take place from 
<b> Tuesday 26th April, 2022 to Wednesday 27th April, 2022.</b>
<br><br><b>While coming, bring with you the following:</b><br><br>
 <b>1.</b>	Interview and medical tests fees of Ten  thousand  naira (N10,000) only<br>
 <b>2.</b>	An enclosed form to be completed by the Parish Priest.<br>
 <b>3.</b>	A photocopy of your baptismal card.<br>
 <b>4.</b>	A testimonial from your present school\'s Head teacher.  <br>
 <b>5.</b>	Your report cards from Primary 5 to date.  <br>
 Writing materials, sleeping dress, articles of clothing, soap, tissue, tooth paste and brush, towel, a pair of slippers, a comb, bucket, plate, cup, spoon, fork, torch light etc.<br><br>
<b> NB:</b><br>
       
<b>I.</b>	The interview lasts from 26th to 27th April as stated above, and you<b> MUST</b> be in the Seminary before <b>9:00am</b> of the first day of the interview. Written examinations in <b>English Language</b> and<b> Mathematics</b> begin at exactly 9:00am. <br><br>
<b>II.</b>	You must attach to the enclosed form, two recent passport photos of yourself. The passport photos must be identified and signed at the back by your parish priest.<br><br>
<b>III.</b> If these passports are not identified and signed, you will not be admitted for interview.<br><br>
<b>IV.</b>	Any candidate who does not come with all these requirements will  <b>NOT </b>  be admitted for the interview.  <br><br>
<b>God bless you.</b> ';
}else{
$html = 'Dear '.$namer.' ,<br><br>
This is to inform you that you passed the entrance exam of St. John Bosco seminary Isuaniocha, which took place on Saturday, 19th March, 2022. Congratulations! You are hereby invited for an interview, which will take place on 
 <b>Saturday 11th June, 2022.</b><br><br><b>While coming, bring with you the following:</b><br><br>
 <b>1.</b>	Medical tests fee of Five thousand  naira (₦5000) only.<br>
 <b>2.</b>	An enclosed form to be completed by the Parish Priest.<br>
 <b>3.</b>	A photocopy of your baptismal card.<br>
 <b>4.</b>	A testimonial from your present school\'s principal. <br>
 <b>5.</b>	Your results from JSS 2-3.  <br><br>
<b> NB:</b><br>
<b>I.</b>	The interview lasts for a day and you <b>MUST</b> be in the Seminary before <b>9:00am</b> on the day of the interview. <br><br>
<b>II.</b>	You must attach to the enclosed form, two recent passport photos of yourself. The passport photos must be identified and signed at the back by your parish priest.<br><br>
<b>III.</b>	If these passports are not identified and signed, you may not be admitted for interview.<br><br>
<b>IV.</b>	Any candidate who does not come with all these requirements will <b>NOT </b> be admitted for the interview. <br><br>
<b>God bless you.</b> ';  
}
       
   }else{
    $day = array('','March 13, 2021','March 20, 2021');
     $subj = 'REGRET';
  $html = 'Dear '.$namer.',<br><br><br>
We regret to inform you that you were not successful in the Entrance examination  into the above named seminary which took place on 19th March, 2022.  We encourage you to see it as God\'s will having done your best.<br>
Be assured of our love and good wishes.';
}


$footer = '   <br>
Yours in the Lord\'s service,<br>
Rev. Fr. Evaristus Oramah<br>
    (Academic Dean, 09078386809)';
$pdf = new PDF();
$pdf->AddPage();
 $pdf->SetFont('Arial','B',15);
     $pdf->SetFillColor(51,153,255);
     $pdf->SetTextColor(255,255,255);
    $pdf->Cell(0,10,$subj,0,0,'C',true);
    $pdf->Ln(10); 
    $pdf->SetFillColor(255);
     $pdf->SetTextColor(0);
     $pdf->Cell(0,10,'Exam No: '.$examn,0,0,'R',true);
    // Line break
    $pdf->Ln(14); 
    $pdf->SetTextColor(0);
$pdf->SetFont('Arial','',20);
$pdf->SetFontSize(14);
 
$pdf->WriteHTML($html);
$pdf->SetFontSize(12);
$pdf->SetLeftMargin(120);

$pdf->WriteHTML($footer);
$pdf->Output();
?>