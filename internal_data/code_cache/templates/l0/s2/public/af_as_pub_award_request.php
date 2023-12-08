<?php
// FROM HASH: 1e1c62fded0f37c8418c5f46d2b7c433
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('af_as_x_request_award');
	$__finalCompiled .= '

' . $__templater->form('

    <div class="block-container">
        <div class="block-body">

   

            ' . $__templater->formTextBoxRow(array(
		'name' => 'username',
		'value' => $__vars['user']['username'],
		'ac' => 'single',
		'readonly' => ($__vars['user'] ? true : false),
	), array(
		'label' => 'User',
	)) . '

            ' . $__templater->formTextAreaRow(array(
		'name' => 'award_reason',
		'rows' => '5',
		'autosize' => 'true',
	), array(
		'label' => 'Reason',
	)) . '

        </div>
        ' . $__templater->formSubmitRow(array(
		'submit' => $__templater->escape($__vars['request_type']),
		'sticky' => 'true',
	), array(
	)) . '
    </div>
', array(
		'action' => $__templater->func('link', array('award-system/create_request', $__vars['award'], ), false),
		'ajax' => 'true',
		'data-force-flash-message' => 'on',
		'class' => 'block',
	));
	return $__finalCompiled;
}
);