 <?php
 $user = new User();
 $user->findoder('subject',array('subj_id', '=', Input::get('subid')));
$subjectn =  $user->newdata()[0];

if ( 3 > $user->data()->priority){
     Redirect::to('login.php');
                            }
                            
if(Input::exists('delid')) {                            
$user->userdel(Session::get('asst'),array('asses_id', '=', Input::get('delid')));
}

if( Input::get('changes') !== null) {
  //  if(Token::check(Input::get('token'))) {
  $thef   =   explode(";",Input::get('changes'));
  $thef   =    array_filter($thef);
  $collector =array();
  
  foreach ($thef as $v) {
     $seter  = explode(",",$v);
     $show = $seter[0];
     //$effect[$show] = $show;
        $checkds = $user-> getdata(array('stud_code') ,Session::get('asst'),[['stud_code', '=',$seter[5]] ,'AND',[ 'subj_id', '=' ,$subjectn->subj_id]]);
   
     if(!$checkds){
        
       $inserta['inser']=1;
        $newscros[$show] = $seter;
     }else{
        
        $inserta['upda']=2;
        $updatescros[$show] = $seter;
     }
    
     
  }
  



if(isset($inserta['inser'])){
      
  foreach ($newscros as  $scro) {
    $user->create(Session::get('asst'),array(
        'stud_code' => $scro[5],
        'subj_id' =>Input::get('subjid'),
        'asses_1' =>$scro[1],
        'asses_2' =>  $scro[2],
        'asses_3' => $scro[3],
        'exam' => $scro[4],
        'term' => Session::get('termst'),
        'class' => Input::get('class')
    ));
  }
}
if(isset($inserta['upda'])){
    
  //  print_r($updatescros);
    foreach ($updatescros as  $scrou) {
    $user->updateuser(Session::get('asst'), array(
        'asses_1' =>$scrou[1],
        'asses_2' =>  $scrou[2],
        'asses_3' => $scrou[3],
        'exam' => $scrou[4],   
    ),['stud_code', '=',$scrou[5]] ,'AND',[ 'subj_id', '=' ,Input::get('subjid')]);
  }
}
  //print_r($effect);
//}
}   

 

//array('user_id', '=' ,array($user_id ,'AND', 'subject', '=' ,$user_id,'1'))
// Full texts	
//array($user_id ,'AND', 'subject', '=' ,$user_id)

if(Input::exists('exten')){
$user->findoder('stud_de',['stud_level', '=',Input::get('class')],'AND', ['stud_subcl', '=' ,Input::get('exten')]);
}else{
$user->findoder('stud_de',['stud_level', '=', Input::get('class')]);
}

$seletor =  $user->newdata(); 


//if (count($seletor) > 2) {
 

function nama($inpu){
    if($inpu === 0){
     return '';
    }else{
     return $inpu;   
    } 
   } 
    //array_diff()
  
foreach ($seletor as $v_sets) { 
       
       
  $thsubry = json_decode($v_sets->stud_subj);

 if (in_array(Input::get('subid'),$thsubry)) {
  $sudentcc =   $v_sets->stud_code;
 $user->getdata(array('full_name') ,'users',array('user_code', '=', $sudentcc));
 $name =  $user->newdata()[0]; 
 
 $listscr = 0;
$theris = $user->getdata(array('*') ,Session::get('asst'),[['subj_id', '=',Input::get('subid')] ,'AND',['stud_code', '=', $sudentcc]]);


    if ($theris) {
        
        
     $listscr =  $user->newdata()[0]; 
     
     $asses_1 = $listscr->asses_1;
     $asses_2 = $listscr->asses_2;
     $asses_3 = $listscr->asses_3;
     $exam = $listscr->exam;
     $totals =$asses_1+$asses_2+$asses_3+$exam;
     $posit[$v_sets->stud_id] = $totals;
     $marker = ($asses_1 == 0 ||$asses_2 == 0 ||$asses_3 == 0 || $exam == 0) ? 0 : 1 ;
     $grad = ($totals > 69) ? 'A' : (($totals > 53) ? 'C' : (($totals > 44) ? 'P' : '<span style="color:red">F<span>'  )) ;
     
     $t_colle[$sudentcc][1] = $v_sets->stud_id;
     $t_colle[$sudentcc][2] = $v_sets->stud_code;
     $t_colle[$sudentcc][3] = $name->full_name;
      $t_colle[$sudentcc][4] = $asses_1;
      $t_colle[$sudentcc][5] = $asses_2;
      $t_colle[$sudentcc][6] = $asses_3;
      $t_colle[$sudentcc][7] = $exam; 
      $t_colle[$sudentcc][8] =  $totals;
      $t_colle[$sudentcc][9] = $grad;
      $t_colle[$sudentcc][10] = 1;
      $t_colle[$sudentcc][11] = $marker;
      $t_colle[$sudentcc][12] = $v_sets->stud_subcl;
      $t_colle[$sudentcc][13] = $listscr->asses_id;

     
    }else{
         
    $t_colle[$sudentcc][1] = $v_sets->stud_id;
   $t_colle[$sudentcc][2] = $v_sets->stud_code;
    $t_colle[$sudentcc][3] = $name->full_name;
     $t_colle[$sudentcc][4] = 0;
     $t_colle[$sudentcc][5] = 0;
     $t_colle[$sudentcc][6] = 0;
     $t_colle[$sudentcc][7] = 0; 
     $t_colle[$sudentcc][8] = '-';
     $t_colle[$sudentcc][9] = '-';
     $t_colle[$sudentcc][10] = 'No Set';
     $t_colle[$sudentcc][11] = 0;
     $t_colle[$sudentcc][12] = $v_sets->stud_subcl;
     $t_colle[$sudentcc][13] = 'h';
      
 }
}



 }
 $i = 1;
if (!empty($posit)) {
  arsort($posit);
  foreach ($posit as $k => $v) {
      $posi[$k] = $i;
      $i++;
  }
}


$clas=array('','JSS1','JSS2','JSS3','SSS1','SSS2','SSS3');



  ?>
   <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
   <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"> <?php  echo $subjectn->subj_name; ?> </h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <?php  echo $clas[Input::get('class')]; ?> Class Score Sheet
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Student Name </th>
                                            <th>Sub Class</th>
                                            <th>1st Test</th>
                                            <th>2nd Test</th>
                                            <th>Assignment</th>
                                            <th>Exam</th>
                                            <th>Score</th>
                                            <th>Grade</th>
                                            <th>Group Position</th>
                                            <th>Action set</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    
                                    $studclass= array('NA','A','B','C','D','E','F','G');
                                   
                                   foreach ($t_colle as $ky => $va) {  
                                   
                                      
                                    ?>
                                   
                                    
                                    <tr>
                                            <td><?php echo $va[3]; ?> <input id="dvalus<?php echo $va[1]; ?>" type="hidden" value="<?php echo $va[1].','.$va[4].','.$va[5].','.$va[6].','.$va[7].','.$va[2]; ?>"></td>
                                            <td><?php echo $clas[Input::get('class')].$studclass[$va[12]];    ?> </td>
                                            <td><input type="email" style="width: 50px;" class="form-control val" ddata="<?php echo $va[1]; ?>,1" value="<?php   echo nama($va[4]);  ?>"></td>
                                            <td><input type="email" style="width: 50px;" class="form-control val" ddata="<?php echo $va[1]; ?>,2" value="<?php  echo nama($va[5]);  ?>"></td>
                                            <td ><input type="email" style="width: 50px;" class="form-control val" ddata="<?php echo $va[1]; ?>,3" value="<?php  echo nama($va[6]);  ?>"></td>
                                            <td><input type="email" style="width: 50px;" class="form-control val" ddata="<?php echo $va[1]; ?>,4" value="<?php  echo nama($va[7]);  ?>"></td>
                                            <td><?php echo $va[8]; ?></td>
                                            <td><?php echo $va[9]; ?></td>
                                            <td><?php if($va[10] == 1){echo $posi[$ky].' out of  '.count($posi);}else{ echo $va[10]; } ?> </td>
                                            <td>
                                            <?php if ($va[11] == 1) {
                                               echo '<button type="button" class="btn btn-success btn-circle"><i class="fa fa-check"></i></button>';
                                            } else {
                                                echo '<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-exclamation-triangle"></i></button>';
                                            }
                                              ?>
                                              <?php if ($va[13] !== 'h') { ?>
                                              <a href='?SJBSI=<?php echo Input::get('SJBSI'); ?>&class=<?php echo Input::get('class'); ?>&subid=<?php echo Input::get('subid'); ?>&delid=<?php echo $va[13]; ?>'><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></button></a>
                                               <?php } ?>
                                            </td>
                                            
                                        </tr>
                               <?php } ?>
                                        
                                        

                                    </tbody>
                                </table>
                            </div>
                          
                            <form method="POST" action="">
                            
                            <input id="dva" name="changes" type="hidden" >
                            <input type="hidden" name="studclas" value="<?php echo Input::get('class'); ?>">
                            <input type="hidden" name="subjid" value="<?php echo $subjectn->subj_id; ?>">
                            <button type="submit" class="btn btn-primary btn-lg">Save All</button> 
                             </form>
                          
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <script src="jquery-3.5.0.js"></script>     
<script>
    $(".val").change(function() {
    var imput= $(this).val();
    var ddata= $(this).attr('ddata');
    //get array form imput
    cars = ddata.split(','); 
    //get the data div
    var dval =  $('#dvalus'+cars[0]).val();
    dval = dval.split(',');
    var remo = dval;
    //set the imput valu
    dval[cars[1]] = imput;
    var y = dval.join(',');     
    $('#dvalus'+cars[0]).val(y);
   
    var v = 0;
    var s =  $('#dva').val(); 
    var r = s.split(';');
    var sum = r.map(obj => obj.split(','));
    if(v === 0){
  sum.push(dval);
    }
   var newProj = sum.map(ob => mycc(ob));
    function mycc(ob){
  if(ob !== undefined) {
    return ob.join(',');
    }
    }
  var l = newProj.join(';');
   $('#dva').val(l);
  }); 
</script>
         <!-- Core Scripts - Include with every page -->
   
   
    
   