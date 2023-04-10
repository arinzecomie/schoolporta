<?php /* Smarty version 3.1.27, created on 2020-12-08 10:31:20
         compiled from "/home/stjohqse/public_html/hybrid/tmpl/calendar_simple.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17233899205fcf9c48e39f33_20861251%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb76978700d84fc99e55a0ff5a70771c3062a19c' => 
    array (
      0 => '/home/stjohqse/public_html/hybrid/tmpl/calendar_simple.tpl',
      1 => 1363773600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17233899205fcf9c48e39f33_20861251',
  'variables' => 
  array (
    'error' => 0,
    'plans' => 0,
    'type' => 0,
    'currency_sign' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fcf9c48ebb484_64467008',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fcf9c48ebb484_64467008')) {
function content_5fcf9c48ebb484_64467008 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/stjohqse/public_html/hybrid/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '17233899205fcf9c48e39f33_20861251';
?>
<html>
<head>
<title>Calculator</title>
<link href="style.css" rel="stylesheet" type="text/css">
<?php if ($_smarty_tpl->tpl_vars['error']->value == '') {?>

<?php echo '<script'; ?>
>
var percents = new Array;

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
percents[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['i']);?>
] = new Array(<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['min_deposit']);?>
, <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['max_deposit']);?>
, <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['percent']);?>
);
<?php endfor; endif; ?>

var maxdays = <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value['q_days']);?>
;
var Amount = <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value['min_deposit']);?>
;
var returnprofit = <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value['return_profit']);?>
;
var returnprofit_percent = <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value['return_profit_percent']);?>
;
function CalculatePercent()
{
  Percent = 0;
  var LastPercent = percents[0][2];
  for (var i = 0; i < percents.length; i++)
  {
    if (Amount < percents[i][0])
    {
      Percent = LastPercent;
    }
    else
    {
      LastPercent = percents[i][2];
      if ((Amount >= percents[i][0]) && ((Amount <= percents[i][1]) || (percents[i][1] == 0)))
      {
        Percent = percents[i][2];
      }
    }
  }
}

function CalculateProfit() 
{
  Amount = new Number(document.data.amount.value);
  CalculatePercent();

  if (Percent == 0)
  {
    if (Amount < percents[0][0])
    {
      alert('Provided amount is too small. ' + percents[0][0] + ' is minimal!');
      document.data.amount.value = percents[0][0];
      CalculateProfit();
    }
    else if (percents[percents.length-1][1] != 0 && Amount > percents[percents.length-1][1])
    {
      alert('Provided amount is too big. ' + percents[percents.length-1][1] + ' is miximum!');
      document.data.amount.value = percents[percents.length-1][1];
      CalculateProfit();
    }
    else
    {
      alert('Provided amount do not meet any range');
    }
    return;
  }

  document.getElementById('percent').childNodes[0].data = Percent + '%';

  Profit = Math.round(Amount * Percent) / 100;
  if (returnprofit)
  {
    Profit += Amount*((100-returnprofit_percent)/100);
  }
  document.getElementById('profit').childNodes[0].data = Profit;
}
function Spend()
{
  if (opener && opener.spendform && opener.spendform.amount)
  {
    opener.spendform.amount.value = document.data.amount.value;
    window.close();
  }
  else
  {
    alert('Please, return to Make Deposit Page to Spend!');
  }
}
<?php echo '</script'; ?>
>

<?php }?>
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
<center>
<?php if ($_smarty_tpl->tpl_vars['error']->value == 'type_not_found') {?>
Specified Program not found.
<?php }?>
</center>
<?php } else { ?>
<form name="data" onsubmit="CalculateProfit(); return false;">
<table>
<tr>
  <td>From:</td><td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value['from_date']);?>
</b></td>
</tr>
<tr>
  <td>To:</td><td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value['to_date']);?>
</b></td>
</tr>
</tr>
  <td>Amount:</td><td nowrap><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
 <input type="text" name="amount" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value['min_deposit']);?>
" size=5 class=inpts> <input type="button" value="Calculate" onclick="CalculateProfit()" class=sbmt></td>
</tr>
<tr>
  <td>Percent:</td><td><b><span id="percent">N/A</span></b></td>
</tr>
<tr>
  <td>Profit <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
:</td><td><b><span id="profit">N/A</span></b></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']) {?>
<tr>
  <td><input type="button" value="Spend" onclick="Spend();" class=sbmt></td>
</tr>
<?php }?>
</table>
<?php echo '<script'; ?>
>
CalculatePercent();
CalculateProfit();
<?php echo '</script'; ?>
>
</form>
<?php }?>
</body>
</html><?php }
}
?>