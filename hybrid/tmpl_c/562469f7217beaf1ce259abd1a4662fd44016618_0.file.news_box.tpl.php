<?php /* Smarty version 3.1.27, created on 2020-12-08 23:50:50
         compiled from "/home/stjohqse/public_html/hybrid/tmpl/news_box.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19042619875fd057aa0b3f45_97622296%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '562469f7217beaf1ce259abd1a4662fd44016618' => 
    array (
      0 => '/home/stjohqse/public_html/hybrid/tmpl/news_box.tpl',
      1 => 1479243350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19042619875fd057aa0b3f45_97622296',
  'variables' => 
  array (
    'news' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fd057aa0d65a7_68397105',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fd057aa0d65a7_68397105')) {
function content_5fd057aa0d65a7_68397105 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/stjohqse/public_html/hybrid/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '19042619875fd057aa0b3f45_97622296';
?>
<div id="main-news"><!--start news-->
	<div id="sub-news">

<?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$foreach_n_Sav = $_smarty_tpl->tpl_vars['n'];
?>
    	<div class="news-one">
            <div class="newsup">
            	<div class="news-icon">
                	<img src="images/news.png"/>
                </div>
                <div class="news-head-text">
                	<p><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['title'], ENT_QUOTES, 'UTF-8', true));?>
</p>
                </div>
            </div>
            <div class="news-text">
            	<p> <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['small_text'], ENT_QUOTES, 'UTF-8', true));?>
</p>
            </div>
            <div class="news-date-read">
            	<div class="date">
                	<p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['n']->value['d']);?>
</p>
                </div>
                <div class="readn">
                	<a href="<?php echo smarty_modifier_myescape(encurl("?a=news#".((string)$_smarty_tpl->tpl_vars['n']->value['id'])));?>
">Read More</a>
                </div>
            </div>
        </div>
<?php
$_smarty_tpl->tpl_vars['n'] = $foreach_n_Sav;
}
?>

       </div>
</div><!--end news-->
<?php }
}
?>