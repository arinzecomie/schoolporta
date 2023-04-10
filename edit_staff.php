<?php
$user = new User();
$log='';
if(Input::exists('nwp')){
    $salt = Hash::salt();
try{
   $setp =  $user->updateuser('users',array(
                     'password' => Hash::make(Input::get('nwp'), $salt),
                     'intake' => Input::get('nwp')                                     
                ), array('user_code','=',Input::get('id')));
       
      $wnp = 'The password has successfully changed, it will now appear on the list table' ;           
      
} catch(Exception $e) {
                echo $e, '<br>';
                die();
            }
}
if (Input::exists("full_name")) {
     
    $myuser['full_name'] = array(
                    'name' => 'full_name',
                    'required' => true);
     $user_c['full_name'] =Input::get('full_name');
    
           $staff_c  =array(
                        'staff_cl' =>Input::get('clas'),
                        'staff_mcl' =>Input::get('subcl'),
                        'email' =>Input::get('email'),
                        'phone' =>Input::get('phone'),
                        'address' =>Input::get('address')
                        );              
   if(Input::get('id') !== Input::get('user_code') ){
       $myuser['user_code'] =  array(
                    'name' => 'user_code',
                    'required' => true,
                    'min' => 2,
                    'max' => 20,
                    'unique' => 'users');
                
      $user_c['user_code']  = Input::get('user_code'); 
      $staff_c['staff_code']  = Input::get('user_code'); 
   }

      
      
            $validate = new Validate();
            $validate->check($_POST,$myuser);
    
            if ($validate->passed()) {
        
                foreach ($_POST as $key => $value) {
                   
                    if ($value == "on") {
                        $subc[]= $key;
                    }
                }
                
               
                 $subject = json_encode($subc);
                 $user->updateuser('users',$user_c, array('user_code','=',Input::get('stid')));
                
                 $staff_c['stud_subj'] = $subject;
                 $user->updateuser('staff_de', $staff_c, array('staff_code','=',Input::get('stid'))); 
                   
                
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
      
        

        $user->findoder('users',array('user_code', '=', Input::get('id')));
        $seletor =  $user->newdata()[0]; 
        $user->findoder('staff_de',array('staff_code', '=', Input::get('id')));
        $staff_d =  $user->newdata()[0];
        
        $set_s =array();
       if(!empty($staff_d->stud_subj)){ $set_s = json_decode($staff_d->stud_subj); }
    
?>
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $seletor->full_name ?></h1>
                </div>
                <!-- End Page Header -->
            </div>
           
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Staff
                        </div>
                        <div class="panel-body">
                        
                            <form method="POST" role="form">
                                
                            <?php echo $log; ?>
                               
                                <div class="row">
                                <div class="col-xs-6">
                                <div class="form-group">
                                 <label>Full Name</label>
                                  <input class="form-control" name="full_name" value="<?php echo $seletor->full_name ?>">
                                 </div>
                                </div> 
                                <div class="col-xs-6">
                                <div class="form-group">
                                 <label>User Name</label>
                                  <input class="form-control" name="user_code" value="<?php echo $seletor->user_code ?>">
                                 </div>
                                </div> 
                                <div class="col-xs-6">
                                <div class="form-group">
                                 <label>Email</label>
                                  <input class="form-control" name="email" value="<?php echo $staff_d->email ?>">
                                 </div>
                                </div> 
                                <div class="col-xs-6">
                                <div class="form-group">
                                 <label>Phone No</label>
                                  <input class="form-control" name="phone" value="<?php echo $staff_d->phone ?>">
                                 </div>
                                </div> 
                                <div class="col-xs-12">
                                <div class="form-group">
                                 <label>Address</label>
                                  <input class="form-control" name="address" value="<?php echo $staff_d->address ?>">
                                 </div>
                                 </div>
                                    <div class="col-xs-6">
                                <div class="form-group">
                                  <label>Assign Class Form Master</label>
                                  <select name="clas" class="form-control">
                                 <?php
                                 $clas=array('--Select Class--','JSS1','JSS2','JSS3','SSS1','SSS2','SSS3');
                                 for ($i=0; $i <  6; $i++) { 
                                    if($staff_d->staff_cl  == $i){
                                      $l = 'selected';
                                    }else{
                                        $l = '';  
                                    }
                                     ?>
                                    <option value="<?php echo $i; ?>" <?php echo $l; ?>><?php echo $clas[$i]; ?> </option>
                                    <?php   } ?>
                                        
                                  </select>
                                  </div>
                                 </div>
                                 <div class="col-xs-6">
                                <div class="form-group">
                                  <label>Subclass</label>
                                  <select  name="subcl" class="form-control">
                                  <?php
                                 $clas=array('--Select Sub Class--','A','B','C','D','E','F','G');
                                 for ($i=0; $i < 8; $i++) { 
                                    if($staff_d->staff_mcl  == $i){
                                      $l = 'selected';
                                    }else{
                                        $l = '';  
                                    }
                                     ?>
                                    <option value="<?php echo $i; ?>" <?php echo $l; ?>><?php echo $clas[$i]; ?> </option>
                                    <?php   } ?>
                                         
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
                               //session
               $user->findoder('subject',array('cl_id', '=', 1));
                    $DSS =  $user->newdata(); 
                  
                foreach ($DSS as $ky => $va) {  
                
                    $slc='';
                    $chek ='1_'.$ky; 
                    if(in_array($chek,$set_s)){
                        $slc='checked';
                    }
                      ?>
                            <label class="checkbox-inline">
                                   <input type="checkbox" name="<?php  echo $chek; ?>" <?php  echo $slc; ?> ><?php  echo $va->subj_name; ?>
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
                    $DJS =  $user->newdata(); 

                foreach ($DJS as $ky => $va) {
                    $slc='';
                    $chek = '0_'.$ky; 
                    if(in_array($chek,$set_s)){
                        $slc='checked';
                    }
                      ?>
                            <label class="checkbox-inline">
                                   <input type="checkbox" name="<?php  echo $chek; ?>" <?php  echo $slc; ?> ><?php  echo $va->subj_name; ?>
                               </label>
                               <?php } ?>
                                            
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                               
                                 
                            <input type="hidden" name="stid" value="<?php echo Input::get('id'); ?>">
                                        <button type="submit" class="btn btn-primary">Upate Now</button>
                            </form>
                         <br><br>
                            <form role="form" method="POST" class="form-inline"><input type="hidden" name="stid" value="<?php echo Input::get('id'); ?>">
                            <div id='gg' type="submit" class="btn btn-default">Generate Password</div>
                            
                            <div class="form-group">
                                  <input  id='rand' class="form-control" name="nwp" >
                                </div>
                                <button type="submit" name="addsgs" class="btn btn-primary">Save Password</button>
                            </form>
                        </div>
                    </div>
                </div>
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>         
<script>
      var r =  Math.random().toString(36).slice(-9)
    $('#rand').val(r);
        $("#gg").click(function(){
   $('#rand').val(Math.random().toString(36).slice(-9));
   });
</script>