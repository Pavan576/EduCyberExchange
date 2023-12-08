<?php
// FROM HASH: f2f80bd1deebd42a8a925c2206850b42
return array(
'macros' => array('nav_entry' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'navId' => '!',
		'nav' => '!',
		'selected' => false,
		'shortcut' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   <div class="p-navEl ' . ($__vars['selected'] ? 'is-selected' : '') . '" ' . ($__vars['nav']['children'] ? 'data-has-children="true"' : '') . '>
   ';
	if ($__vars['nav']['href']) {
		$__finalCompiled .= '
      ' . $__templater->callMacro(null, 'nav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'p-navEl-link ' . ($__vars['nav']['children'] ? 'p-navEl-link--splitMenu' : ''),
			'shortcut' => ($__vars['nav']['children'] ? false : $__vars['shortcut']),
		), $__vars) . '
      ';
		if ($__vars['nav']['children']) {
			$__finalCompiled .= '<a data-xf-key="' . $__templater->escape($__vars['shortcut']) . '" data-xf-click="menu" data-menu-pos-ref="< .p-navEl"
         class="p-navEl-splitTrigger" role="button" tabindex="0"
         aria-label="' . $__templater->filter('Toggle expanded', array(array('for_attr', array()),), true) . '" aria-expanded="false" aria-haspopup="true"></a>
      ';
		}
		$__finalCompiled .= '
      ';
	} else if ($__vars['nav']['children']) {
		$__finalCompiled .= '
      <a data-xf-key="' . $__templater->escape($__vars['shortcut']) . '" data-xf-click="menu" data-menu-pos-ref="< .p-navEl" class="p-navEl-linkHolder"
         role="button" tabindex="0" aria-expanded="false" aria-haspopup="true">
         ' . $__templater->callMacro(null, 'nav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'p-navEl-link p-navEl-link--menuTrigger',
		), $__vars) . '
      </a>
      ';
	} else {
		$__finalCompiled .= '
      ' . $__templater->callMacro(null, 'nav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'p-navEl-link',
			'shortcut' => $__vars['shortcut'],
		), $__vars) . '
   ';
	}
	$__finalCompiled .= '
   ';
	if ($__vars['nav']['children']) {
		$__finalCompiled .= '
      <div class="menu menu--structural" data-menu="menu" aria-hidden="true">
         <div class="menu-content">
            ';
		if ($__templater->isTraversable($__vars['nav']['children'])) {
			foreach ($__vars['nav']['children'] AS $__vars['childNavId'] => $__vars['child']) {
				$__finalCompiled .= '
               ' . $__templater->callMacro(null, 'nav_menu_entry', array(
					'navId' => $__vars['childNavId'],
					'nav' => $__vars['child'],
				), $__vars) . '
            ';
			}
		}
		$__finalCompiled .= '
         </div>
      </div>
   ';
	}
	$__finalCompiled .= '
   </div>
';
	return $__finalCompiled;
}
),
'nav_link' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'navId' => '!',
		'nav' => '!',
		'class' => '',
		'titleHtml' => '',
		'shortcut' => false,
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   ';
	$__vars['tag'] = ($__vars['nav']['href'] ? 'a' : 'span');
	$__finalCompiled .= '
   <' . $__templater->escape($__vars['tag']) . ' ' . ($__vars['nav']['href'] ? (('href="' . $__templater->escape($__vars['nav']['href'])) . '"') : '') . ' class="' . $__templater->func('trim', array($__vars['class'], ), true) . ' ' . $__templater->escape($__vars['nav']['attributes']['class']) . '" ' . $__templater->func('attributes', array($__vars['nav']['attributes'], array('class', ), ), true) . ' ' . (($__vars['shortcut'] !== false) ? (('data-xf-key="' . $__templater->escape($__vars['shortcut'])) . '"') : '') . '
   data-nav-id="' . $__templater->escape($__vars['navId']) . '">
   ';
	if ($__vars['nav']['icon']) {
		$__finalCompiled .= '
      ' . $__templater->fontAwesome($__templater->escape($__vars['nav']['icon']), array(
		)) . '
   ';
	}
	$__finalCompiled .= '
   ' . ($__vars['titleHtml'] ? $__templater->filter($__vars['titleHtml'], array(array('raw', array()),), true) : $__templater->escape($__vars['nav']['title'])) . '
   ';
	if ($__vars['nav']['counter']) {
		$__finalCompiled .= ' <span class="badge badge--highlighted">' . $__templater->filter($__vars['nav']['counter'], array(array('number', array()),), true) . '</span>';
	}
	$__finalCompiled .= '
   </' . $__templater->escape($__vars['tag']) . '>
';
	return $__finalCompiled;
}
),
'nav_menu_entry' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'navId' => '!',
		'nav' => '!',
		'depth' => '0',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   ' . $__templater->callMacro(null, 'nav_link', array(
		'navId' => $__vars['navId'],
		'nav' => $__vars['nav'],
		'class' => 'menu-linkRow u-indentDepth' . $__vars['depth'] . ' js-offCanvasCopy',
	), $__vars) . '
   ';
	if ($__vars['nav']['children']) {
		$__finalCompiled .= '
      ';
		if ($__templater->isTraversable($__vars['nav']['children'])) {
			foreach ($__vars['nav']['children'] AS $__vars['childNavId'] => $__vars['child']) {
				$__finalCompiled .= '
         ' . $__templater->callMacro(null, 'nav_menu_entry', array(
					'navId' => $__vars['childNavId'],
					'nav' => $__vars['child'],
					'depth' => ($__vars['depth'] + 1),
				), $__vars) . '
      ';
			}
		}
		$__finalCompiled .= '
      ';
		if ($__vars['depth'] == 0) {
			$__finalCompiled .= '
         <hr class="menu-separator" />
      ';
		}
		$__finalCompiled .= '
   ';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'breadcrumbs' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'breadcrumbs' => '!',
		'navTree' => '!',
		'selectedNavEntry' => null,
		'variant' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   ';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
            ';
	$__vars['position'] = 0;
	$__compilerTemp1 .= '
            ';
	$__vars['rootBreadcrumb'] = $__vars['navTree'][$__vars['xf']['options']['rootBreadcrumb']];
	$__compilerTemp1 .= '
            ';
	$__vars['rootBreadcrumbHref'] = (($__templater->filter($__vars['rootBreadcrumb']['href'], array(array('substr', array(-1, )),), false) == '/') ? $__vars['rootBreadcrumb']['href'] : ($__vars['rootBreadcrumb']['href'] . '/'));
	$__compilerTemp1 .= '
            ';
	if ($__vars['rootBreadcrumb'] AND (($__vars['rootBreadcrumbHref'] != $__vars['xf']['uri']) AND ($__vars['rootBreadcrumbHref'] != $__vars['xf']['fullUri']))) {
		$__compilerTemp1 .= '
               ';
		$__vars['position'] = ($__vars['position'] + 1);
		$__compilerTemp1 .= '
               ' . $__templater->callMacro(null, 'crumb', array(
			'position' => $__vars['position'],
			'href' => $__vars['rootBreadcrumb']['href'],
			'value' => $__vars['rootBreadcrumb']['title'],
		), $__vars) . '
            ';
	}
	$__compilerTemp1 .= '
            ';
	if ($__vars['selectedNavEntry'] AND ($__vars['selectedNavEntry']['href'] AND (($__vars['selectedNavEntry']['href'] != $__vars['xf']['uri']) AND (($__vars['selectedNavEntry']['href'] != $__vars['xf']['fullUri']) AND ($__vars['selectedNavEntry']['href'] != $__vars['rootBreadcrumbHref']))))) {
		$__compilerTemp1 .= '
               ';
		$__vars['position'] = ($__vars['position'] + 1);
		$__compilerTemp1 .= '
               ' . $__templater->callMacro(null, 'crumb', array(
			'position' => $__vars['position'],
			'href' => $__vars['selectedNavEntry']['href'],
			'value' => $__vars['selectedNavEntry']['title'],
		), $__vars) . '
            ';
	}
	$__compilerTemp1 .= '
            ';
	if ($__templater->isTraversable($__vars['breadcrumbs'])) {
		foreach ($__vars['breadcrumbs'] AS $__vars['breadcrumb']) {
			if (($__vars['breadcrumb']['href'] != $__vars['xf']['uri']) AND ($__vars['breadcrumb']['href'] != $__vars['xf']['fullUri'])) {
				$__compilerTemp1 .= '
               ';
				$__vars['position'] = ($__vars['position'] + 1);
				$__compilerTemp1 .= '
               ' . $__templater->callMacro(null, 'crumb', array(
					'position' => $__vars['position'],
					'href' => $__vars['breadcrumb']['href'],
					'value' => $__vars['breadcrumb']['value'],
				), $__vars) . '
            ';
			}
		}
	}
	$__compilerTemp1 .= '
         ';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
      <ul class="p-breadcrumbs ' . ($__vars['variant'] ? ('p-breadcrumbs--' . $__templater->escape($__vars['variant'])) : '') . '" itemscope
         itemtype="https://schema.org/BreadcrumbList">
         ' . $__compilerTemp1 . '
      </ul>
   ';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'crumb' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'href' => '!',
		'value' => '!',
		'position' => 0,
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a href="' . $__templater->escape($__vars['href']) . '" itemprop="item">
      <span itemprop="name">' . $__templater->escape($__vars['value']) . '</span>
      </a>
      ';
	if ($__vars['position']) {
		$__finalCompiled .= '
         <meta itemprop="position" content="' . $__templater->escape($__vars['position']) . '" />
      ';
	}
	$__finalCompiled .= '
   </li>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<!DOCTYPE html>
';
	$__templater->includeCss('navbar_ogu.css');
	$__finalCompiled .= '
';
	$__templater->includeCss('misc.css');
	$__finalCompiled .= '
<html id="XF" lang="' . $__templater->escape($__vars['xf']['language']['language_code']) . '" dir="' . $__templater->escape($__vars['xf']['language']['text_direction']) . '" data-app="public"
data-template="' . $__templater->escape($__vars['template']) . '" data-container-key="' . $__templater->escape($__vars['containerKey']) . '" data-content-key="' . $__templater->escape($__vars['contentKey']) . '"
data-logged-in="' . ($__vars['xf']['visitor']['user_id'] ? 'true' : 'false') . '" data-cookie-prefix="' . $__templater->escape($__vars['xf']['cookie']['prefix']) . '"
data-csrf="' . $__templater->filter($__templater->func('csrf_token', array(), false), array(array('escape', array('js', )),), true) . '" class="has-no-js ' . ($__vars['template'] ? ('template-' . $__templater->escape($__vars['template'])) : '') . '" ' . ($__vars['xf']['runJobs'] ? ' data-run-jobs=""' : '') . '>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
   ';
	$__vars['siteName'] = $__vars['xf']['options']['boardTitle'];
	$__finalCompiled .= '
   ';
	$__vars['h1'] = $__templater->preEscaped('
      ' . $__templater->func('page_h1', array($__vars['siteName'])) . '
   ');
	$__finalCompiled .= '
   ';
	$__vars['description'] = $__templater->preEscaped('
      ' . $__templater->func('page_description') . '
   ');
	$__finalCompiled .= '
   <title>
      ' . $__templater->func('page_title', array('%s | %s', $__vars['xf']['options']['boardTitle'], $__vars['pageNumber'])) . '
   </title>
   <link rel="manifest" href="' . $__templater->func('base_url', array('webmanifest.php', ), true) . '">
   ';
	if ($__templater->func('property', array('metaThemeColor', ), false)) {
		$__finalCompiled .= '
      <meta name="theme-color" content="' . $__templater->func('parse_less_color', array($__templater->func('property', array('metaThemeColor', ), false), ), true) . '" />
   ';
	}
	$__finalCompiled .= '
   <meta name="apple-mobile-web-app-title" content="' . ($__templater->escape($__vars['xf']['options']['boardShortTitle']) ?: $__templater->escape($__vars['xf']['options']['boardTitle'])) . '">
   ';
	if ($__templater->func('property', array('publicIconUrl', ), false)) {
		$__finalCompiled .= '
      <link rel="apple-touch-icon" href="' . $__templater->func('base_url', array($__templater->func('property', array('publicIconUrl', true, ), false), ), true) . '">
      ';
	} else if ($__templater->func('property', array('publicMetadataLogoUrl', ), false)) {
		$__finalCompiled .= '
      <link rel="apple-touch-icon" href="' . $__templater->func('base_url', array($__templater->func('property', array('publicMetadataLogoUrl', ), false), ), true) . '" />
   ';
	}
	$__finalCompiled .= '
   ';
	if ($__templater->isTraversable($__vars['head'])) {
		foreach ($__vars['head'] AS $__vars['headTag']) {
			$__finalCompiled .= '
      ' . $__templater->escape($__vars['headTag']) . '
   ';
		}
	}
	$__finalCompiled .= '
   ';
	if ((!$__vars['head']['meta_site_name']) AND !$__templater->test($__vars['siteName'], 'empty', array())) {
		$__finalCompiled .= '
      ' . $__templater->callMacro('metadata_macros', 'site_name', array(
			'siteName' => $__vars['siteName'],
			'output' => true,
		), $__vars) . '
   ';
	}
	$__finalCompiled .= '
   ';
	if (!$__vars['head']['meta_type']) {
		$__finalCompiled .= '
      ' . $__templater->callMacro('metadata_macros', 'type', array(
			'type' => 'website',
			'output' => true,
		), $__vars) . '
   ';
	}
	$__finalCompiled .= '
   ';
	if (!$__vars['head']['meta_title']) {
		$__finalCompiled .= '
      ' . $__templater->callMacro('metadata_macros', 'title', array(
			'title' => ($__templater->func('page_title', array(), false) ?: $__vars['siteName']),
			'output' => true,
		), $__vars) . '
   ';
	}
	$__finalCompiled .= '
   ';
	if ((!$__vars['head']['meta_description']) AND (!$__templater->test($__vars['description'], 'empty', array()) AND $__vars['pageDescriptionMeta'])) {
		$__finalCompiled .= '
      ' . $__templater->callMacro('metadata_macros', 'description', array(
			'description' => $__vars['description'],
			'output' => true,
		), $__vars) . '
   ';
	}
	$__finalCompiled .= '
   ';
	if (!$__vars['head']['meta_share_url']) {
		$__finalCompiled .= '
      ' . $__templater->callMacro('metadata_macros', 'share_url', array(
			'shareUrl' => $__vars['xf']['fullUri'],
			'output' => true,
		), $__vars) . '
   ';
	}
	$__finalCompiled .= '
   ';
	if ((!$__vars['head']['meta_image_url']) AND $__templater->func('property', array('publicMetadataLogoUrl', ), false)) {
		$__finalCompiled .= '
      ' . $__templater->callMacro('metadata_macros', 'image_url', array(
			'imageUrl' => $__templater->func('base_url', array($__templater->func('property', array('publicMetadataLogoUrl', ), false), true, ), false),
			'output' => true,
		), $__vars) . '
   ';
	}
	$__finalCompiled .= '
   ' . $__templater->callMacro('helper_js_global', 'head', array(
		'app' => 'public',
	), $__vars) . '
   ';
	if ($__templater->func('property', array('publicFaviconUrl', ), false)) {
		$__finalCompiled .= '
      <link rel="icon" type="image/png" href="' . $__templater->func('base_url', array($__templater->func('property', array('publicFaviconUrl', ), false), true, ), true) . '" sizes="32x32" />
   ';
	}
	$__finalCompiled .= '
   ' . $__templater->includeTemplate('google_analytics', $__vars) . '
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <link rel="stylesheet" type="text/css" href="/styles/OGU-Replica/css/replica.css" />
   <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.8/jquery.jgrowl.min.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.8/jquery.jgrowl.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule="" src="https://unpkg.com/ionicons@latest/dist/ionicons/ionicons.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.min.css" integrity="sha512-AyOHI/tIMgoG+32apAs3OdqFowPSDqiz5vLcD2wdhBJ4J/xF1PI6UITcyhS5HCmsiioapRaONqYBvimxzFfnoA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script type="text/javascript" src="/chat/autoload.php" charset="utf-8"></script>
	</head>
	<body>
	' . $__templater->includeTemplate('xf_modal', $__vars) . '
	<div class="p-pageWrapper" id="top">
      <style>
         .dropdown-content {
         background-color: #232323;
         width: 230px;
         border-radius: 2px;
         border-radius: 8px;
         right: 0px;
         }
         .dropdown-content a {
         border-bottom: 0px !important
         }
         .dropdown-content a:hover {
         background-color: rgb(26, 26, 26);
         border-radius: 6px;
         }
         .dropdown2 {
         position: relative;
         display: inline-block;
         }
         .dropborder {
         border-radius: 8px;
         }
         .dropdown2-content {
         display: none;
         position: absolute;
         background-color: rgb(30, 30, 30);
         border-radius: 10px;
         min-width: 180px;
         box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
         z-index: 1;
         margin-top: 5px;
         }
         .menu1:hover {
         background-color: #242424;
         width: 100%;
         }
         .dropdown2:hover .dropdown2-content {
         display: block;
         }
      </style>
      <script>
         $("#dropdown-search-open").on("click", function (e) {
            var document_width = $(document).outerWidth(),
               element_width = $("#dropdown-search").outerWidth(),
               from_left = $("#dropdown-search").parent().offset().left;
            if ((element_width + from_left) >= document_width) {
               $("#dropdown-search").css("right", "0px");
               $("#dropdown-search").css("left", "");
            }
         
            $("#dropdown-search").toggle();
            return false;
         });
         $("#dropdown-search").on("click", function (e) {
            e.stopPropagation();
         });
         $("body").on("click", function (e) {
            $("#dropdown-search").hide();
         });
      </script>
      <script type="text/javascript">
         function headerlogo() {
            $(\'#headerlogo\').stop().animate({ height: "30px" }, 50);
         }
      </script>
      <script type="text/javascript">
         //window.onscroll = function() {scrollFunction()};
         $(window).on(\'scroll\', function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > 35) {
               $(\'#headerlogo\').stop().animate({ height: "30px" }, 50);
            }
            else {
               $(\'#headerlogo\').stop().animate({ height: "60px" }, 50);
            }
         });
         
      </script>
      <script>
         $(function () {
            $("#dropdown-profile-open").on("click", function (e) {
               var document_width = $(document).outerWidth(),
                  element_width = $("#dropdown-profile").outerWidth(),
                  from_left = $("#dropdown-profile").parent().offset().left;
               if ((element_width + from_left) >= document_width) {
                  $("#dropdown-profile").css("right", "0px");
                  $("#dropdown-profile").css("left", "");
               }
         
               $("#dropdown-profile").toggle();
               return false;
            });
            $("#dropdown-profile").on("click", function (e) {
               e.stopPropagation();
            });
            $("body").on("click", function (e) {
               $("#dropdown-profile").hide();
            });
         });
         
         /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
         function myFunction(element) {
            $("#myDropdown").toggle();
            var arrow = $(element).find("i.fa");
            if (arrow.hasClass("fa-angle-down")) {
               arrow.removeClass("fa-angle-down");
               arrow.addClass("fa-angle-up");
            } else {
               arrow.removeClass("fa-angle-up");
               arrow.addClass("fa-angle-down");
            }
         }
         
         // Close the dropdown menu if the user clicks outside of it
         window.onclick = function (event) {
            if (!event.target.matches(\'.dropbtn, .btnfix\')) {
               var dropdowns = document.getElementsByClassName("dropdown-content");
               var i;
               for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains(\'show\')) {
                     openDropdown.classList.remove(\'show\');
                  }
               }
            }
         }
         
         
         /* When the user clicks on the button,
         toggle between hiding and showing the dropdown content */
         function myFunction() {
            document.getElementById("dropdownmenu").classList.toggle("show");
         }
         
         // Close the dropdown menu if the user clicks outside of it
         window.onclick = function (event) {
            if (!event.target.matches(\'.dropbtnmenu\')) {
               var dropdowns = document.getElementsByClassName("dropdown-menu-content");
               var i;
               for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains(\'show\')) {
                     openDropdown.classList.remove(\'show\');
                  }
               }
            }
         }
         
         
         $(function () {
         
            $(".messagecolor").each(function () {
               var el = $(this);
               var value = parseFloat(el.text());
               if (value > 0) {
                  /*el.css({
                  "color": "white",
                  "background-color": "rgb(186,57,57)",
              });*/
                  el.addClass(\'messagecolor-colored\');
               } else {
                  el.css("background", "#383838");
               }
            });
         });
      </script>
      <div class="headertop snipcss-9U8Dh">
         <div class="top-wrap">
            <div class="responsivehide style-17jpe" id="style-17jpe">
               <div class="dropdown2">
                  <a href="/">
                     <span class="conversationnotification browsebutton style-sfPgW" id="style-sfPgW">
                        Browse
                     </span>
                  </a>
                  <div class="dropdown2-content">
                     <a href="#" class="menu1 style-P9lYN" id="style-P9lYN">
                        <i class="fa fa-link style-OiysV" aria-hidden="true" id="style-OiysV">
                        </i>
                        &nbsp; Example Link
                     </a>
                     <a href="#" class="menu1 style-P9lYN" id="style-P9lYN">
                        <i class="fa fa-link style-OiysV" aria-hidden="true" id="style-OiysV">
                        </i>
                        &nbsp; Example Link
                     </a>
                     <a href="#" class="menu1 style-P9lYN" id="style-P9lYN">
                        <i class="fa fa-link style-OiysV" aria-hidden="true" id="style-OiysV">
                        </i>
                        &nbsp; Example Link
                     </a>
                     <a href="#" class="menu1 style-P9lYN" id="style-P9lYN">
                        <i class="fa fa-link style-OiysV" aria-hidden="true" id="style-OiysV">
                        </i>
                        &nbsp; Example Link
                     </a>
                  </div>
               </div>
               <a href="#" class="conversationnotification">
                  <div id="style-6ATYq" class="style-6ATYq">
                     Link
                  </div>
               </a>
               <a href="#" class="conversationnotification">
                  <div id="style-g8ipn" class="style-g8ipn">
                     Link
                  </div>
               </a>
               <a href="#" class="conversationnotification">
                  <div id="style-g8ipn" class="style-g8ipn">
                     Link
                  </div>
               </a>
               <a href="#" class="conversationnotification">
                  <div id="style-qbYLV" class="style-qbYLV">
                     Link
                  </div>
               </a>
               <a href="/help" id="dropdown-more-open"
                  class="conversationnotification dropdown-more-open style-M1gxo">
                  <i class="fa fa-ellipsis-h" aria-hidden="true">
                  </i>
               </a>
               <a href="/index.php?search/" id="dropdown-search-open" class="conversationnotification style-p4l42">
                  <i class="fa fa-search" aria-hidden="true">
                  </i>
               </a>
            </div>
            <div id="over" class="over2 responsivehide style-Raxn7">
               <a href="/">
               <img id="headerlogo" height="60px" src="/styles/OGU-Replica/logo.png" class="style-Apckt">
               </a>
            </div>
            <div id="over" class="over2 responsiveshow style-zCVle">
               <a href="/">
               <img id="headerlogomobile" height="27px" src="/styles/OGU-Replica/logo.png">
               </a>
            </div>
            ';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
               <div class="headerright style-2tb4n" id="style-2tb4n">
                  <div class="account-info-navbar">
                     <a href="#" overlay="true" data-xf-click="overlay" class="conversationnotification responsivehide" onclick="headerlogo();"
                        id="sell-btn">
                        &nbsp;
                        <div class="main-sell-button style-YCGWm" id="style-YCGWm">
                           Example Button
                        </div>
                     </a>
                     <a href="' . $__templater->func('link', array('whats-new', ), true) . '" class="conversationnotification newposts">
                        <div class="responsiveshow newpostsbutton style-TXLve" id="style-TXLve">
                           New Posts
                        </div>
                     </a>
                     <a href="' . $__templater->func('link', array('account/alerts', ), true) . '"
                        class="alertnav style-bgln2 js-badge--alerts badgeContainer' . ($__vars['xf']['visitor']['alerts_unviewed'] ? ' badgeContainer--highlighted' : '') . '"
                        data-badge="' . $__templater->filter($__vars['xf']['visitor']['alerts_unviewed'], array(array('number', array()),), true) . '" data-xf-click="menu"
                        data-xf-key="' . $__templater->filter('.', array(array('for_attr', array()),), true) . '" data-menu-pos-ref="< .p-navgroup"
                        title="' . $__templater->filter('Alerts', array(array('for_attr', array()),), true) . '" aria-label="' . $__templater->filter('Alerts', array(array('for_attr', array()),), true) . '"
                        aria-expanded="false" aria-haspopup="true" id="style-bgln2">
                     <i aria-hidden="true"></i>
                     </a>
                     <div class="menu menu--structural menu--medium" data-menu="menu" aria-hidden="true"
                        data-href="' . $__templater->func('link', array('account/alerts-popup', ), true) . '" data-nocache="true"
                        data-load-target=".js-alertsMenuBody">
                        <div class="menu-content">
                           <h3 class="menu-header">' . 'Alerts' . '</h3>
                           <div class="js-alertsMenuBody">
                              <div class="menu-row">' . 'Loading' . $__vars['xf']['language']['ellipsis'] . '</div>
                           </div>
                           <div class="menu-footer menu-footer--split">
                              <div class="menu-footer-main">
                                 <ul class="listInline listInline--bullet">
                                    <li><a href="' . $__templater->func('link', array('account/alerts', ), true) . '">' . 'Show all' . '</a></li>
                                    <li><a href="' . $__templater->func('link', array('account/alerts/mark-read', ), true) . '" class="js-alertsMarkRead">' . 'Mark read' . '</a>
                                    </li>
                                    <li><a href="' . $__templater->func('link', array('account/preferences', ), true) . '">' . 'Preferences' . '</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a href="/index.php?conversations/"
                        class="pmnav style-PaFhR js-badge--conversations badgeContainer' . ($__vars['xf']['visitor']['conversations_unread'] ? ' badgeContainer--highlighted' : '') . '"
                        data-badge="' . $__templater->filter($__vars['xf']['visitor']['conversations_unread'], array(array('number', array()),), true) . '" data-xf-click="menu"
                        data-xf-key="' . $__templater->filter(',', array(array('for_attr', array()),), true) . '"
                        data-menu-pos-ref="< .p-navgroup" title="' . $__templater->filter('Conversations', array(array('for_attr', array()),), true) . '"
                        aria-label="' . $__templater->filter('Conversations', array(array('for_attr', array()),), true) . '" aria-expanded="false" aria-haspopup="true"
                        id="style-PaFhR">
                     <i aria-hidden="true"></i>
                     </a>
                     <div class="menu menu--structural menu--medium" data-menu="menu" aria-hidden="true"
                        data-href="' . $__templater->func('link', array('conversations/popup', ), true) . '" data-nocache="true"
                        data-load-target=".js-convMenuBody">
                        <div class="menu-content">
                           <h3 class="menu-header">' . 'Conversations' . '</h3>
                           <div class="js-convMenuBody">
                              <div class="menu-row">' . 'Loading' . $__vars['xf']['language']['ellipsis'] . '</div>
                           </div>
                           <div class="menu-footer menu-footer--split">
                              <div class="menu-footer-main">
                                 <ul class="listInline listInline--bullet">
                                    <li><a href="' . $__templater->func('link', array('conversations', ), true) . '">' . 'Show all' . '</a></li>
                                    ';
		if ($__templater->method($__vars['xf']['visitor'], 'canStartConversation', array())) {
			$__finalCompiled .= '
                                       <li><a href="' . $__templater->func('link', array('conversations/add', ), true) . '">' . 'Start a new conversation' . '</a>
                                       </li>
                                    ';
		}
		$__finalCompiled .= '
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     ';
		if ($__vars['xf']['visitor']['is_admin'] OR $__vars['xf']['visitor']['is_moderator']) {
			$__finalCompiled .= '
                        <div class="dropdown">
                           <!-- Dropdown toggle button -->
                           <div id="dropdown-staff" class="dropdown">
                              <!-- Dropdown toggle button -->
                              <a href="/" class="adminnav style-PaFhR js-badge--conversations"
                                 title="' . $__templater->filter('Conversations', array(array('for_attr', array()),), true) . '"
                                 aria-label="' . $__templater->filter('Conversations', array(array('for_attr', array()),), true) . '"
                                 aria-expanded="false" aria-haspopup="true">
                              <i aria-hidden="true"></i>
                              </a>
                              <!-- BadgeContainer for Reports -->
                              ';
			if (($__vars['xf']['session']['reportCounts']['total'] > 0)) {
				$__finalCompiled .= '
                                 <div style="position: absolute; top: 5px;"
                                    class="badgeContainer badgeContainer--visible' . (((($__vars['xf']['session']['reportCounts']['total'] AND (($__vars['xf']['session']['reportCounts']['lastBuilt'] > $__vars['xf']['session']['reportLastRead']))) OR $__vars['xf']['session']['reportCounts']['assigned'])) ? ' badgeContainer--highlighted' : '') . '"
                                    data-badge="' . $__templater->filter($__vars['xf']['session']['reportCounts']['total'], array(array('number', array()),), true) . '"
                                    title="' . $__templater->filter($__vars['xf']['session']['reportCounts']['total'], array(array('number', array()),), true) . ' unread reports">
                                 </div>
                              ';
			}
			$__finalCompiled .= '
                           </div>
                           <!-- Dropdown menu content -->
                           <div id="dropdown-menu_staff" class="dropdown-content style-vgWcv">
                              <a href="/admin.php">Admin Panel</a>
							   <a href="/modcp">Mod Panel</a>
                              <a href="' . $__templater->func('link', array('approval-queue', ), true) . '"
                                 class="p-staffBar-link"
                                 title="' . 'Approval queue' . '">
                              Approval Queue
                              </a>
                              <!-- BadgeContainer for Approval Queue -->
                              <div style="position: absolute; top: 83px; left: 130px;" class="badgeContainer badgeContainer--highlighted"
                                 data-badge="' . $__templater->filter($__vars['xf']['session']['unapprovedCounts']['total'], array(array('number', array()),), true) . '"></div>
                              <!-- BadgeContainer for Reports -->
                              <div style="position: absolute; left: 75px;width:30px; top: 121px;" class="badgeContainer badgeContainer--visible ' . (((($__vars['xf']['session']['reportCounts']['total'] AND (($__vars['xf']['session']['reportCounts']['lastBuilt'] > $__vars['xf']['session']['reportLastRead']))) OR $__vars['xf']['session']['reportCounts']['assigned'])) ? ' badgeContainer--highlighted' : '') . '"
                                 data-badge="' . ($__vars['xf']['session']['reportCounts']['assigned'] ? (($__templater->filter($__vars['xf']['session']['reportCounts']['assigned'], array(array('number', array()),), true) . ' / ') . $__templater->filter($__vars['xf']['session']['reportCounts']['total'], array(array('number', array()),), true)) : $__templater->filter($__vars['xf']['session']['reportCounts']['total'], array(array('number', array()),), true)) . '"
                                 title="' . ($__vars['xf']['session']['reportCounts']['lastBuilt'] ? (($__templater->filter('Last report update' . $__vars['xf']['language']['label_separator'], array(array('for_attr', array()),), true) . ' ') . $__templater->func('date_time', array($__vars['xf']['session']['reportCounts']['lastBuilt'], ), true)) : '') . '">
                              </div>
                              <a href="' . $__templater->func('link', array('reports', ), true) . '"
                                 class="p-staffBar-link"
                                 title="' . 'Reports' . '">
                              Reports
                              </a>
                           </div>
                        </div>
                        <style>
                           div#dropdown-menu_staff {
                           right: -45px;
                           max-width: 300px;
                           top: 42px;
                           }
                        </style>
                        <script>
                           // Dropdown functionality
                           document.addEventListener(\'DOMContentLoaded\', function() {
                              var dropdown = document.querySelector(\'#dropdown-staff\');
                              var menu = document.querySelector(\'#dropdown-menu_staff\');
                              
                              dropdown.addEventListener(\'click\', function(event) {
                                 event.preventDefault();
                                 menu.classList.toggle(\'show\');
                              });
                              
                              document.addEventListener(\'click\', function(event) {
                                 if (!dropdown.contains(event.target) && !menu.contains(event.target)) {
                                    menu.classList.remove(\'show\');
                                 }
                              });
                           });
                        </script>
                     ';
		}
		$__finalCompiled .= '
                     <div class="dropdown style-6ZN9e" id="style-6ZN9e">
                        <button id="dropdown-profile-open" class="dropbtn style-CttoA">
                           ' . $__templater->func('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
			'href' => '',
			'title' => '',
			'style' => 'border-radius: 50%; vertical-align: middle; height: 32px; width: 32px;',
		))) . '
                           &nbsp;
                        </button>
                        <div id="dropdown-profile" class="dropdown-content style-vgWcv">
                           <div class="drop-menu-inner style-O2plo" id="style-O2plo">
                              <div id="style-1Km8S" class="style-1Km8S">
                                 <div id="style-Ul9s5" class="style-Ul9s5">
                                    <i class="fa fa-book drop-menu-icon style-KWVwD" id="style-KWVwD">
                                    </i>
                                    &nbsp; 0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-comments drop-menu-icon style-fdm6Q" id="style-fdm6Q">
                                    </i>
                                    &nbsp; 1
                                 </div>
                              </div>
                           </div>
                           <div id="style-eAG4K" class="style-eAG4K">
                              <div class="profileoverflow">
                                 <div>
                                    <a class="dropborder" href="' . $__templater->func('link', array('members', $__vars['xf']['visitor'], ), true) . '">
                                    <i class="fas fa-user style-TCb2c" id="style-TCb2c">
                                    </i>
                                    Profile
                                    </a>
                                    <a class="dropborder" href="' . $__templater->func('link', array('account/upgrades', ), true) . '">
                                    <i class="fas fa-star style-1v5Oj" id="style-1v5Oj">
                                    </i>
                                    Upgrade
                                    </a>
                                    <a class="dropborder" href="' . $__templater->func('link', array('account/account-details', ), true) . '">
                                    <i class="fas fa-cog style-gOTAD" id="style-gOTAD">
                                    </i>
                                    Control Panel
                                    </a>
                                    <a class="dropborder"
                                       href="' . $__templater->func('link', array('search:search/member', ), true) . '?user_id=' . $__templater->escape($__vars['xf']['visitor']['user_id']) . '&type=thread">
                                    <i class="fas fa-book style-rn7e7" id="style-rn7e7">
                                    </i>
                                    My Threads
                                    </a>
									<a class="dropborder"
                                       href="' . $__templater->func('link', array('tickets/yours', ), true) . '">
                                    <i class="fas fa-shield-check style-rn7e7" id="style-rn7e7">
                                    </i>
                                    My Tickets
                                    </a>
                                    <a class="dropborder" href="/help">
                                    <i class="fas fa-question-circle style-KUVqs" id="style-KUVqs">
                                    </i>
                                    Support
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <a href="' . $__templater->func('link', array('logout', null, array('t' => $__templater->func('csrf_token', array(), false), ), ), true) . '" id="style-TP4mB"
                              class="style-TP4mB">
                              <div class="logoutmenu style-Rov22" id="style-Rov22">
                                 Logout
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               ';
	} else {
		$__finalCompiled .= '
               <div class="headerright style-2tb4n" id="style-2tb4n">
                  <button class="guestnav"><a class="guestbtn" data-xf-click="overlay"
                     href="/login">Login</a></button>
                  <button class="guestnav"><a class="guestbtn" data-xf-click="overlay" href="/register">Sign
                  Up</a></button>
               </div>
            ';
	}
	$__finalCompiled .= '
            <div id="style-iaLlp" class="style-iaLlp">
            </div>
         </div>
      </div>
      <div class="mobile-menu" id="style-17jpe">
         <div class="dropdown2">
            <a href="#">
            <span class="conversationnotification browsebutton style-sfPgW" id="style-sfPgW">
            Browse
            </span>
            </a>
            <div class="dropdown2-content">
               <a href="#" class="menu1 style-P9lYN" id="style-P9lYN">
               <i class="fa fa-link style-OiysV" aria-hidden="true" id="style-OiysV">
               </i>
               &nbsp; Example Link
               </a>
               <a href="#" class="menu1 style-P9lYN" id="style-P9lYN">
               <i class="fa fa-link style-OiysV" aria-hidden="true" id="style-OiysV">
               </i>
               &nbsp; Example Link
               </a>
               <a href="#" class="menu1 style-P9lYN" id="style-P9lYN">
               <i class="fa fa-link style-OiysV" aria-hidden="true" id="style-OiysV">
               </i>
               &nbsp; Example Link
               </a>
            </div>
         </div>
         <a href="/upgrade" class="conversationnotification">
            <div id="style-6ATYq" class="style-6ATYq">
               Upgrade
            </div>
         </a>
         <a href="' . $__templater->func('link', array('dbtech-shop', ), true) . '" class="conversationnotification">
            <div id="style-g8ipn" class="style-g8ipn">
               Credits
            </div>
         </a>
         <a href="/resources" data-xf-click="overlay" overlay class="conversationnotification">
            <div id="style-g8ipn" class="style-g8ipn">
               Resources
            </div>
         </a>       
      </div>
   ';
	$__compilerTemp1 = '';
	if (!$__templater->test($__vars['selectedNavChildren'], 'empty', array())) {
		$__compilerTemp1 .= '
         <div class="p-sectionLinks">
            <div class="p-sectionLinks-inner hScroller" data-xf-init="h-scroller">
               <div class="hScroller-scroll">
                  <ul class="p-sectionLinks-list">
                     ';
		$__vars['i'] = 0;
		if ($__templater->isTraversable($__vars['selectedNavChildren'])) {
			foreach ($__vars['selectedNavChildren'] AS $__vars['navId'] => $__vars['navEntry']) {
				$__vars['i']++;
				$__compilerTemp1 .= '
                        <li>
                           ' . $__templater->callMacro(null, 'nav_entry', array(
					'navId' => $__vars['navId'],
					'nav' => $__vars['navEntry'],
					'shortcut' => 'alt+' . $__vars['i'],
				), $__vars) . '
                        </li>
                     ';
			}
		}
		$__compilerTemp1 .= '
                  </ul>
               </div>
            </div>
         </div>
         ';
	} else if ($__vars['selectedNavEntry']) {
		$__compilerTemp1 .= '
         <div class="p-sectionLinks p-sectionLinks--empty"></div>
      ';
	}
	$__vars['subNavHtml'] = $__templater->preEscaped('
      ' . $__compilerTemp1 . '
   ');
	$__finalCompiled .= '
   ';
	if ($__templater->func('property', array('publicNavSticky', ), false) == 'primary') {
		$__finalCompiled .= '
      <div class="p-navSticky p-navSticky--primary" data-xf-init="sticky-header">
         ' . $__templater->filter($__vars['navHtml'], array(array('raw', array()),), true) . '
      </div>
      ' . $__templater->filter($__vars['subNavHtml'], array(array('raw', array()),), true) . '
      ';
	} else if ($__templater->func('property', array('publicNavSticky', ), false) == 'all') {
		$__finalCompiled .= '
      <div class="p-navSticky p-navSticky--all" data-xf-init="sticky-header">
         ' . $__templater->filter($__vars['navHtml'], array(array('raw', array()),), true) . '
         ' . $__templater->filter($__vars['subNavHtml'], array(array('raw', array()),), true) . '
      </div>
      ';
	} else {
		$__finalCompiled .= '
      ' . $__templater->filter($__vars['navHtml'], array(array('raw', array()),), true) . '
      ' . $__templater->filter($__vars['subNavHtml'], array(array('raw', array()),), true) . '
   ';
	}
	$__finalCompiled .= '
   <div class="offCanvasMenu offCanvasMenu--nav js-headerOffCanvasMenu" data-menu="menu" aria-hidden="true"
      data-ocm-builder="navigation">
      <div class="offCanvasMenu-backdrop" data-menu-close="true"></div>
      <div class="offCanvasMenu-content">
         <div class="offCanvasMenu-header">
            ' . 'Menu' . '
            <a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0"
               aria-label="' . $__templater->filter('Close', array(array('for_attr', array()),), true) . '"></a>
         </div>
         ';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
            <div class="p-offCanvasAccountLink">
               <div class="offCanvasMenu-linkHolder">
                  <a href="' . $__templater->func('link', array('account', ), true) . '" class="offCanvasMenu-link">
                     ' . $__templater->func('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
			'href' => '',
		))) . '
                     ' . $__templater->escape($__vars['xf']['visitor']['username']) . '
                  </a>
               </div>
               <hr class="offCanvasMenu-separator" />
            </div>
            ';
	} else {
		$__finalCompiled .= '
            <div class="p-offCanvasRegisterLink">
               <div class="offCanvasMenu-linkHolder">
                  <a href="' . $__templater->func('link', array('login', ), true) . '" class="offCanvasMenu-link" data-xf-click="overlay"
                     data-menu-close="true">
                  ' . 'Log in' . '
                  </a>
               </div>
               <hr class="offCanvasMenu-separator" />
               ';
		if ($__vars['xf']['options']['registrationSetup']['enabled']) {
			$__finalCompiled .= '
                  <div class="offCanvasMenu-linkHolder">
                     <a href="' . $__templater->func('link', array('register', ), true) . '" class="offCanvasMenu-link" data-xf-click="overlay"
                        data-menu-close="true">
                     ' . 'Register' . '
                     </a>
                  </div>
                  <hr class="offCanvasMenu-separator" />
               ';
		}
		$__finalCompiled .= '
            </div>
         ';
	}
	$__finalCompiled .= '
         <div class="js-offCanvasNavTarget"></div>
         <div class="offCanvasMenu-installBanner js-installPromptContainer" style="display: none;"
            data-xf-init="install-prompt">
            <div class="offCanvasMenu-installBanner-header">' . 'Install the app' . '</div>
            ' . $__templater->button('Install', array(
		'class' => 'js-installPromptButton',
	), '', array(
	)) . '
         </div>
      </div>
   </div>
   <div class="p-body">
      ';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
         <div class="p-body-inner">
            ';
	} else {
		$__finalCompiled .= '
            <div class="p-body-inner" style="max-width: 2500px;">
      ';
	}
	$__finalCompiled .= '
      <!--XF:EXTRA_OUTPUT-->
      ';
	if ($__vars['notices']['block']) {
		$__finalCompiled .= '
      ' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'block',
			'notices' => $__vars['notices']['block'],
		), $__vars) . '
      ';
	}
	$__finalCompiled .= '
      ';
	if ($__vars['notices']['scrolling']) {
		$__finalCompiled .= '
      ' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'scrolling',
			'notices' => $__vars['notices']['scrolling'],
		), $__vars) . '
      ';
	}
	$__finalCompiled .= '
      ';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
      <div class="header-section">
      <div class="header-image">
		  <h1 class="header-slogan">
			  Forge your own azeroth
		  </h1></div>
      </div>
      ';
	}
	$__finalCompiled .= '
      ' . $__templater->callAdsMacro('container_breadcrumb_top_above', array(), $__vars) . '
      ' . $__templater->callMacro(null, 'breadcrumbs', array(
		'breadcrumbs' => $__vars['breadcrumbs'],
		'navTree' => $__vars['navTree'],
		'selectedNavEntry' => $__vars['selectedNavEntry'],
	), $__vars) . '
      ' . $__templater->callAdsMacro('container_breadcrumb_top_below', array(), $__vars) . '
      ' . $__templater->callMacro('browser_warning_macros', 'javascript', array(), $__vars) . '
      ' . $__templater->callMacro('browser_warning_macros', 'browser', array(), $__vars) . '
      ';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
      ';
	$__compilerTemp3 = '';
	$__compilerTemp3 .= '
      ';
	if (!$__vars['noH1']) {
		$__compilerTemp3 .= '
      <h1 class="p-title-value">' . $__templater->escape($__vars['h1']) . '</h1>
      ';
	}
	$__compilerTemp3 .= '
      ';
	$__compilerTemp4 = '';
	$__compilerTemp4 .= (isset($__templater->pageParams['pageAction']) ? $__templater->pageParams['pageAction'] : '');
	if (strlen(trim($__compilerTemp4)) > 0) {
		$__compilerTemp3 .= '
      <div class="p-title-pageAction">' . $__compilerTemp4 . '</div>
      ';
	}
	$__compilerTemp3 .= '
      ';
	if (strlen(trim($__compilerTemp3)) > 0) {
		$__compilerTemp2 .= '
      <div class="p-title ' . ($__vars['noH1'] ? 'p-title--noH1' : '') . '">
      ' . $__compilerTemp3 . '
      </div>
      ';
	}
	$__compilerTemp2 .= '
      ';
	if (!$__templater->test($__vars['description'], 'empty', array())) {
		$__compilerTemp2 .= '
      <div class="p-description">' . $__templater->escape($__vars['description']) . '</div>
      ';
	}
	$__compilerTemp2 .= '
      ';
	if (!$__templater->test($__vars['headerHtml'], 'empty', array())) {
		$__finalCompiled .= '
      <div class="p-body-header">
      ' . $__templater->filter($__vars['headerHtml'], array(array('raw', array()),), true) . '
      </div>
      ';
	} else if (strlen(trim($__compilerTemp2)) > 0) {
		$__finalCompiled .= '
      <div class="p-body-header">
      ' . $__compilerTemp2 . '
      </div>
      ';
	}
	$__finalCompiled .= '
      <div class="p-body-main ' . ($__vars['sidebar'] ? 'p-body-main--withSidebar' : '') . ' ' . ($__vars['sideNav'] ? 'p-body-main--withSideNav' : '') . '">
      ';
	if ($__vars['sideNav']) {
		$__finalCompiled .= '
      <div class="p-body-sideNavCol"></div>
      ';
	}
	$__finalCompiled .= '
      ';
	if ($__vars['sideNav']) {
		$__finalCompiled .= '
      <div class="p-body-sideNav">
      <div class="p-body-sideNavTrigger">
      ' . $__templater->button('
      ' . ($__templater->escape($__vars['sideNavTitle']) ?: 'Navigation') . '
      ', array(
			'class' => 'button--link',
			'data-xf-click' => 'off-canvas',
			'data-menu' => '#js-SideNavOcm',
		), '', array(
		)) . '
      </div>
      <div class="p-body-sideNavInner" data-ocm-class="offCanvasMenu offCanvasMenu--blocks" id="js-SideNavOcm" data-ocm-builder="sideNav">
      <div data-ocm-class="offCanvasMenu-backdrop" data-menu-close="true"></div>
      <div data-ocm-class="offCanvasMenu-content">
      <div class="p-body-sideNavContent">
      ' . $__templater->callAdsMacro('container_sidenav_above', array(), $__vars) . '
      ';
		if ($__templater->isTraversable($__vars['sideNav'])) {
			foreach ($__vars['sideNav'] AS $__vars['sideNavHtml']) {
				$__finalCompiled .= '
      ' . $__templater->escape($__vars['sideNavHtml']) . '
      ';
			}
		}
		$__finalCompiled .= '
      ' . $__templater->callAdsMacro('container_sidenav_below', array(), $__vars) . '
      </div>
      </div>
      </div>
      </div>
      ';
	}
	$__finalCompiled .= '
      <div class="p-body-content">
      ' . $__templater->callAdsMacro('container_content_above', array(), $__vars) . '
      <div class="p-body-pageContent">' . $__templater->filter($__vars['content'], array(array('raw', array()),), true) . '</div>
      ' . $__templater->callAdsMacro('container_content_below', array(), $__vars) . '
      </div>
      ';
	if ($__vars['sidebar']) {
		$__finalCompiled .= '
      <div class="p-body-sidebar">
      ' . $__templater->callAdsMacro('container_sidebar_above', array(), $__vars) . '
      ';
		if ($__templater->isTraversable($__vars['sidebar'])) {
			foreach ($__vars['sidebar'] AS $__vars['sidebarHtml']) {
				$__finalCompiled .= '
      ' . $__templater->escape($__vars['sidebarHtml']) . '
      ';
			}
		}
		$__finalCompiled .= '
      ' . $__templater->callAdsMacro('container_sidebar_below', array(), $__vars) . '
      </div>
      ';
	}
	$__finalCompiled .= '
      </div>
      ' . $__templater->callAdsMacro('container_breadcrumb_bottom_above', array(), $__vars) . '
      ' . $__templater->callMacro(null, 'breadcrumbs', array(
		'breadcrumbs' => $__vars['breadcrumbs'],
		'navTree' => $__vars['navTree'],
		'selectedNavEntry' => $__vars['selectedNavEntry'],
		'variant' => 'bottom',
	), $__vars) . '
      ' . $__templater->callAdsMacro('container_breadcrumb_bottom_below', array(), $__vars) . '
      </div>
      </div>
      <footer class="p-footer" id="footer">
         <div class="p-footer-inner">
            <div class="p-footer-row">
               ';
	$__compilerTemp5 = '';
	$__compilerTemp5 .= '
                           ';
	if ($__templater->method($__vars['xf']['cookieConsent'], 'getMode', array()) == 'advanced') {
		$__compilerTemp5 .= '
                              <li>
                                 <a href="' . $__templater->func('link', array('misc/cookies', ), true) . '" rel="nofollow"
                                    data-xf-init="tooltip" title="' . $__templater->filter('Cookie consent', array(array('for_attr', array()),), true) . '"
                                    data-xf-click="cookie-consent-toggle">
                                    ' . $__templater->fontAwesome('fa-cookie', array(
		)) . '
                                    ' . 'Cookies' . '
                                 </a>
                              </li>
                           ';
	}
	$__compilerTemp5 .= '
                           ';
	if ($__templater->method($__vars['xf']['visitor'], 'canChangeStyle', array())) {
		$__compilerTemp5 .= '
                              <li>
                                 <a href="' . $__templater->func('link', array('misc/style', ), true) . '" data-xf-click="overlay"
                                    data-xf-init="tooltip" title="' . $__templater->filter('Style chooser', array(array('for_attr', array()),), true) . '" rel="nofollow">
                                    ' . $__templater->fontAwesome('fa-paint-brush', array(
		)) . '
                                    ' . $__templater->escape($__vars['xf']['style']['title']) . '
                                 </a>
                              </li>
                           ';
	}
	$__compilerTemp5 .= '
                           ';
	if ($__templater->method($__vars['xf']['visitor'], 'canChangeLanguage', array())) {
		$__compilerTemp5 .= '
                              <li>
                                 <a href="' . $__templater->func('link', array('misc/language', ), true) . '" data-xf-click="overlay"
                                    data-xf-init="tooltip" title="' . $__templater->filter('Language chooser', array(array('for_attr', array()),), true) . '" rel="nofollow">
                                    ' . $__templater->fontAwesome('fa-globe', array(
		)) . '
                                    ' . $__templater->escape($__vars['xf']['language']['title']) . '
                                 </a>
                              </li>
                           ';
	}
	$__compilerTemp5 .= '
                        ';
	if (strlen(trim($__compilerTemp5)) > 0) {
		$__finalCompiled .= '
                  <div class="p-footer-row-main">
                     <ul class="p-footer-linkList">
                        ' . $__compilerTemp5 . '
                     </ul>
                  </div>
               ';
	}
	$__finalCompiled .= '
               <div class="p-footer-row-opposite">
                  <ul class="p-footer-linkList">
                     ';
	if ($__templater->method($__vars['xf']['visitor'], 'canUseContactForm', array())) {
		$__finalCompiled .= '
                        ';
		if ($__vars['xf']['contactUrl']) {
			$__finalCompiled .= '
                           <li><a href="' . $__templater->escape($__vars['xf']['contactUrl']) . '" data-xf-click="' . ((($__vars['xf']['options']['contactUrl']['overlay'] OR ($__vars['xf']['options']['contactUrl']['type'] == 'default'))) ? 'overlay' : '') . '">' . 'Contact us' . '</a></li>
                        ';
		}
		$__finalCompiled .= '
                     ';
	}
	$__finalCompiled .= '
                     ';
	if ($__vars['xf']['tosUrl']) {
		$__finalCompiled .= '
                        <li><a href="' . $__templater->escape($__vars['xf']['tosUrl']) . '">' . 'Terms and rules' . '</a></li>
                     ';
	}
	$__finalCompiled .= '
                     ';
	if ($__vars['xf']['privacyPolicyUrl']) {
		$__finalCompiled .= '
                        <li><a href="' . $__templater->escape($__vars['xf']['privacyPolicyUrl']) . '">' . 'Privacy policy' . '</a></li>
                     ';
	}
	$__finalCompiled .= '
                     ';
	if ($__vars['xf']['helpPageCount']) {
		$__finalCompiled .= '
                        <li><a href="' . $__templater->func('link', array('help', ), true) . '">' . 'Help' . '</a></li>
                     ';
	}
	$__finalCompiled .= '
                     ';
	if ($__vars['xf']['homePageUrl']) {
		$__finalCompiled .= '
                        <li><a href="' . $__templater->escape($__vars['xf']['homePageUrl']) . '">' . 'Home' . '</a></li>
                     ';
	}
	$__finalCompiled .= '
                     <li>
                        <a href="' . $__templater->func('link', array('forums/index.rss', '-', ), true) . '" target="_blank" class="p-footer-rssLink" title="' . $__templater->filter('RSS', array(array('for_attr', array()),), true) . '">
                           <span aria-hidden="true">
                              ' . $__templater->fontAwesome('fa-rss', array(
	)) . '
                              <span class="u-srOnly">' . 'RSS' . '</span>
                           </span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            ';
	$__compilerTemp6 = '';
	$__compilerTemp6 .= '
                     ' . $__templater->func('copyright') . '
                     ' . '' . '
                  ';
	if (strlen(trim($__compilerTemp6)) > 0) {
		$__finalCompiled .= '
               <div class="p-footer-copyright">
                  ' . $__compilerTemp6 . '
               </div>
            ';
	}
	$__finalCompiled .= '
            ';
	$__compilerTemp7 = '';
	$__compilerTemp7 .= '
                     ' . $__templater->callMacro('debug_macros', 'debug', array(
		'controller' => $__vars['controller'],
		'action' => $__vars['actionMethod'],
		'template' => $__vars['template'],
	), $__vars) . '
                  ';
	if (strlen(trim($__compilerTemp7)) > 0) {
		$__finalCompiled .= '
               <div class="p-footer-debug">
                  ' . $__compilerTemp7 . '
               </div>
            ';
	}
	$__finalCompiled .= '
         </div>
      </footer>
   </div>
   ' . $__templater->includeTemplate('synapse_footer', $__vars) . '
	' . $__templater->includeTemplate('synapse_credits', $__vars) . '
   <!-- closing p-pageWrapper -->
   <div class="u-bottomFixer js-bottomFixTarget">
      ';
	if ($__vars['notices']['floating']) {
		$__finalCompiled .= '
         ' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'floating',
			'notices' => $__vars['notices']['floating'],
		), $__vars) . '
      ';
	}
	$__finalCompiled .= '
      ';
	if ($__vars['notices']['bottom_fixer']) {
		$__finalCompiled .= '
         ' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'bottom_fixer',
			'notices' => $__vars['notices']['bottom_fixer'],
		), $__vars) . '
      ';
	}
	$__finalCompiled .= '
   </div>
   ';
	if ($__templater->func('property', array('scrollJumpButtons', ), false)) {
		$__finalCompiled .= '
      <div class="u-scrollButtons js-scrollButtons" data-trigger-type="' . $__templater->func('property', array('scrollJumpButtons', ), true) . '">
         ' . $__templater->button('
            ' . $__templater->fontAwesome('fa-arrow-up', array(
		)) . '
            <span class="u-srOnly">' . 'Top' . '</span>
         ', array(
			'href' => '#top',
			'class' => 'button--scroll',
			'data-xf-click' => 'scroll-to',
		), '', array(
		)) . '
         ';
		if ($__templater->func('property', array('scrollJumpButtons', ), false) != 'up') {
			$__finalCompiled .= '
            ' . $__templater->button('
               ' . $__templater->fontAwesome('fa-arrow-down', array(
			)) . '
               <span class="u-srOnly">' . 'Bottom' . '</span>
            ', array(
				'href' => '#footer',
				'class' => 'button--scroll',
				'data-xf-click' => 'scroll-to',
			), '', array(
			)) . '
         ';
		}
		$__finalCompiled .= '
      </div>
   ';
	}
	$__finalCompiled .= '
   ' . $__templater->callMacro('helper_js_global', 'body', array(
		'app' => 'public',
		'jsState' => $__vars['jsState'],
	), $__vars) . '
   ';
	if (($__templater->func('count', array($__vars['xf']['reactionsActive'], ), false) > 1) AND $__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
      <script type="text/template" id="xfReactTooltipTemplate">
         <div class="tooltip-content-inner">
         	<div class="reactTooltip">
         		';
		if ($__templater->isTraversable($__vars['xf']['reactionsActive'])) {
			foreach ($__vars['xf']['reactionsActive'] AS $__vars['reactionId'] => $__vars['reaction']) {
				$__finalCompiled .= '
         			' . $__templater->func('reaction', array(array(
					'id' => $__vars['reactionId'],
					'tooltip' => 'true',
				))) . '
         		';
			}
		}
		$__finalCompiled .= '
         	</div>
         </div>
      </script>
   ';
	}
	$__finalCompiled .= '
   ' . $__templater->filter($__vars['ldJsonHtml'], array(array('raw', array()),), true) . '
   </body>
</html>
' . '
' . '
' . '
' . '
';
	return $__finalCompiled;
}
);