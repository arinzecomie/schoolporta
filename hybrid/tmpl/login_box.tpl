<div class="headline">Account <b>Login</b></div>
 <div class="cbox">
 {literal}    
<script language=javascript>
function checklogin() {   
  if (document.loginform.username.value=='') {
    alert("Please enter your username!");
    document.loginform.username.focus();
    return false;
  }
  if (document.loginform.password.value=='') {
    alert("Please enter your password!");
    document.loginform.password.focus();
    return false;
  }
  return true;
}
</script>
{/literal}
<form method=post name=loginform onsubmit="return checklogin()">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value=''>
<div style="margin:15px auto 6px;" align="center">
<input type=text name=username  value="Username" onclick="if(this.value='Username') this.value='';" onblur="if(this.value=='') this.value='Username';" class="inpts" style="margin-left:9px; margin-top:10px; width:254px;">
</div>
<div style="margin:15px auto;" align="center">
<input type=password name=password value="Password" onclick="if(this.value='Password') this.value='';" onblur="if(this.value=='') this.value='Password';" class="inpts" style="margin-left:9px; width:254px;"></div>

<div style="clear:both;"></div>

<div align="right" style="padding-right:14px; margin-top:3px;">
<input type=submit value="Login" class="sbmt"></div>
<div align="left" style="margin-top:-50px; margin-left:35px;"><a href="?a=forgot_password" class="linksw">Password<br>recovery</a></div>
<div style="clear:both; height:10px;"></div>
</form>

</div>