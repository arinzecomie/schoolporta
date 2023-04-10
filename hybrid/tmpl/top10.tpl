{include file="header.tpl"}
<div class="all-head">
                <p>Investors Top</p>
            </div>
</div>
<div class="informationbg">
            <div class="information-all">

<table cellspacing=1 cellpadding=2 class="tab" width=100%>
<tr>
 <th class=inheader>Username</th>
 <th class=inheader width=200>Reg. Date</th>
 <th class=inheader width=170>Deposit</th>
</tr>
{if $top}
{section name=s loop=$top}
<tr>
 <td><b>{$top[s].username}</b></td>
 <td><b>{$top[s].dd}</b></td>
 <td align=right><b>{$currency_sign}{$top[s].balance}</b></td>
</tr>
{/section}
{else}
<tr>
 <td colspan=3 align=center>No investors found</td>
</tr>
{/if}
</table>
</div></div>
{include file="footer.tpl"}
