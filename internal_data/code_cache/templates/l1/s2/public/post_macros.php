<?php
// FROM HASH: d4d41fc055b0a49d094af931aac90e67
return array(
'macros' => array('post' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'post' => '!',
		'thread' => '!',
		'highlightedPosts' => array(),
	); },
'extensions' => array('before' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	
	return $__finalCompiled;
},
'extra_classes' => function($__templater, array $__vars, $__extensions = null)
{
	return 'message--post';
},
'user_cell' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
		$__finalCompiled .= '
               <div class="responsiveshow">
                  <div class="author_info clearfix">
                     ' . $__templater->callMacro('message_macros', 'user_info', array(
		'user' => $__vars['post']['User'],
		'fallbackName' => $__vars['post']['username'],
	), $__vars) . '
                  </div>
               </div>
            ';
	return $__finalCompiled;
},
'attribution' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
		$__finalCompiled .= '
                           ' . $__templater->callMacro(null, 'post_attribution', array(
		'post' => $__vars['post'],
		'thread' => $__vars['thread'],
	), $__vars) . '
                        ';
	return $__finalCompiled;
},
'notices' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
		$__finalCompiled .= '
                                 ' . $__templater->callMacro(null, 'post_notices', array(
		'post' => $__vars['post'],
		'thread' => $__vars['thread'],
	), $__vars) . '
                              ';
	return $__finalCompiled;
},
'user_content' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
		$__finalCompiled .= '
                                 ' . $__templater->callMacro(null, 'post_user_content', array(
		'post' => $__vars['post'],
		'thread' => $__vars['thread'],
	), $__vars) . '
                              ';
	return $__finalCompiled;
},
'after_content' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
		$__finalCompiled .= '
                                 ' . $__templater->callMacro(null, 'post_last_edit', array(
		'post' => $__vars['post'],
	), $__vars) . '
                              ';
	return $__finalCompiled;
},
'signature' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
		$__finalCompiled .= '
                                 ' . $__templater->callMacro('message_macros', 'signature', array(
		'user' => $__vars['post']['User'],
	), $__vars) . '
                              ';
	return $__finalCompiled;
},
'content' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
		$__finalCompiled .= '
                              ' . $__templater->renderExtension('notices', $__vars, $__extensions) . '
                              ' . $__templater->renderExtension('user_content', $__vars, $__extensions) . '
                              ' . $__templater->renderExtension('after_content', $__vars, $__extensions) . '
                              ' . $__templater->renderExtension('signature', $__vars, $__extensions) . '
                           ';
	return $__finalCompiled;
},
'footer' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
		$__finalCompiled .= '
                        ';
	return $__finalCompiled;
},
'main_cell_inner' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
		$__finalCompiled .= '
                     <!-- <div class="responsive-postbit">
                        <div class="responsive-userinfo">
							
                           <a href="{link \'members\', $post.User}" class="username" data-xf-click="overlay" data-xf-init="member-tooltip" data-user-id="' . $__templater->escape($__vars['post']['User']['user_id']) . '">' . $__templater->escape($__vars['post']['User']['username']) . '</a>
                        </div>
                     </div> -->
                     <div class="message-main js-quickEditTarget">
                        ' . $__templater->renderExtension('attribution', $__vars, $__extensions) . '
                        <div class="message-content js-messageContent">
                           ' . $__templater->renderExtension('content', $__vars, $__extensions) . '
                        </div>
                        ' . $__templater->renderExtension('footer', $__vars, $__extensions) . '
                        <div class="reactionsBar js-reactionsList ' . ($__vars['post']['reactions'] ? 'is-active' : '') . '">
                           ' . $__templater->func('reactions', array($__vars['post'], 'posts/reactions', array())) . '
                        </div>
                     </div>
                  ';
	return $__finalCompiled;
},
'main_cell' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
		$__finalCompiled .= '
               <div class="message-cell message-cell--main">
                  ' . $__templater->renderExtension('main_cell_inner', $__vars, $__extensions) . '
               </div>
            ';
	return $__finalCompiled;
},
'full_body' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
		$__finalCompiled .= '
         <div class="message-inner">
            ' . $__templater->renderExtension('user_cell', $__vars, $__extensions) . '
            ' . $__templater->renderExtension('main_cell', $__vars, $__extensions) . '
         </div>
      ';
	return $__finalCompiled;
},
'after' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	
	return $__finalCompiled;
}),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   ';
	$__templater->includeCss('message.less');
	$__finalCompiled .= '
   ' . $__templater->renderExtension('before', $__vars, $__extensions) . '
   ' . '
   <article class="message ' . $__templater->escape($__templater->renderExtension('extra_classes', $__vars, $__extensions)) . ' js-post js-inlineModContainer ' . ($__templater->method($__vars['post'], 'isIgnored', array()) ? 'is-ignored' : '') . ' ' . ($__templater->method($__vars['post'], 'isUnread', array()) ? ' is-unread' : '') . '"
      data-author="' . ($__templater->escape($__vars['post']['User']['username']) ?: $__templater->escape($__vars['post']['username'])) . '"
      data-content="post-' . $__templater->escape($__vars['post']['post_id']) . '"
      id="js-post-' . $__templater->escape($__vars['post']['post_id']) . '">
      <span class="u-anchorTarget" id="post-' . $__templater->escape($__vars['post']['post_id']) . '"></span>
      ' . $__templater->renderExtension('full_body', $__vars, $__extensions) . '
      <div class="post-bottom">
         <div class="post-controls">
            ';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
                     ' . $__templater->callMacro(null, 'post_action_bar', array(
		'post' => $__vars['post'],
		'thread' => $__vars['thread'],
	), $__vars) . '
                  ';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
               <div class="message-actionBar actionBar">
                  ' . $__compilerTemp1 . '
               </div>
            ';
	}
	$__finalCompiled .= '
            <div class="js-historyTarget message-historyTarget toggleTarget" data-href="trigger-href"></div>
         </div>
      </div>
   </article>
   ' . $__templater->renderExtension('after', $__vars, $__extensions) . '
   ' . $__templater->callAdsMacro('post_below_container', array(
		'post' => $__vars['post'],
	), $__vars) . '
';
	return $__finalCompiled;
}
),
'post_attribution' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'post' => '!',
		'thread' => '!',
		'showPosition' => true,
		'showUser' => false,
		'showThreadUnreadIndicator' => false,
		'showReplyCount' => false,
		'repliesPhrase' => 'Replies' . $__vars['xf']['language']['label_separator'],
		'showThreadStateIcons' => false,
		'mainClass' => '',
		'oppositeClass' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   <header class="message-attribution message-attribution--split">
      <ul class="message-attribution-main listInline ' . $__templater->escape($__vars['mainClass']) . '">
         ';
	if ($__vars['showThreadStateIcons']) {
		$__finalCompiled .= '
            ';
		if ($__vars['xf']['visitor']['user_id'] AND $__vars['thread']['Watch'][$__vars['xf']['visitor']['user_id']]) {
			$__finalCompiled .= '
               <li>
                  ' . $__templater->fontAwesome('fa-bell', array(
				'title' => $__templater->filter('Thread watched', array(array('for_attr', array()),), false),
			)) . '
                  <span class="u-srOnly">' . 'Thread watched' . '</span>
               </li>
            ';
		}
		$__finalCompiled .= '
            ';
		if ($__vars['thread']['sticky']) {
			$__finalCompiled .= '
               <li>
                  ' . $__templater->fontAwesome('fa-thumbtack', array(
				'title' => $__templater->filter('Sticky', array(array('for_attr', array()),), false),
			)) . '
                  <span class="u-srOnly">' . 'Sticky' . '</span>
               </li>
            ';
		}
		$__finalCompiled .= '
         ';
	}
	$__finalCompiled .= '
         ';
	if ($__vars['showUser']) {
		$__finalCompiled .= '
            ';
		$__vars['username'] = $__templater->preEscaped('
               ' . $__templater->func('username_link', array($__vars['post']['User'], false, array(
			'defaultname' => $__vars['post']['username'],
		))) . '
            ');
		$__finalCompiled .= '
            <li class="u-concealed message-attribution-user--top">' . 'By ' . $__templater->escape($__vars['username']) . '' . '</li>
         ';
	}
	$__finalCompiled .= '
         ';
	if ($__templater->method($__vars['post']['User'], 'isMemberOf', array(3, ))) {
		$__finalCompiled .= '
            <div class="admin-postbadge" data-xf-init="tooltip" data-original-title="Administrator">
               <span class="admin-icon">STAFF</span>
            </div>
            ';
	} else if ($__templater->method($__vars['post']['User'], 'isMemberOf', array(22, ))) {
		$__finalCompiled .= '
            <div class="cm-postbadge" data-xf-init="tooltip" data-original-title="Community Manager">
               <span class="cm-icon">STAFF</span>
            </div>
            ';
	} else if ($__templater->method($__vars['post']['User'], 'isMemberOf', array(24, ))) {
		$__finalCompiled .= '
            <div class="fdev-postbadge" data-xf-init="tooltip" data-original-title="Forum Developer">
               <span class="fdev-icon">STAFF</span>
            </div>
            ';
	} else if ($__templater->method($__vars['post']['User'], 'isMemberOf', array(11, ))) {
		$__finalCompiled .= '
            <div class="sv-postbadge" data-xf-init="tooltip" data-original-title="Supervisor">
               <span class="sv-icon">STAFF</span>
            </div>
            ';
	} else {
		$__finalCompiled .= '
         ';
	}
	$__finalCompiled .= '
         <li class="u-concealed">
            <i class="fas fa-calendar-alt user-icon" aria-hidden="true" style="font-weight: 700;font-size:14px;"></i>
            <a href="' . $__templater->func('link', array('threads/post', $__vars['thread'], array('post_id' => $__vars['post']['post_id'], ), ), true) . '" rel="nofollow">
               ' . $__templater->func('date_dynamic', array($__vars['post']['post_date'], array(
		'itemprop' => 'datePublished',
	))) . '
            </a>
         </li>
         ';
	if ($__vars['__globals']['thread'] AND ($__vars['__globals']['post'] AND ($__vars['__globals']['thread']['first_post_id'] == $__vars['__globals']['post']['post_id']))) {
		$__finalCompiled .= '
            <li class="u-concealed">
               <i class="fas fa-eye" style="margin-right: 2px;"></i>' . $__templater->filter($__vars['thread']['view_count'], array(array('number_short', array()),), true) . '
            </li>
         ';
	}
	$__finalCompiled .= '
         ';
	if ($__vars['showReplyCount'] AND $__vars['thread']['reply_count']) {
		$__finalCompiled .= '
            <li class="u-concealed">
               <a href="' . $__templater->func('link', array('threads', $__vars['thread'], ), true) . '#posts">
                  ' . $__templater->fontAwesome('fa-comment', array(
			'class' => 'u-spaceAfter',
		)) . '
                  ' . $__templater->filter($__vars['repliesPhrase'], array(array('raw', array()),), true) . ' ' . $__templater->filter($__vars['thread']['reply_count'], array(array('number', array()),), true) . '
               </a>
            </li>
         ';
	}
	$__finalCompiled .= '
      </ul>
      <ul class="message-attribution-opposite message-attribution-opposite--list ' . $__templater->escape($__vars['oppositeClass']) . '" style="gap: 10px;">
         ';
	if ($__templater->method($__vars['post'], 'isUnread', array())) {
		$__finalCompiled .= '
            <li><span class="message-newIndicator">' . 'New' . '</span></li>
            ';
	} else if ($__templater->method($__vars['thread'], 'isUnread', array()) AND $__vars['showThreadUnreadIndicator']) {
		$__finalCompiled .= '
            <li><span class="message-newIndicator" title="' . $__templater->filter('New replies', array(array('for_attr', array()),), true) . '">' . 'New' . '</span></li>
         ';
	}
	$__finalCompiled .= '
         ';
	if ($__vars['showPosition']) {
		$__finalCompiled .= '
            ';
		if ($__vars['thread']['User'] AND $__templater->method($__vars['xf']['visitor'], 'canStartConversationWith', array($__vars['thread']['User'], ))) {
			$__finalCompiled .= '
               <a href="' . $__templater->func('link', array('conversations/add', null, array('to' => $__vars['post']['User']['username'], 'title' => $__vars['thread']['title'], ), ), true) . '" rel="nofollow" title="Start conversation with Dave">
               <i class="fas fa-envelope" style="color: inherit"></i>
               </a>
            ';
		}
		$__finalCompiled .= '
            <a href="' . $__templater->func('link', array('threads/post', $__vars['thread'], array('post_id' => $__vars['post']['post_id'], ), ), true) . '" rel="nofollow">
            #' . $__templater->func('number', array($__vars['post']['position'] + 1, ), true) . '
            </a>
         ';
	}
	$__finalCompiled .= '
      </ul>
   </header>
';
	return $__finalCompiled;
}
),
'post_notices' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'post' => '!',
		'thread' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   ';
	if ($__vars['post']['message_state'] == 'deleted') {
		$__finalCompiled .= '
      <div class="messageNotice messageNotice--deleted">
         ' . $__templater->callMacro('deletion_macros', 'notice', array(
			'log' => $__vars['post']['DeletionLog'],
		), $__vars) . '
      </div>
      ';
	} else if ($__vars['post']['message_state'] == 'moderated') {
		$__finalCompiled .= '
      <div class="messageNotice messageNotice--moderated">
         ' . 'This message is awaiting moderator approval, and is invisible to normal visitors.' . '
      </div>
   ';
	}
	$__finalCompiled .= '
   ';
	if ($__vars['post']['warning_message']) {
		$__finalCompiled .= '
      <div class="messageNotice messageNotice--warning">
         ' . $__templater->escape($__vars['post']['warning_message']) . '
      </div>
   ';
	}
	$__finalCompiled .= '
   ';
	if ($__templater->method($__vars['post'], 'isIgnored', array())) {
		$__finalCompiled .= '
      <div class="messageNotice messageNotice--ignored">
         ' . 'You are ignoring content by this member.' . '
         ' . $__templater->func('show_ignored', array(array(
		))) . '
      </div>
   ';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'post_user_content' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'post' => '!',
		'thread' => '!',
		'snippet' => false,
		'displayAds' => true,
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   <div class="message-userContent lbContainer js-lbContainer ' . ($__templater->method($__vars['post'], 'isIgnored', array()) ? 'is-ignored' : '') . '"
      data-lb-id="post-' . $__templater->escape($__vars['post']['post_id']) . '"
      data-lb-caption-desc="' . ($__vars['post']['User'] ? $__templater->escape($__vars['post']['User']['username']) : $__templater->escape($__vars['post']['username'])) . ' &middot; ' . $__templater->func('date_time', array($__vars['post']['post_date'], ), true) . '">
      ';
	if ($__templater->method($__vars['post'], 'isFirstPost', array())) {
		$__finalCompiled .= '
         ' . $__templater->callMacro('custom_fields_macros', 'custom_fields_view', array(
			'type' => 'threads',
			'group' => 'before',
			'onlyInclude' => $__vars['thread']['Forum']['field_cache'],
			'set' => $__vars['thread']['custom_fields'],
			'wrapperClass' => 'message-fields message-fields--before',
		), $__vars) . '
      ';
	}
	$__finalCompiled .= '
      <article class="message-body js-selectToQuote">
         ';
	if ($__vars['displayAds']) {
		$__finalCompiled .= '
            ' . $__templater->callAdsMacro('post_above_content', array(
			'post' => $__vars['post'],
		), $__vars) . '
         ';
	}
	$__finalCompiled .= '
         ';
	if ($__vars['snippet']) {
		$__finalCompiled .= '
            ' . $__templater->func('bb_code_snippet', array($__vars['post']['message'], 'post', $__vars['post'], $__vars['snippet'], ), true) . '
            ';
	} else {
		$__finalCompiled .= '
            ' . $__templater->func('bb_code', array($__vars['post']['message'], 'post', $__vars['post'], ), true) . '
         ';
	}
	$__finalCompiled .= '
         <div class="js-selectToQuoteEnd">&nbsp;</div>
         ';
	if ($__vars['displayAds']) {
		$__finalCompiled .= '
            ' . $__templater->callAdsMacro('post_below_content', array(
			'post' => $__vars['post'],
		), $__vars) . '
         ';
	}
	$__finalCompiled .= '
      </article>
      ';
	if ($__templater->method($__vars['post'], 'isFirstPost', array())) {
		$__finalCompiled .= '
         ' . $__templater->callMacro('custom_fields_macros', 'custom_fields_view', array(
			'type' => 'threads',
			'group' => 'after',
			'onlyInclude' => $__vars['thread']['Forum']['field_cache'],
			'set' => $__vars['thread']['custom_fields'],
			'wrapperClass' => 'message-fields message-fields--after',
		), $__vars) . '
      ';
	}
	$__finalCompiled .= '
      ';
	if ($__vars['post']['attach_count']) {
		$__finalCompiled .= '
         ' . $__templater->callMacro('message_macros', 'attachments', array(
			'attachments' => $__vars['post']['Attachments'],
			'message' => $__vars['post'],
			'canView' => $__templater->method($__vars['thread'], 'canViewAttachments', array()),
		), $__vars) . '
      ';
	}
	$__finalCompiled .= '
   </div>
';
	return $__finalCompiled;
}
),
'post_last_edit' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'post' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   ';
	if ($__vars['post']['last_edit_date']) {
		$__finalCompiled .= '
      <div class="message-lastEdit">
         ';
		if ($__vars['post']['user_id'] == $__vars['post']['last_edit_user_id']) {
			$__finalCompiled .= '
            ' . 'Last edited' . $__vars['xf']['language']['label_separator'] . ' 
            ' . $__templater->func('date_dynamic', array($__vars['post']['last_edit_date'], array(
				'itemprop' => 'dateModified',
			))) . '
            ';
		} else {
			$__finalCompiled .= '
            ' . 'Last edited by a moderator' . $__vars['xf']['language']['label_separator'] . ' 
            ' . $__templater->func('date_dynamic', array($__vars['post']['last_edit_date'], array(
				'itemprop' => 'dateModified',
			))) . '
         ';
		}
		$__finalCompiled .= '
      </div>
   ';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'post_action_bar' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'post' => '!',
		'thread' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   ';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
            ' . $__templater->func('react', array(array(
		'content' => $__vars['post'],
		'link' => 'posts/react',
		'list' => '< .js-post | .js-reactionsList',
		'class' => 'react-button',
		'style' => 'padding: 7px 9px;border-radius: 2px;font-weight: 500;text-transform: uppercase;font-size: 11.5px;display: inline-block;background: rgb(27, 121, 13) none repeat scroll 0% 0%;border-color: rgb(31, 158, 12);color: rgb(255, 255, 255) !important;',
	))) . '
            ';
	if ($__templater->method($__vars['thread'], 'canReply', array()) OR $__templater->method($__vars['thread'], 'canReplyPreReg', array())) {
		$__compilerTemp1 .= '
               ';
		$__vars['quoteLink'] = $__templater->preEscaped($__templater->func('link', array('threads/reply', $__vars['thread'], array('quote' => $__vars['post']['post_id'], ), ), true));
		$__compilerTemp1 .= '
               ';
		if ($__vars['xf']['options']['multiQuote'] AND $__vars['xf']['visitor']['user_id']) {
			$__compilerTemp1 .= '
                  <a href="' . $__templater->escape($__vars['quoteLink']) . '"
                     class="actionBar-action postbit_button post-multi u-jsOnly js-multiQuote"
                     title="' . $__templater->filter('Toggle multi-quote', array(array('for_attr', array()),), true) . '"
                     rel="nofollow"
                     data-message-id="' . $__templater->escape($__vars['post']['post_id']) . '"
                     data-mq-action="add">' . 'Quote' . '</a>
               ';
		}
		$__compilerTemp1 .= '
               <a href="' . $__templater->escape($__vars['quoteLink']) . '"
                  class="actionBar-action postbit_button post-reply"
                  title="' . $__templater->filter('Reply, quoting this message', array(array('for_attr', array()),), true) . '"
                  rel="nofollow"
                  data-xf-click="quote"
                  data-quote-href="' . $__templater->func('link', array('posts/quote', $__vars['post'], ), true) . '">' . 'Reply' . '</a>
            ';
	}
	$__compilerTemp1 .= '
         ';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
      <div class="actionBar-set actionBar-set--external">
         ';
		if ($__templater->method($__vars['post'], 'canGiveReputation', array()) AND $__templater->func('property', array('mrsShowInPostAdd', ), false)) {
			$__finalCompiled .= '
            <a href="' . $__templater->func('link', array('posts/add-reputation', $__vars['post'], ), true) . '"
               class="actionBar-action postbit_button post-rep"
               data-xf-click="overlay">' . 'mrs_reputation' . '</a>
         ';
		}
		$__finalCompiled .= '
         ' . $__compilerTemp1 . '
      </div>
   ';
	}
	$__finalCompiled .= '
   ';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
            ';
	if ($__templater->method($__vars['post'], 'canUseInlineModeration', array())) {
		$__compilerTemp2 .= '
               <span class="actionBar-action postbit_button">
                  ' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'value' => $__vars['post']['post_id'],
			'class' => 'js-inlineModToggle',
			'data-xf-init' => 'tooltip',
			'title' => 'Select for moderation',
			'label' => 'Select for moderation',
			'hiddenlabel' => 'true',
			'_type' => 'option',
		))) . '
               </span>
            ';
	}
	$__compilerTemp2 .= '
            ';
	if ($__templater->method($__vars['post'], 'canReport', array())) {
		$__compilerTemp2 .= '
               <a href="' . $__templater->func('link', array('posts/report', $__vars['post'], ), true) . '"
                  class="actionBar-action post-report postbit_button" style="background-color: rgb(117, 26, 26);
                  color: rgb(219, 218, 218) ! important;
                  border: 1px solid rgb(149, 40, 40);"
                  data-xf-click="overlay">' . 'Report' . '</a>
            ';
	}
	$__compilerTemp2 .= '
            ';
	$__vars['hasActionBarMenu'] = false;
	$__compilerTemp2 .= '
            ';
	if ($__templater->method($__vars['post'], 'canEdit', array())) {
		$__compilerTemp2 .= '
               ';
		$__templater->includeJs(array(
			'src' => 'xf/message.js',
			'min' => '1',
		));
		$__compilerTemp2 .= '
               <a href="' . $__templater->func('link', array('posts/edit', $__vars['post'], ), true) . '"
                  class="actionBar-action postbit_button post-edit actionBar-action--menuItem"
                  data-xf-click="quick-edit"
                  data-editor-target="#js-post-' . $__templater->escape($__vars['post']['post_id']) . ' .js-quickEditTarget"
                  data-menu-closer="true">' . 'Edit' . '</a>
               ';
		$__vars['hasActionBarMenu'] = true;
		$__compilerTemp2 .= '
            ';
	}
	$__compilerTemp2 .= '
            ';
	if ($__vars['post']['edit_count'] AND $__templater->method($__vars['post'], 'canViewHistory', array())) {
		$__compilerTemp2 .= '
               <a href="' . $__templater->func('link', array('posts/history', $__vars['post'], ), true) . '"
                  class="actionBar-action postbit_button actionBar-action--menuItem"
                  data-xf-click="toggle"
                  data-target="#js-post-' . $__templater->escape($__vars['post']['post_id']) . ' .js-historyTarget"
                  data-menu-closer="true">' . 'History' . '</a>
               ';
		$__vars['hasActionBarMenu'] = true;
		$__compilerTemp2 .= '
            ';
	}
	$__compilerTemp2 .= '
            ';
	if ($__templater->method($__vars['post'], 'canDelete', array('soft', ))) {
		$__compilerTemp2 .= '
               <a href="' . $__templater->func('link', array('posts/delete', $__vars['post'], ), true) . '"
                  class="actionBar-action postbit_button post-delete actionBar-action--menuItem"
                  data-xf-click="overlay">' . 'Delete' . '</a>
               ';
		$__vars['hasActionBarMenu'] = true;
		$__compilerTemp2 .= '
            ';
	}
	$__compilerTemp2 .= '
            ';
	if (($__vars['post']['message_state'] == 'deleted') AND $__templater->method($__vars['post'], 'canUndelete', array())) {
		$__compilerTemp2 .= '
               <a href="' . $__templater->func('link', array('posts/undelete', $__vars['post'], ), true) . '"
                  class="actionBar-action postbit_button actionBar-action--menuItem"
                  data-xf-click="overlay">' . 'Undelete' . '</a>
               ';
		$__vars['hasActionBarMenu'] = true;
		$__compilerTemp2 .= '
            ';
	}
	$__compilerTemp2 .= '
            ';
	if ($__templater->method($__vars['post'], 'canCleanSpam', array())) {
		$__compilerTemp2 .= '
               <a href="' . $__templater->func('link', array('spam-cleaner', $__vars['post'], ), true) . '"
                  class="actionBar-action postbit_button post-spam actionBar-action--menuItem"
                  data-xf-click="overlay">' . 'Spam' . '</a>
               ';
		$__vars['hasActionBarMenu'] = true;
		$__compilerTemp2 .= '
            ';
	}
	$__compilerTemp2 .= '
            ';
	if ($__templater->method($__vars['xf']['visitor'], 'canViewIps', array()) AND $__vars['post']['ip_id']) {
		$__compilerTemp2 .= '
               <a href="' . $__templater->func('link', array('posts/ip', $__vars['post'], ), true) . '"
                  class="actionBar-action postbit_button post-ip actionBar-action--menuItem"
                  data-xf-click="overlay">' . 'IP' . '</a>
               ';
		$__vars['hasActionBarMenu'] = true;
		$__compilerTemp2 .= '
            ';
	}
	$__compilerTemp2 .= '
            ';
	if ($__templater->method($__vars['post'], 'canWarn', array())) {
		$__compilerTemp2 .= '
               <a href="' . $__templater->func('link', array('posts/warn', $__vars['post'], ), true) . '"
                  class="actionBar-action postbit_button post-warn actionBar-action--menuItem">' . 'Warn' . '</a>
               ';
		$__vars['hasActionBarMenu'] = true;
		$__compilerTemp2 .= '
               ';
	} else if ($__vars['post']['warning_id'] AND $__templater->method($__vars['xf']['visitor'], 'canViewWarnings', array())) {
		$__compilerTemp2 .= '
               <a href="' . $__templater->func('link', array('warnings', array('warning_id' => $__vars['post']['warning_id'], ), ), true) . '"
                  class="actionBar-action actionBar-action--warn actionBar-action--menuItem"
                  data-xf-click="overlay">' . 'View warning' . '</a>
               ';
		$__vars['hasActionBarMenu'] = true;
		$__compilerTemp2 .= '
            ';
	}
	$__compilerTemp2 .= '
            ';
	if ($__vars['hasActionBarMenu']) {
		$__compilerTemp2 .= '
               <a class="actionBar-action actionBar-action--menuTrigger"
                  data-xf-click="menu"
                  title="' . $__templater->filter('More options', array(array('for_attr', array()),), true) . '"
                  role="button"
                  tabindex="0"
                  aria-expanded="false"
                  aria-haspopup="true">&#8226;&#8226;&#8226;</a>
               <div class="menu" data-menu="menu" aria-hidden="true" data-menu-builder="actionBar">
                  <div class="menu-content">
                     <h4 class="menu-header">' . 'More options' . '</h4>
                     <div class="js-menuBuilderTarget"></div>
                  </div>
               </div>
            ';
	}
	$__compilerTemp2 .= '
         ';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__finalCompiled .= '
      <div class="actionBar-set actionBar-set--internal">
         ' . $__compilerTemp2 . '
      </div>
   ';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'post_deleted' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'post' => '!',
		'thread' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
   ';
	$__templater->includeCss('message.less');
	$__finalCompiled .= '
   <div class="message message--deleted message--post' . ($__templater->method($__vars['post'], 'isIgnored', array()) ? ' is-ignored' : '') . ($__templater->method($__vars['post'], 'isUnread', array()) ? ' is-unread' : '') . ' js-post js-inlineModContainer"
      data-author="' . ($__templater->escape($__vars['post']['User']['username']) ?: $__templater->escape($__vars['post']['username'])) . '"
      data-content="post-' . $__templater->escape($__vars['post']['post_id']) . '">
      <span class="u-anchorTarget" id="post-' . $__templater->escape($__vars['post']['post_id']) . '"></span>
      <div class="message-inner">
         <div class="message-cell message-cell--user">
            ' . $__templater->callMacro('message_macros', 'user_info_simple', array(
		'user' => $__vars['post']['User'],
		'fallbackName' => $__vars['post']['username'],
	), $__vars) . '
         </div>
         <div class="message-cell message-cell--main">
            <div class="message-attribution">
               <ul class="listInline listInline--bullet message-attribution-main">
                  <li>
                     <a href="' . $__templater->func('link', array('threads/post', $__vars['thread'], array('post_id' => $__vars['post']['post_id'], ), ), true) . '" class="u-concealed" rel="nofollow">
                        ' . $__templater->func('date_dynamic', array($__vars['post']['post_date'], array(
	))) . '
                     </a>
                  </li>
                  <li>
                     ' . $__templater->func('username_link', array($__vars['post']['User'], false, array(
		'defaultname' => $__vars['post']['username'],
		'class' => 'u-concealed',
	))) . '
                  </li>
               </ul>
            </div>
            <div class="messageNotice messageNotice--deleted">
               ' . $__templater->callMacro('deletion_macros', 'notice', array(
		'log' => $__vars['post']['DeletionLog'],
	), $__vars) . '
               <a href="' . $__templater->func('link', array('posts/show', $__vars['post'], ), true) . '" class="u-jsOnly" data-xf-click="inserter" data-replace="[data-content=post-' . $__templater->escape($__vars['post']['post_id']) . ']">' . 'Show' . $__vars['xf']['language']['ellipsis'] . '</a>
               ';
	if ($__templater->method($__vars['post'], 'canUseInlineModeration', array())) {
		$__finalCompiled .= '
                  <span style="display: none">
                     <!-- this can be actioned on the full post -->
                     ' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'value' => $__vars['post']['post_id'],
			'class' => 'js-inlineModToggle',
			'hiddenlabel' => 'true',
			'_type' => 'option',
		))) . '
                  </span>
               ';
	}
	$__finalCompiled .= '
            </div>
         </div>
      </div>
   </div>
   ' . $__templater->callAdsMacro('post_below_container', array(
		'post' => $__vars['post'],
	), $__vars) . '
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
' . '
' . '
' . '
';
	return $__finalCompiled;
}
);