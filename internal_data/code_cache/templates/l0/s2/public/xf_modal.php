<?php
// FROM HASH: c3fad90fe8f02f62c5a1bf3c6ea444e3
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->includeTemplate('xf_modal.css', $__vars) . '
' . $__templater->includeTemplate('xf_modal.js', $__vars) . '
<!-- Preloader -->
    <div class="preloader">
		<img src="https://store.synapse-themes.cc/data/assets/logo/logo.png">

        <p>To get free support and setup, we advise you to purchase a real license for this theme.</p>
		<p>
			<a href="https://store.synapse-themes.cc">synapse-themes.cc</a>
		</p>
		<div class="loader"></div>
    </div>';
	return $__finalCompiled;
}
);