<?php
// FROM HASH: e56023408375eb0c497b11adbde09621
return array(
'macros' => array('ddRunStaffSearch' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'staffmembers' => '!',
		'displaystyle' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__templater->includeCss('ddsStaff.less');
	$__finalCompiled .= '
	';
	if ($__vars['staffmembers'] != 'empty') {
		$__finalCompiled .= '
		';
		if ($__vars['displaystyle'] == 'default') {
			$__finalCompiled .= '
			';
			if ($__templater->isTraversable($__vars['staffmembers'])) {
				foreach ($__vars['staffmembers'] AS $__vars['staff']) {
					$__finalCompiled .= '
				' . $__templater->callMacro('ddsvStaff', 'staffBlock_default', array(
						'staff' => $__vars['staff'],
					), $__vars) . '
			';
				}
			}
			$__finalCompiled .= '
		';
		} else {
			$__finalCompiled .= '
			';
			if ($__templater->isTraversable($__vars['staffmembers'])) {
				foreach ($__vars['staffmembers'] AS $__vars['staff']) {
					$__finalCompiled .= '
				' . $__templater->callMacro('ddsvStaff', 'staffBlock_compact', array(
						'staff' => $__vars['staff'],
						'long' => 'true',
					), $__vars) . '
			';
				}
			}
			$__finalCompiled .= '
		';
		}
		$__finalCompiled .= '
	';
	} else {
		$__finalCompiled .= '
		<div class="blockMessage">Please select groups in settings to display staff members. </div>
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'staffBlock_default' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'staff' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
    <div class="ddStaffPage ddDefault ';
	if ($__vars['xf']['options']['ddsStaffCenter'] == 1) {
		$__finalCompiled .= 'centered';
	}
	$__finalCompiled .= '">
        <div class="block">
            <div class="block-container">
                <h3 class="block-header">' . $__templater->escape($__vars['staff']['_groupname1740813748']) . '</h3>
                <div class="block-body">
                    ';
	if ($__templater->isTraversable($__vars['staff'])) {
		foreach ($__vars['staff'] AS $__vars['key'] => $__vars['s']) {
			$__finalCompiled .= '
                        ';
			if ($__vars['key'] != '_groupname1740813748') {
				$__finalCompiled .= '
                            <div class="ddStaff">
                                <div class="ddImage">
                                    ' . $__templater->func('avatar', array($__vars['s']['user'], 'm', false, array(
					'itemprop' => 'image',
				))) . '
                                </div>
                               ';
				if ($__vars['xf']['options']['ddsDisplayTags'] == 1) {
					$__finalCompiled .= '
                                    <div class="ddTitle">
                                        ' . $__templater->func('user_banners', array($__vars['s']['user'], array(
						'tag' => 'div',
						'class' => 'message-userBanner',
						'itemprop' => 'jobTitle',
					))) . '
                                    </div>
                                ';
				}
				$__finalCompiled .= '
                                <div class="ddUsername">
                                    ' . $__templater->func('username_link', array($__vars['s']['user'], true, array(
					'itemprop' => 'name',
				))) . '
                                </div>
                            </div>
						';
			}
			$__finalCompiled .= '
                    ';
		}
	}
	$__finalCompiled .= '
                </div>
            </div>
        </div>  
    </div>
';
	return $__finalCompiled;
}
),
'staffBlock_compact' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'staff' => '!',
		'long' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
    <div class="ddStaffPage ddCompact ';
	if ($__vars['xf']['options']['ddsStaffCenter'] == 1) {
		$__finalCompiled .= 'centered';
	}
	$__finalCompiled .= ' ';
	if ($__vars['long'] == 'true') {
		$__finalCompiled .= 'ddLong';
	}
	$__finalCompiled .= '">
        <div class="block">
			<h3 class="block-header">' . $__templater->escape($__vars['staff']['_groupname1740813748']) . '</h3>
			<div class="ddStaffLoop ddFlex block-body">
				';
	if ($__templater->isTraversable($__vars['staff'])) {
		foreach ($__vars['staff'] AS $__vars['key'] => $__vars['s']) {
			$__finalCompiled .= '
					';
			if ($__vars['key'] != '_groupname1740813748') {
				$__finalCompiled .= '
						<div class="ddStaff">
							<div class="ddAvatar">
								' . $__templater->func('avatar', array($__vars['s']['user'], 's', false, array(
					'itemprop' => 'image',
				))) . '
							</div>
							<div class="ddText">
								<div class="ddUsername">
									' . $__templater->func('username_link', array($__vars['s']['user'], true, array(
					'itemprop' => 'name',
				))) . '
								</div>
								<div class="ddTitle">
									<span>' . $__templater->escape($__vars['s']['group']['title']) . '</span>
								</div>
							</div>
						</div>
					';
			}
			$__finalCompiled .= '
				';
		}
	}
	$__finalCompiled .= '
			</div>
        </div>  
    </div>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Staff');
	$__finalCompiled .= '
';
	$__templater->includeCss('ddsStaff.less');
	$__finalCompiled .= '

';
	if ($__vars['staffmembers'] != 'empty') {
		$__finalCompiled .= '
	';
		if ($__vars['displaystyle'] == 'default') {
			$__finalCompiled .= '
		';
			if ($__templater->isTraversable($__vars['staffmembers'])) {
				foreach ($__vars['staffmembers'] AS $__vars['staff']) {
					$__finalCompiled .= '
			' . $__templater->callMacro(null, 'staffBlock_default', array(
						'staff' => $__vars['staff'],
					), $__vars) . '
		';
				}
			}
			$__finalCompiled .= '
	';
		} else {
			$__finalCompiled .= '
		';
			if ($__templater->isTraversable($__vars['staffmembers'])) {
				foreach ($__vars['staffmembers'] AS $__vars['staff']) {
					$__finalCompiled .= '
			' . $__templater->callMacro(null, 'staffBlock_compact', array(
						'staff' => $__vars['staff'],
						'long' => 'false',
					), $__vars) . '
		';
				}
			}
			$__finalCompiled .= '
	';
		}
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
    <div class="blockMessage">Please select groups in settings to display staff members. </div>
';
	}
	$__finalCompiled .= '

' . '

' . '

';
	return $__finalCompiled;
}
);