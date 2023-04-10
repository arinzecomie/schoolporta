<?php
$user = new User();
if(!$user->isLoggedIn()){
    Redirect::to('login.php');
}
$wnp = 1;

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

if (isset($_POST['addsgs'])) {
    if(Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validate->check($_POST, array(
              'full_name' => array(
                'name' => 'full_name',
                'required' => true,
            ),
            
            'subclass' => array(
                'name' => 'subclass',
                'required' => true,
            ),
            'yr' => array(
                'name' => 'yr',
                'required' => true,
            )
        ));

        if ($validate->passed()) {
            // $salt = Hash::salt();
            //  $saltu = 'oooooo'; 
            
            //  $num =rand(10000,99999);
            // $user_code ='SJBSI'.date('y').$num;
        //     $user->findoder('users',array('users_code', '=', $user_code));
        //    if($user->efcount()){
        //        $num =rand(10000,99999);
        //     }
           
            // $user_code ='SJBSI'.date('y').$num;
            foreach ($_POST as $key => $value) {
               
                if ($value == "on") {
                    $nuy = explode("_",$key);
                    $subc[]=$nuy[1];
                }
            }
             $subject = json_encode($subc);

                $user->updateuser('stud_de', array(
                    'stud_level' =>Input::get('class'),
                    'stud_subcl' =>Input::get('subclass'),
                    'stud_term' =>  Input::get('term'),
                    'stud_subj' => $subject,
                    'date_set' => Input::get('yr')
                ), array('stud_code','=',Input::get('stid'))); 
                $user->updateuser('users', array(
                    'full_name' => Input::get('full_name')
                ), array('user_code','=',Input::get('stid'))); 
       $wnp = 'You have successfully  Updated  sutudent detail.' ;
                
                Redirect::move_to('dashboard.php?SJBSI=1'); 
               
            
        } else {
            foreach ($validate->errors() as $error) {
                echo $error . "<br>";
               
            }
        }
    }
  }
  $user->findoder('users',array('user_code', '=', Input::get('id')));
  $seletor =  $user->newdata()[0]; 
  $user->findoder('stud_de',array('stud_code', '=', Input::get('id')));
  $stud_d =  $user->newdata()[0];
 
  $set_s = json_decode($stud_d->stud_subj);
?>
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $seletor->full_name ?></h1>
                </div>
                <!--End Page Header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Student
                        </div>
                        <div class="panel-body">
                             <?php 
                      
                if($wnp !== 1){  echo '<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                '.$wnp.'
                   </div>'; } ?>
                            <form role="form" method="POST">
                               
                                <div class="row">
                               <div class="col-xs-6">
                                   <div class="form-group">
                                  <label>Full Name</label>
                                  <input class="form-control" name="full_name" value="<?php $namer = trim($seletor->full_name); echo $namer; ?>">
                                </div>
                                 
                                <div class="form-group">
                                  <label>Select Student Class</label>
                                        <select name="class" class="form-control">
                                            

                                <?php
                            $c = trim(Input::get('cls'));
                             $clases=array('','JSS1','JSS2','JSS3','SSS1','SSS2','SSS3');
                                 for ($i=1; $i < 8; $i++) { 
                                    if($c   == $i){
                                      $l = 'selected';
                                    }else{
                                        $l = '';  
                                    }
                                     ?>
                                    <option value="<?php echo $i; ?>" <?php echo $l; ?>><?php echo $clases[$i]; ?> </option>
                                    <?php   } ?>
                                        </select>
                                        
                                      </div>   
                                        
                               <div class="form-group">
                                        <label>Select Student  Sub-Class</label>
                                        <select name="subclass" class="form-control">
                                            

                                        <?php
                                 $clas=array('','A','B','C','D','E','F','G');
                                 for ($i=1; $i < 8; $i++) { 
                                    if($stud_d->stud_subcl  == $i){
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
                                  <label>Academic Year</label>
                                  <input class="form-control" name="yr" value="<?php $y= date('Y')-1 .'/'.date('Y'); echo  $y;?>">
                                </div>
                                </div>
                                    
                                <div class="form-group">
                                            <label>Inline Checkboxes</label>
                                            <br>
                                            <?php
                               //session
               $ret = ($stud_d->stud_level < 4) ? 0 : 1 ;
               $user->findoder('subject',array('cl_id', '=', $ret));
               $DSS =  $user->newdata(); 
                  
                foreach ($DSS as $ky => $va) {  
                
                    $slc='';
                    $chek ='sub_'.$va->subj_id; 
                    if(in_array($va->subj_id,$set_s)){
                        $slc='checked';
                    }
                  $redb =  trim(Input::get('cls'));
                      ?>
                            <label class="checkbox-inline">
                                   <input type="checkbox" name="<?php  echo $chek; ?>" <?php  echo $slc; ?> ><?php  echo $va->subj_name; ?>
                               </label>
                               <?php } ?>

                                            
                                        </div>
                                        </div>
                                        
                                        <input type="hidden" name="stid" value="<?php echo Input::get('id'); ?>">
                                        <input type="hidden" name="term" value="1">
                                        <input type="hidden" name="token" value="<?php echo Token::generate(1); ?>">
                                        <button type="submit" name="addsgs" class="btn btn-primary">Save Now</button><a href="dashboard.php?SJBSI=3&class=<?php echo Input::get('cls'); ?>" class="btn btn-info">Back</a>
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
                </div>
                
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>         
<script>
      var r =  Math.random().toString(36).slice(-9)
    $('#rand').val(r);
        $("#gg").click(function(){
   $('#rand').val(Math.random().toString(36).slice(-9));
   });
</script>