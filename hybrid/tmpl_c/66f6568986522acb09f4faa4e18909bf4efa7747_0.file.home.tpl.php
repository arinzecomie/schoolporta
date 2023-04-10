<?php /* Smarty version 3.1.27, created on 2020-12-08 23:50:49
         compiled from "/home/stjohqse/public_html/hybrid/tmpl/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8874584265fd057a9f3c7e5_77510217%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66f6568986522acb09f4faa4e18909bf4efa7747' => 
    array (
      0 => '/home/stjohqse/public_html/hybrid/tmpl/home.tpl',
      1 => 1479244004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8874584265fd057a9f3c7e5_77510217',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fd057aa089101_61405394',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fd057aa089101_61405394')) {
function content_5fd057aa089101_61405394 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/stjohqse/public_html/hybrid/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '8874584265fd057a9f3c7e5_77510217';
echo $_smarty_tpl->getSubTemplate ("logohome.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="main-content"><!--start content-->
	<div id="sub-content">
    	<div class="planup"><!--start planup-->
            <div class="plan-head">
            	<h2>OUR INVESTMENT PLAN</h2>
            </div>
            <div class="all-plan">
            	<div class="plan-one fadeInUp animated wow"data-wow-duration="2s" data-wow-delay="0.4s" >
                	<div class="plan-header">
                    	<p>Hourly Plan</p>
                    </div>
                    <div class="plan-mid">
                    	<div class="plan-logo">
                        	<img src="images/bitl.png"/>
                        </div>
                        <div class="percent">
                        	<p><span>UP TO </span>1 %</p>
                        </div>
                        <div class="pertittle">
                        	<p>Hourly Forever</p>
                        </div>
                        <div class="all-min">
                            <div class="min">
                                <p>Minimum :       <span> $ 156</span></p>
                            </div>
                            <div class="min">
                                <p>Maximum :       <span> $ 5000</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="deposit-now">
                    	<a href="?a=login" class="a-link">Deposit Now</a>
                    </div>

                </div>
                <div class="plan-one fadeInUp animated wow"data-wow-duration="2s" data-wow-delay="0.6s" >
                	<div class="plan-header">
                    	<p>(new) 20 day Plan</p>
                    </div>
                    <div class="plan-mid">
                    	<div class="plan-logo">
                        	<img src="images/bitl.png"/>
                        </div>
                        <div class="percent">
                        	<p>9000%</p>
                        </div>
                        <div class="pertittle">
                        	<p>After 20 Days</p>
                        </div>
                        <div class="all-min">
                            <div class="min">
                                <p>Minimum :       <span> $120</span></p>
                            </div>
                            <div class="min">
                                <p>Maximum :       <span> $5000</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="deposit-now">
                    	<a href="?a=login" class="a-link">Deposit Now</a>
                    </div>
                </div>
                <div class="plan-one fadeInUp animated wow"data-wow-duration="2s" data-wow-delay="0.8s" >
                	<div class="plan-header">
                    	<p>Special Plan</p>
                    </div>
                    <div class="plan-mid">
                    	<div class="plan-logo">
                        	<img src="images/bitl.png"/>
                        </div>
                        <div class="percent">
                        	<p>6000%</p>
                        </div>
                        <div class="pertittle">
                        	<p>After 4 Days</p>
                        </div>
                        <div class="all-min">
                            <div class="min">
                                <p>Minimum :       <span> $180</span></p>
                            </div>
                            <div class="min">
                                <p>Maximum :       <span> $5000</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="deposit-now">
                    	<a href="?a=login" class="a-link">Deposit Now</a>
                    </div>
                </div>
                <div class="plan-one fadeInUp animated wow"data-wow-duration="2s" data-wow-delay="1.0s" >
                	<div class="plan-header">
                    	<p>Best VIP Plan</p>
                    </div>
                    <div class="plan-mid">
                    	<div class="plan-logo">
                        	<img src="images/bitl.png"/>
                        </div>
                        <div class="percent">
                        	<p>Coming Soon</p>
                        </div>
                        <div class="pertittle">
                        	<p>Coming Soon...</p>
                        </div>
                        <div class="all-min">
                            <div class="min">
                                <p>Minimum :       <span> $150</span></p>
                            </div>
                            <div class="min">
                                <p>Maximum :       <span> $3000</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="deposit-now">
                    	<a href="?a=login" class="a-link">Deposit Now</a>
                    </div>
                </div>
            </div>
        </div><!--end planup-->
        <div class="about">
        	<div class="about-left">
            	<div class="about-head">
                	<h2>ABOUT US</h2>
                </div>
                <div class="about-text">
                	<p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
  is a new range of cloudmining services brought to you by the TopBitCoins team of cryptomining experts.
Our team has been involved with cryptocurrencies since the inception of Bitcoin and has over 3 years of experience in the field of mining cryptocurrencies.
Our goal is to make mining accessible to all users regardless of age, location, investment, technical nouse or experience.<br/><br/> We want to give our customers an opportunity to try out cryptocurrency mining and earn Bitcoin as a reward. On a larger scale, we hope to contribute to the development of mining services and subsequently to the development, establishment and adoption of Bitcoin...</p>
                </div>
                <div class="read-more">
                	<a href="?a=cust&page=about">Read More </a>
                </div>
            </div>
            <div class="about-right">
            	<div class="about-head">
                	<h2>WHY CHOOSE US ?</h2>
                </div>
                <div class="all-choose">
                	<div class="choose-one fadeIn animated wow"data-wow-duration="2s" data-wow-delay="0.4s">
                    	<div class="iconc">
                        	<img src="images/cicon.png"/>
                        </div>
                        <div class="choose-text">
                        	<p>UK REGISTERED COMPANY <span><a target="_blank" href="#">Check <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></span></p>
                        </div>
                    </div>
                    <div class="choose-one fadeIn animated wow"data-wow-duration="2s" data-wow-delay="0.6s">
                    	<div class="iconc">
                        	<img src="images/cicon.png"/>
                        </div>
                        <div class="choose-text">
                        	<p>STRONG DDOS PROTECTED SERVER</p>
                        </div>
                    </div>
                    <div class="choose-one fadeIn animated wow"data-wow-duration="2s" data-wow-delay="0.8s">
                    	<div class="iconc">
                        	<img src="images/cicon.png"/>
                        </div>
                        <div class="choose-text">
                        	<p>GEOTRUST GREEN BAR EV SSL </p>
                        </div>
                    </div>
                    <div class="choose-one fadeIn animated wow"data-wow-duration="2s" data-wow-delay="1.0s">
                    	<div class="iconc">
                        	<img src="images/cicon.png"/>
                        </div>
                        <div class="choose-text">
                        	<p>GOLD CODER LICENSE SCRIPT</p>
                        </div>
                    </div>
                    <div class="choose-one fadeIn animated wow"data-wow-duration="2s" data-wow-delay="1.2s">
                    	<div class="iconc">
                        	<img src="images/cicon.png"/>
                        </div>
                        <div class="choose-text">
                        	<p>PROFESSIONAL MANAGEMENT TEAM</p>
                        </div>
                    </div>

<div class="choose-one fadeIn animated wow"data-wow-duration="2s" data-wow-delay="1.2s">
                    	<div class="iconc">
                        	<img src="images/cicon.png"/>
                        </div>
                        <div class="choose-text">
                        	<p>INSTANT WITHDRAW PAYMENT</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div><!--end content-->
<div id="main-state"><!--start state-->
	<div id="sub-state">
    	<div class="refer-left">
        	<div class="referbox fadeInLeft animated wow"data-wow-duration="2s" data-wow-delay="0.4s">
            	<div class="level">
                	<p>5 LEVEL REFERRAL COMMISSION</p>
                </div>
                <div class="amountr">
                	<p>5% - 2% - 1% - 1% - 1%</p>
                </div>
            </div>
            <div class="referbox fadeInLeft animated wow"data-wow-duration="2s" data-wow-delay="0.6s">
            	<div class="level">
                	<p>5 LEVEL REPRESENTATIVE COMMISSION</p>
                </div>
                <div class="amountr">
                	<p>8% - 3% - 2% - 1% - 1%</p>
                </div>
            </div>
        </div>
        <div class="state-right">
        	<div class="statebox zoomIn animated wow"data-wow-duration="2s" data-wow-delay="0.4s">
            	<div class="state-head">
                	<p>OUR LIVE STATISTICS</p>
                </div>
                <div class="state-all">
                	<div class="state-one">
                    	<p>Started :     <span> <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_start_month_str_generated']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_start_day']);?>
, <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_start_year']);?>
</span></p>
                    </div>
                    <div class="state-one">
                    	<p>Running Days :     <span> <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_days_online_generated']);?>
</span></p>
                    </div>
                    <div class="state-one">
                    	<p>Total Account :     <span> <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['info_box_total_accounts_generated']);?>
</span></p>
                    </div>
                    <div class="state-one">
                    	<p>Visitor Online :      <span> <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['info_box_visitor_online_generated']);?>
</span></p>
                    </div>
                    <div class="state-one">
                    	<p>Total Deposit :         <span>$<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['info_box_deposit_funds_generated']);?>
)</span></p>
                    </div>
                    <div class="state-one">
                    	<p>Total Withdraw :         <span>  $<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['info_box_withdraw_funds_generated']);?>
</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--end state-->
<?php echo $_smarty_tpl->getSubTemplate ("news_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="main-invest"><!--start invest-->
	<div id="sub-invest">
    	<div class="investup">
  <?php echo $_smarty_tpl->getSubTemplate ("index_last_deposits.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
      
  <?php echo $_smarty_tpl->getSubTemplate ("index_last_withdrawals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  
		       </div>
        
<div class="payment">
            <ul>
            	<li><img src="images/perfect.png"></li>
                <li><img src="images/bitcoin.png"/></li>
                <li><img src="images/payeer.png"></li>
                <li><img src="images/geo.png"/></li>
                <li><img src="images/ddos.png"></li>
            </ul>
        </div>
    </div>
</div><!--end invest-->



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>