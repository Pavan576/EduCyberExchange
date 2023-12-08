<?php
// FROM HASH: 3d332e703606bad7b1a419d98c39ead2
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__compilerTemp1 = '';
	if ($__vars['xf']['visitor']['user_id'] === $__vars['user']['user_id']) {
		$__compilerTemp1 .= '
		' . 'nf_tickets_your_tickets' . '
	';
	} else {
		$__compilerTemp1 .= '
		' . 'nf_tickets_tickets_by_x' . '
	';
	}
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('
	' . $__compilerTemp1 . '
');
	$__templater->pageParams['pageNumber'] = $__vars['page'];
	$__finalCompiled .= '

';
	if (($__vars['user']['user_id'] === $__vars['xf']['visitor']['user_id']) AND $__templater->method($__vars['xf']['visitor'], 'canCreateTicket', array())) {
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	<a href="' . $__templater->func('link', array('tickets/create', ), true) . '" class="profile_message"><span style="font-weight:500 !important; font-size: 14px;"><i class="fas fa-plus" style="margin-right:5px;"></i> Create New Ticket</span></a>
');
	}
	$__finalCompiled .= '

';
	if ($__vars['canInlineMod']) {
		$__finalCompiled .= '
	';
		$__templater->includeJs(array(
			'src' => 'xf/inline_mod.js',
			'min' => '1',
		));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '
' . $__templater->callMacro('nf_tickets_ticket_page_macros', 'ticket_page_options', array(
		'category' => null,
		'ticket' => null,
	), $__vars) . '

<div class="block ' . (((!$__vars['fromProfile'])) ? 'block--messages' : '') . '" data-xf-init="' . ($__vars['canInlineMod'] ? 'inline-mod' : '') . '" data-type="nf_tickets_ticket" data-href="' . $__templater->func('link', array('inline-mod', ), true) . '">
	<div class="block-outer">';
	$__compilerTemp2 = '';
	$__compilerTemp3 = '';
	$__compilerTemp3 .= '
						';
	if ($__vars['canInlineMod']) {
		$__compilerTemp3 .= '
							' . $__templater->callMacro('inline_mod_macros', 'button', array(), $__vars) . '
						';
	}
	$__compilerTemp3 .= '
					';
	if (strlen(trim($__compilerTemp3)) > 0) {
		$__compilerTemp2 .= '
			<div class="block-outer-opposite">
				<div class="buttonGroup">
					' . $__compilerTemp3 . '
				</div>
			</div>
		';
	}
	$__finalCompiled .= $__templater->func('trim', array('

		' . $__templater->func('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['total'],
		'link' => 'tickets/members',
		'data' => $__vars['user'],
		'params' => $__vars['filters'],
		'wrapperclass' => 'block-outer-main',
		'perPage' => $__vars['perPage'],
	))) . '

		' . $__compilerTemp2 . '

	'), false) . '</div>

	<div class="block-container">
		' . $__templater->callMacro('nf_tickets_filter_macros', 'list_filter_bar', array(
		'filters' => $__vars['filters'],
		'baseLinkPath' => 'tickets/members',
		'linkData' => $__vars['user'],
	), $__vars) . '

		<div class="block-body">
			';
	if (!$__templater->test($__vars['tickets'], 'empty', array())) {
		$__finalCompiled .= '
				<div class="structItemContainer">
					';
		if ($__templater->isTraversable($__vars['tickets'])) {
			foreach ($__vars['tickets'] AS $__vars['ticket']) {
				$__finalCompiled .= '
						' . $__templater->callMacro('nf_tickets_ticket_list_macros', 'item', array(
					'ticket' => $__vars['ticket'],
				), $__vars) . '
					';
			}
		}
		$__finalCompiled .= '
				</div>
			';
	} else if ($__vars['filters']) {
		$__finalCompiled .= '
				<div class="blockMessage">
					';
		if ($__vars['user']['user_id'] === $__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
						' . 'nf_tickets_you_have_not_opened_any_tickets_which_match_your_filters' . '
						';
		} else {
			$__finalCompiled .= '
						' . 'nf_tickets_x_has_not_opened_any_tickets_which_match_your_filters' . '
					';
		}
		$__finalCompiled .= '
				</div>
			';
	} else {
		$__finalCompiled .= '
				<div class="blockMessage">
					';
		if ($__vars['user']['user_id'] === $__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
						' . 'nf_tickets_you_have_not_opened_any_tickets_yet' . '
						';
		} else {
			$__finalCompiled .= '
						' . 'nf_tickets_x_has_not_opened_any_tickets_yet' . '
					';
		}
		$__finalCompiled .= '
				</div>
			';
	}
	$__finalCompiled .= '
		</div>
	</div>

	<div class="block-outer block-outer--after">
		' . $__templater->func('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['total'],
		'link' => 'tickets/members',
		'data' => $__vars['user'],
		'params' => $__vars['filters'],
		'wrapperclass' => 'block-outer-main',
		'perPage' => $__vars['perPage'],
	))) . '

		' . $__templater->func('show_ignored', array(array(
		'wrapperclass' => 'block-outer-opposite',
	))) . '
	</div>
</div>';
	return $__finalCompiled;
}
);