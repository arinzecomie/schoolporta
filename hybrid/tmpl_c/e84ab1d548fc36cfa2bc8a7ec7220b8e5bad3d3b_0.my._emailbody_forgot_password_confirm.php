<?php /* Smarty version 3.1.27, created on 2020-12-08 10:33:17
         compiled from "my:_emailbody_forgot_password_confirm" */ ?>
<?php
/*%%SmartyHeaderCode:14990357805fcf9cbd300009_76859959%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84ab1d548fc36cfa2bc8a7ec7220b8e5bad3d3b' => 
    array (
      0 => 'my:_emailbody_forgot_password_confirm',
      1 => 1607441597,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '14990357805fcf9cbd300009_76859959',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fcf9cbd334583_99609487',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fcf9cbd334583_99609487')) {
function content_5fcf9cbd334583_99609487 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14990357805fcf9cbd300009_76859959';
?>
Hello #name#,

Please confirm your reqest for password reset.

Copy and paste this link to your browser:
#site_url#/?a=forgot_password&action=confirm&c=#confirm_string#

Thank you.
#site_name#<?php }
}
?>