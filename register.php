<?php
require_once 'core/init.php';
 $log ='';
if (Input::exists("new_staff")) {
    if(Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validate->check($_POST, array(
            'full_name' => array(
                'name' => 'full_name',
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
             'email' => array(
                'name' => 'email',
                'required' => true,
               
            ),
             'phone' => array(
                'name' => 'phone',
                'required' => true,
                
            ),
             'address' => array(
                'name' => 'address',
                'required' => true,
               
            ),
            'user_code' => array(
                'name' => 'user_code',
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users'
            ),
            'new_staff' => array(
                'name' => 'new_staff',
                'required' => true,
                'min' => 2,
                'max' => 20,
                'newstaff' => 'intake'
            ),
            'password' => array(
                'name' => 'Password',
                'required' => true,
                'min' => 6
            ),
            'password_again' => array(
                'required' => true,
                'matches' => 'password'
            ),
        ));

        if ($validate->passed()) {
            $user = new User();
            $salt = Hash::salt();
             $saltu = 'oooooo'; 


            try {
                $user->create('users',array(
                    'full_name' => Input::get('full_name'),
                    'user_code' => Input::get('user_code'),
                    'password' => Hash::make(Input::get('password'), $salt),
                    'gender' =>  'M',
                    'priority' => $_SERVER['prio'],
                    'ddate' => date('Y-m-d H:i:s')
                    
                ));
                


                $user->create('staff_de',array(
                    'staff_code' => Input::get('user_code'),
                    'email' => Input::get('email'),
                    'staff_gander' => Input::get('gander'),
                    'phone' =>Input::get('phone'),
                    'address' =>Input::get('address'),
                    'date_reg' => Input::get('yr')
                    
                ));
                $user->updateuser('intake', array(
                    'prio' =>0  
                ), array('new_staff','=',Input::get('new_staff')));


                Session::flash('home', 'Welcome ' . Input::get('full_name') . '! Your account has been registered. You may now login.');
                
               Redirect::to('index.php');
            } catch(Exception $e) {
                //echo $e, '<br>';
            }
        } else {
          
foreach ($validate->errors() as $error) {

                $log .='<div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                '.$error.'
                   </div>';
                
            }
       
        }
    }
} 
   
?>
      
    


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STJOHNB | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="styleshee"/>
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center logo-margin ">
            <img class="imgs" src="assets/img/logo.png" alt="">
                </div>
            <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Register</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $log;  ?>
                    
                    <form action="" method="post">
                            <fieldset>
                            
    <div class="form-group">                                    
        <label for="name">Name</label>
        <input type="text" class="form-control" name="full_name" value="<?php echo escape(Input::get('full_name')); ?>" id="name">
    </div>

   <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="user_code" id="username" value="<?php echo escape(Input::get('user_code')); ?>">
    </div>
    <div class="form-group">
        <label for="username">Staff code</label>
        <input type="text" class="form-control" name="new_staff" id="username" value="<?php echo escape(Input::get('new_staff')); ?>">
    </div>
    <div class="form-group">                                    
        <label for="name">E mail</label>
        <input type="text" class="form-control" name="email" value="<?php echo escape(Input::get('email')); ?>" id="name">
    </div>
    <div class="form-group">                                    
        <label for="name">Phone Number</label>
        <input type="text" class="form-control" name="phone" value="<?php echo escape(Input::get('phone')); ?>" id="name">
    </div>
    <div class="form-group">                                    
        <label for="name">Address</label>
        <input type="text" class="form-control" name="address" value="<?php echo escape(Input::get('phone')); ?>" id="name">
    </div>
    <div class="form-group">                                    
        <label for="name">Date of Birth</label>
        <input type="date" class="form-control" name="yr" value="<?php echo escape(Input::get('yr')); ?>" id="name">
    </div>
    <div class="form-group">  
    <label for="name">Gender</label>
     <label class="radio-inline">
      <input type="radio" name="gander" value="Male">Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="gander" value="Female">Female
    </label>
    </div>
    
    
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>

    <div class="form-group">
        <label for="password_again">Password Again</label>
        <input type="password" class="form-control" name="password_again" id="password_again" value="">
    </div>

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <button type="submit" class="btn btn-primary">Register</button>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script>
         $(".error").html(`<?php  // echo $log; ?>`); 
   </script>
</body>

</html>





