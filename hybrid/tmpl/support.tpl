{include file="logopage.tpl"}

<script src='https://www.google.com/recaptcha/api.js'></script>

<div id="main-other">
    <div id="sub-other">
    	<div class="other-head">
        	<h1>Contact us.</h1>
        </div>
        <div class="other-tittle">
        	
        </div>
    </div>
</div>
<div id="main-invest"><!--start invest-->
    <div id="sub-invest">
    	<div class="all-information">
<br>
{if $say eq 'send'}
<div class="success" >
Message has been successfully sent. We will back to you in next 24 hours. Thank you.<br>
</div>
{else}

{literal}
<script language=javascript>

function checkform() {
    var v = grecaptcha.getResponse();
    if(v.length == 0)
    {
    alert("You can't leave Captcha Code empty");
        document.getElementById('captcha').innerHTML="You can't leave Captcha Code empty";
        return false;
    }
  if (document.mainform.name.value == '') {
    alert("Please type your full name!");
    document.mainform.name.focus();
    return false;
  }
  if (document.mainform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.mainform.email.focus();
    return false;
  }
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}

function get_action(form) 
{
    var v = grecaptcha.getResponse();
    if(v.length == 0)
    {
        document.getElementById('captcha').innerHTML="You can't leave Captcha Code empty";
        return false;
    }
    else
    {
        document.getElementById('captcha').innerHTML="Captcha completed";
        return true; 
    }
}


</script>
{/literal}
<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value=support>
<input type=hidden name=action value=send>
<br/>
  {if $errors}
  <ul class="error">
   {if $errors.turing_image == 1}
    <li>Invalid turing image</li>
   {/if}
   {if $errors.invalid_email == 1}
    <li>Invalid email address</li>
   {/if}
  </ul>
 {/if}

<div class="all-boxex">
        	<div class="box-left">
            	<div class="box-one">
                	<div class="box-head">
                    	
                    </div>
                    <div class="boxes-all">
                    	<div class="box-onetype">
                            <div class="box-tittle">
                            	<p>Your Full Name :</p>
                            </div>

                            <div class="box-type">
                            	<input type="text" name="name" value="{$frm.name|escape:htmlall}">
                            </div>


                        </div>
                        <div class="box-onetype">
                        	<div class="box-tittle">
                            	<p>Your Email Address :</p>
                            </div>

                            <div class="box-type">
                            	<input type="text" name="email" value="{$frm.email|escape:htmlall}">
                            </div>

                        </div>
                        <div class="text-area">
                        	<textarea name=message placeholder="Message"></textarea>
<!--
<div class="g-recaptcha" data-sitekey="6Ld98QgUAAAAAGDKim2xi4QUiZXiK9smAbPEfN7Z"></div> 
-->
                        </div>
                        <div class="send-now">

                        	<input type="submit" value="SEND NOW">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-right">
            	<div class="box-one">
                	<div class="box-head">
                    	
                    </div>
                    <div class="boxes-all">
                        <div class="conbg">
                            <div class="conicon">
                            	
                            </div>
                            <div class="con-text">
                            	<p><strong>{$settings.site_name}  <br>
                                    2 Amersham Road,<br>
                                     London,  SE14 6QE, <br>
                                    United Kingdom</strong></p>
                            </div>
                        </div>
                        
                        <div class="conby">
                        	<p><i class="fa fa-envelope" aria-hidden="true"></i> Email Support : support@{$settings.site_name} </p>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>

</form>


{/if}
</div>
</div>
</div>
</div>
{include file="footer.tpl"}
