<?php 
$user = new User();

if($user->data()->priority == 1){
        $user->findoder('stud_de',['stud_code', '=', $user->data()->user_code]);
        $stud_d =  $user->newdata()[0];  
        require_once 'student.php';
} else{ 
     
    $staff_d = $_SESSION['staff_d'];  
    require_once 'staff.php'; 
}
?>         