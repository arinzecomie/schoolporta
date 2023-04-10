<?php
$user = new User();
if(!$user->isLoggedIn()){
    Redirect::to('login.php');
} 
?>
<link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add Subject</h1>
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
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject Name</th>
                                            <th>Class</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php // yvLos8k.fkW6
                                    //User “stjohqse_root” was added to the database “stjohqse_Wizarddb”.
                                              $user->findoder('subject',array('subj_id', '>', 0));
                                              $seletor =  $user->newdata();
                                              for ($x = 0; $x <= count($seletor)-1; $x++) {
                                                $y = $x+1;
                                                $u_cl = ($seletor[$x]->cl_id) ? 'SSS' : 'JSS' ;
                                                echo '<tr> <td>'.$y.'</td> 
                                                       <td class="sbn_'.$seletor[$x]->subj_id.'">'. $seletor[$x]->subj_name.'</td>
                                                       <td cl="'.$seletor[$x]->cl_id.'" class="sbcl_'.$seletor[$x]->subj_id.'">'. $u_cl.'</td>
                                                      <td><a href="'.$_GET[''].'cous'.$seletor[$x]->subj_id.'"> <button type="button"  class="btn btn-outline btn-info btn-sm" data-toggle="modal" data-target="#myModal">Upload Score</button></td>
                                                      </tr> '; 
                                              }
                                            ?>
                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
               
            </div>
     </div>




            
            <script src="jquery-3.5.0.js"></script>  