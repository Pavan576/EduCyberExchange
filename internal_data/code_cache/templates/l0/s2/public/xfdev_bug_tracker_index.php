<?php
// FROM HASH: 7a9455bb9f49c6c27724c04446378fb0
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Bug Tracker');
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
                <h1 class="flex-fill">🐞 Bug Tracker</h1>
                <div class="flex-shrink-0 flex-grow-0 ml-3">
                    <a href="' . $__templater->func('link', array('bug-tracker/create', ), true) . '">
                        <button type="button" class="btn btn-transparent" id="report-button">Report Issue</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex flex-row align-items-center mb-3">
            <h2 class="text-danger font-weight-bold flex-fill">
                Reported Issues </h2>
            <div class="flex-shrink-0 flex-grow-0 ml-3">
                <select class="custom-select bg-secondary border-secondary" name="filter" onchange="location = this.value">
                    <option value="--" selected="">Select Filter</option>
                    <option value="' . $__templater->func('link', array('bug-tracker', ), true) . '">All</option>
                    <option value="' . $__templater->func('link', array('bug-tracker', '', array('filter' => 1, ), ), true) . '">Fixed</option>
                    <option value="' . $__templater->func('link', array('bug-tracker', '', array('filter' => 2, ), ), true) . '">Confirmed</option>
                    <option value="' . $__templater->func('link', array('bug-tracker', '', array('filter' => 3, ), ), true) . '">Awaiting Response</option>
                    <option value="' . $__templater->func('link', array('bug-tracker', '', array('filter' => 4, ), ), true) . '">Discarded</option>
                </select>
            </div>
        </div>

        ';
	if (!$__templater->test($__vars['bugReports'], 'empty', array())) {
		$__finalCompiled .= '
            <div class="wrapper mb-3">
                ';
		if ($__templater->isTraversable($__vars['bugReports'])) {
			foreach ($__vars['bugReports'] AS $__vars['bug_report_id'] => $__vars['report']) {
				$__finalCompiled .= '
                    <div class="main-row p-3 d-flex flex-row align-items-center">
                        <div class="bug-status position-relative mr-3 flex-shrink-0 flex-grow-0 ' . $__templater->escape($__vars['report']['status']['class']) . '"
                             data-xf-init="tooltip" data-placement="top" title=""
                             data-original-title="' . $__templater->escape($__vars['report']['status']['title']) . '"></div>
                        <div class="bug-info flex-fill no-overflow">
                            <div class="bug-info-title font-weight-bold"><a href="' . $__templater->func('link', array('bug-tracker', $__vars['report'], ), true) . '">' . $__templater->escape($__vars['report']['bug_title']) . '</a>
                            </div>
                            <div class="font-size-08 font-weight-bold text-secondary">Submitted by
                                ' . $__templater->func('username_link', array($__vars['report']['User'], false, array(
				))) . '
                                <span class="date-separator" style="font-weight: bolder">.</span>
                                <span>' . $__templater->func('date_dynamic', array($__vars['report']['created_at'], array(
				))) . '</span>
                            </div>
                        </div>
                    </div>
                ';
			}
		}
		$__finalCompiled .= '
            </div>
            ';
	} else {
		$__finalCompiled .= '
            <div class="wrapper mb-3">
                <div class="main-row p-3">' . 'xfdev_bt_no_bugs_submitted' . '</div>
            </div>
        ';
	}
	$__finalCompiled .= '

        ' . $__templater->func('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['total'],
		'link' => 'bug-tracker',
		'params' => $__vars['params'],
		'wrapperclass' => 'block-outer block-outer--after',
		'perPage' => $__vars['perPage'],
	))) . '
    </div>
</main>';
	return $__finalCompiled;
}
);