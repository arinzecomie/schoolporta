
{include file="logopage.tpl"}

<div id="main-other">
	<div id="sub-other">
    	<div class="other-head">
        	<h1>LOGIN YOUR ACCOUNT</h1>
        </div>
        <div class="other-tittle">
        	
        </div>
    </div>
</div>
<div id="main-invest"><!--start invest-->
    <div id="sub-invest">
    	<div class="all-information">

{if $frm.say eq 'invalid_login'}
<div class="error">
 Your login or password or turing image code is wrong. Please check this information.</div>
{/if}
{literal}
<script language=javascript>
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script>
{/literal}

<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value='{$frm.follow}'>
<input type=hidden name=follow_id value='{$frm.follow_id}'>

<div class="all-information">
            <div class="login-main">
            	<div class="login-head">
                	<p>USER INFO</p>
                </div>
            	<div class="log-one">
                   <div class="con-title">
                       <p>Username : </p>
                   </div>
                   <div class="con-box">
                      <input type="text" name=username value='{$frm.username|escape:"html"}'>
                   </div>
                </div>
                <div class="log-one">
                   <div class="con-title">
                       <p>Password : </p>
                   </div>
                   <div class="con-box">
                      <input type="password" name=password value=''>
                   </div>
                </div>
                <div class="login-now">
                    <input type="submit" value="LOGIN NOW">
               </div>
               <div class="for-reg">
                    <div class="forgot-pass">
                        <a href="?a=forgot_password">Forgot Password ?</a>
                    </div>
                    <div class="reg">
                        <p>NOT A MEMBER ? <span><a href="?a=signup">REGISTRATION</a></span></p>
                    </div>
               </div>
            </div>
        </div>

</form>

        </div>   </div>




{include file="footer.tpl"}
