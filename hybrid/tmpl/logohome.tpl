<!-- 
order templates hyip on http://cheaphyipscript.com/
-->

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{$settings.site_name}</title>
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/animate.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/css/font-awesome.min.css"/>
<script src='js/jquery-1.11.3.min.js'></script>
<script src='js/wow.js'></script>
<script>
    wow = new WOW();
    wow.init(); 
</script>
</head>

<body>
<div id="main-header"><!--start header-->
	<div id="sub-header">
    	<div class="location">
            <div class="loicon">
            	<img src="images/loc.png"/>
            </div>
            <div class="loc-text">
            	<p>17 Crispin Way, Farnham Common</br>
                Slough, United Kingdom, SL2 3UD</p>
            </div>
        </div>
        <div class="location">
        	<div class="loicon">
            	<img src="images/mail.png"/>
            </div>
            <div class="loc-text">
            	<p>Support Mail</br>
                support@{$settings.site_name}</p>
            </div>
        </div>
        <div class="reg-login">

            {if $userinfo.logged != 1}
            <div class="register">
        	<a href="?a=signup" class="a-link">REGISTRATION</a>
            </div>
            <div class="login">
            	<a href="?a=login" class="a-link">LOGIN</a>
            </div>
			{else}
			 <div class="register">
        	<a href="?a=account" class="a-link">DASHBOARD</a>
            </div>
            <div class="login">
            	<a href="?a=logout" class="a-link">LOGOUT</a>
            </div>
{/if}
        </div>
    </div>
</div><!--end header-->
<div id="main-menu"><!--start menu-->
     <div id="sub-menu">
    	<div class="logo">
        	<a href="?a=home"><img src="images/logo.png"/></a>
        </div>
        <div class="menu">
            <nav id="nav-3">
              <a class="link-3" href="?a=home">Home</a>
              <a class="link-3" href="?a=cust&page=about">About</a>
              <a class="link-3" href="?a=faq">F.A.Q</a>
              <a class="link-3" href="?a=news">News</a>
              <a class="link-3" href="?a=cust&page=representative">Representative</a>
              <a class="link-3" href="?a=cust&page=rate">Our rating</a>
              <a class="link-3" href="?a=support">Support</a>
            </nav>
        </div>
    </div>
</div><!--end menu-->
<div id="main-slider"><!--start slider-->
	<div id="sub-slider">
    	<div class="slid-text bounceIn animated wow"data-wow-duration="2s" data-wow-delay="0.4s" >
        	<p>LOCALHOST CLOUD MINING LTD</p>
        </div>
        <div class="best fadeIn animated wow"data-wow-duration="2s" data-wow-delay="0.4s" >
        	<p>THE BEST BITCOIN INVESTMENT PLATFORM</p>
        </div>


<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value=''>
<input type=hidden name=follow_id value=''>

        <div class="login-box">
            <div class="userbox">
            	<div class="usertype">
                	<input type="text" placeholder="Username" name=username value=''>
                </div>
                <div class="usericon">
                	<i class="fa fa-user-secret" aria-hidden="true"></i>
                </div>
            </div>
            <div class="userbox">
            	<div class="usertype">
                	<input type="password" placeholder="Password" name=password value=''>
                </div>
                <div class="usericon">
                	<i class="fa fa-lock" aria-hidden="true"></i>
                </div>
            </div>
            <div class="loginnow">
            	<input type="submit" value="LOG IN">
            </div>
            <div class="forq">
            	<a href="?a=forgot_password" title="Forgot Password?"><img src="images/ques.png"/></a>
            </div>
        </div>
</form>


    </div>
</div><!--end slider-->
