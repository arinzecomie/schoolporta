<?php
 $user = new User();

 
 //if($user->data()->priority == 2){
  
 $subclas=array('','A','B','C','D','E');
$clas=array('','JSS1','JSS2','JSS3','SSS1','SSS2','SSS3');
$anuals =  $_SESSION['anual'];
$studetl = $anuals['studetl'];
$stud_info = $anuals['stud_info'];

$idcls = $anuals['idcls'];
$thenot = $anuals['thenot'];
$stud_pos = $anuals['stud_pos'];

//print_r($anuals);
?>
<link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><?php  echo $clas[$idcls]; ?> Class Comment Box</h1>
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
                                   foreach ($stud_pos as $ky => $va) { 
                                       
                                      
                                       
                                    //   $pass =  (count($userpass[$ky]) > 5 )?  '<b>Passed</b>' : '<b style="color:red">Failed</b>'  ;
                                    ?>
                                  
                                    <tr>
                                            <td><?php echo $stud_info[$ky]['name']; ?> </td>
                                            <td><?php  echo  $clas[$idcls].$studclass[$stud_info[$ky]['sub']]; ?>  </td>
                                            
                                            <td><?php echo $stud_pos[$ky]  ?> </td>
                                            <td><?php echo $overcls_pos[$studetl[$ky]['sub']][$ky] .' out of '.count($overcls_pos[$studetl[$ky]['sub']]); ?></td>
                                            <td><?php echo $over_pos[$ky] .' out of '.count($over_pos); ?></td>
                                            <td><?php echo $tname; ?></td>
                                            
                                            <td><?php if (
                                                $thenot[$ky]) {
                                            $comment= json_decode ($thenot[$ky]); 
                                            $tname = substr($comment[0],0,8); 
                                            echo $comment[1];
                                            }else{ 
                                            echo 'No comment yet';
                                            } ?>
                                            </td><td>
                                            <?php 
                                            $link = "?SJBSI=7&class=".$studetl[$ky]['sub']."&id=".$ky.'&level='.$idcls;
                                            if (!$thenot[$ky]) {
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