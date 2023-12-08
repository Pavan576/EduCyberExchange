<?php
// FROM HASH: a351c93bb88c5cc3ebe14c9236a52974
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('account_panel.css');
	$__finalCompiled .= '
';
	$__compilerTemp1 = '';
	if ($__vars['xf']['app']['connectedAccountCount']) {
		$__compilerTemp1 .= '
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/connected-accounts', ), true) . '" class="usercp_nav_item"><i class="fas fa-link user-icon usercp" aria-hidden="true"></i>&nbsp; Connected Accounts</a></div>
';
	}
	$__compilerTemp2 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canEditSignature', array())) {
		$__compilerTemp2 .= '
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/signature', ), true) . '" class="usercp_nav_item"><i class="fas fa-signature user-icon usercp" aria-hidden="true"></i>&nbsp; Signature</a></div>
';
	}
	$__compilerTemp3 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canViewBookmarks', array())) {
		$__compilerTemp3 .= '				
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/bookmarks', ), true) . '" class="usercp_nav_item"><i class="fas fa-bookmark user-icon usercp" aria-hidden="true"></i>&nbsp; ' . 'Bookmarks' . '</a></div>
';
	}
	$__templater->modifySideNavHtml(null, '
	<div class="block">
		<div class="block-container">
			<div class="block-body">
				' . '
				<div class="col_row_cp snipcss-U41Nx style-KAF5k" id="style-KAF5k">
  <a href="' . $__templater->func('link', array('members', $__vars['xf']['visitor'], ), true) . '" class="usercp_nav_item usercp_nav_home">
    <i class="fas fa-user user-icon usercp" aria-hidden="true">
    </i>
    &nbsp; ' . 'Your profile' . '
  </a>
</div>
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/alerts', ), true) . '" class="usercp_nav_item"><i class="fas fa-bell user-icon usercp" aria-hidden="true"></i>&nbsp; ' . 'Alerts' . '</a></div>
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/reactions', ), true) . '" class="usercp_nav_item"><i class="fas fa-heart user-icon usercp" aria-hidden="true"></i>&nbsp; ' . 'Reactions received' . '</a></div>
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/reputations-given', ), true) . '" class="usercp_nav_item"><i class="fas fa-square-plus user-icon usercp" aria-hidden="true"></i>&nbsp; ' . 'mrs_reputations_given' . '</a></div>

<div class="underthead underthead_menu underthead_collapse">
<div><span class="smalltext">Profile Settings</span></div>
</div>
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/account-details', ), true) . '" class="usercp_nav_item"><i class="fas fa-address-card user-icon usercp" aria-hidden="true"></i>&nbsp; Basic Settings</a></div>
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/security', ), true) . '" class="usercp_nav_item"><i class="fas fa-shield user-icon usercp" aria-hidden="true"></i>&nbsp; Account Security</a></div>
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/preferences', ), true) . '" class="usercp_nav_item"><i class="fas fa-gear user-icon usercp" aria-hidden="true"></i>&nbsp; Misc Settings</a></div>
<div class="col_row_cp"><a href="' . $__templater->func('link', array('award-system/user/sort', null, array('user' => $__vars['user']['user_id'], ), ), true) . '" class="usercp_nav_item" data-xf-click="overlay"><i class="fas fa-sort user-icon usercp" aria-hidden="true"></i>&nbsp; Sort Awards</a></div>
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/tpv-vanity-url', ), true) . '" class="usercp_nav_item" data-xf-click="overlay"><i class="fas fa-arrow-up-right-from-square user-icon usercp"  aria-hidden="true"></i>&nbsp; Vanity Profile URL</a></div>
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/signature', ), true) . '" class="usercp_nav_item" ><i class="fas fa-signature user-icon usercp"  aria-hidden="true"></i>&nbsp; Edit Signature</a></div>
' . $__compilerTemp1 . '
<!--<div class="underthead underthead_menu underthead_collapse">
<div><span class="smalltext">Cosmetic Settings</span></div>
</div>
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/postbit-background', ), true) . '" class="usercp_nav_item"><i class="fas fa-image-portrait user-icon usercp" aria-hidden="true"></i>&nbsp; Postbit Background</a></div>
' . $__compilerTemp2 . '
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/userbarhue', ), true) . '" class="usercp_nav_item"><i class="fas fa-fill-drip user-icon usercp" aria-hidden="true"></i>&nbsp; Userbar Hue</a></div>
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/youtube-video', ), true) . '" class="usercp_nav_item"><i class="fab fa-youtube user-icon usercp" aria-hidden="true"></i>&nbsp; YouTube Video</a></div>
-->
<div class="underthead underthead_menu underthead_collapse">
<div><span class="smalltext">Miscellaneous</span></div>
</div>
' . $__compilerTemp3 . '
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/privacy', ), true) . '" class="usercp_nav_item"><i class="fas fa-user-ninja user-icon usercp" aria-hidden="true"></i>&nbsp; ' . 'Privacy' . '</a></div>
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/following', ), true) . '" class="usercp_nav_item"><i class="fas fa-user-group user-icon usercp" aria-hidden="true"></i>&nbsp; ' . 'Following' . '</a></div>
<div class="col_row_cp"><a href="' . $__templater->func('link', array('account/ignored', ), true) . '" class="usercp_nav_item"><i class="fas fa-volume-xmark user-icon usercp" aria-hidden="true"></i>&nbsp; ' . 'Ignoring' . '</a></div>



				' . '
			</div>
		</div>
	</div>

	<div class="block">
		<div class="block-container">
			<div class="block-body">
				<div class="col_row_cp"><a href="' . $__templater->func('link', array('logout', null, array('t' => $__templater->func('csrf_token', array(), false), ), ), true) . '" class="usercp_nav_item"><i class="fas fa-right-from-bracket user-icon usercp" aria-hidden="true"></i>&nbsp; ' . 'Log out' . '</a></div>
			</div>
		</div>
	</div>
', 'replace');
	$__finalCompiled .= '
';
	$__templater->setPageParam('sideNavTitle', 'Your account');
	$__finalCompiled .= '

';
	$__templater->breadcrumb($__templater->preEscaped('Your account'), $__templater->func('link', array('account', ), false), array(
	));
	$__finalCompiled .= '

' . $__templater->filter($__vars['innerContent'], array(array('raw', array()),), true);
	return $__finalCompiled;
}
);