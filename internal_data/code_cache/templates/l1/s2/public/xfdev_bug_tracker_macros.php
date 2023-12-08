<?php
// FROM HASH: 5be5be3e8249577e06749065bf1acfcc
return array(
'macros' => array('xfdev_bug_tracker_report' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'bugReport' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	
		';
	$__templater->inlineJs('
// Get all the buttons with attribute data-toggle="dropdown"
const dropdownToggles = document.querySelectorAll(\'[data-toggle="dropdown"]\');

// Loop through each button and add a click event listener to it
dropdownToggles.forEach((dropdownToggle) => {
  dropdownToggle.addEventListener(\'click\', () => {
    // Get the corresponding dropdown menu for this button
    const dropdownMenu = dropdownToggle.nextElementSibling;

    // Toggle the dropdown menu\'s visibility by toggling the "display" property
    if (dropdownMenu.style.display === "block") {
      dropdownMenu.style.display = "none";
    } else {
      dropdownMenu.style.display = "block";
    }
  });
});

');
	$__finalCompiled .= '

    ';
	$__vars['id'] = 'bugTrackerReport-' . $__vars['bugReport']['bug_tracker_id'];
	$__finalCompiled .= '

    ';
	$__compilerTemp1 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canManageBugTracker', array())) {
		$__compilerTemp1 .= '
                    <div class="flex-fill">
                        <div class="d-flex flex-row align-items-center justify-content-center" style="justify-content: flex-end;">
                            <div class="dropdown">
                                <button class="btn btn-secondary mr-1" type="button" id="threadOptions"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cog"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="threadOptions"
                                     style="width: 220px; min-width: unset; position: absolute; transform: translate3d(-176px, 36px, 0px); top: 0px; left: 0px; will-change: transform;"
                                     x-placement="bottom-end">

                                    ';
		if ($__templater->method($__vars['xf']['visitor'], 'canChangeBugStatus', array())) {
			$__compilerTemp1 .= '
                                        ';
			if ($__vars['bugReport']['bug_status'] != 'confirmed') {
				$__compilerTemp1 .= '
                                            <a class="dropdown-item"
                                               href="' . $__templater->func('link', array('bug-tracker/mark-confirmed', $__vars['bugReport'], ), true) . '"
                                               data-xf-click="overlay">Mark Bug as Confirmed</a>
                                        ';
			}
			$__compilerTemp1 .= '

                                        ';
			if ($__vars['bugReport']['bug_status'] != 'fixed') {
				$__compilerTemp1 .= '
                                            <a class="dropdown-item"
                                               href="' . $__templater->func('link', array('bug-tracker/mark-fixed', $__vars['bugReport'], ), true) . '"
                                               data-xf-click="overlay">
                                                Mark Bug as Fixed
                                            </a>
                                        ';
			}
			$__compilerTemp1 .= '

                                        ';
			if ($__vars['bugReport']['bug_status'] != 'not_a_bug') {
				$__compilerTemp1 .= '
                                            <a class="dropdown-item"
                                               href="' . $__templater->func('link', array('bug-tracker/mark-not-bug', $__vars['bugReport'], ), true) . '"
                                               data-xf-click="overlay">
                                                Mark Bug as Not a Bug
                                            </a>
                                        ';
			}
			$__compilerTemp1 .= '
                                    ';
		}
		$__compilerTemp1 .= '

                                    ';
		if ($__templater->method($__vars['bugReport'], 'canDelete', array())) {
			$__compilerTemp1 .= '
                                        <a class="dropdown-item" href="' . $__templater->func('link', array('bug-tracker/delete', $__vars['bugReport'], ), true) . '"
                                           data-xf-click="overlay">Delete Bug</a>
                                    ';
		}
		$__compilerTemp1 .= '

                                </div>
                            </div>


                            <!--                            <a href="/threads/new-thread.4/reply">-->
                            <!--                                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top"-->
                            <!--                                        title="" data-original-title="Reply to this thread">Reply-->
                            <!--                                    <i class="fas fa-reply fa-flip-horizontal ml-1"></i>-->
                            <!--                                </button>-->
                            <!--                            </a>-->

                        </div>
                    </div>
                ';
	}
	$__finalCompiled .= $__templater->form('
        <article class="main-row p-3 bugtracker-report" id="#bug-report-' . $__templater->escape($__vars['bugReport']['bug_tracker_id']) . '">
            <div class="d-flex flex-row align-items-center mb-3">
                <div class="avatar-30 flex-shrink-0 flex-grow-0 mr-3">
                    ' . $__templater->func('avatar', array($__vars['bugReport']['User'], 'xs', false, array(
	))) . '
                </div>
                <div class="flex-fill">
                    <div class="font-weight-bold font-size-09">
                        ' . $__templater->func('username_link', array($__vars['bugReport']['User'], false, array(
	))) . '
                    </div>
                    <div class="font-weight-bold font-size-07 text-secondary">
                        ' . $__templater->func('date_dynamic', array($__vars['bugReport']['created_at'], array(
	))) . '
                    </div>
                </div>

                ' . $__compilerTemp1 . '
            </div>

            <div class="main-content js-quickEditTarget" style="width: 100%; height: 100%">
                ' . $__templater->func('bb_code', array($__vars['bugReport']['bug_message'], 'bug', $__vars['bugReport'], ), true) . '

                <footer class="message-footer" style="margin-top: 10px; display: flex; justify-content: space-between;">
                    <div class="message-actionBar actionBar">
                        <div class="actionBar-set actionBar-set--internal">
                            <a href="' . $__templater->func('link', array('bug-tracker/edit', $__vars['bugReport'], ), true) . '"
                               data-xf-click="inserter"
                               data-replace="#bugTrackerReport-' . $__templater->escape($__vars['bugReport']['bug_tracker_id']) . ' .js-quickEditTarget with .js-controls"
                               class="actionBar-action actionBar-action--edit actionBar-action--menuItem">Edit</a>
                        </div>
                    </div>
                    <div>
                        Last Updated: ' . $__templater->func('date_dynamic', array($__vars['bugReport']['updated_at'], array(
	))) . '
                    </div>
                </footer>
            </div>
        </article>
    ', array(
		'action' => $__templater->func('link', array('bug-tracker/save-report', $__vars['bugReport'], ), false),
		'data-xf-init' => 'bug-tracker-edit',
		'data-replace' => '#' . $__vars['id'] . ' with #' . $__vars['id'],
		'class' => 'block bugTrackerReport',
		'ajax' => '1',
		'id' => $__vars['id'],
	)) . '
';
	return $__finalCompiled;
}
),
'xfdev_bug_tracker_comment' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'comment' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
    <div class="main-row p-3 bugtracker-comment">
        <div class="d-flex flex-row align-items-center mb-3">
            <div class="avatar-30 flex-shrink-0 flex-grow-0 mr-3">
                ' . $__templater->func('avatar', array($__vars['comment']['User'], 'xs', false, array(
	))) . '
            </div>
            <div class="flex-fill">
                <div class="font-weight-bold font-size-09">
                    ' . $__templater->func('username_link', array($__vars['comment']['User'], false, array(
	))) . '
                </div>
                <div class="font-weight-bold font-size-07 text-secondary">
                    ' . $__templater->func('date_dynamic', array($__vars['comment']['created_at'], array(
	))) . '
                </div>
            </div>

            ';
	if ($__templater->method($__vars['comment'], 'canDelete', array())) {
		$__finalCompiled .= '
                <div class="flex-fill">
                    <div class="d-flex flex-row align-items-center justify-content-center" style="justify-content: flex-end">
                        <div class="dropdown">
                            <button class="btn btn-secondary mr-1" type="button" id="threadOptions"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="threadOptions"
                                 style="width: 220px; min-width: unset; position: absolute; transform: translate3d(-176px, 36px, 0px); top: 0px; left: 0px; will-change: transform;"
                                 x-placement="bottom-end">

                                <a class="dropdown-item" href="' . $__templater->func('link', array('bug-comments/delete', $__vars['comment'], ), true) . '"
                                   data-xf-click="overlay">Delete Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            ';
	}
	$__finalCompiled .= '
        </div>

        ' . $__templater->func('bb_code', array($__vars['comment']['message'], 'comment', $__vars['comment'], ), true) . '
    </div>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

';
	return $__finalCompiled;
}
);