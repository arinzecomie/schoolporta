<?php /* Smarty version 3.1.27, created on 2020-12-07 12:19:57
         compiled from "/home/stjohqse/public_html/hybrid/tmpl/captcha.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20744680965fce643da04d93_14117149%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1bf75c3e74d176d4641d2225c310ca9ebe571b1' => 
    array (
      0 => '/home/stjohqse/public_html/hybrid/tmpl/captcha.tpl',
      1 => 1580258160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20744680965fce643da04d93_14117149',
  'variables' => 
  array (
    'action' => 0,
    'ti' => 0,
    'inpt_size' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fce643da30fb5_32097141',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fce643da30fb5_32097141')) {
function content_5fce643da30fb5_32097141 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/stjohqse/public_html/hybrid/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '20744680965fce643da04d93_14117149';
if ($_smarty_tpl->tpl_vars['ti']->value['check'][$_smarty_tpl->tpl_vars['action']->value]) {?>

<?php if ($_smarty_tpl->tpl_vars['ti']->value['type'] == 'image') {?>
<tr>
 <td class=menutxt><img src="<?php echo smarty_modifier_myescape(encurl("?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
"></td>
 <td><input type=text name=validation_number class=inpts size=<?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['inpt_size']->value)===null||$tmp==='' ? 30 : $tmp));?>
></td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ti']->value['type'] == 'recaptcha_v2') {?>
<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
<tr>
 <td class=menutxt colspan=2>
<div class="g-recaptcha" data-sitekey="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['recaptcha_site_key']);?>
"></div>
 </td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ti']->value['type'] == 'recaptcha_v3') {?>
<?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?render=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['recaptcha_site_key']);?>
"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
>
  grecaptcha.ready(function() {
      grecaptcha.execute('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['recaptcha_site_key']);?>
', {action: '<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['action']->value);?>
'}).then(function (token) {
                var rinput = document.getElementById('g-recaptcha');
                rinput.value = token;
            });
  });
  <?php echo '</script'; ?>
>

<tr>
 <td class=menutxt colspan=2>
<input type="hidden" name="g-recaptcha-response" id="g-recaptcha">
 </td>
</tr>
<?php }?>

<?php }
}
}
?>