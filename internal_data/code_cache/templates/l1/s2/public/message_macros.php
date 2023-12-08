<?php
// FROM HASH: 4a71a22a05d764c120b587949cd074fb
return array(
'macros' => array('user_info' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'user' => '!',
		'fallbackName' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   ';
	$__templater->includeCss('postbit.css');
	$__finalCompiled .= '
   ';
	$__vars['monthsOld'] = $__templater->preEscaped($__templater->func('number', array((($__vars['xf']['time'] - $__vars['user']['register_date'])) / ((60 * (60 * (24 * 30)))), ), true));
	$__finalCompiled .= '
   ';
	$__vars['yearsOld'] = $__templater->preEscaped($__templater->func('number', array((($__vars['xf']['time'] - $__vars['user']['register_date'])) / ((60 * (60 * (24 * (30 * 365))))), ), true));
	$__finalCompiled .= '
   <aside class="col_row postauthorboxx snipcss-8c9Xv style-9r6lP" id="style-9r6lP">
      <div class="postbit-top">
         <div class="postbit-bg" style="background: url(' . $__templater->escape($__vars['user']['Profile']['custom_fields']['postbit_cover']) . ');">
         </div>
         <span class="responsivehide style-CAc3i" id="style-CAc3i" style="display:none;">
         Offline
         </span>
         <div class="postbitdetail">
            <span class="postfontsize style-vxZPZ" id="style-vxZPZ">
                  ' . $__templater->func('username_link', array($__vars['user'], true, array(
		'defaultname' => $__vars['fallbackName'],
		'itemprop' => 'name',
	))) . '
            </span>
         </div>
         <div class="postbit-avatar style-rKTvj" id="style-rKTvj">
			 ';
	if ($__vars['user']['Profile']['custom_fields']['avatar_removal'] == 1) {
		$__finalCompiled .= '
					<img itemprop="image" src="/styles/OGU-Replica/avatars/transparent.png">
				';
	} else {
		$__finalCompiled .= '
					' . $__templater->func('avatar', array($__vars['user'], 'l', false, array(
			'class' => 'avatar-size-stuff',
			'defaultname' => $__vars['fallbackName'],
			'itemprop' => 'image',
		))) . '
				';
	}
	$__finalCompiled .= '
         </div>
      </div>
	   <div class="responsivehide">
		   <div class="o-flex align-items-center justify-content-center flex-wrap post-stats style-3fGIi" id="style-3fGIi">
         <div class="post-stat">
            <span class="largetext">
               <a href="">
               <strong class="">
               </strong>
               </a>
               <strong class="">
                  <a href="reputation.php?uid=">
                  <strong class="reputation_neutral rep_33 style-sSBYb" id="style-sSBYb">
                  </strong>
                  </a>
                  <strong class="reputation_neutral rep_33 style-kyNSs" id="style-kyNSs">
                     <a href="reputation.php?uid=415745">
                        <strong class="reputation_positive rep_415745">
                           ';
	if ($__templater->method($__vars['xf']['visitor'], 'canViewReputation', array())) {
		$__finalCompiled .= '
                     <a href="' . $__templater->func('link', array('reputation/authors', $__vars['user'], ), true) . '">
                     ';
	} else {
		$__finalCompiled .= '
                     <a href="">
                     ';
	}
	$__finalCompiled .= '
                     ';
	if ($__templater->filter($__vars['user']['mrs_reputation_count'], array(array('number', array()),), false) == 0) {
		$__finalCompiled .= '
                     <span class="reputation_neutral" style="font-weight: 600">' . $__templater->filter($__vars['user']['mrs_reputation_count'], array(array('number', array()),), true) . '</span>
                     ';
	} else if ($__templater->filter($__vars['user']['mrs_reputation_count'], array(array('number', array()),), false) > 0) {
		$__finalCompiled .= '
                     <span class="reputation_positive" style="font-weight: 600">' . $__templater->filter($__vars['user']['mrs_reputation_count'], array(array('number', array()),), true) . '</span>
                     ';
	} else if ($__templater->filter($__vars['user']['mrs_reputation_count'], array(array('number', array()),), false) < 0) {
		$__finalCompiled .= '
                     <span class="reputation_negative" style="font-weight: 600">' . $__templater->filter($__vars['user']['mrs_reputation_count'], array(array('number', array()),), true) . '</span>
                     ';
	}
	$__finalCompiled .= '
                     </a>
                     </strong>
                     </a>
                  </strong>
               </strong>
            </span>
            <br>
            <span id="style-yqONr" class="style-yqONr">
            Rep
            </span>
         </div>
         <div class="post-stat2">
            <span class="largetext">
               <strong id="style-6MEPs" class="style-6MEPs">
                  <span class="responsiveshow">
                     <strong class="reputation_neutral">
                     <span original-title="" class="">
                     </span>
                     </strong>
                     <strong class="reputation_positive rep_415745">
                        ';
	if ($__templater->filter($__vars['user']['reaction_score'], array(array('number', array()),), false) == 0) {
		$__finalCompiled .= '
                           <span class="reputation_neutral" style="font-weight: 600">' . $__templater->filter($__vars['user']['reaction_score'], array(array('number', array()),), true) . '</span>
                           ';
	} else if ($__templater->filter($__vars['user']['reaction_score'], array(array('number', array()),), false) > 0) {
		$__finalCompiled .= '
                           <span class="reputation_positive" style="font-weight: 600">' . $__templater->filter($__vars['user']['reaction_score'], array(array('number', array()),), true) . '</span>
                        ';
	}
	$__finalCompiled .= '
                     </strong>
                  </span>
                  <span class="responsivehide" style="display:none;">
                     <div class="post-row">
                        <div class="post-icon">
                           <i class="fa fa-check">
                           </i>
                        </div>
                        <div class="post-row-inner">
                           VOUCH 
                           <span class="ml-auto">
                           <strong class="reputation_neutral">
                           <span original-title="" class="">
                           </span>
                           </strong>
                           <strong class="reputation_positive rep_415745">
                           78
                           </strong>
                           </span>
                        </div>
                     </div>
                  </span>
               </strong>
            </span>
            
            <span id="style-3QBYm" class="style-3QBYm">
            Likes
            </span>
         </div>
      </div>
	   </div>
		   <div class="responsivehide">
			   <span class="root_smalltext1 responsiveshow">
         <div id="style-Z51oN" class="style-Z51oN">
            <div class="usertitlebox style-feNOt" id="style-feNOt">
               <span class="title_gid_33 usertitle_415745 rep_415745 style-tRBWg" id="style-tRBWg">
					' . $__templater->func('user_title', array($__vars['user'], false, array(
	))) . '
		   </div>
      
            </div>
			 <div class="responsivehide">
				 <div id="userbar" style="filter: hue-rotate(' . $__templater->escape($__vars['user']['Profile']['custom_fields']['userbarhue']) . 'deg);">
               <span id="style-fHDOX" class="style-fHDOX">
               <span class="responsivehide groupimage" style="display:none;">
               ' . $__templater->func('user_banners', array($__vars['user'], array(
		'tag' => 'div',
		'class' => 'message-userBanner',
		'itemprop' => 'jobTitle',
	))) . '
               </span>
               <span class="responsiveshow">
               ' . $__templater->func('user_banners', array($__vars['user'], array(
		'tag' => 'div',
		'class' => 'message-userBanner',
		'itemprop' => 'jobTitle',
	))) . '
               </span>
               </span>
            </div>
			 </div>
         </div>
         <div class="post-row">
            <div class="post-icon">
               <i class="fa fa-comments">
               </i>
            </div>
            <div class="post-row-inner">
               Posts: 
               <span class="ml-auto">
               ' . $__templater->escape($__vars['user']['message_count']) . '
               </span>
            </div>
         </div>
         <div class="post-row">
            <div class="post-icon">
               <i class="fa fa-book">
               </i>
            </div>
            <div class="post-row-inner">
               Threads: 
               <span class="ml-auto">
               ' . $__templater->escape($__vars['user']['eaetc_thread_count']) . '
               </span>
            </div>
         </div>
         <div class="post-row">
            <div class="post-icon">
               <i class="fa fa-calendar">
               </i>
            </div>
            <div class="post-row-inner">
               Joined: 
               <span class="ml-auto">
               ' . $__templater->func('date', array($__vars['user']['register_date'], 'M, Y', ), true) . '
               </span>
            </div>
         </div>
         <div class="post-row">
            <div class="post-icon">
               <i class="fas fa-coins">
               </i>
            </div>
            <div class="post-row-inner">
               Credits: 
               <span class="ml-auto">
               <a href="/credits.php">
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
               </a>
               </span>
            </div>
         </div>
         <div>
            <div class="awards_postbit style-EiDEA" id="style-EiDEA">
               <span id="style-ePAxL" class="style-ePAxL">
                  ';
	$__compilerTemp1 = $__vars;
	$__compilerTemp1['postbitPosition'] = 'manual';
	$__finalCompiled .= $__templater->includeTemplate('af_as_message_postbit', $__compilerTemp1) . '
               </span>
            </div>
                  ';
	if ($__vars['yearsOld'] >= '1') {
		$__finalCompiled .= '
					  <div style="margin-top:5px;margin-bottom:5px;">
					<div class="user-service user-service--postbit ">
                     <div class="type-year-' . $__templater->escape($__vars['yearsOld']) . '">' . $__templater->escape($__vars['yearsOld']) . ' year member</div>
					  </div>
					  </div>
                     ';
	} else if ($__vars['monthsOld'] >= '1') {
		$__finalCompiled .= '
					  <div style="margin-top:5px;margin-bottom:5px;">
					 <div class="user-service user-service--postbit">	
                     <div class="type-month-' . $__templater->escape($__vars['monthsOld']) . '">' . $__templater->escape($__vars['monthsOld']) . ' months member</div>
					  </div>
					  </div>
                  ';
	}
	$__finalCompiled .= '
			 			      ';
	if ($__vars['user']['isDwc'] AND $__templater->method($__vars['xf']['visitor'], 'canSeeDwc', array())) {
		$__finalCompiled .= '
					  <div style="margin-top:5px;margin-bottom:5px;">
						  <span class="postbit--dwctag" data-xf-init="tooltip" data-original-title="There is currently an open deal dispute with this user. Deal with caution!">
						  <i class="fas fa-exclamation-triangle" style="margin-right: 3px;"></i> Deal with caution
						  </span>
					  </div>
			 ';
	}
	$__finalCompiled .= '
			      ';
	if ($__templater->method($__vars['user'], 'isMemberOf', array(31, ))) {
		$__finalCompiled .= '
					  <div style="margin-top:5px;margin-bottom:5px;">
					 <span class="postbit--supporttag">
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
					 <span class="postbit--topmember">
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
					  <div style="margin-top:5px;margin-bottom:5px;">
					 <span class="postbit--stafftag">
                     Staff Team
					  </span>
					  </div>
                     ';
	} else {
		$__finalCompiled .= '
                  ';
	}
	$__finalCompiled .= '
   </aside>
';
	return $__finalCompiled;
}
),
'user_info_simple' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'user' => '!',
		'fallbackName' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   <header itemscope itemtype="https://schema.org/Person" class="message-user">
      <meta itemprop="name" content="' . ($__templater->escape($__vars['user']['username']) ?: $__templater->escape($__vars['fallbackName'])) . '">
      <div class="message-avatar">
         <div class="responsive-postbit">
    <div class="responsive-userinfo">
        <div class="message-avatar-wrapper">
            <a href="{link \'members\', $post.User}" class="avatar avatar--s" data-xf-init="member-tooltip" data-user-id="' . $__templater->escape($__vars['post']['User']['user_id']) . '">
                <img src="' . $__templater->escape($__vars['post']['User']['avatar_urls']['s']) . '" alt="' . $__templater->escape($__vars['post']['User']['username']) . '" />
            </a>
        </div>
        <a href="{link \'members\', $post.User}" class="username" data-xf-click="overlay" data-xf-init="member-tooltip" data-user-id="' . $__templater->escape($__vars['post']['User']['user_id']) . '">' . $__templater->escape($__vars['post']['User']['username']) . '</a>
    </div>
</div>

      </div>
      <span class="message-userArrow"></span>
   </header>
';
	return $__finalCompiled;
}
),
'attachments' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'attachments' => '!',
		'message' => '!',
		'canView' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   ';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
               ';
	if ($__templater->isTraversable($__vars['attachments'])) {
		foreach ($__vars['attachments'] AS $__vars['attachment']) {
			if (!$__templater->method($__vars['message'], 'isAttachmentEmbedded', array($__vars['attachment'], ))) {
				$__compilerTemp1 .= '
                  ' . $__templater->callMacro('attachment_macros', 'attachment_list_item', array(
					'attachment' => $__vars['attachment'],
					'canView' => $__vars['canView'],
				), $__vars) . '
               ';
			}
		}
	}
	$__compilerTemp1 .= '
            ';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
      ';
		$__templater->includeCss('attachments.less');
		$__finalCompiled .= '
      <section class="message-attachments">
         <h4 class="block-textHeader">' . 'Attachments' . '</h4>
         <ul class="attachmentList">
            ' . $__compilerTemp1 . '
         </ul>
      </section>
   ';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'signature' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'user' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   ';
	if ($__vars['xf']['visitor']['Option']['content_show_signature'] AND $__vars['user']['Profile']['signature']) {
		$__finalCompiled .= '
      ';
		$__compilerTemp1 = '';
		$__compilerTemp1 .= '
               ' . $__templater->func('bb_code', array($__vars['user']['Profile']['signature'], 'user:signature', $__vars['user'], ), true) . '
            ';
		if (strlen(trim($__compilerTemp1)) > 0) {
			$__finalCompiled .= '
         <span class="signature-header">' . $__templater->escape($__vars['user']['username']) . '\'s Signature</span>
		  <aside class="message-signature signaturebox">
            <div style="text-align:center; padding: 20px;">
            ' . $__compilerTemp1 . '
            <div>
         </aside>
      ';
		}
		$__finalCompiled .= '
   ';
	}
	$__finalCompiled .= '
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