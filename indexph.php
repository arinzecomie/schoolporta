<?php
require_once 'core/init.php';

if(Session::exists('home')) {
    echo '<p>' . Session::flash('home'). '</p>';
}

$user = new User(); //Current

if($user->isLoggedIn()) {
  $userdata =  $user->data(); 
            
   $user->findoder('users',array('priority', '=', 1));
   $seletor =  $user->newdata();


?>

    <p>Hello, <a href="profile.php?user=<?php echo escape( $userdata->full_name);?>"><?php echo escape($user->data()->full_name); ?></a></p>
    <ul>
        <?php   
        for ($x = 0; $x <= count($seletor)-1; $x++) {
                   echo '<li>the user name is '. $seletor[$x]->full_name.'</li>'; 
          } ?>
        <li><a href="update.php">Update Profile</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
        <li><a href="logout.php">Log out</a></li>
    </ul>
<?php

    
    

} else {
    echo '<p>You need to <a href="login.php">login</a> or <a href="register.php">register.</a></p>';
}