<?php /* Smarty version 3.1.27, created on 2020-12-07 12:35:27
         compiled from "/home/stjohqse/public_html/hybrid/tmpl/support.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13592552655fce67df245636_54027844%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58da42e3caaaff3f7b9bd8982701e25674f3459f' => 
    array (
      0 => '/home/stjohqse/public_html/hybrid/tmpl/support.tpl',
      1 => 1385360220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13592552655fce67df245636_54027844',
  'variables' => 
  array (
    'say' => 0,
    'userinfo' => 0,
    'errors' => 0,
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fce67df2cebb4_53550039',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fce67df2cebb4_53550039')) {
function content_5fce67df2cebb4_53550039 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/stjohqse/public_html/hybrid/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '13592552655fce67df245636_54027844';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<h3>Support Form:</h3><br>

<?php if ($_smarty_tpl->tpl_vars['say']->value == 'send') {?>
Message has been successfully sent. We will back to you in next 24 hours. Thank you.<br><br>
<?php } else { ?>

<?php echo '<script'; ?>
 language=javascript>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] == 1) {?>

function checkform() { 
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}

<?php } else { ?>

function checkform() {
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

<?php }?>
<?php echo '</script'; ?>
>

<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value=support>
<input type=hidden name=action value=send>

 <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
  <ul style="color:red">
   <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image'] == 1) {?>
    <li>Invalid turing image</li>
   <?php }?>
  </ul>
 <?php }?>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Your Name:</td>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']) {?>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['name']);?>
</b></td>
<?php } else { ?>
 <td><input type="text" name="name" value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" size=30 class=inpts></td>
<?php }?>
</tr>
<tr>
 <td>Your Email:</td>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']) {?>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['email']);?>
</b></td>
<?php } else { ?>
 <td><input type="text" name="email" value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" size=30 class=inpts></td>
<?php }?>
</tr>
<tr>
 <td colspan=2>Message:<br><br><textarea name=message class=inpts cols=45 rows=4><?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['message'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
</textarea>
</tr>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['validation_enabled'] == 1) {?>
<tr>
 <td class=menutxt><img src="?a=show_validation_image&<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['session_name']);?>
=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['session_id']);?>
&rand=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['rand']);?>
"></td>
 <td><input type=text name=validation_number class=inpts size=30></td>
</tr>
<?php }?>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Send" class=sbmt></td>
</tr></table>
</form>

<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>