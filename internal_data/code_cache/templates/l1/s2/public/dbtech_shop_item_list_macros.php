<?php
// FROM HASH: e56e874feb4f4fd82075759d28bab0c4
return array(
'macros' => array('item' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'item' => '!',
		'filters' => array(),
		'baseLinkPath' => '',
		'category' => null,
		'showWatched' => false,
		'showOwner' => true,
		'allowInlineMod' => true,
		'chooseName' => '',
		'extraInfo' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

	';
	$__templater->includeCss('structured_list.less');
	$__finalCompiled .= '
	';
	$__templater->includeCss('dbtech_shop.less');
	$__finalCompiled .= '

	<div class="itemList-item structItem structItem--item ' . ($__vars['item']['prefix_id'] ? ('is-prefix' . $__templater->escape($__vars['item']['prefix_id'])) : '') . ' ' . ($__templater->method($__vars['item'], 'isIgnored', array()) ? 'is-ignored' : '') . ' ' . (($__vars['item']['item_state'] == 'moderated') ? 'is-moderated' : '') . ' ' . (($__vars['item']['item_state'] == 'deleted') ? 'is-deleted' : '') . ' js-inlineModContainer js-itemListItem-' . $__templater->escape($__vars['item']['item_id']) . '"
		data-author="' . ($__templater->escape($__vars['item']['User']['username']) ?: $__templater->escape($__vars['item']['username'])) . '">
		<div class="structItem-cell structItem-cell--icon structItem-cell--iconExpanded">
			<div class="structItem-iconContainer">
				' . $__templater->func('dbtech_shop_item_icon', array($__vars['item'], 's', $__templater->func('link', array('dbtech-shop', $__vars['item'], ), false), ), true) . '
				';
	if ($__vars['showOwner']) {
		$__finalCompiled .= '
					' . $__templater->func('avatar', array($__vars['item']['User'], 's', false, array(
			'href' => '',
			'class' => 'avatar--separated structItem-secondaryIcon',
		))) . '
				';
	}
	$__finalCompiled .= '
			</div>
		</div>
		<div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">
			';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
						';
	if ($__vars['item']['item_state'] == 'moderated') {
		$__compilerTemp1 .= '
							<li>
								<i class="structItem-status structItem-status--moderated" aria-hidden="true"
									title="' . $__templater->filter('Awaiting approval', array(array('for_attr', array()),), true) . '"></i>
								<span class="u-srOnly">' . 'Awaiting approval' . '</span>
							</li>
						';
	}
	$__compilerTemp1 .= '
						';
	if ($__vars['item']['item_state'] == 'deleted') {
		$__compilerTemp1 .= '
							<li>
								<i class="structItem-status structItem-status--deleted" aria-hidden="true"
									title="' . $__templater->filter('Deleted', array(array('for_attr', array()),), true) . '"></i>
								<span class="u-srOnly">' . 'Deleted' . '</span>
							</li>
						';
	}
	$__compilerTemp1 .= '
						';
	if ($__vars['showWatched'] AND $__vars['xf']['visitor']['user_id']) {
		$__compilerTemp1 .= '
							';
		if ($__vars['item']['Watch'][$__vars['xf']['visitor']['user_id']]) {
			$__compilerTemp1 .= '
								<li>
									<i class="structItem-status structItem-status--watched" aria-hidden="true"
										title="' . $__templater->filter('dbtech_shop_item_watched', array(array('for_attr', array()),), true) . '"></i>
									<span class="u-srOnly">' . 'dbtech_shop_item_watched' . '</span>
								</li>
								';
		} else if ((!$__vars['category']) AND $__vars['item']['Category']['Watch'][$__vars['xf']['visitor']['user_id']]) {
			$__compilerTemp1 .= '
								<li>
									<i class="structItem-status structItem-status--watched" aria-hidden="true"
										title="' . $__templater->filter('dbtech_shop_category_watched', array(array('for_attr', array()),), true) . '"></i>
									<span class="u-srOnly">' . 'dbtech_shop_category_watched' . '</span>
								</li>
							';
		}
		$__compilerTemp1 .= '
						';
	}
	$__compilerTemp1 .= '
					';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
				<ul class="structItem-statuses">
					' . $__compilerTemp1 . '
				</ul>
			';
	}
	$__finalCompiled .= '

			<div class="structItem-title">
				';
	if ($__vars['item']['prefix_id']) {
		$__finalCompiled .= '
					';
		if ($__vars['category']) {
			$__finalCompiled .= '
						<a href="' . $__templater->func('link', array('dbtech-shop/categories', $__vars['category'], array('prefix_id' => $__vars['item']['prefix_id'], ), ), true) . '"
							class="labelLink">' . $__templater->func('prefix', array('dbtechShopItem', $__vars['item'], 'html', '', ), true) . '</a>
						';
		} else {
			$__finalCompiled .= '
						' . $__templater->func('prefix', array('dbtechShopItem', $__vars['item'], 'html', '', ), true) . '
					';
		}
		$__finalCompiled .= '
				';
	}
	$__finalCompiled .= '
				<a href="' . $__templater->func('link', array('dbtech-shop', $__vars['item'], ), true) . '" data-tp-primary="on">' . $__templater->escape($__vars['item']['title']) . '</a>
				' . '
			</div>

			<div class="structItem-minor">
				';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
							';
	if ($__vars['extraInfo']) {
		$__compilerTemp2 .= '
								<li>' . $__templater->escape($__vars['extraInfo']) . '</li>
							';
	}
	$__compilerTemp2 .= '
							';
	if ($__vars['chooseName']) {
		$__compilerTemp2 .= '
								<li>
									' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'name' => $__vars['chooseName'] . '[]',
			'value' => $__vars['item']['item_id'],
			'class' => 'js-chooseItem',
			'_type' => 'option',
		))) . '
								</li>
								';
	} else if ($__vars['allowInlineMod'] AND $__templater->method($__vars['item'], 'canUseInlineModeration', array())) {
		$__compilerTemp2 .= '
								<li>
									' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'value' => $__vars['item']['item_id'],
			'class' => 'js-inlineModToggle',
			'data-xf-init' => 'tooltip',
			'title' => $__templater->filter('Select for moderation', array(array('for_attr', array()),), false),
			'_type' => 'option',
		))) . '
								</li>
							';
	}
	$__compilerTemp2 .= '
						';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__finalCompiled .= '
					<ul class="structItem-extraInfo">
						' . $__compilerTemp2 . '
					</ul>
				';
	}
	$__finalCompiled .= '

				';
	if ($__vars['item']['item_state'] == 'deleted') {
		$__finalCompiled .= '
					';
		if ($__vars['extraInfo']) {
			$__finalCompiled .= '<span class="structItem-extraInfo">' . $__templater->escape($__vars['extraInfo']) . '</span>';
		}
		$__finalCompiled .= '

					' . $__templater->callMacro('deletion_macros', 'notice', array(
			'log' => $__vars['item']['DeletionLog'],
		), $__vars) . '
					';
	} else {
		$__finalCompiled .= '
					<ul class="structItem-parts structItem-parts--item">
						';
		if ($__vars['showOwner']) {
			$__finalCompiled .= '
							<li>
								' . $__templater->func('username_link', array($__vars['item']['User'], false, array(
				'defaultname' => ($__vars['item']['username'] ?: 'N/A'),
			))) . '
							</li>
						';
		}
		$__finalCompiled .= '
						';
		if (!$__templater->test($__vars['item']['item_filters'], 'empty', array())) {
			$__finalCompiled .= '
							';
			if ($__templater->isTraversable($__vars['item']['item_filters'])) {
				foreach ($__vars['item']['item_filters'] AS $__vars['filter']) {
					$__finalCompiled .= '
								<li>
									';
					if (!$__templater->test($__vars['baseLinkPath'], 'empty', array())) {
						$__finalCompiled .= '
										<a href="' . $__templater->func('link', array($__vars['baseLinkPath'], $__vars['category'], $__templater->filter($__vars['filters'], array(array('replace', array('platform', $__vars['filter'], )),), false), ), true) . '"
											class="u-concealed">' . $__templater->escape($__vars['item']['Category']['item_filters'][$__vars['filter']]) . '</a>
										';
					} else {
						$__finalCompiled .= '
										' . $__templater->escape($__vars['item']['Category']['item_filters'][$__vars['filter']]) . '
									';
					}
					$__finalCompiled .= '
								</li>
							';
				}
			}
			$__finalCompiled .= '
						';
		}
		$__finalCompiled .= '
					</ul>
				';
	}
	$__finalCompiled .= '
			</div>

			';
	if ($__vars['item']['item_state'] != 'deleted') {
		$__finalCompiled .= '
				<div class="structItem-itemTagLine">' . $__templater->escape($__vars['item']['tagline']) . '</div>
			';
	}
	$__finalCompiled .= '
		</div>
		<div class="structItem-cell structItem-cell--itemMeta">
			';
	if ($__vars['xf']['options']['dbtechShopEnableRate']) {
		$__finalCompiled .= '
				<div class="structItem-metaItem structItem-metaItem--rating">
					' . $__templater->callMacro('rating_macros', 'stars_text', array(
			'rating' => $__vars['item']['rating_avg'],
			'count' => $__vars['item']['rating_count'],
			'rowClass' => 'ratingStarsRow--justified',
			'starsClass' => 'ratingStars--larger',
		), $__vars) . '
				</div>
			';
	}
	$__finalCompiled .= '

			<dl class="pairs pairs--justified structItem-minor structItem-metaItem structItem-metaItem--latestVersion">
				<dt>' . 'dbtech_shop_stock' . '</dt>
				<dd>
					';
	if ($__vars['item']['stock'] == -1) {
		$__finalCompiled .= '
						' . 'dbtech_shop_unlimited' . '
						';
	} else {
		$__finalCompiled .= '
						' . $__templater->filter($__vars['item']['stock'], array(array('number', array()),), true) . ' / ' . $__templater->filter($__vars['item']['maxstock'], array(array('number', array()),), true) . '
					';
	}
	$__finalCompiled .= '
				</dd>
			</dl>

			<dl class="pairs pairs--justified structItem-minor structItem-metaItem structItem-metaItem--lastUpdate">
				<dt>' . 'dbtech_shop_items_sold' . '</dt>
				<dd>' . $__templater->filter($__vars['item']['purchases'], array(array('number', array()),), true) . '</dd>
			</dl>
		</div>
	</div>
';
	return $__finalCompiled;
}
),
'item_grid' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'item' => '!',
		'filters' => array(),
		'baseLinkPath' => '',
		'category' => null,
		'showWatched' => true,
		'allowInlineMod' => true,
		'chooseName' => '',
		'extraInfo' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

	';
	$__templater->includeCss('node_list.less');
	$__finalCompiled .= '
	';
	$__templater->includeCss('structured_list.less');
	$__finalCompiled .= '
	';
	$__templater->includeCss('dbtech_shop.less');
	$__finalCompiled .= '
	';
	$__templater->includeCss('item_shop_overview.css');
	$__finalCompiled .= '
	';
	$__templater->includeCss('credit_shop.css');
	$__finalCompiled .= '
	

	<div class="shop-item bg-secondary flex-grow-0 flex-shrink-0 rounded shadow ' . ($__vars['item']['prefix_id'] ? ('is-prefix' . $__templater->escape($__vars['item']['prefix_id'])) : '') . ' ' . ($__templater->method($__vars['item'], 'isIgnored', array()) ? 'is-ignored' : '') . ' ' . (($__vars['item']['item_state'] == 'moderated') ? 'is-moderated' : '') . ' ' . (($__vars['item']['item_state'] == 'deleted') ? 'is-deleted' : '') . ' js-inlineModContainer js-itemListItem-' . $__templater->escape($__vars['item']['item_id']) . '"
		data-author="' . ($__templater->escape($__vars['item']['User']['username']) ?: $__templater->escape($__vars['item']['username'])) . '">
		';
	if ($__vars['allowInlineMod']) {
		$__finalCompiled .= '
			' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'value' => $__vars['item']['item_id'],
			'labelclass' => 'itemList-item-gridOverlayTop',
			'class' => 'js-inlineModToggle',
			'data-xf-init' => 'tooltip',
			'title' => $__templater->filter('Select for moderation', array(array('for_attr', array()),), false),
			'_type' => 'option',
		))) . '
		';
	}
	$__finalCompiled .= '

		<div class="preview shop-icon shop-icon-70 d-flex justify-content-center align-items-center rounded-top item1-style " style="background-color: ' . $__templater->escape($__vars['item']['item_fields']['backgroundcolor']) . ';">
			';
	if ($__vars['item']['category_id'] == 6) {
		$__finalCompiled .= '
				<span style="' . $__templater->escape($__vars['item']['item_fields']['namepaint']) . ';">' . $__templater->escape($__vars['xf']['visitor']['username']) . '</span>
				';
		if ($__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
					';
		} else {
			$__finalCompiled .= '
						Guest
					';
		}
		$__finalCompiled .= '
				</span>
			';
	} else if ($__vars['item']['category_id'] == 9) {
		$__finalCompiled .= '
				' . $__templater->func('user_title', array($__vars['xf']['visitor'], false, array(
			'class' => 'title',
			'style' => $__vars['item']['item_fields']['usertitle'] . ';',
		))) . '
				';
		if ($__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
					';
		} else {
			$__finalCompiled .= '
						Guest
					';
		}
		$__finalCompiled .= '
				</span>
			';
	} else if ($__vars['item']['category_id'] == 2) {
		$__finalCompiled .= '
				<span style="' . $__templater->escape($__vars['item']['item_fields']['namepaint']) . ';">' . $__templater->escape($__vars['xf']['visitor']['username']) . '</span>
				';
		if ($__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
					';
		} else {
			$__finalCompiled .= '
						Guest
					';
		}
		$__finalCompiled .= '
				</span>
			';
	} else if ($__vars['item']['category_id'] == 1) {
		$__finalCompiled .= '
				' . $__templater->func('username_link', array($__vars['xf']['visitor'], true, array(
			'defaultname' => $__vars['fallbackName'],
			'itemprop' => 'name',
			'style' => $__vars['item']['item_fields']['usernamefont'] . '; padding:unset; font-size: 1.1rem; font-weight: bold;',
		))) . '
				';
		if ($__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
					';
		} else {
			$__finalCompiled .= '
						Guest
					';
		}
		$__finalCompiled .= '
				</span>
			';
	} else {
		$__finalCompiled .= '
				' . $__templater->func('dbtech_shop_item_icon', array($__vars['item'], 'l', $__templater->func('link', array('dbtech-shop', $__vars['item'], ), false), ), true) . '
			';
	}
	$__finalCompiled .= '
		</div>

		<div class="description p-3 bg-tertiary">
			';
	$__vars['descriptionDisplay'] = $__templater->func('property', array('nodeListDescriptionDisplay', ), false);
	$__finalCompiled .= '
			<h3 class="title font-weight-bold font-size-09" style="margin: 0">
				';
	if ($__vars['item']['prefix_id']) {
		$__finalCompiled .= '
					';
		if ($__vars['category']) {
			$__finalCompiled .= '
						<a href="' . $__templater->func('link', array('dbtech-shop/categories', $__vars['category'], array('prefix_id' => $__vars['item']['prefix_id'], ), ), true) . '"
							class="category font-size-07 font-weight-bold">' . $__templater->func('prefix', array('dbtechShopItem', $__vars['item'], 'html', '', ), true) . '</a>
						';
		} else {
			$__finalCompiled .= '
						' . $__templater->func('prefix', array('dbtechShopItem', $__vars['item'], 'html', '', ), true) . '
					';
		}
		$__finalCompiled .= '
				';
	}
	$__finalCompiled .= '
				<a href="' . $__templater->func('link', array('dbtech-shop', $__vars['item'], ), true) . '"
					data-xf-init="' . (($__vars['descriptionDisplay'] == 'tooltip') ? 'element-tooltip' : '') . '"
					data-shortcut="node-description">' . $__templater->escape($__vars['item']['title']) . '</a>
			</h3>
			<div class="category font-size-07 font-weight-bold">' . $__templater->escape($__vars['item']['Category']['title']) . '</div>
			';
	if (($__vars['descriptionDisplay'] != 'none') AND !$__templater->test($__vars['item']['tagline'], 'empty', array())) {
		$__finalCompiled .= '
				<div
					class="node-description ' . (($__vars['descriptionDisplay'] == 'tooltip') ? 'node-description--tooltip js-nodeDescTooltip' : '') . '">
					' . $__templater->escape($__vars['item']['tagline']) . '</div>
			';
	}
	$__finalCompiled .= '

			<div class="contentRow-minor contentRow-minor--smaller">
				';
	if ($__vars['item']['item_state'] == 'deleted') {
		$__finalCompiled .= '
					';
		if ($__vars['extraInfo']) {
			$__finalCompiled .= '<span class="structItem-extraInfo">' . $__templater->escape($__vars['extraInfo']) . '</span>';
		}
		$__finalCompiled .= '
					' . $__templater->callMacro('deletion_macros', 'notice', array(
			'log' => $__vars['item']['DeletionLog'],
		), $__vars) . '
					';
	} else {
		$__finalCompiled .= '
					<ul class="listInline listInline--bullet">
						';
		if ($__vars['showOwner']) {
			$__finalCompiled .= '
							<li>
								' . $__templater->func('username_link', array($__vars['item']['User'], false, array(
				'defaultname' => ($__vars['item']['username'] ?: 'N/A'),
			))) . '
							</li>
						';
		}
		$__finalCompiled .= '
						';
		if (!$__templater->test($__vars['item']['item_filters'], 'empty', array())) {
			$__finalCompiled .= '
							';
			if ($__templater->isTraversable($__vars['item']['item_filters'])) {
				foreach ($__vars['item']['item_filters'] AS $__vars['filter']) {
					$__finalCompiled .= '
								<li>
									';
					if (!$__templater->test($__vars['baseLinkPath'], 'empty', array())) {
						$__finalCompiled .= '
										<a href="' . $__templater->func('link', array($__vars['baseLinkPath'], $__vars['category'], $__templater->filter($__vars['filters'], array(array('replace', array('platform', $__vars['filter'], )),), false), ), true) . '"
											class="u-concealed">' . $__templater->escape($__vars['item']['Category']['item_filters'][$__vars['filter']]) . '</a>
										';
					} else {
						$__finalCompiled .= '
										' . $__templater->escape($__vars['item']['Category']['item_filters'][$__vars['filter']]) . '
									';
					}
					$__finalCompiled .= '
								</li>
							';
				}
			}
			$__finalCompiled .= '
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['showWatched'] AND $__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
							';
			if ($__vars['item']['Watch'][$__vars['xf']['visitor']['user_id']]) {
				$__finalCompiled .= '
								<li>
									<i class="structItem-status structItem-status--watched" aria-hidden="true"
										title="' . $__templater->filter('dbtech_shop_item_watched', array(array('for_attr', array()),), true) . '"></i>
									<span class="u-srOnly">' . 'dbtech_shop_item_watched' . '</span>
								</li>
								';
			} else if ((!$__vars['category']) AND $__vars['item']['Category']['Watch'][$__vars['xf']['visitor']['user_id']]) {
				$__finalCompiled .= '
								<li>
									<i class="structItem-status structItem-status--watched" aria-hidden="true"
										title="' . $__templater->filter('dbtech_shop_category_watched', array(array('for_attr', array()),), true) . '"></i>
									<span class="u-srOnly">' . 'dbtech_shop_category_watched' . '</span>
								</li>
							';
			}
			$__finalCompiled .= '
						';
		}
		$__finalCompiled .= '
					</ul>
				';
	}
	$__finalCompiled .= '
			</div>
		</div>

		<footer class="purchase d-flex flex-row align-items-center p-3 rounded-bottom" style="
    width: 100%;">
			<div class="flex-fill">
				<div class="ml-3 flex-shrink-0 flex-grow-0" style="float: right;">
					';
	if ($__vars['item']['stock'] == 0) {
		$__finalCompiled .= '
						<a class="purchasebtn" icon="purchase" style="opacity: 0.8">
							' . 'dbtech_shop_out_of_stock' . '
						</a>
						';
	} else {
		$__finalCompiled .= '
						<a href="' . $__templater->func('link', array('dbtech-shop/purchase', $__vars['item'], ), true) . '" class="purchasebtn"
							icon="purchase" overlay="true" data-cache="false">
							';
		if ($__vars['item']['price'] == 0) {
			$__finalCompiled .= '
								' . 'dbtech_shop_get_free' . '
								';
		} else {
			$__finalCompiled .= '
								' . 'dbtech_shop_purchase' . '
							';
		}
		$__finalCompiled .= '
						</a>
					';
	}
	$__finalCompiled .= '
				</div>
				
				<div class="font-size-07 font-weight-bold">
					';
	if ($__vars['item']['price'] == 0) {
		$__finalCompiled .= '
						' . 'dbtech_shop_free' . '
						';
	} else {
		$__finalCompiled .= '
						' . $__templater->escape($__vars['item']['PurchaseCurrency']['prefix']) . '<strong
							style="color:#eac94e !important;font-weight:500!important;">' . $__templater->escape($__templater->method($__vars['item']['PurchaseCurrency'], 'getFormattedValue', array($__vars['item']['price'], ))) . '</strong>' . $__templater->escape($__vars['item']['PurchaseCurrency']['suffix']) . '
						' . $__templater->escape($__vars['item']['PurchaseCurrency']['title']) . '
					';
	}
	$__finalCompiled .= '
					';
	if ($__vars['xf']['options']['dbtechShopEnableRate']) {
		$__finalCompiled .= '
						<div class="rating">
							' . $__templater->callMacro('rating_macros', 'stars', array(
			'rating' => $__vars['item']['rating_avg'],
			'rowClass' => 'ratingStarsRow--justified',
			'starsClass' => 'ratingStars--smaller',
		), $__vars) . '
						</div>
					';
	}
	$__finalCompiled .= '

					<div class="font-size-07 font-weight-bold">
						';
	if ($__vars['item']['stock'] == -1) {
		$__finalCompiled .= '
							<div class="font-size-07 font-weight-bold">' . 'dbtech_shop_unlimited' . '</div>
							';
	} else {
		$__finalCompiled .= '
							<div class="font-size-07 font-weight-bold">' . $__templater->filter($__vars['item']['stock'], array(array('number', array()),), true) . ' / ' . $__templater->filter($__vars['item']['maxstock'], array(array('number', array()),), true) . '
							</div>
						';
	}
	$__finalCompiled .= '
					</div>

		</footer>

		<div class="itemList-item-grid--buyButton itemList-item-grid--clearfix">

		</div>


	</div>
';
	return $__finalCompiled;
}
),
'item_simple' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'item' => '!',
		'showOwner' => true,
		'withMeta' => true,
		'withRating' => false,
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="contentRow">
		<div class="contentRow-figure">
			' . $__templater->func('dbtech_shop_item_icon', array($__vars['item'], 'xxs', $__templater->func('link', array('dbtech-shop', $__vars['item'], ), false), ), true) . '
		</div>
		<div class="contentRow-main contentRow-main--close">
			<a href="' . $__templater->func('link', array('dbtech-shop', $__vars['item'], ), true) . '">' . $__templater->func('prefix', array('dbtechShopItem', $__vars['item'], ), true) . $__templater->escape($__vars['item']['title']) . '</a>
			<div class="contentRow-lesser">' . $__templater->escape($__vars['item']['tagline']) . '</div>
			';
	if ($__vars['withRating'] AND $__vars['xf']['options']['dbtechShopEnableRate']) {
		$__finalCompiled .= '
				<div class="contentRow-lesser">
					' . $__templater->callMacro('rating_macros', 'stars_text', array(
			'rating' => $__vars['item']['rating_avg'],
			'count' => $__vars['item']['rating_count'],
			'rowClass' => 'ratingStarsRow--justified',
			'starsClass' => 'ratingStars--larger',
		), $__vars) . '
				</div>
			';
	}
	$__finalCompiled .= '
			';
	if ($__vars['withMeta']) {
		$__finalCompiled .= '
				<div class="contentRow-minor contentRow-minor--smaller">
					<ul class="listInline listInline--bullet">
						';
		if ($__vars['showOwner']) {
			$__finalCompiled .= '
							<li>' . ($__templater->escape($__vars['item']['User']['username']) ?: ($__templater->escape($__vars['item']['username']) ?: 'N/A')) . '</li>
						';
		}
		$__finalCompiled .= '

						<li>' . 'dbtech_shop_updated:' . ' <a href="' . $__templater->func('link', array('dbtech-shop', $__vars['item'], ), true) . '"
								class="u-concealed">
								' . $__templater->func('date_dynamic', array($__vars['item']['last_update'], array(
		))) . '
							</a></li>
					</ul>
				</div>
			';
	}
	$__finalCompiled .= '
		</div>
	</div>
';
	return $__finalCompiled;
}
),
'item_inventory' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'purchase' => '!',
		'item' => '!',
		'allowInlineMod' => true,
		'showWatched' => false,
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

	';
	$__templater->includeCss('structured_list.less');
	$__finalCompiled .= '
	';
	$__templater->includeCss('dbtech_shop.less');
	$__finalCompiled .= '

	<div class="itemList-item structItem structItem--item' . ((!$__templater->method($__vars['purchase'], 'isDisplayed', array())) ? ' is-moderated' : '') . ((!$__templater->method($__vars['purchase'], 'isActive', array())) ? ' is-inactive' : '') . (($__vars['item']['item_state'] == 'deleted') ? ' is-deleted' : '') . ' js-inlineModContainer js-itemListItem-' . $__templater->escape($__vars['purchase']['purchase_id']) . '"
		data-author="' . ($__templater->escape($__vars['item']['User']['username']) ?: $__templater->escape($__vars['item']['username'])) . '">
		<div class="structItem-cell structItem-cell--icon structItem-cell--iconExpanded">
			<div class="structItem-iconContainer">
				' . $__templater->func('dbtech_shop_item_icon', array($__vars['item'], 's', $__templater->func('link', array('dbtech-shop', $__vars['item'], ), false), ), true) . '
			</div>
		</div>
		<div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">
			';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
						<ul class="structItem-extraInfo listInline listInline--bullet">
							';
	if ($__templater->method($__vars['purchase'], 'canConfigure', array())) {
		$__compilerTemp1 .= '
								<li><a href="' . $__templater->func('link', array('dbtech-shop/inventory/configure', $__vars['purchase'], ), true) . '" data-xf-click="overlay">' . 'dbtech_shop_configure' . '</a></li>
							';
	}
	$__compilerTemp1 .= '

							';
	if ($__templater->method($__vars['purchase'], 'canEditSettings', array())) {
		$__compilerTemp1 .= '
								<li><a href="' . $__templater->func('link', array('dbtech-shop/inventory/settings', $__vars['purchase'], ), true) . '" data-xf-click="overlay">' . 'Settings' . '</a></li>
							';
	}
	$__compilerTemp1 .= '
						</ul>
						';
	if ($__vars['item']['item_state'] == 'moderated') {
		$__compilerTemp1 .= '
							<li>
								<i class="structItem-status structItem-status--moderated" aria-hidden="true"
									title="' . $__templater->filter('Awaiting approval', array(array('for_attr', array()),), true) . '"></i>
								<span class="u-srOnly">' . 'Awaiting approval' . '</span>
							</li>
						';
	}
	$__compilerTemp1 .= '
						';
	if ($__vars['item']['item_state'] == 'deleted') {
		$__compilerTemp1 .= '
							<li>
								<i class="structItem-status structItem-status--deleted" aria-hidden="true"
									title="' . $__templater->filter('Deleted', array(array('for_attr', array()),), true) . '"></i>
								<span class="u-srOnly">' . 'Deleted' . '</span>
							</li>
						';
	}
	$__compilerTemp1 .= '
						';
	if ($__vars['showWatched'] AND $__vars['xf']['visitor']['user_id']) {
		$__compilerTemp1 .= '
							';
		if ($__vars['item']['Watch'][$__vars['xf']['visitor']['user_id']]) {
			$__compilerTemp1 .= '
								<li>
									<i class="structItem-status structItem-status--watched" aria-hidden="true"
										title="' . $__templater->filter('dbtech_shop_item_watched', array(array('for_attr', array()),), true) . '"></i>
									<span class="u-srOnly">' . 'dbtech_shop_item_watched' . '</span>
								</li>
								';
		} else if ($__vars['item']['Category']['Watch'][$__vars['xf']['visitor']['user_id']]) {
			$__compilerTemp1 .= '
								<li>
									<i class="structItem-status structItem-status--watched" aria-hidden="true"
										title="' . $__templater->filter('dbtech_shop_category_watched', array(array('for_attr', array()),), true) . '"></i>
									<span class="u-srOnly">' . 'dbtech_shop_category_watched' . '</span>
								</li>
							';
		}
		$__compilerTemp1 .= '
						';
	}
	$__compilerTemp1 .= '
					';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
				<ul class="structItem-statuses">
					' . $__compilerTemp1 . '
				</ul>
			';
	}
	$__finalCompiled .= '

			<div class="structItem-title">
				';
	if ($__vars['item']['prefix_id']) {
		$__finalCompiled .= '
					' . $__templater->func('prefix', array('dbtechShopItem', $__vars['item'], 'html', '', ), true) . '
				';
	}
	$__finalCompiled .= '
				<a href="' . $__templater->func('link', array('dbtech-shop/inventory', $__vars['purchase'], ), true) . '" data-xf-click="overlay" data-tp-primary="on">' . $__templater->escape($__vars['item']['title']) . '</a>
			</div>

			<div class="structItem-minor">

			</div>

			';
	if (($__vars['item']['item_state'] != 'deleted') AND !$__templater->test($__vars['item']['tagline'], 'empty', array())) {
		$__finalCompiled .= '
				<div class="structItem-itemTagLine">' . $__templater->escape($__vars['item']['tagline']) . '</div>
			';
	}
	$__finalCompiled .= '

			<div class="structItem-minor">
				';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
							';
	if ($__templater->method($__vars['purchase'], 'canDiscard', array())) {
		$__compilerTemp2 .= '
								<li><a href="' . $__templater->func('link', array('dbtech-shop/inventory/discard', $__vars['purchase'], ), true) . '"
										data-xf-click="overlay">' . 'dbtech_shop_discard' . '</a></li>
							';
	}
	$__compilerTemp2 .= '

							';
	if ($__templater->method($__vars['purchase'], 'canSellBack', array())) {
		$__compilerTemp2 .= '
								<li><a href="' . $__templater->func('link', array('dbtech-shop/inventory/sell', $__vars['purchase'], ), true) . '"
										data-xf-click="overlay">' . 'dbtech_shop_sellback' . '</a></li>
							';
	}
	$__compilerTemp2 .= '

							';
	if ($__templater->method($__vars['purchase'], 'canGift', array())) {
		$__compilerTemp2 .= '
								<li><a href="' . $__templater->func('link', array('dbtech-shop/inventory/gift', $__vars['purchase'], ), true) . '"
										data-xf-click="overlay">' . 'dbtech_shop_gift' . '</a></li>
							';
	}
	$__compilerTemp2 .= '
						';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__finalCompiled .= '
					<ul class="structItem-extraInfo listInline listInline--bullet">
						' . $__compilerTemp2 . '
					</ul>
				';
	}
	$__finalCompiled .= '

				';
	$__compilerTemp3 = '';
	$__compilerTemp3 .= '
							';
	if ($__vars['extraInfo']) {
		$__compilerTemp3 .= '
								<li>' . $__templater->escape($__vars['extraInfo']) . '</li>
							';
	}
	$__compilerTemp3 .= '
							';
	if ($__vars['chooseName']) {
		$__compilerTemp3 .= '
								<li>
									' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'name' => $__vars['chooseName'] . '[]',
			'value' => $__vars['purchase']['purchase_id'],
			'class' => 'js-chooseItem',
			'_type' => 'option',
		))) . '
								</li>
								';
	} else if ($__vars['allowInlineMod'] AND $__templater->method($__vars['purchase'], 'canUseInlineModeration', array())) {
		$__compilerTemp3 .= '
								<li>
									' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'value' => $__vars['purchase']['purchase_id'],
			'class' => 'js-inlineModToggle',
			'data-xf-init' => 'tooltip',
			'title' => $__templater->filter('Select for moderation', array(array('for_attr', array()),), false),
			'_type' => 'option',
		))) . '
								</li>
							';
	}
	$__compilerTemp3 .= '
						';
	if (strlen(trim($__compilerTemp3)) > 0) {
		$__finalCompiled .= '
					<ul class="structItem-extraInfo">
						' . $__compilerTemp3 . '
					</ul>
				';
	}
	$__finalCompiled .= '

				';
	if ($__vars['item']['item_state'] == 'deleted') {
		$__finalCompiled .= '
					' . $__templater->callMacro('deletion_macros', 'notice', array(
			'log' => $__vars['item']['DeletionLog'],
		), $__vars) . '
					';
	} else {
		$__finalCompiled .= '
					<ul class="structItem-parts">
						<li>
							' . $__templater->func('username_link', array($__vars['purchase']['Buyer'], false, array(
			'defaultname' => ($__vars['purchase']['buyer_username'] ?: 'Unknown member'),
		))) . '
						</li>
						<li>
							' . $__templater->func('date_dynamic', array($__vars['purchase']['dateline'], array(
		))) . '
						</li>
						<li class="structItem-startDate">' . 'dbtech_shop_expiry_date:' . '
							';
		if ($__templater->method($__vars['purchase'], 'isLifetime', array())) {
			$__finalCompiled .= '
								' . 'dbtech_shop_never' . '
								';
		} else {
			$__finalCompiled .= '
								' . $__templater->func('date_dynamic', array($__vars['purchase']['expiry_date'], array(
			))) . '
							';
		}
		$__finalCompiled .= '
						</li>
					</ul>
				';
	}
	$__finalCompiled .= '
			</div>
		</div>
	</div>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '


' . '

' . '

';
	return $__finalCompiled;
}
);