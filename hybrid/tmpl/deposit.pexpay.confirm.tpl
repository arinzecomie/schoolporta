{include file="header.tpl"}

{if $false_data != 1}
<h3>Please confirm your deposit:</h3><br><br>

<form name="payment" action="https://www.pexpay.com/payments/autopay.php" method="post">
Your PexPay account <b>{$account}</b><br>
Amount ($US): <b>{$amount_format}</b><br>
{if $use_compound}
{if $compound_min_percents == $compound_max_percents && !$compound_percents}
<input type=hidden name=extra1 value="{$compound_min_percents}">
{else}
<table cellspacing=0 cellpadding=2 border=0>
<tr><td nowrap width=1%>Compounding percent: </td>
  {if $compound_percents}
<td><select name='extra1' class=inpts>
{section name=p loop=$compound_percents}<option value="{$compound_percents[p].percent}">{$compound_percents[p].percent}%</option>{/section}
</select></td>
  {else}
<td width=99%><input type=text name='extra1' value="{$compound_min_percents}" class=inpts size=5></td></tr>
<tr><td nowrap colspan=2>(You can set any percent between <b>{$compound_min_percents}%</b> and <b>{$compound_max_percents}%</b>)</td>
  {/if}
</tr>
</table>
{/if}
{else}
<input type=hidden name=extra1 value="0">
{/if}
  <input type=hidden name=payment_id value="{$pid}">
  <input type='hidden' name='payee_account' value='{$settings.def_payee_account_pexpay}'> 
  <input type='hidden' name='amount' value='{$amount}'> 
<input type='hidden' name='memo' value='Deposit to {$settings.site_name} User {$userinfo.username}'> 
<input type='hidden' name='return_url' value='{$settings.site_url}/index.php?a=return_egold&process=yes'> 
<input type='hidden' name='cancel_url' value='{$settings.site_url}/index.php?a=return_egold&process=no'> 
<input type='hidden' name='notify_url' value='{$settings.site_url}/index.php'>
<input type='hidden' name='test' value=''> 
<input type='hidden' name='extra2' value='pexpay_postback'> 

  
<br><input type=submit value="Process" class=sbmt> &nbsp;
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=account'">
</form>
{/if}
{include file="footer.tpl"}
