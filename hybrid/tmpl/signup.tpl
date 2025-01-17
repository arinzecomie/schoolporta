{include file="logopage.tpl"}

<div id="main-other">
	<div id="sub-other">
    	<div class="other-head">
        	<h1>CREATE AN ACCOUNT</h1>
        </div>
        <div class="other-tittle">
        	
        </div>
    </div>
</div>
<div id="main-invest"><!--start invest-->
    <div id="sub-invest">
    	<div class="all-information">


{if $deny_registration}
 We are closed for new registrations now.
{elseif $settings.use_referal_program && $settings.force_upline && !$referer && !$settings.get_rand_ref}
 You  do not have a upline. Our system require a upline for each user.
{else}
 {literal}

 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 {/literal}
 {if $settings.use_user_location == 1}
 {literal}
  if (document.regform.address.value == '') {
    alert("Please enter your address!");
    document.regform.address.focus();
    return false;
  }
  if (document.regform.city.value == '') {
    alert("Please enter your city!");
    document.regform.city.focus();
    return false;
  }
  if (document.regform.state.value == '') {
    alert("Please enter your state!");
    document.regform.state.focus();
    return false;
  }
  if (document.regform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.regform.zip.focus();
    return false;
  }
  if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.regform.country.focus();
    return false;
  }
 {/literal}
 {/if}
 {literal}
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 {/literal}
 {if $settings.use_transaction_code}
 {literal}
  if (document.regform.transaction_code.value == '') {
    alert("Please enter your transaction code!");
    document.regform.transaction_code.focus();
    return false;
  }
  if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
    alert("Please check your transaction code!");
    document.regform.transaction_code2.focus();
    return false;
  }
 {/literal}
 {/if}
 {literal}
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retupe your e-mail!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }
  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>
 {/literal}
 
 {if $errors}
  <ul style="color:red">
  {section name=e loop=$errors} 
   {if $errors[e] eq 'full_name'}
    <li>Please enter your full name!
   {/if}
   {if $errors[e] eq 'address'}
    <li>Please enter your address!
   {/if}
   {if $errors[e] eq 'city'}
    <li>Please enter your city!
   {/if}
   {if $errors[e] eq 'state'}
    <li>Please enter your state!
   {/if}
   {if $errors[e] eq 'zip'}
    <li>Please enter your zip!
   {/if}
   {if $errors[e] eq 'country'}
    <li>Please choose your country!
   {/if}
   {if $errors[e] eq 'username'}
    <li>Please enter valid username! It should contains English letters and digits only.
   {/if}
   {if $errors[e] eq 'username_exists'}
    <li>Sorry, such user already exists! Please try another username. 
   {/if}
   {if $errors[e] eq 'email_exists'}
    <li>Sorry, such email already exists! Please try another email. 
   {/if} 
   {if $errors[e] eq 'password'} 
    <li>Please enter a password!
   {/if}
   {if $errors[e] eq 'password_confirm'}
    <li>Please check your password!
   {/if}
   {if $errors[e] eq 'password_too_small'}
    <li>The password you provided is too small, please enter at least {$settings.min_user_password_length} characters!
   {/if} 
   {if $errors[e] eq 'transaction_code'} 
    <li>Please enter the Transaction Code!
   {/if} 
   {if $errors[e] eq 'transaction_code_confirm'} 
    <li>Please check your Transaction Code!
   {/if}
   {if $errors[e] eq 'transaction_code_too_small'}
    <li>The Transaction Code you provided is too small, please enter at least {$settings.min_user_password_length} characters!
   {/if}
   {if $errors[e] eq 'transaction_code_vs_password'} 
    <li>The Transaction Code should differ from the Password!
   {/if}
   {if $errors[e] eq 'egold'} 
    <li>Please enter your e-gold account number!
   {/if}
   {if $errors[e] eq 'invalid_perfectmoney_account'} 
    <li>Please enter USD PerfectMoney account number!
   {/if}
   {if $errors[e] eq 'email'} 
    <li>Please enter your e-mail!
   {/if}
   {if $errors[e] eq 'agree'}
    <li>You have to agree with the Terms and Conditions!
   {/if}
   {if $errors[e] eq 'turing_image'}
    <li>Enter the verification code as it is shown in the corresponding box.
   {/if} 
   {if $errors[e] eq 'no_upline'}
    <li>The system requires an upline to register. {if $settings.get_rand_ref}You have to be agreed to random one or found a referral link in the net.{/if}
   {/if} 
   {if $errors[e] eq 'ip_exists_in_database'}
    <li>Your IP already exists in our database. Sorry, but registration impossible.
   {/if}

   <br> 
  {/section}
  </ul>
 {/if} 
 
 <form method=post onsubmit="return checkform()" name="regform">
<input type=hidden name=a value="signup">
<input type=hidden name=action value="signup">
<div class="information-one">
            	<div class="information-head">
                	<p>Personal Information :</p>
                </div>
                <div class="all-info">
                	<div class="info-one">
                    	<div class="info-left">
                        	<p>Your Full Name : </p>
                        </div>
                        <div class="info-right">
                        	<input type="text" name=fullname value="{$frm.fullname|escape:"quotes"}">
                        </div>
                    </div>
                    <div class="info-one">
                    	<div class="info-left">
                        	<p>Your Username : </p>
                        </div>
                        <div class="info-right">
                        	<input type="text" name=username value="{$frm.username|escape:"quotes"}">
                        </div>
                    </div>
                    <div class="info-one">
                    	<div class="info-left">
                        	<p>Your Email Address : </p>
                        </div>
                        <div class="info-right">
                        	<input type="text" name=email value="{$frm.email|escape:"quotes"}">
                        </div>
                    </div>
                    <div class="info-one">
                    	<div class="info-left">
                        	<p>Retype Email  : </p>
                        </div>
                        <div class="info-right">
                        	<input type="text" name=email1 value="{$frm.email1|escape:"quotes"}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="information-one">
            	<div class="information-head">
                	<p>Account Information :</p>
                </div>
                <div class="all-info">
                	<div class="info-one">
                    	<div class="info-left">
                        	<p>Define Password : </p>
                        </div>
                        <div class="info-right">
                        	<input type="password" name=password value="{$frm.password|escape:"quotes"}">
                        </div>
                    </div>
                    <div class="info-one">
                    	<div class="info-left">
                        	<p>Retype Password : </p>
                        </div>
                        <div class="info-right">
                        	<input type="password" name=password2 value="{$frm.password2|escape:"quotes"}">
                        </div>
                    </div>
					<div class="info-one">
                    	<div class="info-left">
                        	<p>Transaction Code : </p>
                        </div>
                        <div class="info-right">
                        	 <input type=password name=transaction_code value="{$frm.transaction_code|escape:"quotes"}" class=inpts >
                        </div>
                    </div>
					<div class="info-one">
                    	<div class="info-left">
                        	<p>reTransaction Code : </p>
                        </div>
                        <div class="info-right">
                        	 <input type=password name=transaction_code2 value="{$frm.transaction_code2|escape:"quotes"}" class=inpts >
                        </div>
                    </div>
					
                    <div class="info-one">
                    	<div class="info-left">
                        	<p>Secret Question: </p>
                        </div>
                        <div class="info-right">
                        	<input type="text" name=sq value="{$frm.sq|escape:"quotes"}">
                        </div>
                    </div>
                    <div class="info-one">
                    	<div class="info-left">
                        	<p>Secret Answer  : </p>
                        </div>
                        <div class="info-right">
                        	<input type="text" name=sa value="{$frm.sa|escape:"quotes"}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="information-one">
            	<div class="information-head">
                	<p>Payment Information :</p>
                </div>
                <div class="all-info">

					{foreach from=$pay_accounts item=ps}
                    <div class="info-one">
                    	<div class="info-left">
                        	<p>{$ps.name} : </p>
                        </div>
                        <div class="info-right">
                        	<input type="text" name=pay_account[{$ps.id}] value="{$ps.account|escape:html}">
                        </div>
                    </div>
					{/foreach}
					{foreach item=p from=$mpay_accounts}
						{foreach item=ps from=$p.accounts}
                    <div class="info-one">
                    	<div class="info-left">
                        	<p>{$p.name} : </p>
                        </div>
                        <div class="info-right">
                        	<input type="text" name=pay_account[{$ps.id}] value="{$ps.account|escape:html}">
                        </div>
                    </div>
					{/foreach}
						{/foreach} 
                </div>
            </div>
            <div class="information-head">
                <p>Terms Of Service :</p>
            </div>
            <div class="other-complete">
                        <div class="check-text">
                           <div class="check-box">
                               <input type="checkbox" name=agree value=1 >
                           </div>
                           <div class="agree">
                               <p>I agree <span><a href="?a=rules">rules &amp; agreement</a></span></p>
                           </div>
                        </div>
                        <div class="upline">
                            {if $settings.use_referal_program}
                                    <p> Your Upline :  {if $referer}{$referer.username} {else} No Upline.{/if} !</p>{/if}
                        </div>
            </div>
            <div class="create">
            	<input type="submit" value="REGISTER NOW">
            </div>


</form>
        </div>  </div>  </div>

{/if}

{include file="footer.tpl"}
