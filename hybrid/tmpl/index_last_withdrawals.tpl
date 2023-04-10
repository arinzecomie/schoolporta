

{if $last_withdrawals}
<div class="invest-right">
            	<div class="invest-head">
                	<h2>LATEST WITHDRAWAL</h2>
                </div>
                <div class="all-invest">
                	

                    

{foreach from=$last_withdrawals item=s}

					<div class="invest-one">
                    	<div class="invest-tittle">
                        	<p>{$s.username}</p>
                        </div>
                        <div class="invest-balance">
                        	<div class="balance-amount">
                            	<p>${$s.amount}</p>
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