<?php
// FROM HASH: 90e6324a33f593c99084e6127fefc896
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped($__templater->escape($__vars['category']['title']));
	$__templater->pageParams['pageNumber'] = $__vars['page'];
	$__finalCompiled .= '
';
	$__templater->pageParams['pageDescription'] = $__templater->preEscaped($__templater->filter($__vars['category']['description'], array(array('raw', array()),), true));
	$__templater->pageParams['pageDescriptionMeta'] = true;
	$__finalCompiled .= '

' . $__templater->callMacro('metadata_macros', 'canonical_url', array(
		'canonicalUrl' => $__templater->func('link', array('canonical:dbtech-shop/categories', $__vars['category'], array('page' => $__vars['page'], ), ), false),
	), $__vars) . '

';
	$__templater->breadcrumbs($__templater->method($__vars['category'], 'getBreadcrumbs', array(false, )));
	$__finalCompiled .= '

' . $__templater->callMacro('dbtech_shop_item_page_macros', 'item_page_options', array(
		'category' => $__vars['category'],
	), $__vars) . '

';
	if ($__templater->method($__vars['category'], 'canAddItem', array())) {
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('dbtech_shop_add_item...', array(
			'href' => $__templater->func('link', array('dbtech-shop/add', null, array('category_id' => $__vars['category']['category_id'], ), ), false),
			'class' => 'button--cta',
			'icon' => 'write',
		), '', array(
		)) . '
');
	}
	$__finalCompiled .= '

';
	if ($__vars['pendingApproval']) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--important">' . 'Your content has been submitted and will be displayed pending approval by a moderator.' . '</div>
';
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

';
	if ($__templater->func('property', array('dbtechShopEnableInfiniteScroll', ), false) AND (($__vars['page'] == 1) AND ($__vars['total'] > $__vars['perPage']))) {
		$__finalCompiled .= '
	';
		$__vars['infiniteScroll'] = true;
		$__finalCompiled .= '

	';
		$__templater->includeJs(array(
			'src' => 'DBTech/Shop/metafizzy/infinite-scroll/infinite-scroll.pkgd.js',
			'min' => '1',
			'addon' => 'DBTech/Shop',
		));
		$__finalCompiled .= '
	';
		$__templater->includeJs(array(
			'src' => 'DBTech/Shop/item_list.js',
			'min' => '1',
			'addon' => 'DBTech/Shop',
		));
		$__finalCompiled .= '

	';
		$__templater->includeCss('dbtech_shop_infinite_scroll.less');
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

<div class="block" data-xf-init="' . ($__vars['canInlineMod'] ? 'inline-mod' : '') . '" data-type="dbtech_shop_item" data-href="' . $__templater->func('link', array('inline-mod', ), true) . '">
	<div class="block-outer">';
	$__compilerTemp1 = '';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
						';
	if ($__vars['canInlineMod']) {
		$__compilerTemp2 .= '
							' . $__templater->callMacro('inline_mod_macros', 'button', array(), $__vars) . '
						';
	}
	$__compilerTemp2 .= '
						' . '
					';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__compilerTemp1 .= '
			<div class="block-outer-opposite">
				<div class="buttonGroup">
					' . $__compilerTemp2 . '
				</div>
			</div>
		';
	}
	$__finalCompiled .= $__templater->func('trim', array('

		' . $__compilerTemp1 . '

	'), false) . '</div>

	<div class="block-container">
		' . $__templater->callMacro('dbtech_shop_overview_macros', 'list_filter_bar', array(
		'filters' => $__vars['filters'],
		'baseLinkPath' => 'dbtech-shop/categories',
		'category' => $__vars['category'],
		'ownerFilter' => $__vars['ownerFilter'],
		'itemTypeFilter' => $__vars['itemTypeFilter'],
		'platformFilter' => $__vars['platformFilter'],
	), $__vars) . '

		<div class="block-body">
			';
	if (!$__templater->test($__vars['items'], 'empty', array())) {
		$__finalCompiled .= '
				';
		if ($__templater->func('property', array('dbtechShopItemListStyle', ), false) == 'grid') {
			$__finalCompiled .= '
					';
			$__templater->includeCss('dbtech_shop_item_grid.less');
			$__finalCompiled .= '

					<div class="itemList-grid"
						 data-xf-init="' . ($__vars['infiniteScroll'] ? 'dbtech-shop-infinite-scroll' : '') . '"
						 data-infinite-scroll-click="' . $__templater->func('property', array('dbtechShopInfiniteScrollClick', ), true) . '"
						 data-infinite-scroll-after="' . $__templater->func('property', array('dbtechShopInfiniteScrollAfter', ), true) . '"
						 data-infinite-scroll-history="' . $__templater->func('property', array('dbtechShopInfiniteScrollHistory', ), true) . '"
					>
						';
			if ($__templater->isTraversable($__vars['items'])) {
				foreach ($__vars['items'] AS $__vars['item']) {
					$__finalCompiled .= '
							' . $__templater->callMacro('dbtech_shop_item_list_macros', 'item_grid', array(
						'filters' => $__vars['filters'],
						'baseLinkPath' => 'dbtech-shop/categories',
						'item' => $__vars['item'],
						'showOwner' => ($__templater->func('property', array('dbtechShopShowOwnerOverview', ), false) ? true : false),
						'category' => $__vars['category'],
						'allowInlineMod' => $__vars['canInlineMod'],
					), $__vars) . '
						';
				}
			}
			$__finalCompiled .= '
					</div>
					';
		} else {
			$__finalCompiled .= '
					<div class="structItemContainer"
						 data-xf-init="' . ($__vars['infiniteScroll'] ? 'dbtech-shop-infinite-scroll' : '') . '"
						 data-infinite-scroll-click="' . $__templater->func('property', array('dbtechShopInfiniteScrollClick', ), true) . '"
						 data-infinite-scroll-after="' . $__templater->func('property', array('dbtechShopInfiniteScrollAfter', ), true) . '"
						 data-infinite-scroll-history="' . $__templater->func('property', array('dbtechShopInfiniteScrollHistory', ), true) . '"
					>
						';
			if ($__templater->isTraversable($__vars['items'])) {
				foreach ($__vars['items'] AS $__vars['item']) {
					$__finalCompiled .= '
							' . $__templater->callMacro('dbtech_shop_item_list_macros', 'item', array(
						'filters' => $__vars['filters'],
						'baseLinkPath' => 'dbtech-shop/categories',
						'item' => $__vars['item'],
						'showOwner' => ($__templater->func('property', array('dbtechShopShowOwnerOverview', ), false) ? true : false),
						'category' => $__vars['category'],
						'allowInlineMod' => $__vars['canInlineMod'],
					), $__vars) . '
						';
				}
			}
			$__finalCompiled .= '
					</div>
				';
		}
		$__finalCompiled .= '
				';
	} else if ($__vars['filters']) {
		$__finalCompiled .= '
				<div class="block-row">' . 'dbtech_shop_there_no_items_matching_your_filters' . '</div>
				';
	} else {
		$__finalCompiled .= '
				<div class="block-row">' . 'dbtech_shop_no_items_have_been_created_yet' . '</div>
			';
	}
	$__finalCompiled .= '
		</div>
	</div>

	';
	if ($__vars['infiniteScroll']) {
		$__finalCompiled .= '
		<div class="block-row item-status">
			<div class="item-ellipsis infinite-scroll-request">
				<span class="item-ellipsis--dot"></span>
				<span class="item-ellipsis--dot"></span>
				<span class="item-ellipsis--dot"></span>
				<span class="item-ellipsis--dot"></span>
			</div>
		</div>

		<div class="block-row item-loader">
			' . $__templater->button('dbtech_shop_load_more...', array(
			'class' => 'item-button button--cta',
		), '', array(
		)) . '
		</div>
	';
	}
	$__finalCompiled .= '

	<div class="block-outer block-outer--after block-outer--pagination">
		' . $__templater->func('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['total'],
		'link' => 'dbtech-shop/categories',
		'data' => $__vars['category'],
		'params' => $__vars['filters'],
		'wrapperclass' => 'block-outer-main',
		'perPage' => $__vars['perPage'],
	))) . '
		' . $__templater->func('show_ignored', array(array(
		'wrapperclass' => 'block-outer-opposite',
	))) . '
	</div>
</div>

';
	$__templater->setPageParam('sideNavTitle', 'Categories');
	$__finalCompiled .= '
';
	$__templater->modifySideNavHtml(null, '
	' . $__templater->callMacro('dbtech_shop_category_list_macros', 'simple_list_block', array(
		'categoryTree' => $__vars['categoryTree'],
		'categoryExtras' => $__vars['categoryExtras'],
		'selected' => $__vars['category']['category_id'],
	), $__vars) . '
', 'replace');
	$__finalCompiled .= '

';
	$__templater->modifySideNavHtml('_xfWidgetPositionSideNav8fa82685777d69c9da5bf30ee518f6e5', $__templater->widgetPosition('dbtech_shop_category_sidenav', array(
		'category' => $__vars['category'],
	)), 'replace');
	return $__finalCompiled;
}
);