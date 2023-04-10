<?php
$user = new User();
if(!$user->isLoggedIn()){
    Redirect::to('login.php');
} 

if (isset($_POST['subad'])) {

                    $nuy = explode("/",Input::get('subname') );
                    foreach ($nuy as $key => $value) {
                        $user->create('subject',array(
                            'subj_name' => $value,
                            'cl_id' => Input::get('subclass')
   
                        ));    
                    }
             
                Redirect::alert('You have successfully  added subject.');
          
        } 
 if (isset($_POST['sbediter'])) {       
        $user->updateuser('subject', array(
            'subj_name' =>Input::get('subnm'),
            'cl_id' =>  Input::get('subclass'), 
        ), array('subj_id','=',Input::get('id')));
        Redirect::alert('You have successfully  added subject.');
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
            <div class="row">
                <div class="col-lg-6">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Subject
                        </div>

                        <div class="panel-body">
                            
                            <form role="form" method="POST">
                    <div class="form-group">
                        <label>Enter All New Subject Names With "/" After Each</label>
                        <textarea  name="subname" class="form-control" rows="5" placeholder="English Language/Mathematics/Latin" required></textarea>
                    </div>
                    <div class="form-group">
                                        <label>Select Student Class</label>
                                        <select name="subclass" class="form-control">
                                            <option  value="0">JSS</option>
                                            <option  value="1">SSS</option>
                
                                        </select>
                                    </div>     
                               
                                        <button type="submit" name="subad" class="btn btn-primary">Add Now</button>
                            </form>
                         
                        </div>
                    </div>
                </div>
            
               <div class="col-lg-6">
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
                                    <?php
                                              $user->findoder('subject',array('subj_id', '>', 0));
                                              $seletor =  $user->newdata();
                                              for ($x = 0; $x <= count($seletor)-1; $x++) {
                                                $y = $x+1;
                                                $u_cl = ($seletor[$x]->cl_id) ? 'SSS' : 'JSS' ;
                                                echo '<tr> <td>'.$y.'</td> 
                                                       <td class="sbn_'.$seletor[$x]->subj_id.'">'. $seletor[$x]->subj_name.'</td>
                                                       <td cl="'.$seletor[$x]->cl_id.'" class="sbcl_'.$seletor[$x]->subj_id.'">'. $u_cl.'</td>
                                                      <td><button type="button" onclick="setvl('.$seletor[$x]->subj_id.')" class="btn btn-outline btn-info btn-sm" data-toggle="modal" data-target="#myModal">Edit</button></td>
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
         
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Edit Subject</h4>
                                        </div>
                                        <div class="modal-body">
                                       <form action="" method="POST">
                                        <div class="form-group">
                                            <label>Edit Input</label>
                                            <input class="form-control" id="nm" name="subnm" value="">
                                            
                                        </div>
                                        <input type="hidden" name="id" id="did">
                                        <div class="form-group">
                                        <label>Select Student Class</label>
                                        <select name="subclass" class="form-control">
                                            <option id="js" value="0">JSS</option>
                                            <option id="ss" value="1">SSS</option>
                
                                        </select>
                                    </div>
                        
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="sbediter" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                            <script>
                             function setvl(id){
                                var str = $( ".sbn_"+ id).text();
                                var scl = $('.sbcl_'+id).attr('cl');
                                $("#nm").val(str);
                                $("#did").val(id);
                                
                            if (scl== "0") {
                                $("#js").attr("selected", true);   
                                $("#ss").attr("selected", false); 
                            }else{
                                $("#ss").attr("selected", true); 
                                $("#js").attr("selected", false);  
                            }
                           
                                }
                            </script>