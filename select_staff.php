<?php
 $user = new User();
 if (isset($_GET['set'])) {    
        $user->updateuser('users', array(
            'priority' => 7 
        ), array('users_id','=',Input::get('id'))); 
      
 
    Redirect::alert('You have successfully  removed this staff.');
  } 
 

 $user->findoder('users',array('priority', '<>', 1));
 $seletor =  $user->newdata(); 
 

 ?>

<link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Set Admin</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Staff Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Full Staff Name </th>
                                            <th>User name</th>
                                            <th>Default Password</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                   foreach ($seletor as $ky => $va) { 
                                    
                                    if ($va->priority < 7) {
                                       ?>
                                  
                                    <tr>
                                            <td><?php echo $va->full_name; ?> </td>
                                            <td><?php echo $va->user_code; ?> </td>
                                            <td><?php echo $va->intake; ?> </td>
                                            <td>  
                                            <?php 
                                            
                                            $link = "?SJBSI=13&id=".$va->user_code;
                                               echo '<a href="'.$link .'"> <button type="button" class="btn btn-outline  btn-primary"> Edit</button></a>';
                                           
                                                $link = "?SJBSI=12&set=1&id=".$va->users_id;
                                                echo '<a href="'.$link .'"> <button type="button" class="btn btn-danger ">Remove</button></a>';
                                            
                                              ?>
                                            </td>
                                            
                                        </tr>
                               <?php }
                                   }
                               ?>
                                        
                                        

                                    </tbody>
                                </table>
                          
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <script src="jquery-3.5.0.js"></script>    