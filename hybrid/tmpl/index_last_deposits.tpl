{if $last_deposits}
	<div class="invest-left">
            	<div class="invest-head">
                	<h2>LATEST INVESTMENT</h2>
                </div>
                <div class="all-invest">

{foreach from=$last_deposits item=s}
                    <div class="invest-one">
                    	<div class="invest-tittle">
                        	<p>{$s.username}</p>
                        </div>
                        <div class="invest-balance">
                        	<div class="balance-amount">
                            	<p>{$currency_sign}{$s.amount}</p>
                            </div>
                            <div class="payby">
                            	<img src="images/{$s.ec}.png">
                            </div>
                        </div>
                    </div>
{/foreach}
                </div>
            </div>
{/if}