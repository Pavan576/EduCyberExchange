<?php
// FROM HASH: ce1a81ef62e1ecf82c1be8299d8e5a86
return array(
'macros' => array('reputation' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'reputation' => '!',
		'allowInlineMod' => true,
		'chooseName' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

	';
	$__templater->includeCss('structured_list.less');
	$__finalCompiled .= '
	';
	$__templater->includeCss('message.less');
	$__finalCompiled .= '

	<div class="structItem structItem--reputation js-inlineModContainer js-reputationListItem-' . $__templater->escape($__vars['reputation']['reputation_id']) . '">
		<div class="message-inner">
			<div class="message-cell message-cell--user">
				';
	if ($__vars['reputation']['is_anonymous']) {
		$__finalCompiled .= '
					' . $__templater->callMacro('message_macros', 'user_info_simple', array(
			'user' => null,
		), $__vars) . '
				';
	} else {
		$__finalCompiled .= '
					' . $__templater->callMacro('message_macros', 'user_info_simple', array(
			'user' => $__vars['reputation']['GiverUser'],
		), $__vars) . '
				';
	}
	$__finalCompiled .= '
			</div>
			<div class="message-cell message-cell--main" data-xf-init="touch-proxy">
				<div class="message-main js-quickEditTarget">
					<div class="message-content js-messageContent">
						';
	if ($__vars['reputation']['reputation_state'] == 'deleted') {
		$__finalCompiled .= '
							<div class="messageNotice messageNotice--deleted">
								' . $__templater->callMacro('deletion_macros', 'notice', array(
			'log' => $__vars['reputation']['DeletionLog'],
		), $__vars) . '
							</div>
						';
	} else if ($__vars['reputation']['reputation_state'] == 'moderated') {
		$__finalCompiled .= '
							<div class="messageNotice messageNotice--moderated">
								' . 'mrs_this_reputation_is_awaiting_moderator_approval_and_is_invisible_to_normal' . '
							</div>
						';
	}
	$__finalCompiled .= '
						
						<header class="message-attribution message-attribution--plain">
							<ul class="listInline listInline--bullet">
								<li class="message-attribution-user">
									<h4 class="attribution">
										';
	if ($__vars['reputation']['is_anonymous']) {
		$__finalCompiled .= '
											' . $__templater->func('username_link', array(null, true, array(
			'defaultname' => 'Anonymous',
		))) . '
											';
		if ($__templater->method($__vars['reputation'], 'canViewAnonymousReputation', array())) {
			$__finalCompiled .= '
												(' . $__templater->func('username_link', array($__vars['reputation']['GiverUser'], true, array(
				'defaultname' => 'Deleted member',
			))) . ')
											';
		}
		$__finalCompiled .= '
											&gt;
											' . $__templater->func('username_link', array($__vars['reputation']['ReceiverUser'], true, array(
			'defaultname' => '',
		))) . '
										';
	} else {
		$__finalCompiled .= '
											' . $__templater->func('username_link', array($__vars['reputation']['GiverUser'], true, array(
			'size' => 's',
			'defaultname' => $__vars['reputation']['giver_username'],
		))) . '
											&gt;
											' . $__templater->func('username_link', array($__vars['reputation']['ReceiverUser'], true, array(
			'defaultname' => '',
		))) . '
										';
	}
	$__finalCompiled .= '
									</h4>
								</li>
								<li class="structItem-customField field--anonymous">' . 'mrs_anonymously:' . ' ' . ($__vars['reputation']['is_anonymous'] ? 'Yes' : 'No') . '</li>
								<li class="structItem-customField field--points">' . (('mrs_points:' . ' ') . $__templater->escape($__vars['reputation']['points'])) . '</li>
								<li>' . 'Message' . $__vars['xf']['language']['label_separator'] . ' <a href="' . $__templater->func('link', array('posts/' . $__vars['reputation']['content_id'], $__vars['reputation'], ), true) . '">#' . $__templater->escape($__vars['reputation']['content_id']) . '</a></li>
								<li>' . $__templater->func('date', array($__vars['reputation']['reputation_date'], ), true) . '</li>
							</ul>
						</header>
						
						<div class="message-body">
							' . ($__vars['reputation']['comment'] ? $__templater->func('snippet', array($__vars['reputation']['comment'], 0, array('stripBbCode' => true, ), ), true) : 'mrs_no_comments') . '
						</div>
						
						<footer class="message-footer">
							<div class="message-actionBar actionBar">
								<div class="actionBar-set actionBar-set--internal">
									';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
											';
	if ($__vars['chooseName']) {
		$__compilerTemp1 .= '
												<span class="actionBar-action actionBar-action--inlineMod">
													' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'name' => $__vars['chooseName'] . '[]',
			'value' => $__vars['reputation']['reputation_id'],
			'class' => 'js-chooseItem',
			'_type' => 'option',
		))) . '
												</span>
											';
	} else if ($__vars['allowInlineMod'] AND $__templater->method($__vars['reputation'], 'canUseInlineModeration', array())) {
		$__compilerTemp1 .= '
												<span class="actionBar-action actionBar-action--inlineMod">
													' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'value' => $__vars['reputation']['reputation_id'],
			'class' => 'js-inlineModToggle',
			'data-xf-init' => 'tooltip',
			'title' => 'Select for moderation',
			'_type' => 'option',
		))) . '
												</span>
											';
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
	if ($__templater->method($__vars['reputation'], 'canReport', array())) {
		$__finalCompiled .= '
										<a href="' . $__templater->func('link', array('reputation/report', $__vars['reputation'], ), true) . '" data-xf-click="overlay" title="' . 'Report' . '" class="actionBar-action actionBar-action--report"><i class="fa fa-scissors" aria-hidden="true"></i>' . 'Report' . '</a>
									';
	}
	$__finalCompiled .= '
									
									';
	$__vars['hasActionBarMenu'] = false;
	$__finalCompiled .= '
									';
	if ($__templater->method($__vars['reputation'], 'canEdit', array())) {
		$__finalCompiled .= '
										<a href="' . $__templater->func('link', array('reputation/edit', $__vars['reputation'], ), true) . '"
										   class="actionBar-action actionBar-action--edit actionBar-action--menuItem"
										   data-xf-click="overlay">' . 'Edit' . '</a>
										';
		$__vars['hasActionBarMenu'] = true;
		$__finalCompiled .= '
									';
	}
	$__finalCompiled .= '
									';
	if ($__templater->method($__vars['reputation'], 'canDelete', array('soft', ))) {
		$__finalCompiled .= '
										<a href="' . $__templater->func('link', array('reputation/delete', $__vars['reputation'], ), true) . '"
											class="actionBar-action actionBar-action--delete actionBar-action--menuItem"
											data-xf-click="overlay">' . 'Delete' . '</a>
										';
		$__vars['hasActionBarMenu'] = true;
		$__finalCompiled .= '
									';
	}
	$__finalCompiled .= '
									';
	if (($__vars['reputation']['reputation_state'] == 'deleted') AND $__templater->method($__vars['reputation'], 'canUndelete', array())) {
		$__finalCompiled .= '
										<a href="' . $__templater->func('link', array('reputation/undelete', $__vars['reputation'], ), true) . '" data-xf-click="overlay"
											class="actionBar-action actionBar-action--undelete actionBar-action--menuItem">' . 'Undelete' . '</a>
										';
		$__vars['hasActionBarMenu'] = true;
		$__finalCompiled .= '
									';
	}
	$__finalCompiled .= '
									';
	if ($__templater->method($__vars['xf']['visitor'], 'canViewIps', array()) AND $__vars['reputation']['ip_id']) {
		$__finalCompiled .= '
										<a href="' . $__templater->func('link', array('reputation/ip', $__vars['reputation'], ), true) . '"
										   class="actionBar-action actionBar-action--ip actionBar-action--menuItem"
										   data-xf-click="overlay">' . 'IP' . '</a>
										';
		$__vars['hasActionBarMenu'] = true;
		$__finalCompiled .= '
									';
	}
	$__finalCompiled .= '
									';
	if ($__templater->method($__vars['reputation'], 'canWarn', array())) {
		$__finalCompiled .= '
										<a href="' . $__templater->func('link', array('reputation/warn', $__vars['reputation'], ), true) . '"
											class="actionBar-action actionBar-action--warn actionBar-action--menuItem">' . 'Warn' . '</a>
										';
		$__vars['hasActionBarMenu'] = true;
		$__finalCompiled .= '
									';
	} else if ($__vars['reputation']['warning_id'] AND $__templater->method($__vars['xf']['visitor'], 'canViewWarnings', array())) {
		$__finalCompiled .= '
										<a href="' . $__templater->func('link', array('warnings', array('warning_id' => $__vars['reputation']['warning_id'], ), ), true) . '"
											class="actionBar-action actionBar-action--warn actionBar-action--menuItem"
											data-xf-click="overlay">' . 'View warning' . '</a>
										';
		$__vars['hasActionBarMenu'] = true;
		$__finalCompiled .= '
									';
	}
	$__finalCompiled .= '
									';
	if ($__templater->method($__vars['reputation'], 'canApproveUnapprove', array())) {
		$__finalCompiled .= '
										';
		if ($__vars['reputation']['reputation_state'] == 'moderated') {
			$__finalCompiled .= '
											<a href="' . $__templater->func('link', array('reputation/approve', $__vars['reputation'], array('t' => $__templater->func('csrf_token', array(), false), ), ), true) . '"
											   class="actionBar-action actionBar-action--approve actionBar-action--menuItem">' . 'Approve' . '</a>
											';
			$__vars['hasActionBarMenu'] = true;
			$__finalCompiled .= '
										';
		} else if ($__vars['reputation']['reputation_state'] == 'visible') {
			$__finalCompiled .= '
											<a href="' . $__templater->func('link', array('reputation/unapprove', $__vars['reputation'], array('t' => $__templater->func('csrf_token', array(), false), ), ), true) . '"
											   class="actionBar-action actionBar-action--unapprove actionBar-action--menuItem">' . 'Unapprove' . '</a>
											';
			$__vars['hasActionBarMenu'] = true;
			$__finalCompiled .= '
										';
		}
		$__finalCompiled .= '
									';
	}
	$__finalCompiled .= '

									';
	if ($__vars['hasActionBarMenu']) {
		$__finalCompiled .= '
										<a class="actionBar-action actionBar-action--menuTrigger"
											data-xf-click="menu"
											title="' . $__templater->filter('More options', array(array('for_attr', array()),), true) . '"
											role="button"
											tabindex="0"
											aria-expanded="false"
											aria-haspopup="true">&#8226;&#8226;&#8226;</a>
										<div class="menu" data-menu="menu" aria-hidden="true" data-menu-builder="actionBar">
											<div class="menu-content">
												<h4 class="menu-header">' . 'More options' . '</h4>
												<div class="js-menuBuilderTarget"></div>
											</div>
										</div>
									';
	}
	$__finalCompiled .= '
								</div>
							</div>
						</footer>
					</div>
				</div>
			</div>
		</div>
	</div>
';
	return $__finalCompiled;
}
),
'post' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'reputation' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
							';
	if ($__templater->method($__vars['reputation'], 'canView', array())) {
		$__compilerTemp1 .= '
							<div class="contentRow">
								<div class="contentRow-figure">
									';
		if ($__vars['reputation']['is_anonymous']) {
			$__compilerTemp1 .= '
										' . $__templater->func('avatar', array(null, 's', false, array(
				'defaultname' => 'Anonymous',
			))) . '
									';
		} else {
			$__compilerTemp1 .= '
										' . $__templater->func('avatar', array($__vars['reputation']['GiverUser'], 's', false, array(
				'defaultname' => $__vars['reputation']['giver_username'],
			))) . '
									';
		}
		$__compilerTemp1 .= '
								</div>
								<div class="contentRow-main">
									<h3 class="contentRow-header">
										';
		if ($__vars['reputation']['is_anonymous']) {
			$__compilerTemp1 .= '
											' . $__templater->func('username_link', array(null, false, array(
				'defaultname' => 'Anonymous',
			))) . '
											';
			if ($__templater->method($__vars['reputation'], 'canViewAnonymousReputation', array())) {
				$__compilerTemp1 .= '
												(' . $__templater->func('username_link', array($__vars['reputation']['GiverUser'], false, array(
					'defaultname' => 'Deleted member',
				))) . ')
											';
			}
			$__compilerTemp1 .= '
										';
		} else {
			$__compilerTemp1 .= '
											' . $__templater->func('username_link', array($__vars['reputation']['GiverUser'], true, array(
			))) . '
										';
		}
		$__compilerTemp1 .= '
									</h3>
									<div class="contentRow-extra contentRow-extra--large">
										' . 'mrs_points:' . ' ' . $__templater->filter($__vars['reputation']['points'], array(array('number', array()),), true) . ' 
									</div>
									<div class="contentRow-title">
										' . ($__vars['reputation']['comment'] ? $__templater->func('snippet', array($__vars['reputation']['comment'], 0, array('stripBbCode' => true, ), ), true) : 'mrs_no_comments') . '
									</div>
									';
		if ($__vars['reputation']['reputation_state'] == 'deleted') {
			$__compilerTemp1 .= '
										<div class="messageNotice messageNotice--deleted">
											' . $__templater->callMacro('deletion_macros', 'notice', array(
				'log' => $__vars['reputation']['DeletionLog'],
			), $__vars) . '
										</div>
									';
		} else if ($__vars['reputation']['reputation_state'] == 'moderated') {
			$__compilerTemp1 .= '
										<div class="messageNotice messageNotice--moderated">
											' . 'mrs_this_reputation_is_awaiting_moderator_approval_and_is_invisible_to_normal' . '
										</div>
									';
		}
		$__compilerTemp1 .= '
									<div class="contentRow-minor">
										<ul class="listInline listInline--bullet">
											<li>
												' . $__templater->func('date_dynamic', array($__vars['reputation']['reputation_date'], array(
		))) . '
											</li>
											<li>
												';
		if ($__templater->method($__vars['reputation'], 'canReport', array())) {
			$__compilerTemp1 .= '
													<a href="' . $__templater->func('link', array('reputation/report', $__vars['reputation'], ), true) . '" data-xf-click="overlay" title="' . 'Report' . '" class="actionBar-action actionBar-action--report">' . 'Report' . '</a>
												';
		}
		$__compilerTemp1 .= '
												';
		if ($__templater->method($__vars['reputation'], 'canEdit', array())) {
			$__compilerTemp1 .= '
													<a href="' . $__templater->func('link', array('reputation/edit', $__vars['reputation'], ), true) . '" data-xf-click="overlay" title="' . 'Edit' . '" class="actionBar-action actionBar-action--edit">' . 'Edit' . '</a>
												';
		}
		$__compilerTemp1 .= '
												';
		if ($__templater->method($__vars['reputation'], 'canDelete', array('soft', ))) {
			$__compilerTemp1 .= '
													<a href="' . $__templater->func('link', array('reputation/delete', $__vars['reputation'], ), true) . '" data-xf-click="overlay" title="' . 'Delete' . '" class="actionBar-action actionBar-action--delete">' . 'Delete' . '</a>
												';
		}
		$__compilerTemp1 .= '
												';
		if (($__vars['reputation']['reputation_state'] == 'deleted') AND $__templater->method($__vars['reputation'], 'canUndelete', array())) {
			$__compilerTemp1 .= '
													<a href="' . $__templater->func('link', array('reputation/undelete', $__vars['reputation'], ), true) . '" data-xf-click="overlay" title="' . 'Undelete' . '" class="actionBar-action actionBar-action--delete">' . 'Undelete' . '</a>
												';
		}
		$__compilerTemp1 .= '
												';
		if ($__templater->method($__vars['xf']['visitor'], 'canViewIps', array()) AND $__vars['reputation']['ip_id']) {
			$__compilerTemp1 .= '
													<a href="' . $__templater->func('link', array('reputation/ip', $__vars['reputation'], ), true) . '" data-xf-click="overlay" title="' . 'IP' . '" class="actionBar-action actionBar-action--delete">' . 'IP' . '</a>
												';
		}
		$__compilerTemp1 .= '
												';
		if ($__templater->method($__vars['reputation'], 'canWarn', array())) {
			$__compilerTemp1 .= '
													<a href="' . $__templater->func('link', array('reputation/warn', $__vars['reputation'], ), true) . '"
													   class="actionBar-action actionBar-action--warn">' . 'Warn' . '</a>
												';
		} else if ($__vars['reputation']['warning_id'] AND $__templater->method($__vars['xf']['visitor'], 'canViewWarnings', array())) {
			$__compilerTemp1 .= '
													<a href="' . $__templater->func('link', array('warnings', array('warning_id' => $__vars['reputation']['warning_id'], ), ), true) . '"
													   class="actionBar-action actionBar-action--warn"
													   data-xf-click="overlay">' . 'View warning' . '</a>
												';
		}
		$__compilerTemp1 .= '
												';
		if ($__templater->method($__vars['reputation'], 'canApproveUnapprove', array())) {
			$__compilerTemp1 .= '
													';
			if ($__vars['reputation']['reputation_state'] == 'moderated') {
				$__compilerTemp1 .= '
														<a href="' . $__templater->func('link', array('reputation/approve', $__vars['reputation'], array('t' => $__templater->func('csrf_token', array(), false), ), ), true) . '"
														   title="' . 'Approve' . '"
														   class="actionBar-action actionBar-action--approve">' . 'Approve' . '</a>
													';
			} else if ($__vars['reputation']['reputation_state'] == 'visible') {
				$__compilerTemp1 .= '
														<a href="' . $__templater->func('link', array('reputation/unapprove', $__vars['reputation'], array('t' => $__templater->func('csrf_token', array(), false), ), ), true) . '"
														   title="' . 'Unapprove' . '"
														   class="actionBar-action actionBar-action--unapprove">' . 'Unapprove' . '</a>
													';
			}
			$__compilerTemp1 .= '
												';
		}
		$__compilerTemp1 .= '
											</li>
										</ul>
									</div>
								</div>
							</div>
							';
	}
	$__compilerTemp1 .= '
						';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
		<div class="message-signature">
			<div class="block">
				<div class="block-container">
					<ol class="block-body">
						' . $__compilerTemp1 . '
					</ol>
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
'post_simple' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'reputation' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
			<div>
				';
	if ($__vars['reputation']['is_anonymous']) {
		$__compilerTemp1 .= '
					' . $__templater->func('username_link', array(null, false, array(
			'defaultname' => 'Anonymous',
		))) . '
					';
		if ($__templater->method($__vars['reputation'], 'canViewAnonymousReputation', array())) {
			$__compilerTemp1 .= '
						(' . $__templater->func('username_link', array($__vars['reputation']['GiverUser'], false, array(
				'defaultname' => 'Deleted member',
			))) . ')
					';
		}
		$__compilerTemp1 .= '
				';
	} else {
		$__compilerTemp1 .= '
					From: ' . $__templater->func('username_link', array($__vars['reputation']['GiverUser'], false, array(
			'defaultname' => $__vars['reputation']['giver_username'],
			'href' => ($__vars['reputation']['GiverUser'] ? $__templater->func('link_type', array('public', 'members', $__vars['reputation']['GiverUser'], ), false) : null),
		))) . '
				';
	}
	$__compilerTemp1 .= ' - 
				' . $__templater->filter($__vars['reputation']['points'], array(array('number', array()),), true) . ' ' . 'mrs_points' . ' <span style="color:#fff">|</span> Reason:
				' . ($__vars['reputation']['comment'] ? $__templater->func('snippet', array($__vars['reputation']['comment'], 0, array('stripBbCode' => true, ), ), true) : 'mrs_no_comments') . '
				<span class="u-concealed">
					<span style="color:#fff">|</span> ' . $__templater->func('date_dynamic', array($__vars['reputation']['reputation_date'], array(
	))) . '
				</span>
			</div>
		';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
		' . $__compilerTemp1 . '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'reputation_simple' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'reputation' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="contentRow">
		<div class="contentRow-figure">
			' . $__templater->func('avatar', array(($__vars['reputation']['is_anonymous'] ? null : $__vars['reputation']['GiverUser']), 'xxs', false, array(
	))) . '
		</div>
		<div class="contentRow-main contentRow-main--close">
			<div class="contentRow-lesser">
				';
	if ($__vars['reputation']['is_anonymous']) {
		$__finalCompiled .= '
					' . 'Anonymous' . '
					';
	} else {
		$__finalCompiled .= '
					' . ($__templater->escape($__vars['reputation']['GiverUser']['username']) ?: 'Deleted member') . '
				';
	}
	$__finalCompiled .= '
				&gt;
				' . ($__templater->escape($__vars['reputation']['ReceiverUser']['username']) ?: 'Deleted member') . '
			</div>
			<div class="contentRow-lesser">' . 'mrs_points:' . ' ' . $__templater->escape($__vars['reputation']['points']) . ' ' . 'Message' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->func('snippet', array($__vars['reputation']['comment'], 100, ), true) . '</div>
			<div class="contentRow-minor contentRow-minor--smaller">
				<ul class="listInline listInline--bullet">
					<li>
						';
	if ($__vars['reputation']['is_anonymous']) {
		$__finalCompiled .= '
							' . 'Anonymous' . '
						';
	} else {
		$__finalCompiled .= '
							' . ($__templater->escape($__vars['reputation']['GiverUser']['username']) ?: 'Deleted member') . '
						';
	}
	$__finalCompiled .= '
					</li>
					<li>' . $__templater->func('date_dynamic', array($__vars['reputation']['reputation_date'], array(
	))) . '</li>
				</ul>
			</div>
		</div>
	</div>
';
	return $__finalCompiled;
}
),
'reputation_snippet' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'giverUser' => '!',
		'reputationId' => '!',
		'post' => '!',
		'date' => '!',
		'fallbackName' => 'Unknown member',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="contentRow-title">
		';
	if ($__vars['post']['user_id'] AND ($__vars['post']['user_id'] == $__vars['xf']['visitor']['user_id'])) {
		$__finalCompiled .= '
			' . '' . $__templater->func('username_link', array($__vars['giverUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' reacted to <a ' . (('href="' . $__templater->func('link', array('posts', $__vars['post'], ), true)) . '"') . '>your post</a> in the thread ' . ((((('<a href="' . $__templater->func('link', array('threads', $__vars['post']['Thread'], ), true)) . '">') . $__templater->func('prefix', array('thread', $__vars['post']['Thread'], ), true)) . $__templater->escape($__vars['post']['Thread']['title'])) . '</a>') . ' with ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['reputationId'], 'medium', ), false), array(array('preescaped', array()),), true) . '.' . '
		';
	} else {
		$__finalCompiled .= '
			' . '' . $__templater->func('username_link', array($__vars['giverUser'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' reacted to <a ' . (('href="' . $__templater->func('link', array('posts', $__vars['post'], ), true)) . '"') . '>' . $__templater->escape($__vars['post']['username']) . '\'s post</a> in the thread ' . ((((('<a href="' . $__templater->func('link', array('threads', $__vars['post']['Thread'], ), true)) . '">') . $__templater->func('prefix', array('thread', $__vars['post']['Thread'], ), true)) . $__templater->escape($__vars['post']['Thread']['title'])) . '</a>') . ' with ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['reputationId'], 'medium', ), false), array(array('preescaped', array()),), true) . '.' . '
		';
	}
	$__finalCompiled .= '
	</div>

	<div class="contentRow-snippet">' . $__templater->func('snippet', array($__vars['post']['message'], $__vars['xf']['options']['newsFeedMessageSnippetLength'], array('stripQuote' => true, ), ), true) . '</div>

	<div class="contentRow-minor">' . $__templater->func('date_dynamic', array($__vars['date'], array(
	))) . '</div>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

' . '

' . '

' . '

';
	return $__finalCompiled;
}
);