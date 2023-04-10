<?php /* Smarty version 3.1.27, created on 2020-12-09 00:02:44
         compiled from "my:admin_menu_section" */ ?>
<?php
/*%%SmartyHeaderCode:19841963405fd05a74278702_01378696%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1c96949e441e6f659c3bd4ad08539b9083d54f2' => 
    array (
      0 => 'my:admin_menu_section',
      1 => 1607490164,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '19841963405fd05a74278702_01378696',
  'variables' => 
  array (
    'section' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fd05a7429e855_83771428',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fd05a7429e855_83771428')) {
function content_5fd05a7429e855_83771428 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19841963405fd05a74278702_01378696';
?>
 <?php
$_from = $_smarty_tpl->tpl_vars['section']->value['subs'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['m']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
$foreach_m_Sav = $_smarty_tpl->tpl_vars['m'];
?> <tr> <td class=menutxt><?php if ($_smarty_tpl->tpl_vars['m']->value['href']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['m']->value['href'];?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['title'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['m']->value['href']) {?></a><?php }?></td> </tr> <?php
$_smarty_tpl->tpl_vars['m'] = $foreach_m_Sav;
}
?> <?php if ($_smarty_tpl->tpl_vars['section']->value['subs']) {?> <tr> <td class=menutxt>&nbsp;</td> </tr> <?php }?> <?php }
}
?>