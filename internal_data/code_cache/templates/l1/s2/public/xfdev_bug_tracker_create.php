<?php
// FROM HASH: e0d3f89fb17dc1288f69ddc4bc446e00
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__compilerTemp1 = '';
	if ($__vars['bugReport']['bug_tracker_id']) {
		$__compilerTemp1 .= '
        Edit Bug: ' . $__templater->escape($__vars['bugReport']['bug_title']) . '
        ';
	} else {
		$__compilerTemp1 .= '
        Create Bug Report
    ';
	}
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('
    ' . $__compilerTemp1 . '
');
	$__finalCompiled .= '
';
	$__templater->includeCss('xfdev_bug_tracker_style.less');
	$__finalCompiled .= '
';
	$__templater->includeCss('bug_tracker.css');
	$__finalCompiled .= '
<main>
    <div class="content">
        <div class="page-header bg-danger mt-n3 mb-3">
            <div class="container d-flex flex-row align-items-center">
                <div class="flex-fill" id="header-title">
                    <h1 class="flex-fill">Report an Issue</h1>
                    <h3>Bug Tracker</h3>
                </div>
                <div class="flex-shrink-0 flex-grow-0 ml-3">
                    <a href="' . $__templater->func('link', array('bug-tracker', ), true) . '">
                        <button type="button" class="btn btn-transparent" id="report-button"><i class="fas fa-long-arrow-alt-left"></i> Back to Bug Tracker</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="alert bg-info mt-3 mb-4"><i class="fas fa-exclamation-circle mr-2"></i> Do not report issues regarding security here. Message an administrator instead. </div>
            <form action="' . $__templater->func('link', array('bug-tracker/save-report', $__vars['bugReport'], ), true) . '" method="POST" data-force-flash-message="true" ajax="true">
                <div class="wrapper mb-3">
                    <div class="main-title bg-primary">Report an Issue</div>
                    <div class="js-controls">
                        <div class="main-row p-3">
                            <input type="text" class="form-control" placeholder="Enter a short title" name="report_title" value="' . $__templater->escape($__vars['bugReport']['bug_title']) . '" size="50" maxlength="250">
                        </div>
                        <div class="main-row p-3 font-weight-bold"><i class="fas fa-exclamation-circle mr-1"></i> Please use images and links wherever possible. This would help us in fixing the bug quickly. </div>
                        <div class="main-row">
                            ' . $__templater->formEditor(array(
		'name' => 'report_message',
		'value' => $__vars['bugReport']['bug_message'],
		'placeholder' => 'xfdev_bug_report_message_placeholder',
	)) . '
                        </div>
                        ' . $__templater->func('csrf_input') . '
                        ' . $__templater->formSubmitRow(array(
		'submit' => 'Save Report',
		'fa' => 'fa-save',
		'icon' => '',
	), array(
	)) . '
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>';
	return $__finalCompiled;
}
);