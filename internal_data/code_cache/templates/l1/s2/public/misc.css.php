<?php
// FROM HASH: bac6812c5abd30d8cb59136592549b09
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/*
	@Theme Name  : OGU.gg MyBB Replica for XenForo
	@Theme URI   : -
	@Author      : Splicho / Cillez
	@Author URI  : @ https://wowemu.org
	@Description : XenForo 2.2 Style
	@Version     : 1.0.0
	@License     : Proprietary software License
	@License URI : https://en.wikipedia.org/wiki/Proprietary_software

-------------------------------------------------------------------------*/

@media only screen and (max-width: 1000px) {
    .p-body {
        width: calc(100% - 20px)!important;
    }
    }
    
    .tabPanes li {
    animation: opac .2s ease-in forwards;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Basics
    /*-------------------------------------------------------------------------*/

	

@media (max-width: 650px){ 
	[data-widget-key="staff_online"], .discord-banner, [data-widget-key="forum_overview_new_posts"], [data-widget-key="shop_items"] { 
    display: none !important;
  } 
}   

    
    .profile_message:hover {
        transform: scale(1.01);
    }
    
    .profile_message {
        color: #fff;
        border: 1px solid #444;
        border-radius: 50px !important;
        padding: 0.5rem 0.7rem;
        transition: transform .3s ease;
    }
    
    .p-body-sidebar {
        width: 348px !important;
    }
    
    .button.button--primary {
        padding: 10px 20px; 
        cursor: pointer; 
        font-size: 13px; 
        background: #262626; 
        color: #fff; 
        border: 0; 
        outline: 0; 
        transition: 350ms ease; 
        border-radius: 40rem; 
        font-weight: unset;
    }
    
    .button, .button.button--link, a.button.button--link {
        border: none;
        color: #fff;
    }
    
    .button.button--link:hover, a.button.button--link:hover, .button.button--link:active, a.button.button--link:active, .button.button--link:focus, a.button.button--link:focus {
        background-color: #2A2A2A
    }
    
    .button.button--primary:hover {
        background-color: #2A2A2A !important;
    }
    
    ::-webkit-scrollbar {
        width: 10px;
    }
    ::-webkit-scrollbar-thumb {
        background: #434343;
    }
    ::-webkit-scrollbar-track {
        background: #1d1d1d;
    }
    
    
    /*-------------------------------------------------------------------------*/
    /* Body
    /*-------------------------------------------------------------------------*/
    
    body {
        color: #787878;
        text-align: left;
        margin: 0;
        font-size: 13px;
        overflow-y: scroll;
        text-rendering: optimizeLegibility !important;
        font-weight: 550 !important;
    }
    
    .p-body {
        margin: auto auto;
        overflow: hidden;
        animation: opac 0.8s;
        margin-top: 45px;
    }
    
    .p-body-inner {
         max-width: 1514px
    }
    
    
    [data-template="forum_list"] .p-title, .p-breadcrumbs, .node-stats, .p-title-pageAction {
       display: none;
    }
    
    [data-template="forum_view"] .p-breadcrumbs {
       display: unset;
    }
    
    .block-minorHeader {
        text-align: center;
        color: #fff !important;
    }
    
    .block-minorHeader a:hover {
        text-decoration: none;
    }
    
    .block--messages .message {
        color: unset;
    }
    
    .block-container {
        border: none;
        background-color: #212121;
        border-radius: 6px;
    }
    
    .block-header {
        border-bottom: unset;
        background: unset;
    }
    
    .block-container {
        color: unset;
    }
    
    .subNodeLink.subNodeLink--forum:before,.subNodeLink.subNodeLink--category:before {
        content: "\\f3bf" !important;
        font-size: 14.5px;
        color: #868585;
        margin-right: 5px;
        transform: rotate(90deg);
    }
    
    .subNodeLink-icon {
        display: none !important;
    }
    
    .node+.node {
        border-top: 1px solid #1c1c1c;
    }
    
    .node-main {
        padding: 26px;
    }
    
    .node-icon, .xfa-nit-node-icon {
        padding: 26px;
    }
    
    .node-icon i:before {
        font-size: 24px!important;
        text-shadow: none;
        text-align: center;
        color: rgb(159,159,159);
    }
    
    .node-title {
        font-size: 20px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
    }
    
    .subNodeLink--forum  {
        font-size: 14.5px !important;
        font-weight: 600;
    }
    
    .node-extra {
        text-align: center;
    }
    
    .node-extras {
        padding: 8px;
        text-align: center;
        background: #1c1c1c2e;
        opacity: 0.8;
        border-radius: 6px;
    }
    
    .node-extra-title {
        color: rgb(137,137,137) !important;
        font-size: 12px;
    }

    /*-------------------------------------------------------------------------*/
    /* Prefixes
    /*-------------------------------------------------------------------------*/

.prefix-important {
	font-weight: 600 !important;
	color: #d26d22;
	text-transform: uppercase;
}

.prefix-official {
	font-weight: 600 !important;
	color: yellow;
	text-transform: uppercase;
}

.prefix-staff {
	font-weight: 600 !important;
	color: #02b0f2;
	text-transform: uppercase;
}

.prefix-voting {
	font-weight: 600 !important;
	color: #257718;
	text-transform: uppercase;
}

.prefix-nomination {
	font-weight: 600 !important;
	color: #782682;
	text-transform: uppercase;
}

.prefix-solar {
	font-weight: 600 !important;
	color: #67ffff;
	text-transform: uppercase;
}

.prefix-cosmic {
	font-weight: 600 !important;
	color: white;
	text-shadow: 0px 2px 3px #000;
    background-image: url(https://kingz.net/styles/kingznet/sparkle.gif);
	text-transform: uppercase;
}

.prefix-335 {
	font-weight: 600 !important;
	color: #0E479C;
	text-transform: uppercase;
}

.prefix-51 {
	font-weight: 600 !important;
	color: #1f1f1f;
	text-transform: uppercase;
}

.prefix-51 {
	font-weight: 600 !important;
	color: #1f1f1f;
	text-transform: uppercase;
}

.prefix-patch {
	font-weight: 600 !important;
	color: #2053A1;
	text-transform: uppercase;
}

.prefix-sql {
	font-weight: 600 !important;
	color: #325FA5;
	text-transform: uppercase;
}

.prefix-web {
	font-weight: 600 !important;
	color: #446BAA;
	text-transform: uppercase;
}

.prefix-web {
	font-weight: 600 !important;
	color: #446BAA;
	text-transform: uppercase;
}

.prefix-app {
	font-weight: 600 !important;
	color: #5577AF;
	text-transform: uppercase;
}


.prefix-other {
	font-weight: 600 !important;
	color: #798FB8;
	text-transform: uppercase;
}

.prefix-510-patch {
	font-weight: 600 !important;
	color: #55A120;
	text-transform: uppercase;
}

.prefix-510-rp {
	font-weight: 600 !important;
	color: #4B9C0E;
	text-transform: uppercase;
}

.prefix-article {
	font-weight: 600 !important;
	color: #5294ff;
	text-transform: uppercase;
}

.prefix-article {
	font-weight: 600 !important;
	color: #5294ff;
	text-transform: uppercase;
}

.prefix-lua {
	font-weight: 600 !important;
	color: #000081;
	text-transform: uppercase;
}

.prefix-cplusplus {
	font-weight: 600 !important;
	color: #659bd3;
	text-transform: uppercase;
}

.prefix-retroport {
	font-weight: 600 !important;
	color: #756b65;
	text-transform: uppercase;
}

.prefix-item {
	font-weight: 600 !important;
	color: #47b90b;
	text-transform: uppercase;
}

.prefix-item {
	font-weight: 600 !important;
	color: #47b90b;
	text-transform: uppercase;
}

.prefix-spell {
	font-weight: 600 !important;
	color: #add8e6;
	text-transform: uppercase;
}

.prefix-npc {
	font-weight: 600 !important;
	color: #71072b;
	text-transform: uppercase;
}


.prefix-dbc {
	font-weight: 600 !important;
	color: #75656f;
	text-transform: uppercase;
}

.prefix-map {
	font-weight: 600 !important;
	color: #25362e;
	text-transform: uppercase;
}

.prefix-mount {
	font-weight: 600 !important;
	color: #ffb169;
	text-transform: uppercase;
}

.prefix-rate {
	font-weight: 600 !important;
	color: #E49B0F;
	text-transform: uppercase;
}

.prefix-open {
	font-weight: 600 !important;
	color: #f34b4b;
	text-transform: uppercase;
}

.prefix-fixed {
	font-weight: 600 !important;
	color: #3cff6b;
	text-transform: uppercase;
}





    
    /*-------------------------------------------------------------------------*/
    /* Error Page
    /*-------------------------------------------------------------------------*/
    
    [data-template="error"] .p-title-value,  {
        display: none
    }
    
    [data-template="error"] .blockMessage {
        border: none;
        background: none;
        text-align: center;
        color: white;
    }
    
    [data-template="error"] .flexcontainer h1 {
        font-size: 1.5rem;
        color: white;
    }
    
    [data-template="error"] .flexcontainer p {
        color: grey;
    }
    
    [data-template="error"] .flexcontainer a {
        text-decoration: underline dotted;
    }
    
    .flexcontainer {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    
    
    /*-------------------------------------------------------------------------*/
    /* Userbanners
    /*-------------------------------------------------------------------------*/
    .admin {
        background: url("https://i.postimg.cc/0jJ6C79c/Admin.png") no-repeat;
        height: 50px;
        width: 150px;
        text-indent: -10000em;
        margin-left: auto;
        margin-right: auto;
        display: inline-block;
    }
    
    .cosmic {
        background: url("https://i.postimg.cc/1XC4rfZv/Bog.png") no-repeat;
        height: 50px;
        width: 150px;
        text-indent: -10000em;
        margin-left: auto;
        margin-right: auto;
        display: inline-block;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Payment Successful
    /*-------------------------------------------------------------------------*/
    
    [data-template="account_upgrade_purchase"] .header-image, .p-title-value {
        display: none;
    }
    
    .approve_icon {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        display: block;
        stroke-width: 2;
        stroke: #fff;
        stroke-miterlimit: 10;
        margin: 3% auto;
        box-shadow: inset 0px 0px 0px #80d100;
        -webkit-animation: fill 0.4s ease-in-out 0.4s forwards, scale 0.3s ease-in-out 0.9s both;
                animation: fill 0.4s ease-in-out 0.4s forwards, scale 0.3s ease-in-out 0.9s both;
      }
      
      .approve_icon_circle {
        stroke-dasharray: 166;
        stroke-dashoffset: 166;
        stroke-width: 2;
        stroke-miterlimit: 10;
        stroke: #80d100;
        fill: none;
        -webkit-animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
                animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
      }
      
      .approve_icon_check {
        transform-origin: 50% 50%;
        stroke-dasharray: 48;
        stroke-dashoffset: 48;
        -webkit-animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
                animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
      }
      
      @-webkit-keyframes stroke {
        100% {
          stroke-dashoffset: 0;
        }
      }
      
      @keyframes stroke {
        100% {
          stroke-dashoffset: 0;
        }
      }
      @-webkit-keyframes scale {
        0%, 100% {
          transform: none;
        }
        50% {
          transform: scale3d(1.1, 1.1, 1);
        }
      }
      @keyframes scale {
        0%, 100% {
          transform: none;
        }
        50% {
          transform: scale3d(1.1, 1.1, 1);
        }
      }
      @-webkit-keyframes fill {
        100% {
          box-shadow: inset 0px 0px 0px 30px #80d100;
        }
      }
      @keyframes fill {
        100% {
          box-shadow: inset 0px 0px 0px 30px #80d100;
        }
      }

	/*-------------------------------------------------------------------------*/
    /* Rock Paper Scissor
    /*-------------------------------------------------------------------------*/

[data-template="xfdev_rock_paper_scissor_index"] .p-body {
	margin-top: 100px !important;
}
    
    
    /*-------------------------------------------------------------------------*/
    /* Upgrade Page
    /*-------------------------------------------------------------------------*/
    
    [data-template="account_upgrades"] .p-title-value  {
        display: none;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Ticket Manager
    /*-------------------------------------------------------------------------*/
    
    [data-template="nf_tickets_ticket_category_chooser"] .p-title-value {
        display: none;
    }
    
    .menu-linkRow:hover {
        background: #2a2a2a;
        border: none;
    }
    
    .menu-linkRow {
        color: #fff;
		border: none;
    }
    
    [data-template="nf_tickets_ticket_view"] .p-description {
        display: none;
    }
    
    [data-template="nf_tickets_ticket_view"] .message-cell--user {
        display: none;
    }
    
    [data-template="nf_tickets_member_view"] .p-title-pageAction {
        display: block;
    }
    
    [data-template="nf_tickets_ticket_view"] .p-title-value {
        width: 100%;
        display: flex;
        background-color: #ff9425;
        border-radius: 6px;
        padding: 13px;
        justify-content: center;
        margin-bottom: 10px;
        margin-top: 10px;
        color: #fff;
        font-size: 30px;
        font-weight: 600;
        text-shadow: 0 0 12px #000;
    }
    
    .label.label--primary {
        color: #fff;
        background: #3f3f3f;
        border: none;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Post Topic
    /*-------------------------------------------------------------------------*/

.bbWrapper hr {
    border-top: 1px solid #2a2a2a;
}

.bbCodeBlock-content {
border: solid 1px #2e2e2e;
    border-radius: 4px;
}
    
    .message-newIndicator {
        background: #056628;
    }
    
    .bbCodeBlock--unfurl {
        color: inherit;
    }
    
    .block-footer {
        border: none;
        background: #1e1e1e;
    }
    
    .blockStatus {
        border-left: 3px solid #ff4747;
        border: none;
        color: #fff;
        background: #222222;
        border-radius: 7px;
    }
    
    .blockStatus-message:before {
        color: #ff5b5b;
    }
    
    .message-signature {
        border-top: none;
        max-height: 260px;
        overflow: auto;
        margin-top: 5px;
        margin-bottom: 15px;
        font-size: 15px;
        color: #9d9d9d;
    }
    
    .formRow.formRow--fullWidth+.formRow, .formRow+.formRow.formRow--fullWidth {
        border: none;
    }
    
    .fr-view blockquote {
        border: none;
        border-radius: 7px;
    }
    
    .fr-view blockquote[data-quote]:before {
        color: #fff;
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
        background: unset;
    }
    
    .actionBar-action--tag, .actionBar-action--changeOwnerAndDate {
        background-color: rgb(33,33,33);
        padding: 7px 9px;
        border-radius: 2px;
        color: rgb(145,145,145) !important;
        font-weight: 500;
        border: 1px solid rgb(35,35,35);
        text-transform: uppercase;
        font-size: 11.5px;
        display: inline-block;
    }
    
    .actionBar-action--tag:hover, .actionBar-action--changeOwnerAndDate:hover {
        background-color: rgb(30,30,30);
    }
    
    .actionBar-action--tag:before {
        content: "\\40";
        font-family: \'Font Awesome 5 Pro\';
        font-weight: 900;
        font-size: 14px;
        margin-right: 5px;
    }
    
    .actionBar-action--changeOwnerAndDate:before {
        content: "\\f577";
        font-family: \'Font Awesome 5 Pro\';
        font-weight: 900;
        font-size: 14px;
        margin-right: 5px;
    }
    
    
    .bbCodeBlock {
        background: #1D1D1D;
        border: none;
        border-radius: 7px;
    }
    
    .bbCodeBlock-title {
        background: unset;
    }
    

    [data-template="thread_view"] .formButtonGroup {
        justify-content: center;
    }
    
    [data-template="thread_view"] .formButtonGroup-primary {
        margin: unset;
    }
    
    [data-template="forum_post_thread"] .p-body-header {
        display: none;
    }
    
    .inputTypes-input:checked+.inputTypes-display, .inputTypes-display:hover {
        background: none; 
    }
    
    .inputTypes-display, .inputTypes {
        border: none;
    }
    
    [data-template="forum_post_thread"] .formRowSep {
        display: none;
    }
    
    [data-template="forum_post_thread"] .block-formSectionHeader {
        border: none;
        color: #fff;
    }
    
    [data-template="forum_post_thread"] .inputGroup.inputGroup--joined .inputGroup-text {
        background: #2d2d2d;
    }
    
    
    
    /*-------------------------------------------------------------------------*/
    /* Topic Tooltip
    /*-------------------------------------------------------------------------*/
    
    .tooltip--preview .tooltip-content {
        color: inherit !important;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Award List
    /*-------------------------------------------------------------------------*/
    
    .awardbtn {
        padding: 10px 20px !important;
        cursor: pointer;
        background: #262626;
        outline: 0;
        transition: 350ms ease;
        border-radius: 40rem !important;
        font-weight: 650 !important;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    
    .awardbtn:hover {
        background-color: #2A2A2A;
    }
    
    form[action="/award-system/2/create_request"] .block-container > .block-body > .formRow {
    
        display: none;
    
    }
    
    /*-------------------------------------------------------------------------*/
    /* Resource Manager
    /*-------------------------------------------------------------------------*/

[data-template="xfrm_thread_view_type_resource"] .p-body {
	margin: unset;
}

[data-template="xfrm_thread_view_type_resource"] .p-body-inner {
    max-width: 1514px;
}

[data-template="xfrm_thread_view_type_resource"] .p-body-inner {
    margin-top: 100px;
}
    
    
    .resourceBody-sidebar {
        color: inherit;
        border: none;
    }
    .block-filterBar {
        background: unset;
        border: none;
    }
    
    .block-header {
        color: #fff;
        text-align: center;
        font-size: 17px;
    }
    
    [data-template="xfrm_overview"] .header-section  {
        display: none;
    }
    
    [data-template="xfrm_resource_view"] .header-section  {
        display: none;
    }
    
    .tabs--standalone {
        border: none;
        background: #222222;
        border-radius: 10px;
    }
    
    .tabs--standalone .tabs-tab.is-active {
        color: #fff;
        border-bottom: 2px solid #ca003d;
    }
    
    .tabs--standalone .tabs-tab:hover {
        color: #fff;
        background: #3333;
        border-bottom: 2px solid #ca003d;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Credit Shop
    /*-------------------------------------------------------------------------*/

[data-template="dbtech_shop_overview"] .p-body-sideNavContent {
	display: flex;
	flex-direction: column;
	gap: 10px;
}

[data-template="dbtech_shop_category_view"] .p-body-sideNavContent {
	display: flex;
	flex-direction: column;
	gap: 10px;
}

[data-template="dbtech_shop_category_view"] .block-filterBar {
	display: none;
}
    @media (min-width: 500px) {
    .shop-item {
        margin: 0.5rem;
    }
    }
    
    img[alt="Cherry Blossom Tree"] {
        width: 136px !important;
        height: 42px !important;
    }
    
    [data-template="dbtech_shop_overview"] .p-body-header {
        display: none;
    }
    
    .overlay-container {
        transform: translateY(-10px);
        transition: cubic-bezier(.4, 0, .2, 1) .26s transform,cubic-bezier(.4, 0, .2, 1) .26s opacity
    }
    
    .overlay-container.is-active {
        transform:translateY(0); 
    }
    
    /*-------------------------------------------------------------------------*/
    /* Account Panel
    /*-------------------------------------------------------------------------*/
    
    [data-template="account_details"] .p-body-header {
        display: none;
    }
    
    
    /*-------------------------------------------------------------------------*/
    /* Discord Banner - Sidebar
    /*-------------------------------------------------------------------------*/
    
    .discord-banner {
        background-color: #7288da;
        border-radius: 0.25rem;
        justify-content: space-between;
        display: flex;
        align-items: center;
        padding: 1.3rem !important;
        margin-top: 0.75rem;
        margin-bottom: 0.75rem;
        font-weight: 500;
    }
    
    .discord-banner:hover {
        filter: brightness(1.2);
    }
    
    
    /*-------------------------------------------------------------------------*/
    /* Header Image / Exceptions
    /*-------------------------------------------------------------------------*/
    
    .character {
        display: flex;
        justify-content: center;
    }
    
    .character img {
        -webkit-mask: linear-gradient(to bottom, black, transparent);
        position: absolute;
        z-index: 0;
        animation: float2 12s ease-in-out infinite;
    }
    
    @keyframes float2 {
    0% {
        -webkit-transform: translatey(0px) translateX(0px);
        transform: translatey(0px) translateX(0px);
    }
    50% {
        -webkit-transform: translatey(15px) translateX(-15px);
        transform: translatey(15px) translateX(-15px);
    }
    100% {
        -webkit-transform: translatey(0px) translateX(0px);
        transform: translatey(0px) translateX(0px);
    }
    }
    
   @keyframes scaleIn {
        0% {
            transform: scale(0);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }
    
    
    
    .header-image {
        width: 100%;
        min-height: 200px;
        background-image: url(https://i.postimg.cc/59PvccnW/Untitled-2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        border-radius: 4px;
    }

    .header-image h1 {
        font-size: 2rem;
        color: #fff;
        text-shadow: 0px 0px 10px #000000;
        text-transform: uppercase;
        letter-spacing: .2rem;
        animation: scaleIn .8s cubic-bezier(0.06, 0.9, 0.65, 1.01)
    }
	
[data-template="dbtech_shop_category_view"] .header-image {
	display: none;
}
	[data-template="help_index"] .header-image {
        display: none;
    }
    
    [data-template="account_upgrades"] .header-image {
        display: none;
    }
    
    [data-template="nf_tickets_member_view"] .header-image {
        display: none;
    }

[data-template="xfdev_trust_scan_page"] .header-image {
	display: none;
}
    
    [data-template="nf_tickets_ticket_view"] .header-image {
        display: none;
    }
    
    [data-template="nf_tickets_category_create_ticket"] .header-image {
        display: none;
    }
    
    [data-template="nf_tickets_ticket_category_chooser"] .header-image {
        display: none;
    }
    
    [data-template="forum_post_thread"] .header-image {
        display: none;
    }
    
    [data-template="forum_view"] .header-image {
        display: none;
    }
    
    
    [data-template="member_view"] .header-image {
        display: none;
    }
    
    [data-template="thread_view"] .header-image {
        display: none;
    }
    
    [data-template="dbtech_shop_overview"] .header-image {
        display: none;
    }
    
    [data-container-key="node-26"] .header-image {
        display: none;
    }
    
    [data-container-key="node-27"] .header-image {
        display: none;
    }
    
    [data-template="account_details"] .header-image {
        display: none;
    }
    
    [data-template="xfrm_thread_view_type_resource"] .header-image {
        display: none;
    }
    
    [data-template="xfrm_thread_view_type_resource"] .message-cell--user {
        display: none;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Staff Online Widget
    /*-------------------------------------------------------------------------*/
    
    [data-widget-section="staffMembers"] .block-minorHeader {
        color: #fff;
    }
    
    [data-widget-definition="staffOnline"] .block {
        margin-bottom;
    }
    
    
    /*-------------------------------------------------------------------------*/
    /* Navbar - Miscelleanous
    /*-------------------------------------------------------------------------*/
    
    .badge.badge--highlighted, .badgeContainer.badgeContainer--highlighted:after {
        font-size: 12px;
        background-image: linear-gradient(to left, #ca003d, #c33660, #9b0431);
    }
    
    .badge, .badgeContainer:after {
        position: absolute;
        left: -5px;
    }
    
    .menu-content {
        border-top: unset;
        color: unset;
    }
    
    .menu-arrow {
        display: none;
    }
    
    .menu-header {
        background: none;
        border-bottom: 1px solid #1c1c1c;
        color: #fff;
    }
    
    
    .menu-row.menu-row--separated+.menu-row {
        border-top: 1px solid #1c1c1c;
    }
    
    .menu-footer {
        padding: 6px 15px;
        font-size: 12px;
        color: #fff;
        border-top: 1px solid #1c1c1c;
        background: none;
    }
    
    .menu-row.menu-row--clickable:hover {
        background: #303030;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Page Nodes - Upgrade Page
    /*-------------------------------------------------------------------------
    
    [data-container-key="node-27"] .p-body-header, .shareButtons {
        display: none;
    } */
    
    
    /*-------------------------------------------------------------------------*/
    /* Signature Box
    /*-------------------------------------------------------------------------*/
    
    @media only screen and (max-width: 1000px) {
        .message-signature, .signature-header {
    
        display: none;
    
        }
        }
    
    .signaturebox {
        background-color: #1e1e1e;
        border-radius: 6px;
    }
    
    .message-signature {
        border-top: unset;
    }
    
    .message-content {
        display: flex;
        flex-direction: column;
    }
    
    .signature-header {
        margin-top:auto;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Postbit Buttons - Font Awesome
    /*-------------------------------------------------------------------------*/
    
    .post-report:before {
        content: "\\f6e3";
        font-family: \'Font Awesome 6 Free\';
        font-size: 14px;
        margin-right: 5px;
    }
    
    .post-edit:before {
        content: "\\f044";
        font-family: \'Font Awesome 6 Free\';
        font-size: 14px;
        margin-right: 5px;
    }
    
    .post-delete:before {
        content: "\\f1f8";
        font-family: \'Font Awesome 6 Free\';
        font-size: 14px;
        margin-right: 5px;
    }
    
    .post-spam:before {
        content: "\\f00d";
        font-family: \'Font Awesome 6 Free\';
        font-size: 14px;
        margin-right: 5px;
    }
    
    .post-ip:before {
        content: "\\f3fa";
        font-family: \'Font Awesome 6 Free\';
        font-size: 14px;
        margin-right: 5px;
    }
    
    .post-warn:before {
        content: "\\f071";
        font-family: \'Font Awesome 6 Free\';
        font-size: 14px;
        margin-right: 5px;
    }
    
    .post-multi:before {
        content: "\\f10d";
        font-family: \'Font Awesome 6 Free\';
        font-size: 14px;
        margin-right: 5px;
    }
    
    .post-reply:before {
        content: "\\f3e5";
        font-family: \'Font Awesome 6 Free\';
        font-size: 14px;
        margin-right: 5px;
    }
    
    .post-rep:before {
        content: "\\f164";
        font-family: \'Font Awesome 6 Free\';
        font-size: 14px;
        margin-right: 5px;
    }
    
    
    /*-------------------------------------------------------------------------*/
    /* Forum View/Topic View
    /*-------------------------------------------------------------------------*/
    
    .user-browsing {
        background-color: #2b2b2b;
        font-weight: 500;
        padding: 9px;
        text-transform: uppercase;
        color: #b2b2b2;
        border-bottom: unset;
        border-radius: 6px;
        margin-top: 20px;
    }
    
    .pageNavSimple-el.pageNavSimple-el--prev, .pageNavSimple-el.pageNavSimple-el--next {
        background: #2b2b2b;
    }
    
    .pageNavSimple-el.pageNavSimple-el--prev:hover, .pageNavSimple-el.pageNavSimple-el--current:hover {
        background: #3d3d3d;
    }
    
    .pageNavSimple-el.pageNavSimple-el--current {
        background: #2b2b2b;
        color: #fff;
    }
    
    .pageNavSimple-el {
        border: none;
    }
    
    .pageNav-page.pageNav-page--current {
        background: #5f5f5f !important;
    }
    
    .structItem-pageJump a {
        color: #ffffff !important;
    }
    
    @media only screen and (max-width: 1000px) {
        [data-template="thread_view"] .p-title-value {
            font-size: 20px !important;
        }
        }
    
    [data-template="forum_view"] .p-description {
        text-align: center;
    }
    
    .lfs .tabs-container {
        border-bottom: 1px solid #ffffff;
    }
    
    .lfs .tabGroup .structItem--lfsItem {
        border-top: 1px solid #1f1f1f;
    }
    
    [data-widget-key="live_forum_statistics"] {
        margin-top: 20px;
    }
    
    .lfs .tabs .tab:not(.is-selected):hover, .lfs .tabs .tab.is-selected:hover {
        background: #3333;
    }
    
    .lfs .tabGroup {
        border: none;
    }
    
    .lfs .tabGroup .structItem--lfsItem a:hover {
        color: #ffffff;
    }
    
    .lfs .tabGroup .structItem--lfsItem:hover {
        background: #343434;
    }
    
    li[role="tabpanel"] > .block--category > .block-container > h2 {
        display: none;
    }
    
    .inlineModBar {
        color: inherit;
        background: #1c1c1c;
    }
    
    .react-button.has-reaction {
        background: rgb(34 155 16) none repeat scroll 0% 0% !important;
    }
    
    .react-button {
        transition: .3s ease;
    }
    
    .react-button:hover {
        background: rgb(34 155 16) none repeat scroll 0% 0% !important;
    }
    
    .reactionsBar {
        border: none;
        border-radius: 6px;
    }
    
    .fr-toolbar {
        color: unset;
    }
    
    .fr-toolbar .fr-command.fr-btn {
        color: rgb(181 181 181 / 85%);
    }
    
    .fr-toolbar .fr-command.fr-btn.fr-dropdown:after, .fr-popup .fr-command.fr-btn.fr-dropdown:after, .fr-modal .fr-command.fr-btn.fr-dropdown:after {
        border-top: 4px solid rgb(244 250 255 / 85%);
    }
    
    .node--unread .node-icon i:before {
        color: #ca003d;
    }
    
    .signature-header {
        margin-bottom: 0px;
        cursor: default;
        overflow: hidden;
        font-size: 12px;
        display: block;
        color: #424242;
        font-weight: 600;
        text-transform: uppercase;
    }
    
    .signature-header:after {
        content: "";
        display: inline-block;
        height: 9px;
        vertical-align: -webkit-baseline-middle;
        width: 100%;
        margin-right: -100%;
        margin-left: 7px;
        border-top: 1px solid #424242;
    }
    
    .scNormalThreads {
        margin-top: 10px;
    }
    
    
    [data-template="thread_view"] .p-body {
        margin-top: 45px !important;
    }
    
    .block-tabHeader .tabs-tab:not(.is-readonly):hover {
        border-bottom: 2px solid #ca003d;
        background: #3333;
    }
    
    .xfa-forum-tabs {
         margin-bottom: 10px;
    }
    
    [data-template="thread_view"] .p-body {
        width: 75%;
        max-width: 1514px;
        margin: auto auto;
        overflow: hidden;
        animation: opac 0.8s;
    }
    
    @media only screen and (max-width: 1000px) {
    .profileshow {
        display: block!important;
        border-top-left-radius: 8px !important;
        border-top-right-radius: 8px !important;
    }
    }
    
    
    [data-template="forum_view"] .newthreadbutton > .profile_message:hover {
        transform: scale(1.01);
        transition: transform .3s;
    }
    
    [data-template="forum_view"] .block-container {
        background: unset;
    }
    
    [data-template="forum_view"] .structItemContainer-group {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    
    [data-template="forum_view"] .structItem--thread {
        background: #242424;
        border-radius: 6px;
        padding: 15px;
    }
    
    [data-template="forum_view"] .structItem-cell {
        padding: 15px;
    }
    
    [data-template="forum_view"] .structItem-cell--main {
        border-right: 2px solid #262626;
    }
    
    [data-template="forum_view"] .structItem-cell--latest {
        border-left: 2px solid #262626;
    }
    
    [data-template="forum_view"] .structItem--thread:hover {
        transition: transform .3s;
        opacity: 0.8 !important;
    }
    
    [data-template="forum_view"] .structItem-minor a:hover {
        text-decoration: unset;
    }
    
    [data-template="forum_view"] .structItem-parts li {
        font-size: 13px;
    }
    
    [data-template="forum_view"] .structItem-cell--meta, .structItem-cell--latest {
        vertical-align: middle;
    }
    
    [data-template="forum_view"] .pairs--justified, .structItem-latestDate {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    [data-template="forum_view"] .pairs--justified svg {
        fill: none;
        color: #fff;
    }
    
    .message-attribution-opposite a:hover {
        color: #ccc;
    }
    
    .message-cell.message-cell--main {
        width: 200%;
    }
    
    .message-attribution-main {
        display: flex;
        gap: 10px;
    }
    
    .post-controls {
        padding: 0 10px 10px;
        background: #202020;
    }
    
    .pageNav-page, .pageNav-jump {
        border: none;
    }
    
    .pageNav-jump {
        background: #383838;
    }
    
    .pageNav-jump {
        padding: 8px 13px;
        border-radius: 4px;
        box-shadow: 0 1px 3px rgba(0,0,0,.06), 0 1px 2px rgba(0,0,0,.12);
    }
    
    .pageNav-page {
        background: #303030;
        font-size: 13px;
        padding: 2px 7px !important;
        border-radius: 4px;
        box-shadow: 0 1px 3px rgba(0,0,0,.06), 0 1px 2px rgba(0,0,0,.12);
    }
    
    .pageNav-page.pageNav-page--current {
        color: #FFF;
        border: none;
        font-weight: 500;
        background: #44749d;
        font-size: 13px;
        padding: 2px 7px !important;
        border-radius: 4px;
        box-shadow: 0 1px 3px rgba(0,0,0,.06), 0 1px 2px rgba(0,0,0,.12);
    }
    
    .pageNav-page.pageNav-page--current:hover, .pageNav-page:hover, .pageNav-jump:hover {
        background: #383838;
    }
    
    [data-template="thread_view"] .p-title {
        background-color: #44749d;
        border-radius: 6px;
        padding: 13px;
        justify-content: center;
        margin-bottom: 10px;
        margin-top: 10px;
    }
    
    [data-templat="thread_view"] .shareButtons-buttons {
        display: none;
    }
    
    .reaction.reaction--imageHidden.reaction--1 i:before {
        content: "\\f004";
        color: #fff;
    }
    
    .react-button {
        background: rgb(27, 121, 13) none repeat scroll 0% 0%;
        padding: 7px 9px;
        border-radius: 2px;
        color: rgb(145,145,145) !important;
        font-weight: 500;
        border: 1px solid rgb(31, 158, 12);
        text-transform: uppercase;
        font-size: 11.5px;
        display: inline-block;
    }
    
    .reaction-text {
        display: none;
    }
    
    [data-template="thread_view"] .p-title-value {
        display: contents;
        color: #fff;
        font-size: 30px;
        font-weight: 600;
        text-shadow: 0 0 12px #000;
    }
    
    
    [data-template="thread_view"] .message--quickReply > .message-inner > .message-cell.message-cell--user {
        display: none;
    }
    
    .reply-button {
        padding: 10px 20px; 
        cursor: pointer; 
        font-size: 13px; 
        background: #262626; 
        color: #fff; 
        border: 0; 
        outline: 0; 
        transition: 350ms ease; 
        border-radius: 40rem; 
        margin-top: 5px;
        font-weight: unset;
    }
    
    [type="submit"] {
        font-weight: unset !important;
    }
    
    .reply-button:hover {
        background-color: #2A2A2A;
    }
    
    .fr-box.fr-basic {
        border: unset;
        background: #242424;
    }
    
    .fr-box.fr-basic.is-focused .fr-toolbar.fr-top {
        background: unset;
    }
    
    .fr-toolbar .fr-btn-grp {
        border-style: unset;
    }
    
    .fr-toolbar .fr-btn-grp.rte-tab--inactive {
        border-bottom-width: unset;
    }
    
    .message-attribution {
        background: rgb(30 30 30);
        font-size: 12px;
        padding: 10px;
        border-bottom: none !important;
        border-radius: 10px;
    }
    
    .message-content {
        padding: 0 4px;
    }
    
    .postbit_button {
        background-color: rgb(33,33,33);
        padding: 7px 9px;
        border-radius: 2px;
        color: rgb(145,145,145) !important;
        font-weight: 500;
        border: 1px solid rgb(35,35,35);
        text-transform: uppercase;
        font-size: 11.5px;
        display: inline-block;
    }
    
    .postbit_button:hover {
        background-color: rgb(30,30,30);
    }
    
    .message-attribution {
        border-bottom: unset;
    }
    
    .message-content {
        font-size: 16px;
    }
    
    
    .message-cell-user, .message-cell--main {
        padding: 10px !important;
    }
    
    .newthreadbutton {
        display: flex;
        justify-content: flex-end;
        margin: 0;
        overflow: visible;
        font: inherit;
        box-sizing: border-box;
        vertical-align: middle;
        font-size: .875rem;
        text-align: center;
        text-decoration: none;
        transition: .1s ease-in-out;
        border-radius: 6px;
        margin-bottom: 10px;
    }
    
    
    .p-breadcrumbs {
        background: #242424;
        color: #9c9c9c;
        padding: 8px 10px;
        margin-bottom: 15px;
        font-size: 14px;
        word-wrap: break-word;
        text-transform: uppercase;
        border-radius: 6px;
    }
    
    .p-breadcrumbs>li:after {
        content: "\\f101";
        width: 1.2857142899999996em;
        display: inline-block;
        margin: 0 7px;
        text-align: unset;
        vertical-align: text-top;
    }
    
    .p-breadcrumbs a {
        font-size: 14px;
        font-weight: 500 !important;
        color: #9c9c9c !important;
    }
    
    .p-breadcrumbs a:hover {
        text-decoration: underline;
    }
    
    [data-template="forum_view"] .node--depth2 {
        display: none;
    }
    
    [data-template="forum_view"] .block-filterBar, .structItem--quickCreate {
        display: none;
    }
    
    [data-template="forum_view"] .p-title-pageAction {
        display: flex;
        justify-content: flex-end;
    }
    
    [data-template="forum_view"] .p-title-value {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 9rem;
        border-radius: 1rem;
        background-size: contain,100%,100%;
        background-repeat: no-repeat,repeat,repeat;
        background-position: -1.25rem 0px,0 0,0 0;
        background-position: 0 0,0 0,0 0;
        margin: var(--default-margin) 0;
        color: white;
        position: relative;
        font-size: 40.8px;
        font-weight: 600;
        color: #fff;
    }
    
    [data-template="forum_view"] .p-breadcrumbs--bottom {
        display: none;
    }
    
    .scStickyBody {
        background: unset;
    }
    
    .scStickyThreads, .scNormalThreads {
        background-color: #2b2b2b;
        border-bottom: 1px solid #181818;
        font-weight: 500;
        padding: 9px;
        text-transform: uppercase;
        color: #b2b2b2;
        border-bottom: unset;
        border-radius: 6px;
    }
    
    .structItem {
        border-top: unset;
    }
    
    .scStickyThreads:before {
        content: "\\f06a";
    }
    
    .scNormalThreads:before {
        display: none;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Usertitle Colors
    /*-------------------------------------------------------------------------*/
    
    .admin-title {
        color: #ca1b18;
        font-weight: bold;
        text-shadow: 0px 0px 3px #000;
    }
    
    .supermod-title {
        color: #2a8b8e;
        text-shadow: 1px 1px 3px #000;
    }
    
    .cm-title {
        color: #FC4C02;
        font-weight: 700;
        text-shadow: 2px 2px 5px #000;
    }
    
    .fdev-title {
        color: #ffe000;
        font-weight: 700;
        text-shadow: 2px 2px 5px #000;
    }
    
    .mod-title {
        color: #ff7171;
        font-weight: 700;
        text-shadow: 2px 2px 5px #000;
    }

    .cosmic-title {
        font-weight: 500;
        color: white;
    }
    
    .supreme-title {
        font-weight: 500;
        color: #67ffff;
    }
    
    .infinity-title {
        color: #e484f7;
        font-weight: 700;
        text-shadow: 2px 2px 5px #000;
    }
    
    .olympus-title {
        color: #ffd96e;
        font-weight: 700;
        text-shadow: 2px 2px 5px #000;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Postbit Responsive
    /*-------------------------------------------------------------------------*/
    
    
    
    /*-------------------------------------------------------------------------*/
    /* Postbit
    /*-------------------------------------------------------------------------*/
    
    @media (max-width: 650px) {
    .author_info {
        display: none;
    }
    }
    
.reputation_negative {
	color: red;
}

    .xfdev_shop_item-icon {
        vertical-align: middle;
    }
    
    .author_info {
        background: #202020;
    }
    
    .avatar img {
        background-color: unset;
    }
    
    .usertitle-postbit {
        font-size: 13px;
        word-wrap: break-word;
        line-height: 1.5;
        background: #1b1b1b;
        padding: 4px 10px;
        text-align: center;
        margin-top: 6px;
        color: #666;
        border-bottom: 1px solid #212121;
    }
    
    [data-template="thread_view"] .avatar.avatar--m {
        width: 170px;
        height: 170px;
    }
    
    .message-threadStarterPost .message-cell.message-cell--user, .message-threadStarterPost .message-cell.message-cell--action {
        border: none;
    }
    
    
    .message-threadStarterPost .message-cell.message-cell--user, .message-threadStarterPost .message-cell.message-cell--action {
        min-width: unset;
    }
    
    .message-cell.message-cell--user, .message-cell.message-cell--action {
        background: #202020;
    }
    
    .message-cell--user, .message-cell {
        width: 200px;
        padding: 6px 5px;
        border-top: medium none;
        border-bottom: medium none;
        border-right: medium none;
        background-color: #242424;
        position: relative;
    }
    
    .block--messages .message, .block--messages .block-row {
        border: none;
    }
    
    
    /*-------------------------------------------------------------------------*/
    /* Postbit Responsive
    /*-------------------------------------------------------------------------*/
    
    @media (max-width: 650px) {
        .message-cell.message-cell--user {
            background: unset !important;
        }
    }
    
    @media (max-width: 650px) {
        .footer-back, #footer {
            display: none !important;
        }
    }
    
    @media (max-width: 650px) {
        .author_info, .message-cell.message-cell--user {
        width: 100% !important;
        }
    }
    
    @media (max-width: 650px) {
        .user_details .userBanner, .service-tag {
        display: none !important;
        }
    }
    
    @media (max-width: 650px) {
        .author_info {
        padding-bottom: unset !important;
        }
    }
    
    @media (max-width: 650px) {
        .d-flex, .align-items-center, .justify-content-center, .flex-wrap, .post-stats  {
        display: block;
        }
    }
    
    @media only screen and (max-width: 1000px) {
    .profileshow {
        display: block!important;
        border-top-left-radius: 8px !important;
        border-top-right-radius: 8px !important;
    }
    }
    
    @media only screen and (max-width: 1000px) {
    .message-cell, .message-cell-main {
        flex-direction: column;
    }
    }
    
    .profileshow {
        display: none;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Years of Service / Staff Tag / Profile Tags
    /*-------------------------------------------------------------------------*/
    
    .type-month-1,
    .type-month-2,
    .type-month-3,
    .type-month-4,
    .type-month-5,
    .type-month-6,
    .type-month-7,
    .type-month-8,
    .type-month-9,
    .type-month-10,
    .type-month-11 {
    color: hsl(114, 72%, 72%);
    font-weight: bold;
    }
    
    .type-year-1 {
    color: hsl(308, 100%, 72%);
    font-weight: bold;
    }
    
    .postbit--supporttag {
        padding: 5px 20px;
        color: #fff;
        text-align: center;
        border-radius: 3px;
        text-shadow: none;
        text-transform: uppercase;
        margin: 0 auto;
        font-weight: 600;
        background: #1b1b1b;
        border-width: 2px;
        border: 0px;
        display: table;
        width: 90%; 
    }
    
    .postbit--topmembertag {
        padding: 5px 20px;
        color: gold;
        text-align: center;
        border-radius: 3px;
        text-shadow: none;
        text-transform: uppercase;
        margin: 0 auto;
        font-weight: 600;
        background: #1b1b1b;
        border-width: 2px;
        border: 0px;
        display: table;
        width: 90%; 
    }
    
    .postbit--stafftag {
        padding: 5px 20px;
        color: #b1b2b4;
        text-align: center;
        border-radius: 3px;
        text-shadow: none;
        text-transform: uppercase;
        margin: 0 auto;
        font-weight: 600;
        background: #1b1b1b;
        border-width: 2px;
        border: 0px;
        display: table;
        width: 90%;
    }
    
    .memberprofile--stafftag {
        background: #202020;
        width: 100%;
    }
    
    .memberprofile--topmembertag {
        background: #202020;
        width: 100%;
    }
    
    .memberprofile--supporttag {
        background: #202020;
        width: 100%;
    }
    
    .memberprofile--userservice {
        background: #202020;
        width: 100%;
        font-size: 12px;
        margin-bottom: 5px;
    }
    
    .xfdev_shop_banner_list_container {
        align-items: center;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Forum Tabs
    /*-------------------------------------------------------------------------*/
    
    .block-tabHeader {
        border-bottom: unset;
        border-radius: 6px 6px 6px 6px;
        background-color: #212121 !important;
    }
    
    .xfa-forum-tabs {
        text-align: center;
    }
    
    .block-tabHeader .tabs-tab  {
        padding: 11px 10px;
    }
    
    .tabs-tab {
        padding: 11px 10px;
        font-weight: 600;
        font-size: 17.3px !important;
        color: #fff;
    }
    
    
    .block-tabHeader .tabs-tab.is-active, .block-tabHeader .tabs>input:checked+.tabs-tab--radio {
        border-color: unset;
        border-bottom: 2px solid #ca003d;
    }
    
    .block-tabHeader .tabs-tab {
        border-bottom: unset;
    }
    
    .tabs-tab {
    transition: unset;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Footer
    /*-------------------------------------------------------------------------*/

.cap {
	background-image: url(../assets/theme/cap.png);
	margin-left: 3px;
	height: 24px;
	width: 24px;
}
    
    @media only screen and (max-width: 1027px) {
        .footer-back-u {
            display: none;
        }
            }
    
    [data-widget-section="sysnative_membersrecentlyonline"] {
        padding-top: 20px;
    }
    
    [data-widget-section="sysnative_membersrecentlyonline"] .block-footer {
        border-top: #262626;
    }
    
    .p-footer {
        display: none;
    }
    .footer-back-inner {
        margin-top: 3.5rem;
        padding: 25px 0 2.5rem;
        background: #1c1c1c;
    }
    
    .footer-width {
        width: calc(74% + 14px);
        max-width: 1514px;
        margin: 0 auto;
    }
    
    .o-flex {
        display: flex;
    }
    
    .footer-nav {
        flex: 1;
    }
    
    .footer-nav h3 {
        color: #ca003d;
        font-weight: 500;
        font-size: 23px;
    }
    
    .footer-back {
        position: absolute;
        width: 100%;
        z-index: -1;
        margin-top: -2.5rem;
        background-size: cover;
    }
    
    .foot_footer {
        color: rgb(128,128,128);
        padding: 25px 20px;
        overflow: hidden;
    }
    
    .alertnav:before {
        content: "\\f0f3";
        font-family: \'Font Awesome\\ 5 Free\';
        padding: 10px 1px;
        font-size: 22px;
        line-height: 26px;
        color: #a4a4a4 !important;
    }
    
    
    .alert.is-unread {
        color: #ffffff;
        background: #383838;
    }
    
    .pmnav:before {
        content: "\\f27a";
        font-family: \'Font Awesome\\ 5 Free\';
        padding: 10px 1px;
        font-size: 22px;
        line-height: 26px;
        color: #a4a4a4 !important;
    }
    
    /* These were inline style tags. Uses id+class to override almost everything */
    #style-6UhIV.style-6UhIV {  
       padding-right: 5rem;  
    }  
    #style-qzK7n.style-qzK7n {  
    }  
    #style-UWofU.style-UWofU {  
       padding-right: 5rem;  
    }  
    #style-KGjvN.style-KGjvN {  
    }  
    #style-Apjs3.style-Apjs3 {  
    }  
    #style-zvNnC.style-zvNnC {  
       flex: 1.5;  
       color: #787878 !important;  
    }  
    #style-5wYkT.style-5wYkT {  
       background:none;  
       margin-top:20px;  
       border-top:0;  
    }  
    #style-pxcEw.style-pxcEw {  
       float: right;  
        text-align: right;  
    }  
    #style-jCx51.style-jCx51 {  
       float: left;  
        text-align: left;  
    }  
    
    /*-------------------------------------------------------------------------*/
    /* Notices
    /*-------------------------------------------------------------------------*/
    
    .bam_ogusers1 {
        background: #222 !important;
    }
    
    .bam_announcement {
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        text-align: center;
        margin: 10px auto;
        padding: 12px 12px !important;
        background: #EBEBEB;
        color: #000000;
        border-style: unset !important;
    }
    
    .notice-content {
        padding: unset;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Overlay
    /*-------------------------------------------------------------------------*/
    
    .smilieText {
        border: 1px solid #323232;
    }
    
    .nestable-item .nestable-content {
        border: none;
    }
    
    .nestable-item .nestable-handle {
        border: none;
    }
    
    .blockMessage {
        border: none;
    }
    
    .blockMessage.blockMessage--highlight {
        background: #2c2c2c;
    }
    
    .block-row.block-row--clickable:hover {
        background: #2d2d2d;
        color: inherit;
    }
    
    .formInfoRow--confirm {
        color: #7b7b7b;
    }
    
    .meterBarLabel {
        color: #fff;
    }
    
    
    .overlay {
        margin-top: 30vh;
        border: none;
        color: #fff;
    }
    
    .overlay-title {
        color: #fff;
        background: unset;
        border: none;    
    }
    
    .formRow-label, .iconic-label {
        color: #fff;
    }
    
    .formRow > dt > dd {
        color: #626262;
    }
    
    .formRow>dt {
        border: none;
    }
    
    .formSubmitRow-bar {
        background: unset;
    }
    
    .formSubmitRow-bar {
        border:none;
    }
    
    .input {
        color: #fff;
        background: #262626;
        border: none;
    }
    
    .inputNumber-button {
        background-color: rgb(33,33,33) !important;
        padding: 7px 9px;
        border-radius: 2px;
        color: rgb(145,145,145) !important;
        font-weight: 500;
        border: 1px solid rgb(35,35,35);
        text-transform: uppercase;
        font-size: 11.5px;
        display: inline-block;
        transition: .3s ease;
    }
    
    .inputGroup.inputGroup--joined .inputNumber-button:hover {
        background: rgb(41, 41, 41) !important;
    }
    
    .inputGroup.inputGroup--joined .inputGroup-text, .inputGroup.inputGroup--joined .input+.inputGroup-text, .inputGroup.inputGroup--joined .input+.input, .inputGroup.inputGroup--joined .inputGroup-text+.input {
        border: none;
    }
    
    .formRow .iconic>i {
        color: #505050;
    }
    
    .formRow .iconic>i:hover, .iconic:hover, .iconic {
        color: #424242;
    }
    
    /*-------------------------------------------------------------------------*/
    /* Footer
    /*-------------------------------------------------------------------------*/
    
    .footer-back-u {
        width: 100%;
        margin-top: -2.5rem;
        background-size: cover;
    }
    
    .footer-back-inner { 
        margin-top: 3.5rem; 
        padding: 25px 0 2.5rem; 
        background: #1c1c1c;
    } 
    
    .foot_footer { 
        color:  rgb(128,128,128); 
        padding:  25px 20px; 
        overflow:  hidden; 
        margin-top: 70px !important;
    } 
    
    .o-flex { 
        display: flex;
    } 
    
    .footer-width { 
        width: calc(74% + 14px); 
        max-width: 1514px; 
        margin: 0 auto;
    } 
    
    .footer-nav { 
        flex: 1;
    } 
    
    .footer_designed { 
        color: #44749d;
    } 
    
    
    .footer-nav ul a li {
        display: flex;
        padding: 10px 0;
        margin-left: -40px;
        width: calc(100% - 30px);
        cursor: pointer;
        color: #757575;
        align-items: center;
    }
    
    .footer-nav ul li:hover  { 
        color: #dcdcdc; 
        border-color: #2d2d2d;
    } 
    
    .footer-nav ul a:last-child li  { 
        border-bottom: none;
    } 
    
    /*-------------------------------------------------------------------------*/
    /* Keyframes - Animations
    /*-------------------------------------------------------------------------*/
    
    @keyframes opac {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
        }
    
    @keyframes textclip {
        100% {
            background-position: 200% center;
        }
    }';
	return $__finalCompiled;
}
);