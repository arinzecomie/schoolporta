<?php /* Smarty version 3.1.27, created on 2020-12-08 23:56:31
         compiled from "my:editaccount_2" */ ?>
<?php
/*%%SmartyHeaderCode:14454743415fd058ffa3e302_82783113%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3343014239e3e2b8908ea06697548cf733a73735' => 
    array (
      0 => 'my:editaccount_2',
      1 => 1607489791,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '14454743415fd058ffa3e302_82783113',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fd058ffa48414_95645009',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fd058ffa48414_95645009')) {
function content_5fd058ffa48414_95645009 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14454743415fd058ffa3e302_82783113';
?>
 <tr> <td>E-mail address:</td> <td><input type=text name=email value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr><?php }
}
?>