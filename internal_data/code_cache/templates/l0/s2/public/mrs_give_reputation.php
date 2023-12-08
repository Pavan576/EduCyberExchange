<?php
// FROM HASH: ce73aa5502c33d1df5dc86c987d5f4e2
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__compilerTemp1 = '';
	if ($__templater->func('property', array('mrsShowReputationComment', ), false)) {
		$__compilerTemp1 .= '
				';
		$__compilerTemp2 = '';
		if ($__vars['xf']['options']['mrsCommentRequired']) {
			$__compilerTemp2 .= '
							' . 'mrs_reputation_is_required' . '
						';
		}
		$__compilerTemp1 .= $__templater->formTextAreaRow(array(
			'name' => 'comment',
			'rows' => '2',
			'autosize' => 'true',
			'data-xf-init' => 'min-length',
			'data-min-height' => $__vars['xf']['options']['mrsReputationCommentMaxLength'],
			'data-allow-empty' => ($__vars['xf']['options']['mrsCommentRequired'] ? 'false' : 'true'),
		), array(
			'label' => 'Message',
			'hint' => ($__vars['xf']['options']['mrsCommentRequired'] ? 'Required' : ''),
			'explain' => '
						' . 'mrs_explain_why_youre_giving_this_reputation' . '
						' . $__compilerTemp2 . '
					',
		)) . '
			';
	}
	$__compilerTemp3 = '';
	if ($__templater->method($__vars['post'], 'canGiveReputationAnonymously', array())) {
		$__compilerTemp3 .= '
				' . $__templater->formCheckBoxRow(array(
		), array(array(
			'name' => 'is_anonymous',
			'value' => '1',
			'selected' => false,
			'label' => 'mrs_submit_reputation_anonymously',
			'hint' => 'mrs_if_selected_only_staff_will_be_able_to_see_who_wrote_this_reputation',
			'_type' => 'option',
		)), array(
		)) . '
			';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formRow($__templater->escape($__vars['xf']['visitor']['username']), array(
		'label' => 'Your name',
		'style' => 'color: #626262',
	)) . '

			' . $__compilerTemp1 . '

			' . $__templater->formNumberBoxRow(array(
		'name' => 'points',
		'value' => '0',
		'min' => $__vars['min'],
		'max' => $__vars['max'],
	), array(
		'label' => 'mrs_points',
		'explain' => (($__vars['min'] < 0) ? 'mrs_choose_points_for_x_y' : 'mrs_choose_neutral_points_for_x_y'),
	)) . '

			' . $__compilerTemp3 . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Send',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('posts/add-reputation', $__vars['post'], ), false),
		'class' => 'block',
		'ajax' => 'true',
		'data-redirect' => 'on',
		'data-force-flash-message' => 'true',
	));
	return $__finalCompiled;
}
);