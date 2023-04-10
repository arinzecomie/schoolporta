{include file="header.tpl"}

<h3>Withdrawal Proofs</h3>

<table cellspacing=1 cellpadding=2 border=0 width=100%>
{foreach item=p from=$proofs}
<tr>
 <td><img src="images/proofs/{$p.id}.jpg"></td>
 <td>User: {$p.username|escape:htmlall}<br>Amount: {$currency_sign}{$p.amount} <img src="images/{$p.ec}.gif" width=44 height=17 align=absmiddle><br>Date: {$p.d}<br><br>
 </td>
</tr>
{foreachelse}
<tr>
 <td colspan=3 align=center>No proofs found</td>
</tr>
{/foreach}
</table>

{if $colpages > 1}
<center>
{if $prev_page > 0}
 <a href="{"?a=proofs&page=`$prev_page`"|encurl}">&lt;&lt;</a>
{/if}
{section name=p loop=$pages}
{if $pages[p].current == 1}
{$pages[p].page}
{else}
 <a href="{"?a=proofs&page=`$pages[p].page`"|encurl}">{$pages[p].page}</a>
{/if}
{/section}
{if $next_page > 0}
 <a href="{"?a=proofs&page=`$next_page`"|encurl}">&gt;&gt;</a>
{/if}
</center>
{/if}


{include file="footer.tpl"}