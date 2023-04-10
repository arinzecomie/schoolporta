<?php /* Smarty version 3.1.27, created on 2020-12-08 23:49:46
         compiled from "/home/stjohqse/public_html/hybrid/tmpl/account_main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1553051825fd0576a62b164_62329789%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f34c3a58786c44147edc022b81fdc329b506e73a' => 
    array (
      0 => '/home/stjohqse/public_html/hybrid/tmpl/account_main.tpl',
      1 => 1479244360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1553051825fd0576a62b164_62329789',
  'variables' => 
  array (
    'userinfo' => 0,
    'last_access' => 0,
    'ab_formated' => 0,
    'last_deposit' => 0,
    'last_withdrawal' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fd0576a6b24d5_99768971',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fd0576a6b24d5_99768971')) {
function content_5fd0576a6b24d5_99768971 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/stjohqse/public_html/hybrid/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1553051825fd0576a62b164_62329789';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div style="display:none">
</div>
                    <div class="desh-user"><!--start desh user-->
                        <div class="duser">
                            <img src="images/duser.png" height="121">
                        </div>
                    <div class="user-details">
                        <div class="detais-one">
                            <p>Username :         <span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</span></p>
                        </div>
                        <div class="detais-one">
                            <p>Registration Date :         <span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['create_account_date']);?>
</span></p>
                        </div>
                        <div class="detais-one">
                            <p>Last Access:         <span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['last_access']->value);?>
</span></p>
                        </div>
                            <div class="detais-one" >
                                        <p style="font-size:130%;">Active Deposit:
                                        <span style="color:green;">$<b id="total_profit"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']);?>
</b></span></p>
                                    </div>                            
                        
                    </div>
                 </div>
                 <div class="desh-mid">
                    <div class="desh-one">
                    	<div class="desh-tittle">
                        	<p>Account Balance</p>
                        </div>
                        <div class="desh-amount">
                        	<p>$<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</b></p>
                        </div>
                    </div>
                    <div class="desh-one">
                    	<div class="desh-tittle">
                        	<p>Earned Total:</p>
                        </div>
                        <div class="desh-amount">
                        	<p>$<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['earning']);?>
</b></p>
                        </div>
                    </div>
                    <div class="dw">
                        <div class="md">
                            <a href="?a=deposit" class="a-link">MAKE DEPOSIT</a>
                        </div>
                        <div class="mw">
                            <a href="?a=withdraw" class="a-link">WITHDRAW FUND</a>
                        </div>
                    </div>
                 </div>
                 <div class="desh-history">
                 	<div class="history-one">
                    	<div class="history-head">
                        	<p>Investment History</p>
                        </div>
                        <div class="details-down">
                            <div class="details-oneh">
                                <p>Total Deposit                      <span>$<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['deposit']);?>
</b></span></p>
                            </div>
                            <div class="details-oneh">
                                <p>Active Deposit                  <span> $<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']);?>
</b></span></p>
                            </div>
                            <div class="details-oneh">
                                <p>Last Deposit                       <span> $<b><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_deposit']->value)===null||$tmp==='' ? "n/a" : $tmp));?>
</b></span></p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="history-one">
                    	<div class="history-head">
                        	<p>Withdraw History</p>
                        </div>
                        <div class="details-down">
                            <div class="details-oneh">
                                <p>Total Withdraw                      <span>$<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal']);?>
</b></span></p>
                            </div>
                            <div class="details-oneh">
                                <p>Pending Withdraw                  <span> $<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']);?>
</b></span></p>
                            </div>
                            <div class="details-oneh">
                                <p>Last Withdraw                        <span>$<b><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_withdrawal']->value)===null||$tmp==='' ? "n/a" : $tmp));?>
</b></span></p>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="main-referbg">
                    <p>Your Referral Link : <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</p>
                </div>



</div>




<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>