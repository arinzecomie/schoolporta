<?php /* Smarty version 3.1.27, created on 2020-12-08 23:49:13
         compiled from "my:_emailbody_registration" */ ?>
<?php
/*%%SmartyHeaderCode:16936784145fd057493f72d3_22354694%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349257fbad92bd38ac33c718b057c126817b92e6' => 
    array (
      0 => 'my:_emailbody_registration',
      1 => 1607489353,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '16936784145fd057493f72d3_22354694',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fd0574942b466_78408509',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fd0574942b466_78408509')) {
function content_5fd0574942b466_78408509 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16936784145fd057493f72d3_22354694';
?>
Hello #name#,

Thank you for registration on our site.

Your login information:

Login: #username#
Password: #password#

You can login here: #site_url#

Contact us immediately if you did not authorize this registration.

Thank you.<?php }
}
?>