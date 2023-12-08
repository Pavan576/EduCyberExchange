<?php
// FROM HASH: 24dd99e171202776f8ae2afffb837e81
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeJs(array(
		'src' => 'xfa/forumtabs/forumtabs.js',
		'min' => '1',
	));
	$__finalCompiled .= '

';
	if ($__vars['xf']['options']['xfa_ft_showIconsOnlyInMobileView']) {
		$__finalCompiled .= '
';
		$__templater->includeCss('xfa_ft_forum_list.less');
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '
	
<h2 class="block-tabHeader tabs hScroller xfa-forum-tabs"
	data-xf-init="xfa-forum-tabs h-scroller"
	data-panes=".js-ForumTabsContent"
	data-state="replace"
	role="tablist">
	<span class="hScroller-scroll" style="width: 100%">
		';
	$__vars['i'] = 0;
	if ($__templater->isTraversable($__vars['tabs'])) {
		foreach ($__vars['tabs'] AS $__vars['tab']) {
			$__vars['i']++;
			$__finalCompiled .= '
			';
			if ($__vars['tab']['type'] == 'watched_threads') {
				$__finalCompiled .= '
				<a href="' . $__templater->func('link', array('watched/threads', ), true) . '"
				   class="tabs-tab"
				   role="tab"
				   aria-controls="newest" id="' . $__templater->escape($__templater->method($__vars['tab'], 'getUrl', array())) . '">
					';
				if ($__vars['tab']['icon']) {
					$__finalCompiled .= '<i class="' . $__templater->escape($__vars['tab']['icon']) . '"></i>';
				}
				$__finalCompiled .= '
					<span class="forum-tab-title">' . $__templater->escape($__vars['tab']['title']) . '</span>
				</a>
				';
			} else if ($__vars['tab']['type'] == 'watched_nodes') {
				$__finalCompiled .= '
				<a href="' . $__templater->func('link', array('watched/forums', ), true) . '"
				   class="tabs-tab"
				   role="tab"
				   aria-controls="newest" id="' . $__templater->escape($__templater->method($__vars['tab'], 'getUrl', array())) . '">
					';
				if ($__vars['tab']['icon']) {
					$__finalCompiled .= '<i class="' . $__templater->escape($__vars['tab']['icon']) . '"></i>';
				}
				$__finalCompiled .= '
					<span class="forum-tab-title">' . $__templater->escape($__vars['tab']['title']) . '</span>
				</a>
				';
			} else {
				$__finalCompiled .= '
				<a href="' . (($__vars['tab']['type'] == 'nodes') ? ('#' . $__templater->escape($__templater->method($__vars['tab'], 'getUrl', array()))) : $__templater->func('link', array('forums/tab-show', null, array('tab_id' => $__vars['tab']['tab_id'], ), ), true)) . '"
				   class="tabs-tab"
				   role="tab"
				   aria-controls="newest" id="' . $__templater->escape($__templater->method($__vars['tab'], 'getUrl', array())) . '">
					';
				if ($__vars['tab']['icon']) {
					$__finalCompiled .= '<i class="' . $__templater->escape($__vars['tab']['icon']) . '" ></i>';
				}
				$__finalCompiled .= '
					<span class="forum-tab-title">' . $__templater->escape($__vars['tab']['title']) . '</span>
				</a>
			';
			}
			$__finalCompiled .= '
		';
		}
	}
	$__finalCompiled .= '
	</span>
</h2>
<ul class="tabPanes js-ForumTabsContent" style="margin-top: 5px;">
	';
	$__vars['i'] = 0;
	if ($__templater->isTraversable($__vars['tabs'])) {
		foreach ($__vars['tabs'] AS $__vars['tab']) {
			$__vars['i']++;
			$__finalCompiled .= '
		';
			if ($__vars['tab']['type'] == 'watched_threads') {
				$__finalCompiled .= '
			<li role="tabpanel" id="' . $__templater->escape($__templater->method($__vars['tab'], 'getUrl', array())) . '" data-href="' . $__templater->func('link', array('watched/threads', ), true) . '"></li>
			';
			} else if ($__vars['tab']['type'] == 'watched_nodes') {
				$__finalCompiled .= '
			<li role="tabpanel" id="' . $__templater->escape($__templater->method($__vars['tab'], 'getUrl', array())) . '" data-href="' . $__templater->func('link', array('watched/forums', ), true) . '"></li>
			';
			} else {
				$__finalCompiled .= '
			<li role="tabpanel" id="' . $__templater->escape($__templater->method($__vars['tab'], 'getUrl', array())) . '" ' . (($__vars['tab']['type'] != 'nodes') ? (('data-href="' . $__templater->func('link', array('forums/tab-show', null, array('tab_id' => $__vars['tab']['tab_id'], ), ), true)) . '"') : '') . '>
				';
				if ($__vars['tab']['type'] == 'nodes') {
					$__finalCompiled .= $__templater->callMacro('forum_list', 'node_list', array(
						'children' => $__vars['tabsNodeTrees'][$__vars['tab']['tab_id']],
						'extras' => $__vars['nodeExtras'],
					), $__vars);
				}
				$__finalCompiled .= '
			</li>
		';
			}
			$__finalCompiled .= '
	';
		}
	}
	$__finalCompiled .= '
</ul>';
	return $__finalCompiled;
}
);