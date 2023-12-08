<?php
// FROM HASH: 374fcfdfd19e31a01a6883c74121e35a
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped($__templater->escape($__vars['bugReport']['bug_title']) . ' - Bug Tracker');
	$__finalCompiled .= '

';
	$__templater->includeCss('xfdev_bug_tracker_style.less');
	$__finalCompiled .= '
';
	$__templater->includeCss('bug_tracker.css');
	$__finalCompiled .= '
';
	$__templater->includeJs(array(
		'src' => 'XFDev/BugTracker/bugtracker-edit.js',
	));
	$__finalCompiled .= '

<style>
    #bug-status {
        padding: 6px 10px;
        background-color: ' . $__templater->escape($__vars['bugReport']['status']['color']) . ';
        display: inline-block;
        color: white;
        margin-top: 10px;
        border-radius: 30px;
        box-shadow: 2px 2px 4px rgba(0,0,0,0.35);
        letter-spacing: 1px;
    }
</style>

<main>
    <div class="content">
        <div class="page-header bg-danger mt-n3 mb-3">
            <div class="container d-flex flex-row align-items-center">
                <div class="flex-fill" id="header-title">
                    <h1>' . $__templater->escape($__vars['bugReport']['bug_title']) . '</h1>
                    <h3>Submitted by <a href="/profile/305500">' . $__templater->escape($__vars['bugReport']['User']['username']) . '</a> on <span
                            title="01-09-2021, 11:02 PM">' . $__templater->func('date_dynamic', array($__vars['bugReport']['created_at'], array(
	))) . '</span>
                    </h3>
                </div>

                <div class="flex-shrink-0 flex-grow-0 ml-3">
                    <a href="' . $__templater->func('link', array('bug-tracker', ), true) . '">
                        <button type="button" class="btn btn-transparent" id="report-button"><i
                                class="fas fa-long-arrow-alt-left"></i> Back to Bug Tracker
                        </button>
                    </a>
                </div>
            </div>
            <div class="container">
                <div id="bug-status">
                    ' . $__templater->escape($__vars['bugReport']['status']['title']) . '
                </div>
            </div>
        </div>

        <div class="container">
            ' . $__templater->func('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['total'],
		'link' => 'bug-tracker',
		'data' => $__vars['bugReport'],
		'params' => $__vars['params'],
		'wrapperclass' => 'block-outer block-outer--after',
		'perPage' => $__vars['perPage'],
	))) . '

            <!--            Bug Report-->
            ' . $__templater->callMacro(null, 'xfdev_bug_tracker_macros::xfdev_bug_tracker_report', array(
		'bugReport' => $__vars['bugReport'],
	), $__vars) . '

            <!--            Bug Comments-->
            ';
	if ($__templater->isTraversable($__vars['bugComments'])) {
		foreach ($__vars['bugComments'] AS $__vars['bug_comment_id'] => $__vars['comment']) {
			$__finalCompiled .= '
                ' . $__templater->callMacro(null, 'xfdev_bug_tracker_macros::xfdev_bug_tracker_comment', array(
				'comment' => $__vars['comment'],
			), $__vars) . '
            ';
		}
	}
	$__finalCompiled .= '

            ';
	if ($__templater->method($__vars['xf']['visitor'], 'canReplyToBugReport', array())) {
		$__finalCompiled .= '
                ';
		if ($__vars['bugReport']['bug_status'] == 'fixed') {
			$__finalCompiled .= '

                    <div class="closed-reply-box fixed">
                        ' . 'xfdev_bug_tracker_marked_fixed' . '
                    </div>

                    ';
		} else if ($__vars['bugReport']['bug_status'] == 'not_a_bug') {
			$__finalCompiled .= '
                    <div class="closed-reply-box not-a-bug">
                        ' . 'xfdev_bug_tracker_marked_discarded' . '
                    </div>
                    ';
		} else {
			$__finalCompiled .= '
                    <div class="wrapper mb-3" id="reply-box">
                        <div class="main-row p-2 form-group">
                            <form action="' . $__templater->func('link', array('bug-tracker/reply', $__vars['bugReport'], ), true) . '" method="POST"
                                  data-force-flash-message="true"
                                  ajax="true">
                                ' . $__templater->callMacro('quick_reply_macros', 'body', array(), $__vars) . '
                                ' . $__templater->func('csrf_input') . '
                            </form>
                        </div>
                    </div>
                ';
		}
		$__finalCompiled .= '

                ';
	} else {
		$__finalCompiled .= '
                <div class="closed-reply-box no-permission-to-reply">
                    You do not have permission to reply in Bug Reports.
                </div>
            ';
	}
	$__finalCompiled .= '
            ' . $__templater->func('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['total'],
		'link' => 'bug-tracker',
		'data' => $__vars['bugReport'],
		'params' => $__vars['params'],
		'wrapperclass' => 'block-outer block-outer--after',
		'perPage' => $__vars['perPage'],
	))) . '
        </div>
    </div>
</main>

<!--';
	$__templater->includeJs(array(
		'src' => 'xf/message.js',
		'min' => '1',
	));
	$__finalCompiled .= '-->';
	return $__finalCompiled;
}
);