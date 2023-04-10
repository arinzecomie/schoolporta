<?php
 $user = new User();
 if (isset($_GET['set'])) {    
      
	if ($_GET['set'] == 2) {
        $user->updateuser('users', array(
            'priority' => 2 
        ), array('users_id','=',Input::get('id'))); 
    }else{
        $user->updateuser('users', array(
            'priority' => 3 
        ), array('users_id','=',Input::get('id')));
    }

    
    Redirect::alert('You have successfully  added subject.');
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
                                            <th>Registertion Data</th>
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
                                            <td><?php echo $va->ddate; ?> </td>
                                            <td>
                                            <?php 
                                            if ($va->priority == 2) {
                                            $link = "?SJBSI=9&set=1&id=".$va->users_id;
                                               echo '<a href="'.$link .'"> <button type="button" class="btn btn-outline  btn-default"> Set As Admin</button></a>';
                                            }else{
                                                $link = "?SJBSI=9&set=2&id=".$va->users_id;
                                                echo '<a href="'.$link .'"> <button type="button" class="btn  btn-primary"> Remove As Admin</button></a>';
                                            }
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