<?php
// FROM HASH: 1a8c0f75828aea6ba3947a082686168e
return array(
'macros' => array('dwc_options' => array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<hr class="formRowSep" />
	
		' . $__templater->formTextAreaRow(array(
		'name' => 'dwc_reason',
		'autosize' => 'true',
		'autofocus' => 'autofocus',
	), array(
		'label' => 'reason_for_marking_dwc',
	)) . '
	
	' . '
';
	return $__finalCompiled;
}
),
'action_link' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'user' => '!',
		'cssClass' => 'menu-linkRow',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__compilerTemp1 = '';
	if ((!$__vars['user']['is_admin']) AND ($__vars['user']['user_id'] != $__vars['xf']['visitor']['user_id'])) {
		$__compilerTemp1 .= '
		';
		if ($__vars['user']['isDwc']) {
			$__compilerTemp1 .= '
			';
			if ($__templater->method($__vars['xf']['visitor'], 'canRemoveDwc', array())) {
				$__compilerTemp1 .= '
				<a href="' . $__templater->func('link', array('members/removedwc', $__vars['user'], ), true) . '" class="' . $__templater->escape($__vars['cssClass']) . '" data-xf-click="overlay">' . 'xfdev_remove_as_dwc' . '</a>
			';
			}
			$__compilerTemp1 .= '
		';
		} else if ($__templater->method($__vars['xf']['visitor'], 'canMarkDwc', array())) {
			$__compilerTemp1 .= '
			<a href="' . $__templater->func('link', array('members/markdwc', $__vars['user'], ), true) . '" class="' . $__templater->escape($__vars['cssClass']) . '" data-xf-click="overlay">' . 'xfdev_mark_as_dwc' . '</a>
		';
		}
		$__compilerTemp1 .= '
	';
	}
	$__finalCompiled .= $__templater->func('trim', array('
	' . $__compilerTemp1 . '
'), false);
	return $__finalCompiled;
}
),
'display_dwc' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'user' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="block">
	<div class="block-container">
		<div class="block-header xfdevDwcHeader">
			<i class="fas fa-exclamation-triangle"></i> ' . 'xfdev_deal_with_caution' . '
		</div>
		<div class="block-body xfdevDwcBody">
			' . 'user_is_marked_as_deal_with_caution_for_x_reason' . '
		</div>
	</div>
</div>
	
	';
	$__templater->inlineCss('
		.xfdevDwcHeader{
			background: orangered !important;
			text-align: center;
		}
		
		.xfdevDwcBody{
			padding: 10px;
    		text-align: center;
		}
	');
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

' . '

';
	return $__finalCompiled;
}
);