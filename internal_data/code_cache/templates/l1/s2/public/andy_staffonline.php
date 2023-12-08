<?php
// FROM HASH: 1690d72d76505586debb67d4cf73a30f
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['staffOnline'] AND $__templater->method($__vars['xf']['visitor'], 'hasPermission', array('staffOnline', 'view', ))) {
		$__finalCompiled .= '
	';
		if (!$__vars['xf']['options']['staffOnlineUsernamesOnly']) {
			$__finalCompiled .= '
		<div class="block" style="margin-bottom: 10px;" data-widget-section="staffMembers"' . $__templater->func('widget_data', array($__vars['widget'], ), true) . '>
			<div class="block-container">
				<h3 class="block-minorHeader">' . 'staffonline_staff_online' . '</h3>
				<ul class="block-body">
					';
			if ($__templater->isTraversable($__vars['staffOnline'])) {
				foreach ($__vars['staffOnline'] AS $__vars['user']) {
					$__finalCompiled .= '
						<li class="block-row">
							<div class="contentRow">
								<div class="contentRow-figure">
									' . $__templater->func('avatar', array($__vars['user'], 'xs', false, array(
					))) . '
								</div>
								<div class="contentRow-main contentRow-main--close">
									' . $__templater->func('username_link', array($__vars['user'], true, array(
					))) . '
									<div class="contentRow-minor">
										' . $__templater->func('user_title', array($__vars['user'], false, array(
					))) . '
									</div>
								</div>
							</div>
						</li>
					';
				}
			}
			$__finalCompiled .= '
				</ul>
			</div>
		</div>
	';
		}
		$__finalCompiled .= '
	';
		if ($__vars['xf']['options']['staffOnlineUsernamesOnly']) {
			$__finalCompiled .= '
		<div class="block" style="margin-bottom: 10px;" data-widget-section="staffMembers"' . $__templater->func('widget_data', array($__vars['widget'], ), true) . '>
			<div class="block-container">
				<h3 class="block-minorHeader">' . 'staffonline_staff_online' . '</h3>
				<div class="block-body block-row">
					<ul class="listInline listInline--comma">
						';
			if ($__templater->isTraversable($__vars['staffOnline'])) {
				foreach ($__vars['staffOnline'] AS $__vars['user']) {
					$__finalCompiled .= '
							<li class="staff-online-content">' . $__templater->func('username_link', array($__vars['user'], true, array(
					))) . '</li>
						';
				}
			}
			$__finalCompiled .= '
					</ul>
				</div>
			</div>
		</div>
	';
		}
		$__finalCompiled .= '
';
	}
	return $__finalCompiled;
}
);