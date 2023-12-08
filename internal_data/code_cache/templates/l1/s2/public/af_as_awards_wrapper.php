<?php
// FROM HASH: e4ff60721052dc62aeffc55866a0bce4
return array(
'macros' => array('simple_award_category_list' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'categoryId' => '!',
		'categories' => '!',
		'total' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<ol class="categoryList toggleTarget is-active">
		<li class="categoryList-item">
			<div class="categoryList-itemRow">
				<a href="' . $__templater->func('link', array('award-system/list', ), true) . '" class="categoryList-link' . (($__vars['categoryId'] == -1) ? ' is-selected' : '') . '">
					' . 'af_as_all_categories' . '
				</a>
				<span class="categoryList-label">
					<span class="label label--subtle label--smallest">' . $__templater->escape($__vars['total']) . '</span>
				</span>
			</div>
		</li>
		';
	if ($__templater->isTraversable($__vars['categories'])) {
		foreach ($__vars['categories'] AS $__vars['awardCategoryId'] => $__vars['awardCategory']) {
			$__finalCompiled .= '
			';
			if ($__templater->func('count', array($__vars['awardCategory']['Awards'], ), false)) {
				$__finalCompiled .= '

				';
				$__vars['isSelected'] = ($__vars['awardCategory']['award_category_id'] == $__vars['categoryId']);
				$__finalCompiled .= '

				<li class="categoryList-item">
					<div class="categoryList-itemRow">
						<a href="' . $__templater->func('link', array('award-system/list', null, array('category' => $__vars['awardCategory']['award_category_id'], ), ), true) . '" class="categoryList-link' . ($__vars['isSelected'] ? ' is-selected' : '') . '">
							' . $__templater->escape($__vars['awardCategory']['title']) . '
						</a>
						<span class="categoryList-label">
							<span class="label label--subtle label--smallest">' . $__templater->filter($__templater->func('count', array($__vars['awardCategory']['Awards'], ), false), array(array('number_short', array()),), true) . '</span>
						</span>
					</div>
				</li>
			';
			}
			$__finalCompiled .= '
		';
		}
	}
	$__finalCompiled .= '
	</ol>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__compilerTemp1 = '';
	if ($__templater->func('count', array($__vars['awardData']['awardCategories'], ), false) > 0) {
		$__compilerTemp1 .= '
					' . $__templater->callMacro(null, 'simple_award_category_list', array(
			'categories' => $__vars['awardData']['awardCategories'],
			'categoryId' => $__vars['categoryId'],
			'total' => $__vars['awardData']['totalAwards'],
		), $__vars) . '
				';
	} else {
		$__compilerTemp1 .= '
					<div class="block-row">' . 'N/A' . '</div>
				';
	}
	$__templater->modifySideNavHtml(null, '
	<div class="block">
		<div class="block-container">
			<h3 class="block-header">' . 'Categories' . '</h3>
			<div class="block-body">
				' . $__compilerTemp1 . '
			</div>
		</div>
	</div>
', 'replace');
	$__finalCompiled .= '

' . '

';
	$__templater->setPageParam('sideNavTitle', 'Categories');
	$__finalCompiled .= '
' . $__templater->filter($__vars['innerContent'], array(array('raw', array()),), true);
	return $__finalCompiled;
}
);