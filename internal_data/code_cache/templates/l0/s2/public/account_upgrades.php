<?php
// FROM HASH: be317ae437cbee480a301b62057b5fd7
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('upgrade.css');
	$__finalCompiled .= '
';
	$__templater->inlineJs('let question = document.querySelectorAll(".question");
   question.forEach(question => {
   question.addEventListener("click", event => {
   const active = document.querySelector(".question.active");
   if(active && active !== question ) {
   active.classList.toggle("active");
   active.nextElementSibling.style.maxHeight = 0;
   }
   question.classList.toggle("active");
   const answer = question.nextElementSibling;
   if(question.classList.contains("active")){
   answer.style.maxHeight = answer.scrollHeight + "px";
   } else {
   answer.style.maxHeight = 0;
   }
   })
   })
');
	$__finalCompiled .= '
<section class="pricing-section">
   <div class="pricing">
   <div class="pricing-body">
   <div class="pricing-body-header">
      <h2 class="p-title style-9lxPN" id="style-9lxPN">
         Ready to take your experience to the next level?
      </h2>
      <p>
         Unlock a world of exclusive benefits by upgrading your account. Get access to special perks
         exclusive to upgraded members only.
      </p>
   </div>
   <div class="card" style="font-size: 35px; width: 85%">
      ' . $__templater->form('
         <input type="text" name="coupon_code" placeholder="Enter coupon code" class="input text-white"
            required="true" />
         <input type="submit" value="Redeem" class="button button--icon button--icon--purchase"
            style="border-radius: 4px; margin: unset;" />
      ', array(
		'action' => $__templater->func('link', array('redeem-coupon', ), false),
		'ajax' => 'true',
		'autocomplete' => 'off',
		'data-force-flash-message' => 'true',
	)) . '
   </div>
   ';
	$__templater->includeJs(array(
		'src' => 'xf/payment.js',
		'min' => '1',
	));
	$__finalCompiled .= '
   ';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
         ';
	if ($__templater->isTraversable($__vars['available'])) {
		foreach ($__vars['available'] AS $__vars['upgrade']) {
			$__compilerTemp1 .= '
            ';
			if ($__templater->func('in_array', array($__vars['upgrade']['user_upgrade_id'], array(3, ), ), false)) {
				$__compilerTemp1 .= '
               <div class="pricing-body-plans">
                  <div class="active" id="pricing__monthly__plan">
                     ' . $__templater->form('
                        ' . $__templater->formHiddenVal('payment_profile_id', $__templater->filter($__vars['upgrade']['payment_profile_ids'], array(array('first', array()),), false) . '
                        ', array(
				)) . '
                        <div>
                           <div class="card">
                              <div class="card-header">
                                 <span class="card-title solar">
                                 Solar
                                 </span>
                                 <h2 class="card-price style-qzMHE" id="style-qzMHE">
                                    $12.00
                                 </h2>
                                 <span id="style-ZN1zg" class="style-ZN1zg">
                                 LIFETIME
                                 </span>
                                 <img src="https://wowemu.org/data/dbtechShop/itemIcons/0/56.jpg">
                              </div>
                              <div class="card-body">
                                 <ul>
                                    <li>
                                       <i class="fas fa-check-circle mr-2 text-active">
                                       </i>
                                       &nbsp;Username color
                                       <span id="style-Z1p6l" class="style-Z1p6l">
                                       ' . $__templater->escape($__vars['xf']['visitor']['username']) . '
                                       </span>
                                    </li>
                                    <li>
                                       <i class="fas fa-check-circle mr-2 text-active">
                                       </i>
                                       &nbsp;Upgrade award
                                       <span id="style-ge3yv" class="style-ge3yv">
                                       <img src="https://wowemu.org/data/addonflare/awardsystem/icons/36.png?1684554284"
                                          id="style-qleIY" class="style-qleIY">
                                       </span>
                                    </li>
                                    <li>
                                       <i class="fas fa-check-circle mr-2 text-active">
                                       </i>
                                       &nbsp;Reputation power
                                       <span id="style-UkwXt" class="style-UkwXt">
                                       <span id="style-1gHog" class="style-1gHog">
                                       +1
                                       </span>
                                       /
                                       <span id="style-1vjgf" class="style-1vjgf">
                                       -1
                                       </span>
                                       </span>
                                    </li>
                                    <li>
                                       <i class="fas fa-check-circle mr-2 text-active">
                                       </i>
                                       &nbsp;Free Credits on purchase
                                       <span id="style-FyA4D" class="style-FyA4D">
                                       1,500
                                       </span>
                                    </li>
                                    <hr>
                                    <li>
                                       <i class="fas fa-check-circle mr-2 text-active">
                                       </i>
                                       &nbsp;Discord Role
                                    </li>
                                    <li>
                                       <i class="fas fa-check-circle mr-2 text-active">
                                       </i>
                                       &nbsp;Access to premium forums
                                    </li>
									 <li>
                                       <i class="fas fa-check-circle mr-2 text-active">
                                       </i>
                                       &nbsp;Access to premium resources
                                    </li>
                                    <li>
                                       <i class="fas fa-check-circle mr-2 text-active">
                                       </i>
                                       &nbsp;Close own threads
                                    </li>
                                    <li>
                                       <i class="fas fa-check-circle mr-2 text-active">
                                       </i>
                                       &nbsp;Ability to change username
                                    </li>
                                    <li>
                                       <i class="fas fa-check-circle mr-2 text-active">
                                       </i>
                                       &nbsp;Ability to upload GIF avatars
                                    </li>
									 <li>
									 	   <i class="fas fa-check-circle mr-2 text-active">
   </i>
   &nbsp;Ability to set custom usertitle
   </li>
                                    <li>
                                       <i class="fas fa-times-circle mr-2 text-active">
                                       </i>
                                       &nbsp;Ability to set signature
                                    </li>
                                    <li>
                                       <i class="fas fa-times-circle mr-2 text-active">
                                       </i>
                                       &nbsp;Vanity Profile URL
                                    </li>
                                    <li>
                                       <i class="fas fa-times-circle mr-2 text-active">
                                       </i>
                                       &nbsp;Postbit Background
                                    </li>
                                    <li>
                                       <i class="fas fa-times-circle mr-2 text-not-active">
                                       </i>
                                       &nbsp;Ability to hide avatar
                                    </li>
                                    <li>
                                       <i class="fas fa-times-circle mr-2 text-not-active">
                                       </i>
                                       &nbsp;Ability to change userbar color
                                    </li>
                                    <li>
                                       <i class="fas fa-times-circle mr-2 text-not-active">
                                       </i>
                                       &nbsp;Ability to change color of rep/like data
                                    </li>
                                    <li>
                                       <i class="fas fa-times-circle mr-2 text-not-active">
                                       </i>
                                       &nbsp;WoWEmu Repack License
                                    </li>
                                    <li>
                                       <i class="fas fa-times-circle mr-2 text-not-active">
                                       </i>
                                       &nbsp;Early access to new features
                                    </li>
                                 </ul>
                              </div>
                              <div class="card-footer">
                                 <button type="submit"
                                    class="button button--icon button--icon--purchase"
                                    style="width: 100%">
                                 <span class="button-text">
                                 Purchase
                                 </span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     ', array(
					'class' => 'upgrade-section',
					'action' => $__templater->func('link', array('purchase', $__vars['upgrade'], array('user_upgrade_id' => $__vars['upgrade']['user_upgrade_id'], ), ), false),
					'ajax' => 'true',
					'data-xf-init' => 'payment-provider-container',
				)) . '
            ';
			}
			$__compilerTemp1 .= '
         ';
		}
	}
	$__compilerTemp1 .= '
      ';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
      ' . $__compilerTemp1 . '
   ';
	}
	$__finalCompiled .= '
   ';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
   ';
	if ($__templater->isTraversable($__vars['available'])) {
		foreach ($__vars['available'] AS $__vars['upgrade']) {
			$__compilerTemp2 .= '
   ';
			if ($__templater->func('in_array', array($__vars['upgrade']['user_upgrade_id'], array(4, ), ), false)) {
				$__compilerTemp2 .= '
   ' . $__templater->form('
	                           ' . $__templater->formHiddenVal('payment_profile_id', $__templater->filter($__vars['upgrade']['payment_profile_ids'], array(array('first', array()),), false) . '
                        ', array(
				)) . '
   <div>
   <div class="card">
   <div class="card-header">
   <span class="card-title" style="color: white;
      font-weight: 600;
      text-shadow: 0px 2px 3px #000;
      background-image: url(https://kingz.net/styles/kingznet/sparkle.gif);">
   COSMIC
   </span>
   <h2 class="card-price style-qzMHE" id="style-qzMHE">
   $25.00
   </h2>
   <span id="style-ZN1zg" class="style-ZN1zg">
   LIFETIME
   </span>
   <img src="https://wowemu.org/data/dbtechShop/itemIcons/0/140.jpg">
   </div>
   <div class="card-body">
   <ul>
   <li>
   <i class="fas fa-check-circle mr-2 text-active">
   </i>
   &nbsp;Username color
   <span id="style-Z1p6l" class="style-Z1p6l" style="color: white;
      font-weight: 600;
      text-shadow: 0px 2px 3px #000;
      background-image: url(https://kingz.net/styles/kingznet/sparkle.gif);">
   ' . $__templater->escape($__vars['xf']['visitor']['username']) . '
   </span>
   </li>
   <li>
   <i class="fas fa-check-circle mr-2 text-active">
   </i>
   &nbsp;Upgrade award
   <span id="style-ge3yv" class="style-ge3yv">
   <img src="https://i.postimg.cc/qq1N40p6/comet.png"
      id="style-qleIY" class="style-qleIY">
   </span>
   </li>
   <li>
   <i class="fas fa-check-circle mr-2 text-active">
   </i>
   &nbsp;Reputation power
   <span id="style-UkwXt" class="style-UkwXt">
   <span id="style-1gHog" class="style-1gHog">
   +3
   </span>
   /
   <span id="style-1vjgf" class="style-1vjgf">
   -3
   </span>
   </span>
   </li>
   <li>
   <i class="fas fa-check-circle mr-2 text-active">
   </i>
   &nbsp;Free Credits on purchase
   <span id="style-FyA4D" class="style-FyA4D">
   3,500
   </span>
   </li>
   <hr>
   <li>
   <i class="fas fa-check-circle mr-2 text-active">
   </i>
   &nbsp;Discord Role
   </li>
   <li>
   <i class="fas fa-check-circle mr-2 text-active">
   </i>
   &nbsp;Access to premium forums
   </li>
   <li>
	 <i class="fas fa-check-circle mr-2 text-active">
   </i>
   &nbsp;Access to premium resources
   </li>
<li>
   <i class="fas fa-check-circle mr-2 text-active">
   </i>
   &nbsp;Close own threads
   </li>
   <li>
   <i class="fas fa-check-circle mr-2 text-active">
   </i>
   &nbsp;Ability to change username
   </li>
   <li>
   <i class="fas fa-check-circle mr-2 text-active">
   </i>
   &nbsp;Ability to upload GIF avatars
   </li>
	   <li>
	   <i class="fas fa-check-circle mr-2 text-active">
   </i>
   &nbsp;Ability to set custom usertitle
   </li>
   <li>
   <i class="fas fa-times-circle mr-2 text-active">
   </i>
   &nbsp;Ability to set signature
   </li>
   <li>
   <i class="fas fa-times-circle mr-2 text-active">
   </i>
   &nbsp;Vanity Profile URL
   </li>
   <li>
   <i class="fas fa-times-circle mr-2 text-active">
   </i>
   &nbsp;Postbit Background
   </li>
   <li>
   <i class="fas fa-times-circle mr-2 text-active">
   </i>
   &nbsp;Ability to hide avatar
   </li>
   <li>
   <i class="fas fa-times-circle mr-2 text-active">
   </i>
   &nbsp;Ability to change userbar color
   </li>
   <li>
   <i class="fas fa-times-circle mr-2 text-active">
   </i>
   &nbsp;WoWEmu Repack License (On release)
   </li>
   <li>
   <i class="fas fa-times-circle mr-2 text-not-active">
   </i>
   &nbsp;Ability to change color of rep/like data
   </li>
   <li>
   <i class="fas fa-times-circle mr-2 text-not-active">
   </i>
   &nbsp;Early access to new features
   </li>
   </ul>
   </div>
   <div class="card-footer">
   <button type="submit" class="button button--icon button--icon--purchase" style="width: 100%">
   <span class="button-text">
   Purchase
   </span>
   </button>
   </div>
   </div>
   </div>
   </div>
   </div>
   <div>
   ', array(
					'class' => 'upgrade-section',
					'action' => $__templater->func('link', array('purchase', $__vars['upgrade'], array('user_upgrade_id' => $__vars['upgrade']['user_upgrade_id'], ), ), false),
					'ajax' => 'true',
					'data-xf-init' => 'payment-provider-container',
				)) . '
   ';
			}
			$__compilerTemp2 .= '
   ';
		}
	}
	$__compilerTemp2 .= '
   ';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__finalCompiled .= '
   ' . $__compilerTemp2 . '
   ';
	}
	$__finalCompiled .= '
</section>
<h1 style="color: #fff">FAQs</h1>
<div class="wrapper">
   <div class="container">
      <div class="question">
         How long does it take to receive my upgrade?
      </div>
      <div class="answercont">
         <div class="answer">
            Your account should get upgraded within a few minutes. On very rare occasions, it may take 24 hours. If
            you still haven\'t received your upgrade after 24 hours, contact a team member with your Sellix Invoice
            ID.
         </div>
      </div>
   </div>
   <div class="container">
      <div class="question">
         How long does my upgrade last?
      </div>
      <div class="answercont">
         <div class="answer">
            All subscriptions are monthly. This means that you have to buy the rank again every month. There is no
            automated debit.
         </div>
      </div>
   </div>
   <div class="container">
      <div class="question">
         What payment methods are accepted?
      </div>
      <div class="answercont">
         <div class="answer">
            We do only provide the payment methods, that are listed on Sellix. However, if you wish to pay with
            PayPal (Friends & Family), please open a ticket.
         </div>
      </div>
   </div>
   <div class="container">
      <div class="question">
         Are there any refunds?
      </div>
      <div class="answercont">
         <div class="answer">
            All payments are final and will not be refunded.
         </div>
      </div>
   </div>
</div>';
	return $__finalCompiled;
}
);