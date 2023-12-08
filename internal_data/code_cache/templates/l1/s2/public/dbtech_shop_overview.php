<?php
// FROM HASH: f6e038930c0f1d7d9665b81c04d1f84c
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('nav.dbtechShop');
	$__templater->pageParams['pageNumber'] = $__vars['page'];
	$__finalCompiled .= '

' . $__templater->callMacro('metadata_macros', 'canonical_url', array(
		'canonicalUrl' => $__templater->func('link', array('canonical:dbtech-shop', null, array('page' => $__vars['page'], ), ), false),
	), $__vars) . '

';
	$__templater->setPageParam('searchConstraints', array('dbtech_shop_items' => array('search_type' => 'dbtech_shop_item', ), ));
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['xf']['visitor'], 'canAddDbtechShopItem', array())) {
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('dbtech_shop_add_item...', array(
			'href' => $__templater->func('link', array('dbtech-shop/add', ), false),
			'class' => 'button--cta',
			'icon' => 'write',
			'overlay' => 'true',
		), '', array(
		)) . '
');
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

  <div class="custom-nav" style="background: #202020;">
    <div class="custom-nav_inner index_welcome_inner">
      <span>
        Credits
      </span>
      Credits are the currency of WoWEmu. They can be used for unlocking items, unlocking banners, as virtual currency and a lot more.
    </div>
  </div>

	<div class="block-container">


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
						 style="margin-top: 10px;
    background: #202020;
    border-radius: 1rem;
}"
					>
						';
			if ($__templater->isTraversable($__vars['items'])) {
				foreach ($__vars['items'] AS $__vars['item']) {
					$__finalCompiled .= '
							' . $__templater->callMacro('dbtech_shop_item_list_macros', 'item_grid', array(
						'filters' => $__vars['filters'],
						'baseLinkPath' => 'dbtech-shop',
						'item' => $__vars['item'],
						'showOwner' => ($__templater->func('property', array('dbtechShopShowOwnerOverview', ), false) ? true : false),
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
						'baseLinkPath' => 'dbtech-shop',
						'item' => $__vars['item'],
						'showOwner' => ($__templater->func('property', array('dbtechShopShowOwnerOverview', ), false) ? true : false),
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
		'link' => 'dbtech-shop',
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
	), $__vars) . '
', 'replace');
	$__finalCompiled .= '

';
	$__templater->modifySideNavHtml('_xfWidgetPositionSideNavb5e5de1c4377b90e55a5446ea964c565', $__templater->widgetPosition('dbtech_shop_overview_sidenav', array()), 'replace');
	return $__finalCompiled;
}
);