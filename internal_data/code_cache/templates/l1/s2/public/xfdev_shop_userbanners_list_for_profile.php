<?php
// FROM HASH: 0ace34bc646ff696e213b25ebd027d7f
return array(
'macros' => array('banner_list' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'user' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
    <div class="xfdev_shop_banner_list_container">
        ';
	if ($__templater->isTraversable($__vars['user']['xfdevShopBanners'])) {
		foreach ($__vars['user']['xfdevShopBanners'] AS $__vars['purchase']) {
			$__finalCompiled .= '
            <div class="xfdev_shop_banner_item" data-xf-init="tooltip" title="' . $__templater->escape($__vars['purchase']['Item']['title']) . '">
                ' . $__templater->func('dbtech_shop_item_icon', array($__vars['purchase']['Item'], 's', $__templater->func('link', array('dbtech-shop', $__vars['purchase']['Item'], ), false), ), true) . '
            </div>
        ';
		}
	}
	$__finalCompiled .= '
    </div>

    ';
	$__templater->inlineCss('
        .xfdev_shop_banner_list_container{
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .xfdev_shop_banner_item a{
            width: fit-content !important;
            height: fit-content !important;
        }

    ');
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';

	return $__finalCompiled;
}
);