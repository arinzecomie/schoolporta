<?php
$user = new User();
if(!$user->isLoggedIn()){
    Redirect::to('login.php');
}
function randomstring($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

function userid(){
    $length = 5;
    $pool = '01234567899876543211368903683257846714584';
    $num = substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
     return 'SJBSI'.date('y').$num;;         
}
$class = Input::get('class');
 $clas=array('','JSS1','JSS2','JSS3','SSS1','SSS2','SSS3');


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
            $salt = Hash::salt();
             $saltu = 'oooooo'; 
            
             
        
           

            foreach ($_POST as $key => $value) {
              
            //  $user->findoder('users',array('users_code', '=', $user_code));
            //   if($user->efcount()){
            //     $num =rand(10000,99999);
            //     $user_code ='SJBSI'.date('y').$num;
            //     }
                if ($value == "on") {
                    $nuy = explode("_",$key);
                    $subc[]=$nuy[1];
                }
            }
             $subject = json_encode($subc);
        

              $password =  randomstring();
               
                $user->create('users',array(
                    'full_name' => Input::get('full_name'),
                    'user_code' => $user_code,
                    'password' => Hash::make($password, $salt),
                    'intake' => $password,
                    'gender' =>  'M',
                    'priority' => 1,
                    'ddate' => date('Y-m-d H:i:s')
                    
                ));
                

          $user_cl = (isset($_GET['cl'])) ? 0 : 1 ;
                $user->create('stud_de',array(
                    'stud_code' => $user_code,
                    'stud_cl' => $user_cl,
                    'stud_level' =>Input::get('class'),
                    'stud_subcl' =>Input::get('subclass'),
                    'stud_term' =>  Input::get('term'),
                    'stud_subj' => $subject,
                    'date_set' => Input::get('yr')
                    
                ));
            
     
                Redirect::alert('You have successfully  added sutudent.');
               // Redirect::move_to('dashboard.php?SJBSI=1'); 
               
            
        } else {
            foreach ($validate->errors() as $error) {
                echo $error . "<br>";
               
            }
        }
    }
  }

if (isset($_POST['addmass'])) {
   
 

       
            $salt = Hash::salt();
             $saltu = 'oooooo'; 
            
             $num =rand(10000,99999);
            $user_code ='SJBSI'.date('y').$num;
        //     $user->findoder('users',array('users_code', '=', $user_code));
        //   if($user->efcount()){
        //       $num =rand(10000,99999);
        //     }
           
           
            foreach ($_POST as $key => $value) {
               
                if ($value == "on") {
                    $nuy = explode("_",$key);
                    $subc[]=$nuy[1];
                }
            }
         
             $subject = json_encode($subc);

                 
                   $nuy = array_filter(explode("/",Input::get('rown') ));
                 
                    foreach ($nuy as $key => $value) {
                         $user_code = userid();  
                        $password =  randomstring();
                        $user->create('users',array(
                            'full_name' => trim($value),
                            'user_code' => $user_code,
                            'password' => Hash::make($password, $salt),
                            'intake' => $password,
                            'gender' =>  'M',
                            'priority' => 1,
                            'ddate' => date('Y-m-d H:i:s')
                            
                        ));
                        
        
                  
                        $user->create('stud_de',array(
                            'stud_code' => $user_code,
                           
                            'stud_level' =>Input::get('class'),
                            'stud_subcl' =>Input::get('subclass'),
                            'stud_term' =>  Input::get('term'),
                            'stud_subj' => $subject,
                            'date_set' => Input::get('yr')
                            
                        ));
             }
               
            
     
                Redirect::alert('You have successfully  added sutudent.');

               
            
        } else {
            // foreach ($validate->errors() as $error) {
            //     echo $error . "<br>";
               
            // }
        }
    

?>
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add To <?php  echo $clas[$class]; ?> Class</h1>
                </div>
                <!--End Page Header -->
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Student
                        </div>
                        <div class="panel-body">
                            
                            <form role="form" method="POST">
                               <div class="form-group">
                                  <label>Full Name</label>
                                  <input class="form-control" name="full_name" placeholder="Enter new student name">
                                </div>
                                <div class="row">
                               <div class="col-xs-6">
                               <div class="form-group">
                                        <label>Select Student Class</label>
                                        <select name="subclass" class="form-control">
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
                               <div class="col-xs-6">
                               <div class="form-group">
                                  <label>Academic Year</label>
                                  <input class="form-control" name="yr" value="<?php $y= date('Y')-1 .'/'.date('Y'); echo  $y;?>">
                                </div>
                               </div>

                                </div>
                                    
                                <div class="form-group">
                                            <label>Inline Checkboxes</label>
                                            <br>
                                            <?php
                                            $u_cl = ($class < 4) ? 0 : 1 ;
                                              $user->findoder('subject',array('cl_id', '=', $u_cl));
                                              $seletor =  $user->newdata();
                                              for ($x = 0; $x <= count($seletor)-1; $x++) {
                                                $y = $x+1;
                                                echo ' <label class="checkbox-inline">
                                                      <input name="sub_'.$seletor[$x]->subj_id.'" type="checkbox" checked>'. $seletor[$x]->subj_name.'
                                                       </label>
                                                       '; 
                                              }
                                            ?>
                                        </div>
                                        
                                        <input type="hidden" name="class" value="<?php echo $class; ?>">
                                        <input type="hidden" name="term" value="3">
                                        <input type="hidden" name="token" value="<?php echo Token::generate(1); ?>">
                                        <button type="submit" name="addsgs" class="btn btn-primary">Add Now</button>
                            </form>
                         
                        </div>
                    </div>
                </div>
            
               <div class="col-lg-6">
                  <!-- Form Elements -->
                  <div class="panel panel-default">
                     <div class="panel-heading">
                    Basic Form Elements
                  </div>
                 <div class="panel-body">
                 <form role="form" action='' method="POST">
                    <div class="form-group">
                        <label>Enter All New Student Names With "/" After Each</label>
                        <textarea class="form-control" name="rown" rows="5" placeholder="Eze Arinze/Eze Kizito/Eze Arinze" required></textarea>
                    </div>
                    <div class="row">
                               <div class="col-xs-6">
                               <div class="form-group">
                                        <label>Select Student Class</label>
                                        <select name="subclass" class="form-control" required>
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
                               <div class="col-xs-6">
                               <div class="form-group">
                                  <label>Academic Year</label>
                                  <input class="form-control" name="yr" value="<?php $y= date('Y')-1 .'/'.date('Y'); echo  $y;?>">
                                </div>
                               </div>

                                </div>
                <div class="form-group">
                            <label>Inline Checkboxes</label>
                            <br>
                            <?php
                                              for ($x = 0; $x <= count($seletor)-1; $x++) {
                                                $y = $x+1;
                                                echo ' <label class="checkbox-inline">
                                                      <input name="sub_'.$seletor[$x]->subj_id.'" type="checkbox" checked>'. $seletor[$x]->subj_name.'
                                                       </label>
                                                       '; 
                                              }
                                            ?>
                        </div>
                        
                        <input type="hidden" name="class" value="<?php echo Input::get('class') ?>">
                        <input type="hidden" name="term" value="3">
                         <button type="submit" name="addmass" class="btn btn-primary">Add Now</button>
                </form>   
              </div>
            </div>
     </div>

