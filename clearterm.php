<?php
$user = new User();

 if(isset($_SESSION['msg'])){
	unset($_SESSION['msg']);

?>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("Successful!", "Your comment is ssuccessfully saved!", "success");
</script>
<?php
 }

 if(isset($_GET["swep"])){
 
   $out = $user->deletus('assesment',array('stud_level', '=', Input::get('class')));  
  if($out){
    Redirect::alert('You have successfully  saved '.$clas[Input::get('class')].' result');
    Redirect::move_to('dashboard.php?SJBSI=20'); 
  }
}
 
 
 if(Input::exists('subad')){
 
 
 $user->findoder('stud_de',array('stud_level', '=', Input::get('class')));
 $seletor =  $user->newdata(); 

 function nama($inpu){
     if($inpu === 0){
      return '';
     }else{
      return $inpu;   
     } 
    } 
    
    
 foreach ($seletor as $v_sets) { 
  $user->getdata(array('full_name') ,'users',array('user_code', '=', $v_sets->stud_code));
  $name =  $user->newdata()[0]; 

  
  $user->getdata(array('stud_subcl','stud_note','rector_not') ,'stud_de',array('stud_code', '=', $v_sets->stud_code));
  $class =  $user->newdata()[0]; 
     
  $listscr = '';
     $theris = $user->findoder('assesment',array('stud_code', '=', $v_sets->stud_code));
     
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
           
          if(isset($stud_pos[$reshow->stud_code])){

                $stud_pos[$reshow->stud_code] = $stud_pos[$reshow->stud_code] + $totals;  
                $stud_avr[$reshow->stud_code] = $stud_pos[$reshow->stud_code]/ $i;
                
                $clas_pos[$class->stud_subcl][$v_sets->stud_code]= $stud_avr[$reshow->stud_code];
              }else{
                $stud_pos[$reshow->stud_code] = $totals;
                $stud_avr[$reshow->stud_code] = $totals;
                $clas_pos[$class->stud_subcl][$v_sets->stud_code] =  $stud_avr[$reshow->stud_code];
               
              }
    //student total          
        $clsub_pos[$reshow->subj_id][$class->stud_subcl][$reshow->stud_code] =$totals ;      
      $sub_pos[$reshow->subj_id][$reshow->stud_code] = $totals;
      
    //  print_r($reshow); 
    //  echo "$key $totals  <br>";<span style="color:red">F<span>
    
    $namerst[$reshow->stud_code]  = $name->full_name;
    $stdcls[$reshow->stud_code]  = $class->stud_subcl;
    $thenot[$reshow->stud_code][1]  = $class->stud_note;
    $thenot[$reshow->stud_code][2]  = $class->rector_not;
      $marker = ($asses_1 == 0 ||$asses_2 == 0 ||$asses_3 == 0 || $exam == 0) ? 0 : 1 ;
      $grad = ($totals > 69) ? 'A' : (($totals > 53) ? 'C' : (($totals > 44) ? 'P' : 2  )) ;
     
      if($grad == 2){
       $userpass[$v_sets->stud_code][] = $reshow->subj_id; 
      $grad ='<b style="color:red">F</b>';
        }
   
   
  

      $asses[1] = $v_sets->stud_id;
      $asses[2] = $v_sets->stud_code;
      $asses[3] = $name->full_name;
       $asses[4] = $asses_1;
       $asses[5] = $asses_2;
       $asses[6] = $asses_3;
       $asses[7] = $exam; 
       $asses[8] =  $totals;
       $asses[9] = $grad;
       $asses[10] = $key;
       $asses[11] = $marker;
       $asses[12] = $class->stud_subcl;
       
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

  $i = 1;

 arsort($stud_avr);
 foreach ($stud_avr as $k => $v) {
     if($v == $old){
        $h = $i;
        $hh = $h - 1;
       $over_pos[$k] = $hh ;
     }else{
       $over_pos[$k] = $i ;  
     }
     $old = $v; 
     $i++;
 }
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
$result['passer'] = $userpass;
$result['stud_pos'] = $stud_pos;
$result['clsub_pos'] = $clsub_pos;
$result['over_pos'] = $over_pos;
$result['oversbj_pos'] = $oversbj_pos;
$result['stud_avr'] = $stud_avr;
$result['overcls_pos'] = $overcls_pos;
$result['t_colle'] = $t_colle;
$result['idcls'] = Input::get('class');
$result['clas'] = $clas;
$result['thenot'] = $thenot;
$user->getdata(array('comments') ,'trem_note',array('id', '=', 1));
$cmt =  $user->newdata()[0]; 
$result['thenotg'] =   $cmt->comments;
$prepered = json_encode($result);


  $user->create('result',array(
                    'stud_cl' => Input::get('class'),
                    'term' =>Input::get('term'),
                    'result_ass' =>$prepered,
                    'statu' =>  0,
                    'ac_year' => Input::get('year'),
                    'dateset' => date(Y)
                    
                ));
            
     
                Redirect::alert('You have successfully  saved '.$clas[Input::get('class')].' result');
                Redirect::move_to('dashboard.php?SJBSI=20'); 
               

}




?>
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">All School Result</h1>
                </div>
                <!-- End Page Header -->
            </div> 
            
            <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Record Result
                        </div>

                        <div class="panel-body">
                            
                            <form role="form" method="POST">
                                <div class="form-group">
    <label for="year">Academic Year</label>
    <input type="text" class="form-control" id="year" name="year" placeholder="<?php echo date(Y); ?>" required>
  </div>
                    <div class="form-group">
                                        <label>Select Session Term</label>
                                        <select name="term" class="form-control">
                                            <option value="1">First Term</option>
                                            <option value="2">Second Term</option>
                                            <option value="3">Third term</option>
                
                                        </select>
                                    </div>     
                    <div class="form-group">
                                        <label>Select Student Class</label>
                                        <select name="class" class="form-control">
                                            <option value="1">JSS 1</option>
                                            <option value="2">JSS 2</option>
                                            <option value="3">JSS 3</option>
                                            <option value="4">SSS 1</option>
                                            <option value="5">SSS 2</option>
                                            <option value="6">SSS 3</option>
                                            <option value="7">Special Class</option>
                
                                        </select>
                                    </div>     
                               
                                        <button type="submit" name="subad" class="btn btn-primary">Save Now</button>
                            </form>
                         
                        </div>
                    </div>
                </div>
            
     <div class="col-lg-12">
                  <!-- Form Elements -->
                  <div class="panel panel-default">
                     <div class="panel-heading">
                    Result Achieve 
                    <!-- Split button -->
<div class="btn-group" style=" margin-left: 60%;">
  <button type="button" class="btn btn-default ">Result View</button>
  <button type="button" class="btn btn-default  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>

                  
                  <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Class</th>
                                            <th>Term</th>
                                            <th>Year</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if ( 3 > $user->data()->priority){
                                       Redirect::to('login.php');
                                    }

 
    if(Input::exists('anualr')){
        
       
   
    $terms = explode(",", Input::get('anualr'));
   
    if(count($terms) < 4 ){ 
   $user->getdata(array('stud_cl','result_ass','ac_year') ,'result',array('result_id', '=', $terms[0]));
     $termdatas1 =  $user->newdata()[0];
      $user->getdata(array('stud_cl','result_ass','ac_year') ,'result',array('result_id', '=', $terms[1]));
     $termdatas2 =  $user->newdata()[0];
      $user->getdata(array('stud_cl','result_ass','ac_year') ,'result',array('result_id', '=', $terms[2]));
     $termdatas3 =  $user->newdata()[0];
     
     
     $statrest1 = json_decode($termdatas1->result_ass,1)['t_colle'];
     $statrest2 = json_decode($termdatas2->result_ass,1)['t_colle'];
     $statrest3 = json_decode($termdatas3->result_ass,1)['t_colle'];
     $thenot = json_decode($termdatas3->result_ass,1)['thenot'];
     foreach($statrest1 as $ky => $students){
         
        foreach($students as $ske => $subjj){
           
         
          $anult = dfilter($statrest1[$ky][$ske][8]) + dfilter($statrest2[$ky][$ske])[8] + dfilter($statrest3[$ky][$ske])[8];
           $anultave  = round($anult/3, 2);
          $grad = ($anultave > 69) ? 'A' : (($anultave > 53) ? 'C' : (($anultave > 44) ? 'P' : 2  )) ;
          if($grad == 2){
          $grad ='<b style="color:red">F</b>';
            }
          $anul[$ky][$ske][1] = dfilter($statrest1[$ky][$ske][8]);
          $anul[$ky][$ske][2] = dfilter($statrest2[$ky][$ske][8]);
          $anul[$ky][$ske][3] = dfilter($statrest3[$ky][$ske][8]); 
          $anul[$ky][$ske][4] = $anult;
          $anul[$ky][$ske][5] = $anultave ;
          $anul[$ky][$ske][6] =  $grad;
          $subcla = $statrest1[$ky][$ske][12];
          //position sorter
          if(isset($stud_pos[$ky])){
                $stud_pos[$ky] = $stud_pos[$ky] + $anult;  
                $stud_avr[$ky] = $stud_pos[$ky]/ $i;
                $clas_pos[$ske][$subcla][$ky] = $stud_avr[$ky];
              }else{
                $stud_pos[$ky] = $anult;
                $stud_avr[$ky] = $anult;
                $clas_pos[$ske][$subcla][$ky] =  $stud_avr[$ky];
               
              }
          
          
          $sub_pos[$ske][$ky] = $anult;
          $clsub_pos[$subcla][$ske][$ky] = $anult;
          $subcl_pos[$subcla][$ky] = $anult;
          $studetl[$ky]['name'] =  $statrest1[$ky][$ske][3];
          $studetl[$ky]['sub'] =  $subcla;
        }
        // $studetl[$ky]['recom'] = 'work harder' ; 
        // $studetl[$ky]['statu'] = 'Promoted' ; 
       
     }
//   print_r($sub_pos); 
//   print_r($studto);    
//  print_r($anul);   

   $i = 1;

 arsort($stud_avr);
 foreach ($stud_avr as $k => $v) {
     if($v == $old){
        $h = $i;
        $hh = $h - 1;
       $over_pos[$k] = $hh ;
     }else{
       $over_pos[$k] = $i ;  
     }
     $old = $v; 
     $i++;
 }
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
$aresult['stud_pos'] = $stud_pos;
$aresult['clsub_pos'] = $clsub_pos;
$aresult['stud_info'] =  $studetl;
$aresult['over_pos'] = $over_pos;
$aresult['oversbj_pos'] = $oversbj_pos;
$aresult['stud_avr'] = $stud_avr;
$aresult['overcls_pos'] = $overcls_pos;
$aresult['anul'] = $anul;
$aresult['idcls'] = $termdatas1->stud_cl;
$aresult['clas'] = $clas;
$aresult['thenot'] = $thenot;
$_SESSION['anual'] = $aresult;
Redirect::move_to('dashboard.php?SJBSI=24');       
 //each class student positioning
//  foreach ($terms as $ky => $yrsid) {
//      $user->getdata(array('stud_cl','result_ass','ac_year','statu') ,'result',array('result_id', '=', $yrsid));
//      $termdata[$ky] =  $user->newdata();
//     //$termdata[$ky] =json_decode($termdata['result_ass']);
     
//  }
// print_r($termdata);
 die();
      }else{
          ?>
          <script>
    swal("Error!", "you selected more then 3 terms!", "error");
</script>
          <?php
      } 
    }
     
     
function  dfilter($val){
 if(isset($val)){
  return $val   ;
 }else{
      return 0 ;
 }  
}
      $user->getdata(array('result_id','stud_cl','term','ac_year','statu') ,'result',array('result_id', '>', 0));   
     $seletor =  $user->newdata(); 
                                   
                                   
                                   
                                   
                                    
                                    
                                   
                                    $clas=array('','JSS1','JSS2','JSS3','SSS1','SSS2','SSS3');
                                    $terms=array('','First Term','Second Term','Third term','Anual Result');
                                    $i = 1;
                                            foreach($seletor as $selet){
                                                echo '<tr> 
                                                       <td><input  class="pal"  type="checkbox" value = "'.$selet->result_id .' "  > </td> 
                                                       <td >'.$clas[$selet->stud_cl].'</td>
                                                       <td >'. $terms[$selet->term].'</td>
                                                      <td>'. $selet->ac_year .'</td>
                                                      <td><button type="button"  class="btn btn-outline btn-info btn-sm" data-toggle="modal" data-target="#myModal">View</button></a></td>
                                                      </tr> '; 
                                                      
                                                      $i++;
                                              }
                                            ?>
                          
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <form method="POST" action="">
                            <input id="dva" name="anualr" type="hidden" >
                            <div onclick="return anual()" class="btn btn-primary btn-lg">Create anual</div> 
                             </form>
                        </div>
               
            </div>
     </div>
     
 <script> 
 
function  anual(){
    
  var   type = [];
$(".pal:checked").each(function (i) {
                type[i] = $(this).val();
            });
var x = type.join(",");
$('#dva').val(x);
$('form').submit();
  }
</script>




            
            <script src="jquery-3.5.0.js"></script>  