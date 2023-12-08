<?php
// FROM HASH: 70f9c58c59a6e57cf928e918def06a28
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__templater->method($__vars['post'], 'canGiveReputation', array()) AND $__templater->func('property', array('mrsShowInPostAdd', ), false)) {
		$__finalCompiled .= '
	<a href="' . $__templater->func('link', array('posts/add-reputation', $__vars['post'], ), true) . '"
	   class="actionBar-action actionBar-action--reputation post-rep"
	   data-xf-click="overlay">' . 'mrs_reputation' . '</a>
';
	}
	return $__finalCompiled;
}
);