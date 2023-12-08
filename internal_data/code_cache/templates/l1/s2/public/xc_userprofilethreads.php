<?php
// FROM HASH: a032469c14fc1168a3c68a09363fdfa6
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('xc_userprofilethreads.less');
	$__finalCompiled .= '
';
	if ($__templater->func('count', array($__vars['profileThreads'], ), false)) {
		$__finalCompiled .= '
 <div class="block">
		<div class="block-container">
			<div class="title">
			<span style="padding: 5px;font-size:18px;">' . 'xc_title_profilethread' . '</span></div>
			<ol class="block-body">
			';
		$__vars['i'] = 0;
		if ($__templater->isTraversable($__vars['profileThreads'])) {
			foreach ($__vars['profileThreads'] AS $__vars['thread']) {
				$__vars['i']++;
				$__finalCompiled .= '

				<div class="main-profile-thread">
						<div class="thread-profile"><a href="' . $__templater->func('link', array('threads', $__vars['thread'], ), true) . '" class="profile-thread-title"><span class="profile-thread-prefix">' . $__templater->func('prefix', array('thread', $__vars['thread'], 'html', '', ), true) . '</span>&nbsp;' . $__templater->escape($__vars['thread']['title']) . '</a></div>
						<div class="thread-forum"><a href="' . $__templater->func('link', array('forums', $__vars['thread']['Forum'], ), true) . '" class="forum-title">' . $__templater->escape($__vars['thread']['Forum']['title']) . '</a></div>
				</div>
				';
			}
		}
		$__finalCompiled .= '
			</ol>
		</div>
	</div>
';
	}
	return $__finalCompiled;
}
);