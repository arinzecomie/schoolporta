<?php
require_once 'core/init.php';
function sweetalert($input){
   
    $sweet='swal({
        type: "success",
        title: "'.$input.'",
        showConfirmButton: false,
        timer: 3000
      });';
    return $sweet;
}

?>