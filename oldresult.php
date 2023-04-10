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
     
   
    
  $user->getdata(array('*') ,'result',array('result_id', '=', Input::get('id')));   
  $seletor =  $user->newdata()[0];
      

    $clas=array('','JSS1','JSS2','JSS3','SSS1','SSS2','SSS3');
    $terms=array('','First Term','Second Term','Third term');
    $class = $clas[$seletor->stud_cl];
    $term = $terms[$seletor->term];
    $json_results = $seletor->result_ass;

 $results =json_decode($json_results,1);
$_SESSION['passer'] = $results['passer'];
$_SESSION['stud_pos'] = $results['stud_pos'];
$_SESSION['clsub_pos'] = $results['clsub_pos'];
$_SESSION['over_pos'] = $results['over_pos'];
$_SESSION['oversbj_pos'] = $results['oversbj_pos'];
$_SESSION['stud_avr'] = $results['stud_avr'];
$_SESSION['overcls_pos'] = $results['overcls_pos'];
$_SESSION['t_colle'] = $results['t_colle'];
$_SESSION['idcls'] = Input::get('class');
$_SESSION['clas'] = $class;
$_SESSION['thenot'] = $results['thenot'];
 $_SESSION['term'] = $term;





?>
<link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><?php  echo $clas[Input::get('class')]; ?> <?php echo $term ; ?> <?php echo $seletor->ac_year ; ?>   Achieve </h1>
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
                                            <th>Form Teacher's Comment</th>
                                            <th>Action</th>
                                            <th>Save</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                   
                                   $studclass= array('NA','A','B','C','D','E','F','G');
                                  
                                   foreach ($results['t_colle'] as $ky => $va) {
                                     // print_r($results['thenot']);
                                       $firstKey = array_values($va)[0];
                                      // echo $firstKey;
                                       
                                      ?>
                                  
                                    <tr>
                                            <td><?php echo $firstKey[3]; ?> </td>
                                            <td><?php  echo $class; ?> </td>
                                            
                                            <td><?php echo $results['stud_pos'][$ky];  ?> </td>
                                            <td> <?php  echo $results['overcls_pos'][$firstKey[12]][$ky] .' out of '.count($results['overcls_pos'][$firstKey[12]]); ?></td>
                                            <td><?php echo $results['over_pos'][$ky] .' out of '.count($results['over_pos']); ?></td>
                                            <td><?php echo (in_array(26, $results['passer'][$ky])||in_array(27, $results['passer'][$ky])||in_array(31, $results['passer'][$ky])||in_array(40, $results['passer'][$ky])|| count($results['passer'][$ky]) > 4) ?  '<b style="color:red">Failed</b>' : '<b>Passed</b>'; ?></td>
                                            
                                            <td><?php if ($results['thenot'][$ky]) { $comment= json_decode ($results['thenot'][$ky][1]); $tname = substr($comment[0],0,8);  echo $comment[1].'(<i>'.$tname.' ...</i>)'; }else{echo 'No comment yet';} ?></td>
                                            <td>
                                            <?php 
                                            $link = "?SJBSI=7&class=".$firstKey[12]."&id=".$ky.'&level='.Input::get('class')."&old=1";
                                            if (!$results['thenotg'][$ky]) {
                                               echo '<a href="'.$link .'"> <button type="button" class="btn btn-outline btn-warning"><i class="fa fa-exclamation-triangle"></i> Full View</button></a>';
                                               
                                            } else {
                                              echo '<a href="'.$link .'"><button type="button" class="btn btn-outline btn-success"><i class="fa fa-check"></i> Full View</button></a>'; 
                                            }
                                              ?>
                                            </td>
                                            <td>
                                            <a href="<?php echo "/useresult.php?studid=".$ky; ?>"> <button type="button" class="btn btn-outline btn-primary"><i class="fa fa-file-pdf-o"></i> Pdf</button></a>
                                            </td>
                                        </tr>
                               <?php } ?>
                                        
                                        

                                    </tbody>
                                </table>
                           <a href="sjbsresalt.php" class="btn btn-primary btn-lg"> Print All To Pdf</a>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <script src="jquery-3.5.0.js"></script>    