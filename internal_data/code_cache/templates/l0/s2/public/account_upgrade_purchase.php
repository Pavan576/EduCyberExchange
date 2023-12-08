<?php
// FROM HASH: d706c8abe737d4c93727b529a85c180a
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Thanks for your purchase!');
	$__finalCompiled .= '
';
	$__templater->includeCss('upgrade.css');
	$__finalCompiled .= '

<div class="wrapper" style="display: flex; justify-content: center; align-items: center; margin: 0; height: 50vh;">
		<svg class="approve_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
		<circle class="approve_icon_circle" cx="26" cy="26" r="25" fill="none" />
		<path class="approve_icon_check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
	</svg>
<h1 id="p-title style-9lxPN" style="color: #ddd; font-weight: 700!important;">Thank you for upgrading and supporting WoWEmu</h1>
<p>When the payment has been approved, your account will be upgraded.</p>
</div>';
	return $__finalCompiled;
}
);