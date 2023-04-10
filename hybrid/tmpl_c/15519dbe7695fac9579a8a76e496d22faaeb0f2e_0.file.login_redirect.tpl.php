<?php /* Smarty version 3.1.27, created on 2020-12-08 23:49:44
         compiled from "/home/stjohqse/public_html/hybrid/tmpl/login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13601849645fd05768ed3672_51590870%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15519dbe7695fac9579a8a76e496d22faaeb0f2e' => 
    array (
      0 => '/home/stjohqse/public_html/hybrid/tmpl/login_redirect.tpl',
      1 => 1125522654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13601849645fd05768ed3672_51590870',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fd05768f11fc8_61957739',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fd05768f11fc8_61957739')) {
function content_5fd05768f11fc8_61957739 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/stjohqse/public_html/hybrid/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '13601849645fd05768ed3672_51590870';
?>
<html>
<head>
<META HTTP-EQUIV=Refresh CONTENT="0; URL=?a=account">
</head>
<body>
<center>
Hello <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
. You are redirecting to your 
<a href=?a=account>account</a> now.
<body>
</html><?php }
}
?>