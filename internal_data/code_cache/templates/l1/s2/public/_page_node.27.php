<?php
// FROM HASH: cd3a07ff976de2bbcac21c1d484ef933
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


<div class="p-body snipcss-nocCR">
  <div class="p-body-inner">
    <div class="p-breadcrumbs--container">
      <div class="p-breadcrumbs-container p-breadcrumbs-container--top">
        <ul class="p-breadcrumbs p-breadcrumbs--top  hide-label" itemscope="" itemtype="https://schema.org/BreadcrumbList">
          <li class="itemListElement--hider">
          </li>
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
            <a href="/" itemprop="item">
              <span itemprop="name">
                Kingz
              </span>
            </a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
            <a href="/upgrade" itemprop="item">
              <span itemprop="name">
                Upgrade
              </span>
            </a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
    <div class="p-body-main  ">
      <div class="p-body-contentCol">
      </div>
      <div class="p-body-content is-active">
        <div class="p-body-pageContent">
          <section class="pricing-section">
            <div class="pricing">
              <div class="pricing-body">
                <div class="pricing-body-header">
                  <h2 class="p-title style-9lxPN" id="style-9lxPN">
                    Ready to take your experience to the next level?
                  </h2>
                  <p>
                    Unlock a world of exclusive benefits by upgrading your account. Get access to special perks exclusive to upgraded members only.
                  </p>
                </div>
				  <div class="card" style="font-size: 35px; width: 85%">
	' . $__templater->form('
		<input type="text" name="coupon_code" placeholder="Enter coupon code" class="input text-white" required="true" />
		<input type="submit" value="Redeem" class="button button--icon button--icon--purchase" style="border-radius: 4px; margin: unset;" />
	', array(
		'action' => $__templater->func('link', array('redeem-coupon', ), false),
		'ajax' => 'true',
		'autocomplete' => 'off',
		'data-force-flash-message' => 'true',
	)) . '
</div>
                <div class="pricing-body-plans">
                  <div class="active" id="pricing__monthly__plan">
                    <form action="/purchase/user_upgrade/?user_upgrade_id=1" method="post" class="" data-xf-init="payment-provider-container ajax-submit">
                      <input type="hidden" name="_xfToken" value="1683341182,04fb546ab105f55e82ebbc3bc4f75831">
                      <div>
                        <div class="card">
                          <div class="card-header">
                            <span class="card-title" style="color: #7946d3">
                              Solar
                            </span>
                            <h2 class="card-price style-qzMHE" id="style-qzMHE">
                              $9.99
                            </h2>
                            <span id="style-ZN1zg" class="style-ZN1zg">
                              LIFETIME
                            </span>
                            <img src="https://i.imgur.com/8432ixT.png">
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
                                  <img src="https://kingz.net/data/addonflare/awardsystem/icons/47.png?1675066139" id="style-qleIY" class="style-qleIY">
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
                                &nbsp;Free Bits on purchase
                                <span id="style-FyA4D" class="style-FyA4D">
                                  1,500
                                </span>
                              </li>
                              <hr>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Profile cover
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Postbit cover
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Change username
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Close own threads
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Bump own threads
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Delete posts in own thread
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Sort awards
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Hide conversation read status
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Change theme color
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Bits Boost
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;View hidden data without replying
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;View member warning reasons
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Hide online status
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Delete thread every 12 hours
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Change profile username font
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
                    </form>
					  <div>
                        <div class="card">
                          <div class="card-header">
                            <span class="card-title style-ecstJ" id="style-ecstJ">
                              AMETHYST
                            </span>
                            <h2 class="card-price style-qzMHE" id="style-qzMHE">
                              $??.??
                            </h2>
                            <span id="style-ZN1zg" class="style-ZN1zg">
                              MONTHLY
                            </span>
                            <img src="https://i.imgur.com/8432ixT.png">
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
                                  <img src="https://kingz.net/data/addonflare/awardsystem/icons/47.png?1675066139" id="style-qleIY" class="style-qleIY">
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
                                &nbsp;Free Bits on purchase
                                <span id="style-FyA4D" class="style-FyA4D">
                                  1,500
                                </span>
                              </li>
                              <hr>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Profile cover
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Postbit cover
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Change username
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Close own threads
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Bump own threads
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Delete posts in own thread
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Sort awards
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Hide conversation read status
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Change theme color
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Bits Boost
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;View hidden data without replying
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;View member warning reasons
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Hide online status
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Delete thread every 12 hours
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Change profile username font
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
                      <div>
                      <div>
                        <div class="card">
                          <div class="card-header">
                            <span class="card-title style-3YsHe" id="style-3YsHe">
                              GALACTIC
                            </span>
                            <h2 class="card-price style-RwDLo" id="style-RwDLo">
                              $??.??
                            </h2>
                            <span id="style-y49py" class="style-y49py">
                              MONTHLY
                            </span>
                            <img src="https://i.imgur.com/AfwPOS3.png">
                          </div>
                          <div class="card-body">
                            <ul>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Username color
                                <span id="style-7CAg1" class="style-7CAg1">
                                  ' . $__templater->escape($__vars['xf']['visitor']['username']) . '
                                </span>
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Upgrade award
                                <span id="style-22ACF" class="style-22ACF">
                                  <img src="https://kingz.net/data/addonflare/awardsystem/icons/48.png?1675066143" id="style-JiPAt" class="style-JiPAt">
                                </span>
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Reputation power
                                <span id="style-ASF3f" class="style-ASF3f">
                                  <span id="style-tmCR7" class="style-tmCR7">
                                    +3
                                  </span>
                                  / 
                                  <span id="style-nVenw" class="style-nVenw">
                                    -3
                                  </span>
                                </span>
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Free Bits on purchase
                                <span id="style-7xT9j" class="style-7xT9j">
                                  3,500
                                </span>
                              </li>
                              <hr>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Profile cover
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Postbit cover
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Change username
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Close own threads
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Bump own threads
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Delete posts in own thread
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Sort awards
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Hide conversation read status
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Change theme color
                              </li>
                              <li>
                                <i class="fas fa-check-circle mr-2 text-active">
                                </i>
                                &nbsp;Bits Boost (2x)
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;View hidden data without replying
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;View member warning reasons
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Hide online status
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Delete thread every 12 hours
                              </li>
                              <li>
                                <i class="fas fa-times-circle mr-2 text-not-active">
                                </i>
                                &nbsp;Change profile username font
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
						  </form>
                  </div>
                </div>
                <p id="style-IiTXm" class="style-IiTXm">
                  DISCLAIMER: By purchasing a upgrade, you acknowledge and agree that there are no refunds for any fees paid, and that upgrade features are subject to change at any time without notice throughout our early stages. We reserve the right to modify or discontinue the upgrade or any of its features at any time and without liability. Your continued use of the upgrade after any such changes constitutes your acceptance of the new terms and conditions. Please review these terms and conditions carefully before making any purchase.
                </p>
              </div>
            </div>
          </section>
         
<h1 style="color: #fff">FAQs</h1>

<div class="wrapper">
  
  <div class="container">
    <div class="question">
      How long does it take to receive my upgrade?
    </div>
    <div class="answercont">
      <div class="answer">
        Your account should get upgraded within a few minutes. On very rare occasions, it may take 24 hours. If you still haven\'t received your upgrade after 24 hours, contact a team member with your Sellix Invoice ID.
      </div>
    </div>
  </div>
  
    <div class="container">
    <div class="question">
      How long does my upgrade last?
    </div>
    <div class="answercont">
      <div class="answer">
        All subscriptions are monthly. This means that you have to buy the rank again every month. There is no automated debit.
      </div>
    </div>
  </div>
  
      <div class="container">
    <div class="question">
      What payment methods are accepted?
    </div>
    <div class="answercont">
      <div class="answer">
      	We do only provide the payment methods, that are listed on Sellix. However, if you wish to pay with PayPal (Friends & Family), please out to Splicho.
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