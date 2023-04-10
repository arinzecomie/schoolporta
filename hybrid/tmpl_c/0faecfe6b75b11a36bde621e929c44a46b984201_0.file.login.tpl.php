<?php /* Smarty version 3.1.27, created on 2020-12-08 23:49:31
         compiled from "/home/stjohqse/public_html/hybrid/tmpl/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3263329295fd0575bbda4d8_16925250%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0faecfe6b75b11a36bde621e929c44a46b984201' => 
    array (
      0 => '/home/stjohqse/public_html/hybrid/tmpl/login.tpl',
      1 => 1479239390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3263329295fd0575bbda4d8_16925250',
  'variables' => 
  array (
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fd0575bc38718_28951992',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fd0575bc38718_28951992')) {
function content_5fd0575bc38718_28951992 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/stjohqse/public_html/hybrid/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '3263329295fd0575bbda4d8_16925250';
?>

<?php echo $_smarty_tpl->getSubTemplate ("logopage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


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

<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'invalid_login') {?>
<div class="error">
 Your login or password or turing image code is wrong. Please check this information.</div>
<?php }?>

<?php echo '<script'; ?>
 language=javascript>
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
<?php echo '</script'; ?>
>


<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow']);?>
'>
<input type=hidden name=follow_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow_id']);?>
'>

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
                      <input type="text" name=username value='<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
'>
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




<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>