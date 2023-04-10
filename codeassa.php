<?php


$user = new User();
if (Input::exists("subid")) {
     $code = generate_string();
$user->create('workers',array(
    'subj' =>  Input::get('subid'),
    'subclas' =>  Input::get('subcl'),
    'code' =>  $code,
    'status' =>  1,
    'clas' => Input::get('class')  
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
                    <h1 class="page-header">Assessment Work Page</h1>
                </div>
                <!-- End Page Header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                     <!--jumbotron-->
                    <div class="jumbotron">
                        <h1>New Assessment Code</h1>
                        <p>Copy and send the code below to the assessment helper </p>
                        <h4  style="color: blue;"><?php echo $code; ?></h4>
                        <h5>stjohnboscoseminary.com/worksheet.php</h5>
                        <p><a  href="dashboard.php?SJBSI=15&class=4" class="btn btn-primary btn-lg" role="button">Back</a>
                        </p>
                    </div>
                      <!--End jumbotron-->
                </div>
            </div>