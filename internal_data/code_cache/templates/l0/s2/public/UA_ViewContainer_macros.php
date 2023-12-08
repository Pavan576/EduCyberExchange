<?php
// FROM HASH: a5a48bd57ea6028090be7c8a07ca9b6c
return array(
'macros' => array('widget_admin_setup' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'options' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'options[userActivity]',
		'selected' => $__vars['options']['userActivity'],
		'label' => '
			' . 'svDisplayViewerCounts' . '
		',
		'_type' => 'option',
	)), array(
	)) . '
';
	return $__finalCompiled;
}
),
'UserActivity' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'headerPhrase' => '!',
		'records' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	if ($__vars['records']) {
		$__finalCompiled .= '
		';
		$__vars['lastSeenMode'] = ($__templater->func('property', array('svUserActivityLastSeen', ), false) ? true : false);
		$__finalCompiled .= '
		';
		if ($__vars['lastSeenMode']) {
			$__finalCompiled .= '
			';
			$__templater->includeJs(array(
				'src' => 'sv/useractivity/last_seen.js',
				'addon' => 'SV/UserActivity',
				'min' => '1',
			));
			$__finalCompiled .= '
			<script class="js-extraPhrases" type="application/json">
					{
						"ua_x_was_last_seen": "' . $__templater->filter('ua_x_was_last_seen', array(array('escape', array('json', )),), true) . '"
					}
			</script>
		';
		}
		$__finalCompiled .= '
		<div class="block">
			<div id="uaThreadViewContainer" class="block-container">
				<div class="block-body">
					<div class="user-browsing">	
						<i class="fas fa-eye" style="margin-right: 5px"></i>User browsing this forum: 
						';
		if ($__vars['xf']['options']['RainDD_UA_ThreadViewType'] == 0) {
			$__finalCompiled .= '									
							<ul class="listInline listInline--comma listInline--selfInline">
								';
			if ($__templater->isTraversable($__vars['records']['records'])) {
				foreach ($__vars['records']['records'] AS $__vars['user']) {
					$__compilerTemp1 = '';
					if ($__vars['lastSeenMode']) {
						$__compilerTemp1 .= '
											<span class="uaLastSeenBlock" style="display:none">' . $__templater->func('date_dynamic', array($__vars['user']['effective_last_activity'], ), true) . '</span>
										';
					}
					$__finalCompiled .= $__templater->func('trim', array('
									<li>' . $__templater->func('trim', array('
										' . $__templater->func('username_link', array($__vars['user'], true, array(
						'class' => ((!$__vars['user']['visible']) ? 'username--invisible' : ''),
						'data-username' => $__templater->filter($__vars['user']['username'], array(array('for_attr', array()),), false),
						'notooltip' => $__vars['lastSeenMode'],
						'data-xf-init' => ($__vars['lastSeenMode'] ? 'user-activity-last-seen' : ''),
					))) . $__templater->func('trim', array('

										' . $__compilerTemp1 . '
									'), false)), false) . '</li>
								'), false);
				}
			}
			$__finalCompiled .= '
							</ul>
							';
		} else if ($__vars['xf']['options']['RainDD_UA_ThreadViewType'] == 1) {
			$__finalCompiled .= '
							<ul class="listHeap">
								';
			if ($__templater->isTraversable($__vars['records']['records'])) {
				foreach ($__vars['records']['records'] AS $__vars['user']) {
					$__finalCompiled .= '
									<li>
										' . $__templater->func('avatar', array($__vars['user'], 's', false, array(
						'img' => 'true',
						'faux-user' => '1',
						'data-username' => $__templater->filter($__vars['user']['username'], array(array('for_attr', array()),), false),
						'notooltip' => $__vars['lastSeenMode'],
						'data-xf-init' => ($__vars['lastSeenMode'] ? 'user-activity-last-seen' : ''),
					))) . '
										';
					if ($__vars['lastSeenMode']) {
						$__finalCompiled .= '
											<span class="uaLastSeenBlock">' . $__templater->func('date_dynamic', array($__vars['user']['effective_last_activity'], ), true) . '</span>
										';
					}
					$__finalCompiled .= '
									</li>
								';
				}
			}
			$__finalCompiled .= '
							</ul>
						';
		}
		$__finalCompiled .= '
						';
		if ($__vars['records']['recordsUnseen']) {
			$__finalCompiled .= '
							';
			if ($__vars['records']['records']) {
				$__finalCompiled .= '
								<li class="moreLink">' . '... and ' . $__templater->escape($__vars['records']['recordsUnseen']) . ' more.' . '</li>
								';
			} else {
				$__finalCompiled .= '
								<li></li>
							';
			}
			$__finalCompiled .= '
						';
		}
		$__finalCompiled .= '
					</div>
				</div>
			</div>
		</div>
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'viewerCounts' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'recordCounts' => '!',
		'contentType' => '!',
		'contentId' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__vars['activityCount'] = $__vars['recordCounts'][$__vars['contentType']][$__vars['contentId']];
	$__finalCompiled .= '

	';
	if ($__vars['activityCount'] == 1) {
		$__finalCompiled .= '
		<span class="sv-user-activity--viewer-count">' . 'ua_node_view_count_single' . '</span>
	';
	} else if ($__vars['activityCount']) {
		$__finalCompiled .= '
		<span class="sv-user-activity--viewer-count">' . 'ua_node_view_count' . '</span>
	';
	}
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