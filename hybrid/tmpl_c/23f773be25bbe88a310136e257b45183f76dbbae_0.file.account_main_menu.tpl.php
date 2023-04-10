<?php /* Smarty version 3.1.27, created on 2020-12-08 23:50:25
         compiled from "/home/stjohqse/public_html/hybrid/tmpl/account_main_menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19000184005fd05791abd2e2_87134316%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23f773be25bbe88a310136e257b45183f76dbbae' => 
    array (
      0 => '/home/stjohqse/public_html/hybrid/tmpl/account_main_menu.tpl',
      1 => 1479242580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19000184005fd05791abd2e2_87134316',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fd05791ac5c06_90185873',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fd05791ac5c06_90185873')) {
function content_5fd05791ac5c06_90185873 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19000184005fd05791abd2e2_87134316';
if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] == 1) {?>
<div id="main-other">
	<div id="sub-other">
    	<div class="other-head">
        	<h1>Account Overview</h1>
        </div>
        <div class="other-tittle">
        	
        </div>
    </div>
</div>
<div id="main-invest"><!--start invest-->
    <div id="sub-invest">
    	<div class="all-information">
<div class="desh-left">
                <div class="desh-menu"><!--desh menu-->
                    <ul>
                        <li><a href="?a=account">  Account Overview</a></li>
                        <li><a href="?a=deposit">  MAKE DEPOSIT</a></li>
                        <li><a href="?a=withdraw">  withdraw fund</a></li>
                        <li><a href="?a=deposit_list">  deposit list</a></li>
                        <li><a href="?a=deposit_history">  Deposit History</a></li>
                        <li><a href="?a=withdraw_history">  Withdraw History</a></li>
                        <li><a href="?a=earnings">  Earnings History</a></li>
                        <li><a href="?a=referals">  referral</a></li>
                        <li><a href="?a=referallinks">  referral links</a></li>
                        <li><a href="?a=edit_account">  Edit Account</a></li>
                        <li><a href="?a=logout">  logout</a></li>
                  </ul>
                 </div><!--end desh menu-->
            </div>

<div class="desh-right">

			<?php }
}
}
?>