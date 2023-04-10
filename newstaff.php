<?php
$user = new User();
if (Input::exists("prio")) {
     $code = generate_string();
$user->create('intake',array(
    'new_staff' =>  $code,
    'prio' => Input::get('prio')  
));
}
function generate_string() {
    $strength = 15;
    //abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789
   $input ='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
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
                     <!--jumbotron-->
                    <div class="jumbotron">
                        <h1>New Staff Code</h1>
                        <p>Copy and send the code below to the new staff for registeration</p>
                        <h4  style="color: blue;"><?php echo $code; ?></h4>
                        <h2>ON Link</h2>
                        <h5>https://stjohnboscoseminary.com/register.php</h5>
                        <p><a  href="dashboard.php?SJBSI=4" class="btn btn-primary btn-lg" role="button">Back</a>
                        </p>
                    </div>
                      <!--End jumbotron-->
                </div>
            </div>