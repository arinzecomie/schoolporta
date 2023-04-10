<?php
require_once 'core/init.php';
$mgsshow = 0;
if(Session::exists('home')) {
    $mgsshow=Session::get('home');
   
}

$user = new User(); //Current

if(!Input::exists('exten')){
if(!$user->isLoggedIn()){
    Redirect::to('login.php');
}
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ST. JOHN BOSCO SEMINARY ISUANIOCHA| Dashboad</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
     <link href="assets/alertjs/vanillatoasts.css" rel="stylesheet"></script>
     <link rel="stylesheet" href="assets/sweetalert2/dist/sweetalert2.min.css">
     

   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
      <?php 
         $navs= $user->data()->priority;
      if($user->data()->priority == 4){
          $navs = 3;
      }
      


      if($navs ==1){
      
      }else if($navs ==2){
           $user->findoder('staff_de',['staff_code', '=', $user->data()->user_code]);
           $_SESSION['staff_d'] =  $user->newdata()[0];
      }
 if(Input::exists('exten')){
           $navs = 5;
      }
       require_once 'navbar'.$navs.'.php';
      ?>      
        <!-- end navbar side -->
        <!--  page-wrapper -->
<div id="page-wrapper">
<?php
Redirect::to(Input::get('SJBSI'));
?>
</div>
        <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->
  
  
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
   
    
    <script>
<?php
if($mgsshow){
sweetalert($mgsshow);
Session::flash('home');
} 
?>


        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
   <script src="assets/sweetalert2/dist/sweetalert2.min.js"></script>
<!-- end page-wrapper -->
</body>

</html>