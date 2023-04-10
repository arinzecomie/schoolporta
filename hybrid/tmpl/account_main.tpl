{include file="header.tpl"}

<div style="display:none">
</div>
                    <div class="desh-user"><!--start desh user-->
                        <div class="duser">
                            <img src="images/duser.png" height="121">
                        </div>
                    <div class="user-details">
                        <div class="detais-one">
                            <p>Username :         <span>{$userinfo.username}</span></p>
                        </div>
                        <div class="detais-one">
                            <p>Registration Date :         <span>{$userinfo.create_account_date}</span></p>
                        </div>
                        <div class="detais-one">
                            <p>Last Access:         <span>{$last_access}</span></p>
                        </div>
                            <div class="detais-one" >
                                        <p style="font-size:130%;">Active Deposit:
                                        <span style="color:green;">$<b id="total_profit">{$ab_formated.active_deposit}</b></span></p>
                                    </div>                            
                        
                    </div>
                 </div>
                 <div class="desh-mid">
                    <div class="desh-one">
                    	<div class="desh-tittle">
                        	<p>Account Balance</p>
                        </div>
                        <div class="desh-amount">
                        	<p>$<b>{$ab_formated.total}</b></p>
                        </div>
                    </div>
                    <div class="desh-one">
                    	<div class="desh-tittle">
                        	<p>Earned Total:</p>
                        </div>
                        <div class="desh-amount">
                        	<p>$<b>{$ab_formated.earning}</b></p>
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
                                <p>Total Deposit                      <span>$<b>{$ab_formated.deposit}</b></span></p>
                            </div>
                            <div class="details-oneh">
                                <p>Active Deposit                  <span> $<b>{$ab_formated.active_deposit}</b></span></p>
                            </div>
                            <div class="details-oneh">
                                <p>Last Deposit                       <span> $<b>{$last_deposit|default:"n/a"}</b></span></p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="history-one">
                    	<div class="history-head">
                        	<p>Withdraw History</p>
                        </div>
                        <div class="details-down">
                            <div class="details-oneh">
                                <p>Total Withdraw                      <span>$<b>{$ab_formated.withdrawal}</b></span></p>
                            </div>
                            <div class="details-oneh">
                                <p>Pending Withdraw                  <span> $<b>{$ab_formated.withdraw_pending}</b></span></p>
                            </div>
                            <div class="details-oneh">
                                <p>Last Withdraw                        <span>$<b>{$last_withdrawal|default:"n/a"}</b></span></p>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="main-referbg">
                    <p>Your Referral Link : {$settings.site_url}/?ref={$userinfo.username}</p>
                </div>



</div>




{include file="footer.tpl"}
