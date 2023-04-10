<?php /* Smarty version 3.1.27, created on 2020-12-08 23:50:50
         compiled from "/home/stjohqse/public_html/hybrid/tmpl/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17887239175fd057aa11ae79_84693609%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce48bb67b1a629b4a53377d4819d7e1c5ca8311b' => 
    array (
      0 => '/home/stjohqse/public_html/hybrid/tmpl/footer.tpl',
      1 => 1479241114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17887239175fd057aa11ae79_84693609',
  'variables' => 
  array (
    'userinfo' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fd057aa12d214_36071410',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fd057aa12d214_36071410')) {
function content_5fd057aa12d214_36071410 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/stjohqse/public_html/hybrid/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '17887239175fd057aa11ae79_84693609';
if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] == 1) {?>
 </div>
 </div>
 </div>
<?php }?>
<div id="main-footer">
	<div id="sub-footer">
    	<div class="footer-up">
            <div class="fo-logo">
                <a href="?a=home"><img src="images/logo.png"/></a>
            </div>
            <div class="fo-menu">
                <ul>
                    <li><a href="?a=home">home</a></li>
                    <li><a href="?a=cust&page=about">about</a></li>
                    <li><a href="?a=news">news</a></li>
                    <li><a href="?a=faq">f.a.q</a></li>
                    <li><a href="?a=cust&page=rate">Our rating</a></li>
                    <li><a href="?a=rules">terms &amp; Condition</a></li>
                    <li><a href="?a=support">support</a></li>
                </ul>
            </div>
        </div>
        <div class="received">
        	<p>Copyright © 2016 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
. All Rights Reserved.</p>
        </div>
    </div>
</div>
</body>
</html>
<?php }
}
?>