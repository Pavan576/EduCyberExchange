<?php
// FROM HASH: 9db8c0a70737a53e6d14fecf14c78e4d
return array(
'macros' => array('item' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'ticket' => '!',
		'category' => '',
		'forceRead' => false,
		'showWatched' => true,
		'allowInlineMod' => true,
		'chooseName' => '',
		'extraInfo' => '',
		'allowEdit' => true,
		'filters' => array(),
		'queue' => false,
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

    ';
	$__templater->includeCss('structured_list.less');
	$__finalCompiled .= '

    <div
		class="structItem structItem--ticket' . ($__vars['ticket']['prefix_id'] ? (' is-prefix' . $__templater->escape($__vars['ticket']['prefix_id'])) : '') . ($__templater->method($__vars['ticket'], 'isAssignedTo', array()) ? ' is-highlighted' : '') . ($__templater->method($__vars['ticket'], 'isUnread', array()) AND ((!$__vars['forceRead']) ? ' is-unread' : '')) . (($__vars['ticket']['discussion_state'] === 'moderated') ? ' is-moderated' : '') . (($__vars['ticket']['discussion_state'] === 'deleted') ? ' is-deleted' : '') . ' js-inlineModContainer js-ticketListItem-' . $__templater->escape($__vars['ticket']['ticket_id']) . '"
		data-author="' . ($__templater->escape($__vars['ticket']['User']['username']) ?: $__templater->escape($__vars['ticket']['username'])) . '">
        <div class="structItem-cell structItem-cell--icon">
            <div class="structItem-iconContainer">
                ' . $__templater->func('avatar', array($__vars['ticket']['User'], 's', false, array(
		'defaultname' => $__vars['ticket']['username'],
	))) . '
            </div>
        </div>
        <div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">
			<ul class="structItem-statuses">
				<li><span class="' . $__templater->escape($__vars['ticket']['Status']['css_class']) . '">' . $__templater->escape($__vars['ticket']['Status']['title']) . '</span></li>
				';
	if (($__templater->func('property', array('reactionSummaryOnLists', ), false) === 'status') AND $__vars['ticket']['first_message_reactions']) {
		$__finalCompiled .= '
					<li>' . $__templater->func('reactions_summary', array($__vars['ticket']['first_message_reactions'])) . '</li>
				';
	}
	$__finalCompiled .= '
				';
	if ($__vars['ticket']['discussion_state'] === 'moderated') {
		$__finalCompiled .= '
					<li>
						<i class="structItem-status structItem-status--moderated" aria-hidden="true"
							title="' . $__templater->filter('Awaiting approval', array(array('for_attr', array()),), true) . '"></i>
						<span class="u-srOnly">' . 'Awaiting approval' . '</span>
					</li>
				';
	}
	$__finalCompiled .= '
				';
	if ($__vars['ticket']['discussion_state'] === 'deleted') {
		$__finalCompiled .= '
					<li>
						<i class="structItem-status structItem-status--deleted" aria-hidden="true"
							title="' . $__templater->filter('Deleted', array(array('for_attr', array()),), true) . '"></i>
						<span class="u-srOnly">' . 'Deleted' . '</span>
					</li>
				';
	}
	$__finalCompiled .= '
				';
	if ($__vars['ticket']['ticket_locked']) {
		$__finalCompiled .= '
					<li>
						<i class="structItem-status structItem-status--locked" aria-hidden="true"
							title="' . $__templater->filter('Locked', array(array('for_attr', array()),), true) . '"></i>
						<span class="u-srOnly">' . 'Locked' . '</span>
					</li>
				';
	}
	$__finalCompiled .= '
				';
	if ($__vars['showWatched'] AND $__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
					';
		if ($__vars['ticket']['Watch'][$__vars['xf']['visitor']['user_id']]) {
			$__finalCompiled .= '
						<li>
							<i class="structItem-status structItem-status--watched" aria-hidden="true"
								title="' . $__templater->filter('nf_tickets_ticket_watched', array(array('for_attr', array()),), true) . '"></i>
							<span class="u-srOnly">' . 'nf_tickets_ticket_watched' . '</span>
						</li>
						';
		} else if ((!$__vars['category']) AND $__vars['ticket']['Category']['Watch'][$__vars['xf']['visitor']['user_id']]) {
			$__finalCompiled .= '
						<li>
							<i class="structItem-status structItem-status--watched" aria-hidden="true"
								title="' . $__templater->filter('nf_tickets_category_watched', array(array('for_attr', array()),), true) . '"></i>
							<span class="u-srOnly">' . 'nf_tickets_category_watched' . '</span>
						</li>
					';
		}
		$__finalCompiled .= '
				';
	}
	$__finalCompiled .= '
			</ul>

            <div class="structItem-title">
                ';
	$__vars['canPreview'] = $__templater->method($__vars['ticket'], 'canPreview', array());
	$__finalCompiled .= '
                ';
	if ($__vars['ticket']['prefix_id']) {
		$__finalCompiled .= '
                    ';
		if ($__vars['queue']) {
			$__finalCompiled .= '
                        <a href="' . $__templater->func('link', array('tickets/queue', null, $__vars['filters'] + array('prefix_id' => $__vars['ticket']['prefix_id'], ), ), true) . '"
							class="labelLink" rel="nofollow">' . $__templater->func('prefix', array('nf_tickets_ticket', $__vars['ticket'], 'html', '', ), true) . '</a>
                    ';
		} else {
			$__finalCompiled .= '
                        <a href="' . $__templater->func('link', array('tickets/categories', $__vars['category'], $__vars['filters'] + array('prefix_id' => $__vars['ticket']['prefix_id'], ), ), true) . '"
							class="labelLink" rel="nofollow">' . $__templater->func('prefix', array('nf_tickets_ticket', $__vars['ticket'], 'html', '', ), true) . '</a>
                    ';
		}
		$__finalCompiled .= '
                ';
	}
	$__finalCompiled .= '
                <a href="' . $__templater->func('link', array('tickets' . ((($__templater->method($__vars['ticket'], 'isUnread', array()) AND (!$__vars['forceRead']))) ? '/unread' : ''), $__vars['ticket'], ), true) . '"
					class="" data-tp-primary="on" data-xf-init="' . ($__vars['canPreview'] ? 'preview-tooltip' : '') . '"
					data-preview-url="' . ($__vars['canPreview'] ? $__templater->func('link', array('tickets/preview', $__vars['ticket'], ), true) : '') . '">' . $__templater->escape($__vars['ticket']['title']) . '</a>
            </div>

            <div class="structItem-minor">
                ';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
                            ';
	if ($__vars['extraInfo']) {
		$__compilerTemp1 .= '
                                <li>' . $__templater->escape($__vars['extraInfo']) . '</li>
                            ';
	}
	$__compilerTemp1 .= '
                            ';
	if (($__templater->func('property', array('reactionSummaryOnLists', ), false) === 'minor_opposite') AND $__vars['ticket']['first_message_reactions']) {
		$__compilerTemp1 .= '
                                <li>' . $__templater->func('reactions_summary', array($__vars['ticket']['first_message_reactions'])) . '</li>
                            ';
	}
	$__compilerTemp1 .= '
                            ';
	if ($__templater->method($__vars['ticket']['Category'], 'canViewOthers', array()) AND ($__vars['ticket']['assigned_user_id'] > 0)) {
		$__compilerTemp1 .= '
                                <li>' . $__templater->func('username_link', array($__vars['ticket']['Assignee'], false, array(
		))) . '</li>
                            ';
	}
	$__compilerTemp1 .= '
                            ';
	if ($__vars['chooseName']) {
		$__compilerTemp1 .= '
                                <li>' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'name' => $__vars['chooseName'] . '[]',
			'value' => $__vars['ticket']['ticket_id'],
			'class' => 'js-chooseItem',
			'_type' => 'option',
		))) . '</li>
                                ';
	} else if ($__vars['allowInlineMod'] AND $__templater->method($__vars['ticket'], 'canUseInlineModeration', array())) {
		$__compilerTemp1 .= '
                                <li>' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'value' => $__vars['ticket']['ticket_id'],
			'class' => 'js-inlineModToggle',
			'data-xf-init' => 'tooltip',
			'title' => 'Select for moderation',
			'label' => 'Select for moderation',
			'hiddenlabel' => 'true',
			'_type' => 'option',
		))) . '</li>
                            ';
	}
	$__compilerTemp1 .= '
                        ';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
                    <ul class="structItem-extraInfo">
                        ' . $__compilerTemp1 . '
                    </ul>
                ';
	}
	$__finalCompiled .= '

                ';
	if ($__vars['ticket']['discussion_state'] === 'deleted') {
		$__finalCompiled .= '
                    ';
		if ($__vars['extraInfo']) {
			$__finalCompiled .= '<span class="structItem-extraInfo">' . $__templater->escape($__vars['extraInfo']) . '</span>';
		}
		$__finalCompiled .= '

                    ' . $__templater->callMacro('deletion_macros', 'notice', array(
			'log' => $__vars['ticket']['DeletionLog'],
		), $__vars) . '
                    ';
	} else {
		$__finalCompiled .= '
                    <ul class="structItem-parts">
                        <li>' . $__templater->func('username_link', array($__vars['ticket']['User'], false, array(
			'defaultname' => $__vars['ticket']['username'],
		))) . '</li>
                        <li class="structItem-startDate"><a href="' . $__templater->func('link', array('tickets', $__vars['ticket'], ), true) . '" rel="nofollow">' . $__templater->func('date_dynamic', array($__vars['ticket']['start_date'], array(
		))) . '</a></li>
                        ';
		if ($__vars['category']) {
			$__finalCompiled .= '
                            <li><a
								href="' . $__templater->func('link', array('tickets/categories', $__vars['ticket']['Category'], ), true) . '">' . $__templater->escape($__vars['ticket']['Category']['title']) . '</a></li>
                        ';
		}
		$__finalCompiled .= '
                    </ul>

                    ';
		if (($__vars['ticket']['discussion_type'] !== 'redirect') AND (($__vars['ticket']['reply_count'] >= $__vars['xf']['options']['messagesPerPage']) AND $__vars['xf']['options']['lastPageLinks'])) {
			$__finalCompiled .= '
						<span class="structItem-pageJump">
						';
			$__compilerTemp2 = $__templater->func('last_pages', array($__vars['ticket']['reply_count'] + 1, $__vars['xf']['options']['messagesPerPage'], $__vars['xf']['options']['lastPageLinks'], ), false);
			if ($__templater->isTraversable($__compilerTemp2)) {
				foreach ($__compilerTemp2 AS $__vars['p']) {
					$__finalCompiled .= '
							<a href="' . $__templater->func('link', array('tickets', $__vars['ticket'], array('page' => $__vars['p'], ), ), true) . '">' . $__templater->escape($__vars['p']) . '</a>
						';
				}
			}
			$__finalCompiled .= '
						</span>
                    ';
		}
		$__finalCompiled .= '
                ';
	}
	$__finalCompiled .= '
            </div>
        </div>
        <div class="structItem-cell structItem-cell--latest">
            ';
	if ($__vars['ticket']['discussion_type'] === 'redirect') {
		$__finalCompiled .= '
                ' . 'N/A' . '
                ';
	} else {
		$__finalCompiled .= '
                <a href="' . $__templater->func('link', array('tickets/latest', $__vars['ticket'], ), true) . '" rel="nofollow">' . $__templater->func('date_dynamic', array($__vars['ticket']['last_message_date'], array(
			'class' => 'structItem-latestDate',
		))) . '</a>
                <div class="structItem-minor">
                    ';
		if ($__templater->method($__vars['xf']['visitor'], 'isIgnoring', array($__vars['ticket']['last_message_user_id'], ))) {
			$__finalCompiled .= '
                        ' . 'Ignored member' . '
                    ';
		} else {
			$__finalCompiled .= '
                        
                    ';
		}
		$__finalCompiled .= '
                </div>
            ';
	}
	$__finalCompiled .= '
        </div>
        <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
           
        </div>
    </div>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';

	return $__finalCompiled;
}
);