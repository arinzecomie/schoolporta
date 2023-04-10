<?php
$user = new User();
?>

    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Select Subject</h1>
                </div>
                <!-- End Page Header -->
            </div> 
     <div class="col-lg-12">
                  <!-- Form Elements -->
                  <div class="panel panel-default">
                     <div class="panel-heading">
                    Teachers List 
                  </div>
                  <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject Name</th>
                                            <th>Set Class</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                       $clas=array('','JSS1','JSS2','JSS3','SSS1','SSS2','SSS3');  
                                    if ( 3 > $user->data()->priority){
                                       Redirect::to('login.php');
                                    }else{
                                      $ret = (Input::get('class') < 4) ? 0 : 1 ;
                                      $user->findoder('subject',array('cl_id', '=', $ret));   
                                    }
                                    $seletor =  $user->newdata();
                                              for ($x = 0; $x <= count($seletor)-1; $x++) {
                                                $y = $x+1;
                                               // $u_cl = ($seletor[$x]->cl_id) ? 'SSS' : 'JSS' ;
                                                echo '<tr> <td>'.$y.'</td> 
                                                       <td class="sbn_'.$seletor[$x]->subj_id.'">'. $seletor[$x]->subj_name.'</td>
                                                      <td cl="'.$seletor[$x]->cl_id.'" class="sbcl_'.$seletor[$x]->subj_id.'">';
                    if(Input::exists('exten')){  
                                               
                                                echo $clas[Input::get('class')];
                                                  }else{ 
                                                echo '<div class="btn-group" role="group" aria-label="...">
                                                      <a href="?SJBSI=21&class='.Input::get('class').'&subid='.$seletor[$x]->subj_id.'&subcl=1"> <button type="button" class="btn btn-primary btn-sm">'.$clas[Input::get("class")].'A</button></a>
                                                      <a href="?SJBSI=21&class='.Input::get('class').'&subid='.$seletor[$x]->subj_id.'&subcl=2"> <button type="button" class="btn btn-primary btn-sm">'.$clas[Input::get("class")].'B</button></a>
                                                       <a href="?SJBSI=21&class='.Input::get('class').'&subid='.$seletor[$x]->subj_id.'&subcl=3"> <button type="button" class="btn btn-primary btn-sm">'.$clas[Input::get("class")].'C</button></a>
                                                      </div>';
                                                 } 
                                                  if(Input::exists('exten')){  
                                                 echo '</td>
                                                      <td><a href="?SJBSI=5&class='.Input::get('class').'&subid='.$seletor[$x]->subj_id.'&exten='.Input::exists('exten').'"><button type="button"  class="btn btn-outline btn-info btn-sm" data-toggle="modal" data-target="#myModal">Termly</button></a></td>
                                                      <td><a href="?SJBSI=18&class='.Input::get('class').'&subid='.$seletor[$x]->subj_id.'&exten='.Input::exists('exten').'"><button type="button"  class="btn btn-outline btn-info btn-sm" data-toggle="modal" data-target="#myModal">Annual</button></a></td>
                                                      </tr> '; 
                                                  }else{
echo '</td>
                                                      <td><a href="?SJBSI=5&class='.Input::get('class').'&subid='.$seletor[$x]->subj_id.'"><button type="button"  class="btn btn-outline btn-info btn-sm" data-toggle="modal" data-target="#myModal">Score Student</button></a></td>
                                                   
                                                      </tr> '; }
                                              }
                                            ?>
                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
               
            </div>
     </div>

    <!--<td><a href="?SJBSI=18&class='.Input::get('class').'&subid='.$seletor[$x]->subj_id.'"><button type="button"  class="btn btn-outline btn-info btn-sm" data-toggle="modal" data-target="#myModal">Annual</button></a></td>-->


            
            <script src="jquery-3.5.0.js"></script>  
         