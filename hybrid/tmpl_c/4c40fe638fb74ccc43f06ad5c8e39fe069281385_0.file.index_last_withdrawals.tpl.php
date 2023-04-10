<?php /* Smarty version 3.1.27, created on 2020-12-08 23:50:50
         compiled from "/home/stjohqse/public_html/hybrid/tmpl/index_last_withdrawals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11646072925fd057aa0f5f95_77803398%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c40fe638fb74ccc43f06ad5c8e39fe069281385' => 
    array (
      0 => '/home/stjohqse/public_html/hybrid/tmpl/index_last_withdrawals.tpl',
      1 => 1479244194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11646072925fd057aa0f5f95_77803398',
  'variables' => 
  array (
    'last_withdrawals' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fd057aa1130a7_09633603',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fd057aa1130a7_09633603')) {
function content_5fd057aa1130a7_09633603 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/stjohqse/public_html/hybrid/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '11646072925fd057aa0f5f95_77803398';
?>


<?php if ($_smarty_tpl->tpl_vars['last_withdrawals']->value) {?>
<div class="invest-right">
            	<div class="invest-head">
                	<h2>LATEST WITHDRAWAL</h2>
                </div>
                <div class="all-invest">
                	

                    

<?php
$_from = $_smarty_tpl->tpl_vars['last_withdrawals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>

					<div class="invest-one">
                    	<div class="invest-tittle">
                        	<p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['username']);?>
</p>
                        </div>
                        <div class="invest-balance">
                        	<div class="balance-amount">
                            	<p>$<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['amount']);?>
</p>
                            </div>
                            <div class="payby">
                            	<img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['ec']);?>
.png">
                            </div>
                        </div>
                    </div>

         
 
<?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
       </div>
            </div>
<?php }
}
}
?>