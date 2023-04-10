<?php /* Smarty version 3.1.27, created on 2020-12-08 23:49:14
         compiled from "/home/stjohqse/public_html/hybrid/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1812724985fd0574a391a99_62491173%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cc73a8ce845c199257b9ce90aeaf02573e1efc4' => 
    array (
      0 => '/home/stjohqse/public_html/hybrid/tmpl/after_registration.tpl',
      1 => 1478359674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1812724985fd0574a391a99_62491173',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fd0574a3d27b5_76219773',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fd0574a3d27b5_76219773')) {
function content_5fd0574a3d27b5_76219773 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1812724985fd0574a391a99_62491173';
echo $_smarty_tpl->getSubTemplate ("logopage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="otherbg">
        	<h1>Registration completed:</h1>
        </div>
<br/>



Thank you for joining our program.<br>
You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
<br>
<br>

<b>Important:</b> Do not provide your login and password to anyone!
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>