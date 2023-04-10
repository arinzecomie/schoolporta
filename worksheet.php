<?php
require_once 'core/init.php';

if(Input::exists("code")) {

    if(Token::check(Input::get('token'))) {

        $validate = new Validate();
        $validate->check($_POST, array(
            'code' => array('required' => true)
        ));
        $log='';
        if($validate->passed()) {

            $user = new User();
            $user->findoder('workers',array('code', '=', Input::get('code')));
            $seletor =  $user->newdata()[0];
           
            if(count($seletor) > 0) {
            
            Redirect::to('dashboard.php?SJBSI=15&class='.$seletor->clas.'&subid='.$seletor->subj.'&exten='.$seletor->subclas);
            }else{

                $log = '<div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p>Incorrect username or password</p>
                       </div>';
            }
        } else {
          
            foreach ($validate->errors() as $error) {
                $log .= '<div class="alert alert-danger alert-dismissable">
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
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
            <img class="imgs" src="assets/img/logo.png" alt="">
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In To Work Sheet</h3>
                    </div>
                    <div class="panel-body">
                    <form action="" method="post">
                    <div class="error"></div>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter your Code" name="code" type="text" autofocus>
                                </div>
                              
                                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
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
         $(".error").html(`<?php   echo $log; ?>`); 
   </script>
</body>

</html>
