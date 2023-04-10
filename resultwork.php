<?php
 $user = new User();
 
 if(Input::exists('oldr')){
  $asse_table = Input::get('year');
    $asse_term = Input::get('term');
 }else{
     $asse_table = Session::get('asst');
    $asse_term = Session::get('termst');
 }
 
 
 if($user->data()->priority == 2){
  
   $user->findoder('stud_de',[['stud_level', '=', $_SESSION['staff_d']->staff_cl] ,'AND', ['stud_subcl', '=' ,$_SESSION['staff_d']->staff_mcl]]);  
 }else{ 
    $priority = ($user->data()->priority == 4) ? 'rector_not' : 'stud_note';
      
   $user->findoder('res_record',[['class', '=', Input::get('class')],'AND',['acc_yr','=',$asse_table]]);
  $comm =  $user->newdata(); 
  
 foreach($comm  as $V){
    $terms = 'term'.$asse_term;
    $usercom[$V->user_id] = json_decode($V->$terms,1);
  }   
     
  $user->findoder('stud_de',array('stud_level', '=', Input::get('class')));  }
  $seletor =  $user->newdata(); 
  


 function nama($inpu){
     if($inpu === 0){
      return '';
     }else{
      return $inpu;   
     } 
    } 
     
      $pascut =0;
      $notus = 	'stud_note';
   if($user->data()->priority == 4){
      $notus = 'rector_not';
      }
    
 foreach ($seletor as $v_sets) { 
     
  $user->getdata(array('full_name') ,'users',array('user_code', '=', $v_sets->stud_code));
  $name =  $user->newdata()[0];
  $user->getdata(array('stud_subcl',$notus) ,'stud_de',array('stud_code', '=', $v_sets->stud_code));
  $class =  $user->newdata()[0]; 
  $listscr = '';
     $theris = $user->findoder($asse_table,[ ['stud_code',  '=',$v_sets->stud_code],'AND', ['term', '=' ,$asse_term]]);
    if($theris){
     $listscr =  $user->newdata();
     $i = 1;
     $j = count($listscr);
     foreach ($listscr as $key => $reshow) {
    
       
      $asses_1 = $reshow->asses_1;
      $asses_2 = $reshow->asses_2;
      $asses_3 = $reshow->asses_3;
      $exam = $reshow->exam;
      $totals =$asses_1+$asses_2+$asses_3+$exam; 
      
        //   if(isset($stud_pos[$reshow->stud_code])){
 
        //         $stud_pos[$reshow->stud_code] = $stud_pos[$reshow->subj_id] + $totals;  
        //         $stud_avr[$reshow->stud_code] = $stud_pos[$reshow->stud_code]/ $i;
                
        //         $clas_pos[$class->stud_subcl][$v_sets->stud_code] = $stud_avr[$reshow->stud_code];
        //       }else{
        //         $stud_pos[$reshow->stud_code] = $totals;
        //         $stud_avr[$reshow->stud_code] = $totals;
        //         $clas_pos[$class->stud_subcl][$v_sets->stud_code] =  $stud_avr[$reshow->stud_code];
               
        //       }
         $stu_subc[$v_sets->stud_code] =  $class->stud_subcl; 
         $student_pos[$reshow->stud_code][$reshow->subj_id] = $totals;  
        $clsub_pos[$reshow->subj_id][$class->stud_subcl][$reshow->stud_code] = $totals ;      
      $sub_pos[$reshow->subj_id][$reshow->stud_code] = $totals;
      
    //  print_r($reshow); 
    //  echo "$key $totals  <br>";<span style="color:red">F<span>
    
    $namerst[$reshow->stud_code]  = $name->full_name;
    $stdcls[$reshow->stud_code]  = $class->stud_subcl;
    $thenot[$reshow->stud_code]  = $class->$notus;
      $marker = ($asses_1 == 0 ||$asses_2 == 0 ||$asses_3 == 0 || $exam == 0) ? 0 : 1 ;
      $grad = $user->grader($totals);
     
      if($grad == 2){
       $userpass[$v_sets->stud_code][] = $reshow->subj_id; 
      $grad ='<b style="color:red">F</b>';
        }
   
   
  

      $asses[1] = $v_sets->stud_id;
      $asses[2] = $v_sets->stud_code;
      $asses[3] = $name->full_name ;
       $asses[4] = $asses_1;
       $asses[5] = $asses_2;
       $asses[6] = $asses_3;
       $asses[7] = $exam; 
       $asses[8] =  $totals;
       $asses[9] = $grad  ;
       $asses[10] = $key;
       $asses[11] = $marker;
       $asses[12] = $class->stud_subcl;
      $asses[13] = $frow[$reshow->stud_code];
       
       $subasses[$reshow->subj_id] = $asses;
       $t_colle[$v_sets->stud_code] = $subasses;
       
      
      if($i == $j) {
    //   unset($userpass[$v_sets->stud_code]);   
      unset($subasses);
      
            }
       $i++;
            
     }
    
    }
  
  }
  
// print_r($student_pos);

foreach( $student_pos as $ky => $uval){
    $xxb = array_sum($uval);
      $xxav =   $xxb/count($uval);
    $stud_pos[$ky] = $xxb;
    $stud_avr[$ky] = $xxav;
    $clas_pos[$stu_subc[$ky]][$ky] =  $xxav; 
 }       
      
        
        
 // over all student positioning
 
  $i = 1;
 arsort($stud_avr);
 foreach ($stud_avr as $k => $v) {
     $over_pos[$k] = $i;
     $i++;
 }
 //each subject student positioning 
 foreach ($sub_pos as $ky => $sbj) {
  arsort($sbj);
    $i = 1;
     foreach ($sbj as $key => $vs) {
        $oversbj_pos[$ky][$key] = $i;
        $i++;
     }
   
}
//each class student positioning
 foreach ($clas_pos as $ky =>  $cls) {
  arsort($cls);
    $i = 1;
     foreach ($cls as $key => $vl) {
         
        $overcls_pos[$ky][$key] = $i;
        $i++;
     }
   
}
$clas=array('','JSS1','JSS2','JSS3','SSS1','SSS2','SSS3');
$_SESSION['passer'] = $userpass;
$_SESSION['stud_pos'] = $stud_pos;
$_SESSION['clsub_pos'] = $clsub_pos;
$_SESSION['over_pos'] = $over_pos;
$_SESSION['oversbj_pos'] = $oversbj_pos;
$_SESSION['stud_avr'] = $stud_avr;
$_SESSION['overcls_pos'] = $overcls_pos;
$_SESSION['t_colle'] = $t_colle;
$_SESSION['idcls'] = Input::get('class');
$_SESSION['clas'] = $clas;
$_SESSION['thenot'] = $usercom;
// print_r($over_pos);
// echo"<br>oversbj_pos";
//  print_r($oversbj_pos);
// echo"<br>overcls_pos";
// print_r($overcls_pos);
//  echo"<br>t_colle";
//  print_r($t_colle);
//print_r($_SESSION);

$term_ar = ['','1st Term Reveiw','2nd Term Reveiw','3rd Term Reveiw'];
// print_r($_SESSION);
?>
<link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><?php 
                    if(Input::exists('oldr')){
                     echo $clas[Input::get('class')].' Class '.$term_ar[$asse_term];  
                    }else{
                   echo $clas[Input::get('class')].' Class Comment Box';        
                    }
                    ?> </h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Result Printing Tables
                        </div>
                        <div class="panel-body">
                            
                            
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Student Name </th>
                                            <th>Student Class</th>
                                            <th>Total Score</th>
                                            <th>Class Position</th>
                                            <th>Group Position</th>
                                            <th>Result Status</th>
                                            <th>Comment</th>
                                            <th>Action</th>
                                            <th>Save</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        

                                    </tbody>
                                </table>
                           <a href="sjbsresalt.php" class="btn btn-primary btn-lg"> Print All To Pdf</a>
                              <!-- Button trigger modal -->
  
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
        
<style>
  
.bs-callout {
    padding: 8px;
    margin: 6px 0;
    border: 1px solid #eee;
    border-radius: 3px;
}

.bs-callout-warning {
    border-left-color: #aa6708;
    border-left-width: 5px;
}
.bs-callout-info {
    border-left-color: #1b809e;
    border-left-width: 5px;
}  


</style>



<?php print_r($t_colle['SJBSI2292834']); ?>
<script>
  var comment = <?php echo json_encode($usercom); ?>; 
  var cometout = "";
  function showc(user){
  const isNotEmpty = arr => Array.isArray(arr) && arr.length > 0;
  $stud = comment[user]['stud_note'];
  $rector = comment[user]['rector_not'];
 if(isNotEmpty($stud)){
cometout +=`
<blockquote >
  <p>Form Teacher's Comment</p>
  <h5 > ${$stud[0]} </h5>
  <footer>Someone famous in <cite title="Source Title" >${$stud[1]}</cite></footer>
</blockquote> `;
   } 

if(isNotEmpty($rector)){
cometout +=`
<blockquote  class="blockquote-reverse">
  <p>Rector's Result Comment</p>
  <h5 > ${$rector[0]} </h5>
  <footer>Commented By <cite title="Source Title" >${$rector[1]}</cite></footer>
</blockquote> `;
   } 

      $("#fascomet").html(cometout);
     
      
  }
   
   
   
   
    
</script>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Result Comments</h4>
      </div>
      <div class="modal-body" id="fascomet">
    
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <script src="jquery-3.5.0.js"></script>    