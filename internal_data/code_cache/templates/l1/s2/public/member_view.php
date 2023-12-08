<?php
// FROM HASH: c7f7c325a6d52139f2c43f010b7fcbf7
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeJs(array(
		'src' => 'themehouse/spotify/spotifyUser.js',
		'min' => 'themehouse/spotify/spotifyUser.min.js',
		'addon' => 'ThemeHouse/Spotify',
	));
	$__finalCompiled .= '
';
	$__templater->inlineJs('
   $(document).ready(function() {
   themehouse.spotifyUser.initialize(' . $__vars['user']['user_id'] . ', ' . $__vars['songJson'] . ', ' . $__vars['playbackJson'] . ');
   });
');
	$__finalCompiled .= '
';
	$__vars['song'] = $__vars['user']['SpotifyUserPlayback']['SpotifySong'];
	$__finalCompiled .= '
';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped($__templater->escape($__vars['user']['username']));
	$__templater->pageParams['pageNumber'] = $__vars['page'];
	$__finalCompiled .= '
';
	$__templater->pageParams['noH1'] = true;
	$__finalCompiled .= '
';
	if (!$__templater->method($__vars['user'], 'isSearchEngineIndexable', array())) {
		$__finalCompiled .= '
   ';
		$__templater->setPageParam('head.' . 'metaNoindex', $__templater->preEscaped('
      <meta name="robots" content="noindex" />
   '));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '
' . $__templater->callMacro('metadata_macros', 'metadata', array(
		'shareUrl' => $__templater->func('link', array('canonical:members', $__vars['user'], ), false),
		'canonicalUrl' => $__templater->func('link', array('canonical:members', $__vars['user'], array('page' => $__vars['page'], ), ), false),
		'imageUrl' => $__templater->method($__vars['user'], 'getAvatarUrl', array('o', null, true, )),
	), $__vars) . '
';
	$__templater->setPageParam('ldJsonHtml', '
   <script type="application/ld+json">
      {
      	"@context": "https://schema.org",
      	"@type": "Person",
      	"name": "' . $__templater->filter($__vars['user']['username'], array(array('escape', array('json', )),), true) . '",
      	"image": "' . $__templater->filter($__templater->method($__vars['user'], 'getAvatarUrl', array('o', null, true, )), array(array('escape', array('json', )),), true) . '"
      }
   </script>
');
	$__finalCompiled .= '
';
	$__templater->includeCss('member_profile.css');
	$__finalCompiled .= '
';
	$__vars['monthsOld'] = $__templater->preEscaped($__templater->func('number', array((($__vars['xf']['time'] - $__vars['user']['register_date'])) / ((60 * (60 * (24 * 30)))), ), true));
	$__finalCompiled .= '
';
	$__vars['yearsOld'] = $__templater->preEscaped($__templater->func('number', array((($__vars['xf']['time'] - $__vars['user']['register_date'])) / ((60 * (60 * (24 * (30 * 365))))), ), true));
	$__finalCompiled .= '
<div data-barba="wrapper" id="fullcontainment">
<div class="wraps">
	';
	if ($__vars['user']['isDwc'] AND $__templater->method($__vars['xf']['visitor'], 'canSeeDwc', array())) {
		$__finalCompiled .= '
	' . $__templater->callMacro('xfdev_dwc_macro', 'display_dwc', array(
			'user' => $__vars['user'],
		), $__vars) . '
';
	}
	$__finalCompiled .= '
   <div class="profile_cover">
      <div class="profileheader style-VXUN4" id="style-VXUN4" style="isolation: isolate;
         position: relative;">
         ' . $__templater->func('profile_banner', array($__vars['user'], 'l', false, array(
		'class' => 'memberHeader-main cover',
		'toggle' => 'memberHeader--withBanner',
		'style' => 'position: absolute; z-index: -1;',
	), '')) . '
         <div id="style-oXPYN" class="style-oXPYN">
            <div class="profile_avatar">
               <span class="avatarWrapper">
                  ' . $__templater->func('avatar', array($__vars['user'], 'l', false, array(
		'href' => ($__templater->method($__vars['user'], 'getAvatarUrl', array('o', )) ?: ''),
		'style' => 'border-radius: 100%; width: 150px; height: 150px;',
	))) . '
                  ';
	if (($__vars['user']['user_id'] == $__vars['xf']['visitor']['user_id']) AND $__templater->method($__vars['xf']['visitor'], 'canUploadAvatar', array())) {
		$__finalCompiled .= '
                     <a class="avatarWrapper-update" href="' . $__templater->func('link', array('account/avatar', ), true) . '"
                        data-xf-click="overlay"><span>' . 'Edit' . '</span></a>
                  ';
	}
	$__finalCompiled .= '
               </span>
            </div>
            <div id="style-TGGXK" class="style-TGGXK">
               <span class="usernamefont style-Mdofw" id="style-Mdofw">
                  ' . $__templater->func('username_link', array($__vars['user'], true, array(
		'href' => '',
	))) . '
               </span>
               <div id="style-jqmCw" class="style-jqmCw">
                  ' . $__templater->func('user_blurb', array($__vars['user'], array(
		'tag' => 'div',
		'class' => 'memberHeader-blurb',
	))) . '
               </div>
            </div>
            <div class="responsivehide">
               ';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
                           ' . $__templater->callMacro('member_macros', 'moderator_menu_actions', array(
		'user' => $__vars['user'],
		'context' => 'profile',
	), $__vars) . '
                        ';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
                  <a class="profile_message" data-xf-click="menu" aria-expanded="false"
                     aria-haspopup="true">' . 'Moderator tools' . '</a>
                  <div class="menu" data-menu="menu" aria-hidden="true">
                     <div class="menu-content">
                        <h3 class="menu-header">' . 'Moderator tools' . '</h3>
                        ' . $__compilerTemp1 . '
                     </div>
                  </div>
               ';
	}
	$__finalCompiled .= '
               ';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
                     ';
	if (($__vars['user']['user_id'] == $__vars['xf']['visitor']['user_id']) AND $__templater->method($__vars['xf']['visitor'], 'canUploadProfileBanner', array())) {
		$__compilerTemp2 .= '
                        <a class="profile_message" href="' . $__templater->func('link', array('account/banner', ), true) . '" overlay="true" data-xf-click="overlay">' . 'Edit profile banner' . '</a>
                     ';
	}
	$__compilerTemp2 .= '
                  ';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__finalCompiled .= '
                  ' . $__compilerTemp2 . '
               ';
	}
	$__finalCompiled .= '
               ';
	if ($__templater->method($__vars['xf']['visitor'], 'canStartConversationWith', array($__vars['user'], ))) {
		$__finalCompiled .= '
                  <a class="profile_message" href="' . $__templater->func('link', array('conversations/add', null, array('to' => $__vars['user']['username'], ), ), true) . '">
                  Message
                  </a>
               ';
	}
	$__finalCompiled .= '
               ';
	if ($__templater->method($__vars['xf']['visitor'], 'canIgnoreUser', array($__vars['user'], ))) {
		$__finalCompiled .= '
                  <a class="profile_message" href="' . $__templater->func('link', array('members/ignore', $__vars['user'], ), true) . '">
                  Mute
                  </a>
               ';
	}
	$__finalCompiled .= '
               ';
	if ($__templater->method($__vars['user'], 'canBeReported', array())) {
		$__finalCompiled .= '
                  <a class="profile_message" href="' . $__templater->func('link', array('members/report', $__vars['user'], ), true) . '">
                  Report
                  </a>
               ';
	}
	$__finalCompiled .= '
            </div>
         </div>
      </div>
   </div>
   <span class="responsiveshow style-15ECi" id="style-15ECi">
      <br>
      <div>
         ';
	$__compilerTemp3 = '';
	$__compilerTemp3 .= '
                     ' . $__templater->callMacro('member_macros', 'moderator_menu_actions', array(
		'user' => $__vars['user'],
		'context' => 'profile',
	), $__vars) . '
                  ';
	if (strlen(trim($__compilerTemp3)) > 0) {
		$__finalCompiled .= '
            <a class="profile_message" data-xf-click="menu" aria-expanded="false"
               aria-haspopup="true">' . 'Moderator tools' . '</a>
            <div class="menu" data-menu="menu" aria-hidden="true">
               <div class="menu-content">
                  <h3 class="menu-header">' . 'Moderator tools' . '</h3>
                  ' . $__compilerTemp3 . '
               </div>
            </div>
         ';
	}
	$__finalCompiled .= '
         ';
	$__compilerTemp4 = '';
	$__compilerTemp4 .= '
               ';
	if (($__vars['user']['user_id'] == $__vars['xf']['visitor']['user_id']) AND $__templater->method($__vars['xf']['visitor'], 'canUploadProfileBanner', array())) {
		$__compilerTemp4 .= '
                  <a class="profile_message" href="' . $__templater->func('link', array('account/banner', ), true) . '" overlay="true" data-xf-click="overlay">' . 'Edit profile banner' . '</a>
               ';
	}
	$__compilerTemp4 .= '
            ';
	if (strlen(trim($__compilerTemp4)) > 0) {
		$__finalCompiled .= '
            ' . $__compilerTemp4 . '
         ';
	}
	$__finalCompiled .= '
         <a class="profile_message" href="' . $__templater->func('link', array('account', ), true) . '">
         Edit Profile
         </a>
         <a class="profile_message" href="' . $__templater->func('link', array('conversations/add', null, array('to' => $__vars['user']['username'], ), ), true) . '">
         Message
         </a>
         <a class="profile_message" href="javascript:void(0)" onclick="MyBB.reputation(410695); return false;">
         Mute
         </a>
         <a class="profile_message" href="' . $__templater->func('link', array('members/report', $__vars['user'], ), true) . '">
         Report
         </a>
      </div>
   </span>
   <div class="whole">
      <div class="sidebar">
         <br>
         <div class="wrapper mb-3" style="margin-bottom:0rem !important;">
            ';
	if ($__templater->method($__vars['user'], 'isOnline', array())) {
		$__finalCompiled .= '
               <div class="main-row p-3 font-size-08 onlineBorder">
                  <div class="col_row_profile whole flex-column">
                     <div class="flex-fill font-weight-bold" style="margin-bottom:0px;color:#55e180;text-transform:uppercase;letter-spacing:0.12rem;font-size:19px;font-weight:500!important;">Online&nbsp; </div>
                     <span class="onlineStatusfull" style="font-size:13px;">
                        ';
		$__compilerTemp5 = '';
		$__compilerTemp5 .= '
                              ' . $__templater->func('user_activity', array($__vars['user'])) . '
                           ';
		if (strlen(trim($__compilerTemp5)) > 0) {
			$__finalCompiled .= '
                           ' . $__compilerTemp5 . '
                        ';
		}
		$__finalCompiled .= '
                     </span>
                  </div>
                  ';
	} else {
		$__finalCompiled .= '
                  <div class="main-row p-3 font-size-08 offlineBorder">
                     <div class="col_row_profile whole flex-column">
                        <div class="flex-fill font-weight-bold" style="margin-bottom:0px;color:#dc3545;text-transform:uppercase;letter-spacing:0.12rem;font-size:19px;font-weight:500!important;">Offline&nbsp; </div>
                        <span class="onlineStatusfull" style="font-size:13px;">
                           ';
		$__compilerTemp6 = '';
		$__compilerTemp6 .= '
                                 Last seen: ' . $__templater->func('user_activity', array($__vars['user'])) . '
                              ';
		if (strlen(trim($__compilerTemp6)) > 0) {
			$__finalCompiled .= '
                              ' . $__compilerTemp6 . '
                           ';
		}
		$__finalCompiled .= '
                        </span>
                     </div>
            ';
	}
	$__finalCompiled .= '
            </div>
            </div>
            <br>
            <div class="whole">
               <div class="flexhalf">
                  <div class="margin">
                     <div class="statusblock style-YeX9R" id="style-YeX9R">
                        <div class="num">
                           <a href="' . $__templater->func('link', array('reputation/authors', $__vars['user'], ), true) . '">
                              ';
	if ($__vars['user']['mrs_reputation_count'] == 0) {
		$__finalCompiled .= '
                                 <strong class="reputation_neutral">' . $__templater->filter($__vars['user']['mrs_reputation_count'], array(array('number', array()),), true) . '</strong>
                                 ';
	} else if ($__vars['user']['mrs_reputation_count'] > 0) {
		$__finalCompiled .= '
                                 <strong class="reputation_positive">' . $__templater->filter($__vars['user']['mrs_reputation_count'], array(array('number', array()),), true) . '</strong>
                                 ';
	} else if ($__vars['user']['mrs_reputation_count'] < 0) {
		$__finalCompiled .= '
                                 <strong class="reputation_negative">' . $__templater->filter($__vars['user']['mrs_reputation_count'], array(array('number', array()),), true) . '</strong>
                              ';
	}
	$__finalCompiled .= '
                           </a>
                        </div>
                        <div class="labeled">
                           Reputation
                        </div>
                        <div class="whole linked">
                           <div class="flexthird box">
                              <a href="' . $__templater->func('link', array('reputation/authors', $__vars['user'], ), true) . '">
                                 <ion-icon name="alert-circle-outline" style="color: #787878;"></ion-icon>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="flexhalf">
                  <div class="margin">
                     <div class="statusblock style-H3kOR" id="style-H3kOR">
                        <div class="num">
                           <a href="/">
                              ';
	if ($__templater->filter($__vars['user']['reaction_score'], array(array('number', array()),), false) == 0) {
		$__finalCompiled .= '
                                 <strong class="reputation_neutral">' . $__templater->filter($__vars['user']['reaction_score'], array(array('number', array()),), true) . '</strong>
                                 ';
	} else if ($__vars['user']['mrs_reputation_count'] > 0) {
		$__finalCompiled .= '
                                 <strong class="reputation_positive">' . $__templater->filter($__vars['user']['reaction_score'], array(array('number', array()),), true) . '</strong>
                                 ';
	} else if ($__vars['user']['mrs_reputation_count'] < 0) {
		$__finalCompiled .= '
                                 <strong class="reputation_negative">' . $__templater->filter($__vars['user']['reaction_score'], array(array('number', array()),), true) . '</strong>
                              ';
	}
	$__finalCompiled .= '
                              </strong>
                           </a>
                        </div>
                        <div class="labeled">
                           Likes
                        </div>
                        <div class="whole linked">
                           <div class="flexthird box">
                              <a href="/">
                                 <ion-icon name="alert-circle-outline" style="color: #787878;"></ion-icon>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <br>
            <div class="wrapped">
               <div class="col_row_profile whole">
                  <div class="flexgrow">
                     <i class="fa fa-user-circle" aria-hidden="true">
                     </i>
                     &nbsp; UID
                  </div>
                  <div>
                     <span class="style-9wrTF">
                     ' . $__templater->escape($__vars['user']['user_id']) . '
                     </span>
                  </div>
               </div>
               <div class="col_row_profile whole">
                  <div class="flexgrow">
                     <i class="fas fa-calendar-check" aria-hidden="true">
                     </i>
                     &nbsp; Registered
                  </div>
                  <div>
                     ' . $__templater->func('date', array($__vars['user']['register_date'], ), true) . '
                  </div>
               </div>
               <div class="col_row_profile whole style-Jetmm" id="style-Jetmm">
                  <div class="flexgrow">
                     <i class="fa fa-clock" aria-hidden="true">
                     </i>
                     &nbsp; Last Visited
                  </div>
                  <div>
                     6 seconds ago
                  </div>
               </div>
               <div class="col_row_profile whole">
                  <div class="flexgrow">
                     <i class="fa fa-history" aria-hidden="true">
                     </i>
                     &nbsp; Username History
                  </div>
                  <div>
                     ';
	if ($__templater->method($__vars['user'], 'hasViewableUsernameHistory', array())) {
		$__finalCompiled .= '
                        <a style="color: rgb(137,137,137);" data-xf-click="menu"
                           data-xf-init="tooltip" title="' . $__templater->filter('Username changed', array(array('for_attr', array()),), true) . '"
                           role="button" tabindex="0" aria-expanded="false" aria-haspopup="true"
                           aria-label="' . $__templater->filter('Username changed', array(array('for_attr', array()),), true) . '">View</a>
                        <div class="menu" data-menu="menu" aria-hidden="true"
                           data-href="' . $__templater->func('link', array('members/username-history', $__vars['user'], array('menu' => 1, ), ), true) . '"
                           data-load-target=".js-usernameHistoryBody">
                           <div class="menu-content">
                              <h3 class="menu-header">' . 'Previous usernames' . '</h3>
                              <div class="js-usernameHistoryBody">
                                 <div class="menu-row">
                                    ' . 'Loading' . $__vars['xf']['language']['ellipsis'] . '
                                 </div>
                              </div>
                           </div>
                        </div>
                     ';
	}
	$__finalCompiled .= '
                  </div>
               </div>
               <div class="col_row_profile whole">
                  <div class="flexgrow">
                     <i class="fa fa-trophy" aria-hidden="true">
                     </i>
                     &nbsp; Awards
                  </div>
                  <div>
                     ' . $__templater->escape($__vars['xf']['visitor']['af_as_award_total']) . '
                  </div>
               </div>
				';
	$__compilerTemp7 = '';
	$__compilerTemp7 .= $__templater->escape($__vars['user']['Profile']['custom_fields']['discordinfo']);
	if (strlen(trim($__compilerTemp7)) > 0) {
		$__finalCompiled .= '
				 <div class="col_row_profile whole">
                  <div class="flexgrow">
                     <i class="fab fa-discord" aria-hidden="true">
                     </i>
                     &nbsp; Discord
                  </div>
                  <div>
                     ' . $__compilerTemp7 . '
                  </div>
               </div>
				';
	}
	$__finalCompiled .= '
               <div class="col_row_profile whole">
                  <p id="style-nWM1a" class="style-nWM1a">
                     <i class="fas fa-donate" aria-hidden="true">
                     </i>
                     &nbsp; 
                     <a href="credits.php?action=donate&amp;uid=410695">
                     Donate
                     </a>
                  </p>
                  <p id="style-klVGX" class="style-klVGX">
					  ';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
	';
		if ((!$__templater->method($__vars['user'], 'hasPermission', array('generalPermissions', 'xfdevHideTrustScan', )))) {
			$__finalCompiled .= '
                     <i class="fas fa-hammer" aria-hidden="true">
                     </i>
                     &nbsp; 
                     <a href="' . $__templater->func('link', array('members/scan', $__vars['user'], ), true) . '">
                     Scan
                     </a>
			';
		}
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '
                  </p>
                  <p id="style-gnrL1" class="style-gnrL1">
                     <i class="fas fa-box" aria-hidden="true">
                     </i>
                     &nbsp; 
                     <a href="/credits/inventory/?user_id=' . $__templater->escape($__vars['user']['user_id']) . '">
                     Inventory
                     </a>
                  </p>
               </div>
               <div class="col_row_profile style-NanZx" align="center" id="style-NanZx">
                  I\'ve spent 
                  ';
	$__compilerTemp8 = '';
	$__compilerTemp8 .= '
                        ';
	if ($__vars['xf']['options']['tsoShowInMembersList'] AND (((($__templater->method($__vars['xf']['visitor'], 'canViewTso', array()) OR (($__templater->method($__vars['xf']['visitor'], 'canViewOwnTso', array()) AND ($__vars['xf']['visitor']['user_id'] == $__vars['user']['user_id']))))) AND (((($__vars['user'] ? (($__vars['user']['Option']['wmt_show_tso'] OR (!$__templater->method($__vars['user'], 'hasPermission', array('TimeSpentOnline', 'canHideWMTTSO', ))))) : true) OR $__templater->method($__vars['xf']['visitor'], 'canBypassTsoPrivacy', array())) OR (($__vars['xf']['visitor']['user_id'] == $__vars['user']['user_id']))))))) {
		$__compilerTemp8 .= '
                           ' . $__templater->filter($__vars['user']['wmt_time_spent'], array(array('wmt_tso_duration', array('profile', )),), true) . '
                        ';
	}
	$__compilerTemp8 .= '
                     ';
	if (strlen(trim($__compilerTemp8)) > 0) {
		$__finalCompiled .= '
                     ' . $__compilerTemp8 . '
                  ';
	}
	$__finalCompiled .= '
                  on WoWEmu
               </div>
            </div>
         </div>
         <div class="content">
            <br>
            <div class="whole">
               <div class="flexhalf">
                  <div class="margin">
                     <div class="wrapped statistics">
                        <div class="whole">
                           <div class="col_row_profile whole flexquarter style-ZVc8P" id="style-ZVc8P">
                              <div class="fullwidth">
                                 <a href="' . $__templater->func('link', array('search:search/member', ), true) . '?user_id=' . $__templater->escape($__vars['user']['user_id']) . '&type=thread"><span class="x-largetext">' . $__templater->filter($__vars['user']['eaetc_thread_count'], array(array('number', array()),), true) . '</span></a>
                              </div>
                              <br>
                              <div>
                                 Threads
                              </div>
                           </div>
                           <div class="col_row_profile whole flexquarter">
                              <div class="fullwidth">
                                 <a href="' . $__templater->func('link', array('search:search/member', ), true) . '?user_id=' . $__templater->escape($__vars['user']['user_id']) . '"><span class="x-largetext">' . $__templater->filter($__vars['user']['message_count'], array(array('number', array()),), true) . '</span></a>
                              </div>
                              <br>
                              <div>
                                 Posts
                              </div>
                           </div>
                           <div class="col_row5 whole flexquarter">
                              <div class="fullwidth">
                                 ';
	$__vars['viewableCurrencies'] = $__templater->method($__templater->method($__vars['xf']['app']['em'], 'getRepository', array('DBTech\\Shop:Currency', )), 'getViewableCurrencies', array());
	$__finalCompiled .= '
                                 ';
	if (!$__templater->test($__vars['viewableCurrencies'], 'empty', array()) AND $__vars['xf']['options']['dbtech_shop_points_postbit']['0']) {
		$__finalCompiled .= '
                                    ';
		if ($__templater->isTraversable($__vars['viewableCurrencies'])) {
			foreach ($__vars['viewableCurrencies'] AS $__vars['currency']) {
				if ($__vars['currency']['postbit']) {
					$__finalCompiled .= '
                                       ' . $__templater->escape($__vars['currency']['prefix']) . $__templater->escape($__templater->method($__vars['currency'], 'getValueFromUser', array($__vars['user'], ))) . $__templater->escape($__vars['currency']['suffix']) . '
                                    ';
				}
			}
		}
		$__finalCompiled .= '
                                 ';
	}
	$__finalCompiled .= '
                              </div>
                              <br>
                              <div>
                                 Credits
                              </div>
                           </div>
                        </div>
                     </div>
                     <br>
                     <div class="player__stage mt-4">
                        ';
	if ($__templater->method($__vars['user'], 'canViewSpotifyPlayback', array()) AND ($__vars['user']['SpotifyUserPlayback'] AND $__templater->method($__vars['user']['SpotifyUserPlayback'], 'isPlaying', array()))) {
		$__finalCompiled .= '
                           <img src="' . $__templater->escape($__vars['song']['album_thumbnail']) . '" class="cover2" alt="' . $__templater->escape($__vars['song']['album_name']) . '">
                           <div class="player__info">
                              <div class="icon-18 flex-shrink-0 flex-grow-0 ml-3">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 2931 2931">
                                    <path d="M1465.5 0C656.1 0 0 656.1 0 1465.5S656.1 2931 1465.5 2931 2931 2274.9 2931 1465.5C2931 656.2 2274.9.1 1465.5 0zm672.1 2113.6c-26.3 43.2-82.6 56.7-125.6 30.4-344.1-210.3-777.3-257.8-1287.4-141.3-49.2 11.3-98.2-19.5-109.4-68.7-11.3-49.2 19.4-98.2 68.7-109.4C1242.1 1697.1 1721 1752 2107.3 1988c43 26.5 56.7 82.6 30.3 125.6zm179.3-398.9c-33.1 53.8-103.5 70.6-157.2 37.6-393.8-242.1-994.4-312.2-1460.3-170.8-60.4 18.3-124.2-15.8-142.6-76.1-18.2-60.4 15.9-124.1 76.2-142.5 532.2-161.5 1193.9-83.3 1646.2 194.7 53.8 33.1 70.8 103.4 37.7 157.1zm15.4-415.6c-472.4-280.5-1251.6-306.3-1702.6-169.5-72.4 22-149-18.9-170.9-91.3s18.9-149 91.4-171c517.7-157.1 1378.2-126.8 1922 196 65.1 38.7 86.5 122.8 47.9 187.8-38.5 65.2-122.8 86.7-187.8 48z" fill="rgba(255,255,255,0.65)"></path>
                                 </svg>
                              </div>
                              <div class="track">
                                 <div class="track__name">' . $__templater->escape($__vars['song']['song_name']) . '</div>
                                 <div class="track__artist">' . $__templater->escape($__vars['song']['artists']) . '</div>
                              </div>
                           </div>
                           ';
	} else {
		$__finalCompiled .= '
                           <img src="https://i.ibb.co/YQQvyNr/spotify-icon-1.png">
                           <div class="player__info">
                              <div class="icon-18 flex-shrink-0 flex-grow-0 ml-3">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 2931 2931">
                                    <path d="M1465.5 0C656.1 0 0 656.1 0 1465.5S656.1 2931 1465.5 2931 2931 2274.9 2931 1465.5C2931 656.2 2274.9.1 1465.5 0zm672.1 2113.6c-26.3 43.2-82.6 56.7-125.6 30.4-344.1-210.3-777.3-257.8-1287.4-141.3-49.2 11.3-98.2-19.5-109.4-68.7-11.3-49.2 19.4-98.2 68.7-109.4C1242.1 1697.1 1721 1752 2107.3 1988c43 26.5 56.7 82.6 30.3 125.6zm179.3-398.9c-33.1 53.8-103.5 70.6-157.2 37.6-393.8-242.1-994.4-312.2-1460.3-170.8-60.4 18.3-124.2-15.8-142.6-76.1-18.2-60.4 15.9-124.1 76.2-142.5 532.2-161.5 1193.9-83.3 1646.2 194.7 53.8 33.1 70.8 103.4 37.7 157.1zm15.4-415.6c-472.4-280.5-1251.6-306.3-1702.6-169.5-72.4 22-149-18.9-170.9-91.3s18.9-149 91.4-171c517.7-157.1 1378.2-126.8 1922 196 65.1 38.7 86.5 122.8 47.9 187.8-38.5 65.2-122.8 86.7-187.8 48z" fill="rgba(255,255,255,0.65)"></path>
                                 </svg>
                              </div>
                              <div class="track">
                                 <div class="track__name">The user is currently not listening.</div>
                              </div>
                           </div>
                        ';
	}
	$__finalCompiled .= '
                     </div>
                     <br>
                     <div class="wrapped">
                        <div class="title"><span style="padding: 5px;font-size:18px;">Groups</span></div>
                        <div class="col_row_profile" style="text-align:center;border-radius: 0 0 0.35rem 0.35rem">
                           <div style="display: inline-block; margin: 1px">
                              ';
	$__compilerTemp9 = '';
	$__compilerTemp9 .= '
                                    ' . $__templater->callMacro('xfdev_shop_userbanners_list_for_profile', 'banner_list', array(
		'user' => $__vars['user'],
	), $__vars) . '
                                 ';
	if (strlen(trim($__compilerTemp9)) > 0) {
		$__finalCompiled .= '
                                 ' . $__compilerTemp9 . '
                              ';
	}
	$__finalCompiled .= '
                           </div>
                        </div>
                     </div>
                     <br>
					  <div class="wrapped">
						  ' . $__templater->includeTemplate('xc_userprofilethreads', $__vars) . '
					  </div>
                     <div class="wrapped">
                        <div class="title"><span style="padding: 5px;font-size:18px;">' . $__templater->escape($__vars['user']['username']) . '\'s Signature</span></div>
                        <div class="col_row_profile" style="text-align:center;border-radius: 0 0 0.35rem 0.35rem">
                           <div style="display: inline-block; margin: 1px">
                              ';
	$__compilerTemp10 = '';
	$__compilerTemp10 .= '
                                    ' . $__templater->func('bb_code', array($__vars['user']['Profile']['signature'], 'user:signature', $__vars['user'], ), true) . '
                                 ';
	if (strlen(trim($__compilerTemp10)) > 0) {
		$__finalCompiled .= '
                                 ' . $__compilerTemp10 . '
                              ';
	}
	$__finalCompiled .= '
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="sidebar">
            <br>
            ';
	if ($__vars['yearsOld'] >= '1') {
		$__finalCompiled .= '
               <div>
                  <div class="user-service user-service--postbit memberprofile--userservice">
                     <div class="type-year-' . $__templater->escape($__vars['yearsOld']) . '">' . $__templater->escape($__vars['yearsOld']) . ' year member</div>
                  </div>
               </div>
               ';
	} else if ($__vars['monthsOld'] >= '1') {
		$__finalCompiled .= '
               <div>
                  <div class="user-service user-service--postbit memberprofile--userservice">
                     <div class="type-month-' . $__templater->escape($__vars['monthsOld']) . '">' . $__templater->escape($__vars['monthsOld']) . ' months member</div>
                  </div>
               </div>
            ';
	}
	$__finalCompiled .= '
			      ';
	if ($__templater->method($__vars['user'], 'isMemberOf', array(31, ))) {
		$__finalCompiled .= '
					  <div style="margin-top:5px;margin-bottom:5px;">
					 <span class="postbit--supporttag memberprofile--supporttag">
                     Early Supporter
					  </span>
					  </div>
                     ';
	} else {
		$__finalCompiled .= '
                  ';
	}
	$__finalCompiled .= '
			 	';
	if ($__templater->method($__vars['user'], 'isMemberOf', array(32, ))) {
		$__finalCompiled .= '
					  <div style="margin-top:5px;margin-bottom:5px;">
					 <span class="memberprofile--userservice postbit--topmember">
                     Top Member
					  </span>
					  </div>
                     ';
	} else {
		$__finalCompiled .= '
                  ';
	}
	$__finalCompiled .= '
            ';
	if ($__vars['user']['is_staff']) {
		$__finalCompiled .= '
               <div style="margin-top:5px;margin-bottom:10px;">
                  <span class="postbit--stafftag memberprofile--stafftag">
                  Staff Team
                  </span>
               </div>
               ';
	} else {
		$__finalCompiled .= '
            ';
	}
	$__finalCompiled .= '
            <div class="wrapped style-OTFzf" id="style-OTFzf">
               <div class="col_row_profile awards_postbit style-In2pi" id="style-In2pi">
                  <span id="style-v2JU4" class="style-v2JU4">
                     ';
	$__compilerTemp11 = $__vars;
	$__compilerTemp11['postbitPosition'] = 'manual';
	$__finalCompiled .= $__templater->includeTemplate('af_as_message_postbit', $__compilerTemp11) . '
                  </span>
               </div>
            </div>
            <br>
   </div>
</div>
';
	$__templater->modifySidebarHtml('_xfWidgetPositionSidebarfeaef3b7c6b482f185e4871860a95125', $__templater->widgetPosition('member_view_sidebar', array(
		'user' => $__vars['user'],
	)), 'replace');
	return $__finalCompiled;
}
);