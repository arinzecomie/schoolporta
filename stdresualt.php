<?php
$user = new User();

$stdid =$_GET['id'];
  $setters = 0;
if(isset($_GET['old'])){
   
    $comment= $_SESSION['thenot'][$stdid];
    // print_r($_SESSION['thenot']);
    $tcomment = json_decode( $comment[1]);
   $rcomment =json_decode( $comment[2]);

   $setters = 1;
}else{
    $terms = 'term'.Session::get('termst');
//   $comsele = ' term'.Session::get('termst') .' , statu'; 
  $user->getdata(array($terms) ,'res_record',[['user_id', '=', $stdid],'AND' ,['acc_yr','=', Session::get('asst')]]);
  $class =  $user->newdata()[0]; 
  
 

if(Input::exists('tcom')){
   
  $arhead =  ($user->data()->priority == 4)? 'rector_not':'stud_note';
  $commentin[$arhead] = [Input::get('tcom'),Input::get('teach')];
  $rcom = json_encode($commentin);
  
    if(count($class)){
   $studin =['term'.Session::get('termst') => $rcom,];
        // if(Input::exists('proms')){
        //  $studin[statu]=  Input::get('proms'); 
        // }      
 $che =  $user->updateuser('res_record', $studin, array('user_id','=',$stdid)); 
    }else{
     $studin =[
        'user_id' => $stdid,
        'term'.Session::get('termst') => $rcom,
        'acc_yr' => Session::get('asst'),
        'class' => Input::get('level')];
        // if(Input::exists('proms')){
        //  $studin[statu]=  Input::get('proms'); 
        // }
      $user->create('res_record',$studin);
  }
  
  
    $_SESSION['msg']= 1;
    ?>
        <script>
       window.location.replace("?SJBSI=6&class=<?php echo $_GET['level']; ?>");
        </script>
    <?php
    }    
        
      

 $comment = json_decode($class->$terms,1);
   

}


 if($_SESSION['idcls'] > 3){
    $pass=(in_array(26, $_SESSION[passer][$stdid])||in_array(27, $_SESSION[passer][$stdid])||in_array(31, $_SESSION[passer][$stdid])||in_array(40, $_SESSION[passer][$stdid])||count($_SESSION[passer][$stdid]) > 4) ?   '<b style="color:red">Failed</b>' : '<b>Passed</b>';
    }else{
    $pass=(in_array(5, $_SESSION[passer][$stdid])||in_array(8, $_SESSION[passer][$stdid])||in_array(16, $_SESSION[passer][$stdid])||in_array(13, $_SESSION[passer][$stdid])||count($_SESSION[passer][$stdid]) > 4) ?   '<b style="color:red">Failed</b>' : '<b>Passed</b>';  
    }


?>

<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><?php  if($setters){ echo $_SESSION['clas'] .' '. $_SESSION['term']; } ?> Result Status</h1>
                </div>
                 <!-- end  page header -->
            </div><form method="post">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       <b> <?php 
                      echo $_SESSION['t_colle'][$stdid][ array_keys($_SESSION['t_colle'][$stdid])[0]][3];?> </b>
                        </div>
                        <div class="panel-body">
                        <div class="row">
                        <div class="col-lg-12" style="background: darkslategray;color: #fff;">
                        <div class="col-lg-3">
                       <h4> Average Score<br>
                       <b><?php echo round($_SESSION['stud_avr'][$stdid],2) ?>% </b></h4>
                        </div>
                        <div class="col-lg-3">
                       <h4> Class Position Year<br>
                       <b> <?php echo $_SESSION['overcls_pos'][$_GET['class']][$stdid] .' out of '.count($_SESSION['overcls_pos'][$_GET['class']]); ?></b> </h4>
                        </div>
                        <div class="col-lg-3">
                        <h4>Group Position<br>
                       <b> <?php echo $_SESSION['over_pos'][$stdid] .' out of '.count($_SESSION['over_pos']); ?></b></h4>
                        </div>
                        <div class="col-lg-3">
                       <h4> Pass Status<br>
                       <?php echo $pass; ?>
                      </h4>
                        </div>
                        </div>
                        </div>
                        <div class="table-responsive">
                                <table class="table table-striped">
                                <thead style="background: darkcyan;color: #fff;">
                                   
                                        <tr>
                                            <th>Subjects</th>
                                            <th>1st Test</th>
                                            <th>2nd Test</th>
                                            <th>Assignment</th>
                                            <th>Examination</th>
                                            <!-- <th>Avg.Score</th> -->
                                            <th>Total Score</th>
                                            <th>Grade</th>
                                            <th>Class Position</th>
                                            <th>Group Position</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                             <?php  
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
                              
                              
                              ?>

                              <tr>
                              
                                            <td><?php echo  $sbjname->subj_name ?></td>
                                            <td><?php echo $value[4] ?></td>
                                            <td><?php echo $value[5] ?></td>
                                            <td><?php echo $value[6] ?></td>
                                            <td><?php echo $value[7] ?></td>
                                            <td><?php echo $value[8] ?></td>
                                            <td><?php echo $value[9] ?></td>
                                            <td><?php  echo $sbjcls_pos[$key][$value[2]].' out of '.count($sbjcls_pos[$key])  ?></td>
                                            <td><?php echo $_SESSION['oversbj_pos'][$key][$value[2]].' out of '.count($_SESSION['oversbj_pos'][$key])  ?></td> 
                                            
                             </tr>
                         <?php 
                         
                         } ?>
                                         
                                        <tr style="background: darkcyan;color: #fff;">
                                            <th style=" background:unset;text-align: center;" colspan="9"><?php //if($pass == '<b>Passed</b>'){ echo' Congratulation. You satisfied all pass requirements. Well done!';} ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                      <div >  
                        </div>
         <?php if($setters){   ?>            
             <div class="col-lg-6">
                    <div class="well well-sm">
                        <h4>Form Master's comment</h4>
                        <p><?php echo  $tcomment[1]; ?></p>
                   <i>By <?php echo  $tcomment[0]; ?></i>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="well well-sm">
                        <h4> Rector's comment</h4>
                        <p><?php echo  $rcomment[1]; ?></p>
                   <i>By <?php echo  $rcomment[2]; ?></i>
                    </div>
                </div>
           <?php }else{ ?>     
            
            <div class="form-group">
                   <?php  if($user->data()->priority == 4){ ?>
                   <div class="col-lg-12">
                    <div class="well well-sm">
                        <h4>Form Master's comment</h4>
                        <p><?php echo  $comment['stud_note'][0]; ?></p>
                   <i>By <?php echo  $comment['stud_note'][1]; ?></i>
                    </div>
                </div>
                    <div class="form-group">
                     <label for="Teacher">Rector's name</label>
                     <input type="text" name='teach' class="form-control" id="Teacher" value='<?php echo escape($user->data()->full_name); ?>' required>
                     </div>
                     
                     <div name='proms' class="form-group">
                                            <label>Promotion Status</label>
                                            <select name='proms' class="form-control">
                            <?php
                                 $prom = array('Promoted','Not Promoted','Promoted on trial','Withdrawn');
                                 for ($i=0; $i <  4; $i++) { 
                                    if($rcomment[0]  == $prom[$i]){
                                      $l = 'selected';
                                    }else{
                                        $l = '';  
                                    }
                                     ?>
                                    <option  <?php echo $l; ?>><?php echo $prom[$i]; ?> </option>
                                    <?php   } ?>
                                            </select>
                    </div>
                    
                     <label>Rector's Result comment</label>
                     <textarea class="form-control" name="tcom" rows="3"><?php echo $comment['rector_not'][0]; ?></textarea>  
                     <?php  }else{  ?>      
      
                     <div class="form-group">
                     <label for="Teacher">Form Teacher's name</label>
                     <input type="text" name='teach' class="form-control" id="Teacher" value='<?php echo escape($user->data()->full_name); ?>' required>
                     </div>
                     <label>Form Teacher's Result comment</label>
                     <textarea class="form-control" name="tcom" rows="3"><?php echo  $comment['stud_note'][0]; ?></textarea>
                      <?php  }  ?>
                     <input type="hidden" name='sid' value="<?php echo $stdid; ?>">
                     <button type="submit" class="btn btn-primary">Submit</button> 
                     <a href="?SJBSI=6&class=<?php echo $_GET['level']; ?>" class="btn btn-primary">Back</a>
                     </div> 
             </form> 
             
             <?php } ?> 
             
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            