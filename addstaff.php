<?php
$user = new User();
$log='';
if (Input::exists("user_code")) {
   
        
            $validate = new Validate();
            $validate->check($_POST, array(
                  'full_name' => array(
                    'name' => 'full_name',
                    'required' => true,
                ),
                

                'user_code' => array(
                    'name' => 'user_code',
                    'required' => true,
                    'min' => 2,
                    'max' => 20,
                    'unique' => 'users'
                )
            
            ));
    
            if ($validate->passed()) {
              
                $salt = Hash::salt();
                 $saltu = 'oooooo'; 
                
               
               
               
                foreach ($_POST as $key => $value) {
                   
                    if ($value == "on") {
                        $subc[]= $key;
                    }
                }
                 $subject = json_encode($subc);
    
                  
               
                    $user->create('users',array(
                        'full_name' => Input::get('full_name'),
                        'user_code' => Input::get('user_code'),
                        'password' => Hash::make(Input::get('password'), $salt),
                        'priority' => 2,
                        'ddate' => date('Y-m-d H:i:s')
                        
                    ));
   
      
                    $user->create('staff_de',array(
                        'staff_code' => Input::get('user_code'),
                        'staff_cl' =>Input::get('clas'),
                        'staff_mcl' =>Input::get('subcl'),
                        'stud_subj' => $subject,
                        'email' =>Input::get('email'),
                        'phone' =>Input::get('phone'),
                        'address' =>Input::get('address'),
                        'date_reg' => date('Y-m-d H:i:s')
                    ));
                
         
                    Redirect::alert('You have successfully  added Staff With password 123456.');
                    Redirect::move_to('dashboard.php?SJBSI=1'); 
                   
                
            } else {
               
            foreach ($validate->errors() as $error) {
                $log .= '<div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                '.$error.'
                   </div>';
                
            }
         }
        }
     
    

 
?>
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Staff Page</h1>
                </div>
                <!-- End Page Header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Staff
                        </div>
                        <div class="panel-body">
                        
                            <form method="POST" role="form">
                            <?php echo $log; ?>
                            <div class='row'>
                             <div class="col-xs-6">
                                <div class="form-group">
                                 <label>Full Name</label>
                                  <input class="form-control" name="full_name" placeholder="Enter new staff name">
                                 </div>
                                </div> 
                                <div class="col-xs-6">
                                <div class="form-group">
                                 <label>User Name</label>
                                  <input class="form-control" name="user_code" placeholder="Enter new staff username">
                                 </div>
                                </div> 
                                 <div class="col-xs-6">
                                <div class="form-group">
                                 <label>Password</label>
                                  <input class="form-control" id='rand' name="password" >
                                 </div>
                                </div> 
                                <div class="col-xs-6">
                                <div class="form-group">
                                 <label>Email</label>
                                  <input class="form-control" name="email" placeholder="Enter new staff email">
                                 </div>
                                </div> 
                                <div class="col-xs-6">
                                <div class="form-group">
                                 <label>Phone No</label>
                                  <input class="form-control" name="phone" placeholder="Enter new staff phone number">
                                 </div>
                                </div> 
                                <div class="col-xs-6">
                                <div class="form-group">
                                 <label>Address</label>
                                  <input class="form-control" name="address" placeholder="Enter new staff addresss">
                                 </div>
                                 </div>
                                 
                              </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                <div class="form-group">
                                  <label>Assgin Class Form Master</label>
                                  <select name="clas" class="form-control">
                                      <option value="0">--Select Class--</option>
                                          <option value="1">SSS1</option>
                                          <option value="2">SSS2</option>
                                          <option value="3">SSS3</option>
                                          <option value="4">JSS1</option>
                                          <option value="5">JSS2</option>
                                          <option value="6">JSS3</option>
                                  </select>
                                  </div>
                                 </div>
                                 <div class="col-xs-6">
                                <div class="form-group">
                                  <label>Subclass</label>
                                  <select  name="subcl" class="form-control">
                                      <option value="0">--Select Sub Class--</option>
                                          <option value="1">A</option>
                                          <option value="2">B</option>
                                          <option value="3">C</option>
                                          <option value="4">D</option>
                                          <option value="5">E</option>
                                          <option value="6">F</option>
                                          <option value="7">G</option>
                                  </select>
                                </div>
                                </div>
                                </div>
                                <h3 style="text-align: center;background: #e9edf1;padding: 5px;">Assign Subjects</h3>
                                <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">  <h4 class="panel-title">
                                            SSS Class Subject List
                                        </h4></a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" style="height: auto;">
                                        <div class="panel-body">
                                        <div class="form-group">
                               
                     
     
                               <br>
                               <?php
               $user->findoder('subject',array('cl_id', '=', 1));
                    $seletor =  $user->newdata(); 
                  
                foreach ($seletor as $ky => $va) {   ?>
                            <label class="checkbox-inline">
                                   <input type="checkbox" name="1_<?php  echo $ky; ?>"><?php  echo $va->subj_name; ?>
                               </label>
                               <?php } ?>
                               </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                 <div class="panel-heading">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">  <h4 class="panel-title">
                                            JSS Class Subject List
                                        </h4></a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
            <?php   $user->findoder('subject',array('cl_id', '=', 0));
                    $seletor =  $user->newdata(); 
                foreach ($seletor as $ky => $va) {   ?>
                            <label class="checkbox-inline">
                                   <input type="checkbox" name="0_<?php  echo $ky; ?>"><?php  echo $va->subj_name; ?>
                               </label>
                               <?php } ?>
                                            
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                               
                                 
                               
                                        <button type="submit" class="btn btn-primary">Add Now</button>
                            </form>
                         
                        </div>
                    </div>
                </div>
            
               <div class="col-lg-12">
                  <!-- Form Elements -->
                  <div class="panel panel-default">
                     <div class="panel-heading">
                   Generate New Teachers Sign up Code
                  </div>
               <div class="panel-body">
                  
<form method="POST" action="dashboard.php?SJBSI=11" class="form-inline" >
    <div class="form-group">
    <label>Select Staff Ranking</label>
    <select name="prio" class="form-control">
            <option value="2">Teacher</option>
            <option value="3">Admin</option>
    </select>
</div>
  <button type="submit"  class="btn btn-primary">Generate</button>
</form>
           
            </div>
     </div>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>         

     <script>
         $(".error").html(`<?php   echo $log; ?>`); 
         $('#rand').val(Math.random().toString(36).slice(-9));
   </script>