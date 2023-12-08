<?php
// FROM HASH: 179e0b8ea7a95d4eb75028d510584c43
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/** core fancybox css **/
body.compensate-for-scrollbar {
	overflow: hidden;
}

.fancybox-active {
	height: auto;
}

.fancybox-is-hidden {
	left: -9999px;
	margin: 0;
	position: absolute !important;
	top: -9999px;
	visibility: hidden;
}

.fancybox-container {
	-webkit-backface-visibility: hidden;
	height: 100%;
	left: 0;
	outline: none;
	position: fixed;
	-webkit-tap-highlight-color: transparent;
	top: 0;
	-ms-touch-action: manipulation;
	touch-action: manipulation;
	transform: translateZ(0);
	width: 100%;
	z-index: 99992;
}

.fancybox-container * {
	box-sizing: border-box;
}

.fancybox-outer,
.fancybox-inner,
.fancybox-bg,
.fancybox-stage {
	bottom: 0;
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
}

.fancybox-outer {
	-webkit-overflow-scrolling: touch;
	overflow-y: auto;
}

.fancybox-bg {
	background: rgb(30, 30, 30);
	opacity: 0;
	transition-duration: inherit;
	transition-property: opacity;
	transition-timing-function: cubic-bezier(.47, 0, .74, .71);
}

.fancybox-is-open .fancybox-bg {
	opacity: .9;
	transition-timing-function: cubic-bezier(.22, .61, .36, 1);
}

.fancybox-infobar,
.fancybox-toolbar,
.fancybox-caption,
.fancybox-navigation .fancybox-button {
	direction: ltr;
	opacity: 0;
	position: absolute;
	transition: opacity .25s ease, visibility 0s ease .25s;
	visibility: hidden;
	z-index: 99997;
}

.fancybox-show-infobar .fancybox-infobar,
.fancybox-show-toolbar .fancybox-toolbar,
.fancybox-show-caption .fancybox-caption,
.fancybox-show-nav .fancybox-navigation .fancybox-button {
	opacity: 1;
	transition: opacity .25s ease 0s, visibility 0s ease 0s;
	visibility: visible;
}

.fancybox-infobar {
	color: #ccc;
	font-size: 13px;
	-webkit-font-smoothing: subpixel-antialiased;
	height: 44px;
	left: 0;
	line-height: 44px;
	min-width: 44px;
	mix-blend-mode: difference;
	padding: 0 10px;
	pointer-events: none;
	top: 0;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.fancybox-toolbar {
	right: 0;
	top: 0;
}

.fancybox-stage {
	direction: ltr;
	overflow: visible;
	transform: translateZ(0);
	z-index: 99994;
}

.fancybox-is-open .fancybox-stage {
	overflow: hidden;
}

.fancybox-slide {
	-webkit-backface-visibility: hidden;
	/* Using without prefix would break IE11 */
	display: none;
	height: 100%;
	left: 0;
	outline: none;
	overflow: auto;
	-webkit-overflow-scrolling: touch;
	padding: 44px;
	position: absolute;
	text-align: center;
	top: 0;
	transition-property: transform, opacity;
	white-space: normal;
	width: 100%;
	z-index: 99994;
}

.fancybox-slide::before {
	content: \'\';
	display: inline-block;
	font-size: 0;
	height: 100%;
	vertical-align: middle;
	width: 0;
}

.fancybox-is-sliding .fancybox-slide,
.fancybox-slide--previous,
.fancybox-slide--current,
.fancybox-slide--next {
	display: block;
}

.fancybox-slide--image {
	overflow: hidden;
	padding: 44px 0;
}

.fancybox-slide--image::before {
	display: none;
}

.fancybox-slide--html {
	padding: 6px;
}

.fancybox-content {
	background: #fff;
	display: inline-block;
	margin: 0;
	max-width: 100%;
	overflow: auto;
	-webkit-overflow-scrolling: touch;
	padding: 44px;
	position: relative;
	text-align: left;
	vertical-align: middle;
}

.fancybox-slide--image .fancybox-content {
	animation-timing-function: cubic-bezier(.5, 0, .14, 1);
	-webkit-backface-visibility: hidden;
	background: transparent;
	background-repeat: no-repeat;
	background-size: 100% 100%;
	left: 0;
	max-width: none;
	overflow: visible;
	padding: 0;
	position: absolute;
	top: 0;
	-ms-transform-origin: top left;
	transform-origin: top left;
	transition-property: transform, opacity;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	z-index: 99995;
}

.fancybox-can-zoomOut .fancybox-content {
	cursor: zoom-out;
}

.fancybox-can-zoomIn .fancybox-content {
	cursor: zoom-in;
}

.fancybox-can-swipe .fancybox-content,
.fancybox-can-pan .fancybox-content {
	cursor: -webkit-grab;
	cursor: grab;
}

.fancybox-is-grabbing .fancybox-content {
	cursor: -webkit-grabbing;
	cursor: grabbing;
}

.fancybox-container [data-selectable=\'true\'] {
	cursor: text;
}

.fancybox-image,
.fancybox-spaceball {
	background: transparent;
	border: 0;
	height: 100%;
	left: 0;
	margin: 0;
	max-height: none;
	max-width: none;
	padding: 0;
	position: absolute;
	top: 0;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	width: 100%;
}

.fancybox-spaceball {
	z-index: 1;
}

.fancybox-slide--video .fancybox-content,
.fancybox-slide--map .fancybox-content,
.fancybox-slide--pdf .fancybox-content,
.fancybox-slide--iframe .fancybox-content {
	height: 100%;
	overflow: visible;
	padding: 0;
	width: 100%;
}

.fancybox-slide--video .fancybox-content {
	background: #000;
}

.fancybox-slide--map .fancybox-content {
	background: #e5e3df;
}

.fancybox-slide--iframe .fancybox-content {
	background: #fff;
}

.fancybox-video,
.fancybox-iframe {
	background: transparent;
	border: 0;
	display: block;
	height: 100%;
	margin: 0;
	overflow: hidden;
	padding: 0;
	width: 100%;
}

/* Fix iOS */
.fancybox-iframe {
	left: 0;
	position: absolute;
	top: 0;
}

.fancybox-error {
	background: #fff;
	cursor: default;
	max-width: 400px;
	padding: 40px;
	width: 100%;
}

.fancybox-error p {
	color: #444;
	font-size: 16px;
	line-height: 20px;
	margin: 0;
	padding: 0;
}

/* Buttons */

.fancybox-button {
	background: rgba(30, 30, 30, .6);
	border: 0;
	border-radius: 0;
	box-shadow: none;
	cursor: pointer;
	display: inline-block;
	height: 44px;
	margin: 0;
	padding: 10px;
	position: relative;
	transition: color .2s;
	vertical-align: top;
	visibility: inherit;
	width: 44px;
}

.fancybox-button,
.fancybox-button:visited,
.fancybox-button:link {
	color: #ccc;
}

.fancybox-button:hover {
	color: #fff;
}

.fancybox-button:focus {
	outline: none;
}

.fancybox-button.fancybox-focus {
	outline: 1px dotted;
}

.fancybox-button[disabled],
.fancybox-button[disabled]:hover {
	color: #888;
	cursor: default;
	outline: none;
}

/* Fix IE11 */
.fancybox-button div {
	height: 100%;
}

.fancybox-button svg {
	display: block;
	height: 100%;
	overflow: visible;
	position: relative;
	width: 100%;
}

.fancybox-button svg path {
	fill: currentColor;
	stroke-width: 0;
}

.fancybox-button--play svg:nth-child(2),
.fancybox-button--fsenter svg:nth-child(2) {
	display: none;
}

.fancybox-button--pause svg:nth-child(1),
.fancybox-button--fsexit svg:nth-child(1) {
	display: none;
}

.fancybox-progress {
	background: #ff5268;
	height: 2px;
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
	-ms-transform: scaleX(0);
	transform: scaleX(0);
	-ms-transform-origin: 0;
	transform-origin: 0;
	transition-property: transform;
	transition-timing-function: linear;
	z-index: 99998;
}

/* Close button on the top right corner of html content */

.fancybox-close-small {
	background: transparent;
	border: 0;
	border-radius: 0;
	color: #ccc;
	cursor: pointer;
	opacity: .8;
	padding: 8px;
	position: absolute;
	right: -12px;
	top: -44px;
	z-index: 401;
}

.fancybox-close-small:hover {
	color: #fff;
	opacity: 1;
}

.fancybox-slide--html .fancybox-close-small {
	color: currentColor;
	padding: 10px;
	right: 0;
	top: 0;
}

.fancybox-slide--image.fancybox-is-scaling .fancybox-content {
	overflow: hidden;
}

.fancybox-is-scaling .fancybox-close-small,
.fancybox-is-zoomable.fancybox-can-pan .fancybox-close-small {
	display: none;
}

/* Navigation arrows */

.fancybox-navigation .fancybox-button {
	background-clip: content-box;
	height: 100px;
	opacity: 0;
	position: absolute;
	top: ~"calc(50% - 50px)";
	width: 70px;
}

.fancybox-navigation .fancybox-button div {
	padding: 7px;
}

.fancybox-navigation .fancybox-button--arrow_left {
	left: 0;
	left: env(safe-area-inset-left);
	padding: 31px 26px 31px 6px;
}

.fancybox-navigation .fancybox-button--arrow_right {
	padding: 31px 6px 31px 26px;
	right: 0;
	right: env(safe-area-inset-right);
}

/* Caption */

.fancybox-caption {
	background: linear-gradient(to top,
	rgba(0, 0, 0, .85) 0%,
	rgba(0, 0, 0, .3) 50%,
	rgba(0, 0, 0, .15) 65%,
	rgba(0, 0, 0, .075) 75.5%,
	rgba(0, 0, 0, .037) 82.85%,
	rgba(0, 0, 0, .019) 88%,
	rgba(0, 0, 0, 0) 100%);
	bottom: 0;
	color: #eee;
	font-size: 14px;
	font-weight: 400;
	left: 0;
	line-height: 1.5;
	padding: 75px 44px 25px 44px;
	pointer-events: none;
	right: 0;
	text-align: center;
	z-index: 99996;
}

@supports (padding: max(0px)) {
	.fancybox-caption {
		padding: 75px ~"max(44px, env(safe-area-inset-right)) max(25px, env(safe-area-inset-bottom)) max(44px, env(safe-area-inset-left))";
	}
}

.fancybox-caption--separate {
	margin-top: -50px;
}

.fancybox-caption__body {
	max-height: 50vh;
	overflow: auto;
	pointer-events: all;
}

.fancybox-caption a,
.fancybox-caption a:link,
.fancybox-caption a:visited {
	color: #ccc;
	text-decoration: none;
}

.fancybox-caption a:hover {
	color: #fff;
	text-decoration: underline;
}

/* Loading indicator */

.fancybox-loading {
	animation: fancybox-rotate 1s linear infinite;
	background: transparent;
	border: 4px solid #888;
	border-bottom-color: #fff;
	border-radius: 50%;
	height: 50px;
	left: 50%;
	margin: -25px 0 0 -25px;
	opacity: .7;
	padding: 0;
	position: absolute;
	top: 50%;
	width: 50px;
	z-index: 99999;
}

@keyframes fancybox-rotate {
	100% {
		transform: rotate(360deg);
	}
}

/* Transition effects */

.fancybox-animated {
	transition-timing-function: cubic-bezier(0, 0, .25, 1);
}

/* transitionEffect: slide */

.fancybox-fx-slide.fancybox-slide--previous {
	opacity: 0;
	transform: translate3d(-100%, 0, 0);
}

.fancybox-fx-slide.fancybox-slide--next {
	opacity: 0;
	transform: translate3d(100%, 0, 0);
}

.fancybox-fx-slide.fancybox-slide--current {
	opacity: 1;
	transform: translate3d(0, 0, 0);
}

/* transitionEffect: fade */

.fancybox-fx-fade.fancybox-slide--previous,
.fancybox-fx-fade.fancybox-slide--next {
	opacity: 0;
	transition-timing-function: cubic-bezier(.19, 1, .22, 1);
}

.fancybox-fx-fade.fancybox-slide--current {
	opacity: 1;
}

/* transitionEffect: zoom-in-out */

.fancybox-fx-zoom-in-out.fancybox-slide--previous {
	opacity: 0;
	transform: scale3d(1.5, 1.5, 1.5);
}

.fancybox-fx-zoom-in-out.fancybox-slide--next {
	opacity: 0;
	transform: scale3d(.5, .5, .5);
}

.fancybox-fx-zoom-in-out.fancybox-slide--current {
	opacity: 1;
	transform: scale3d(1, 1, 1);
}

/* transitionEffect: rotate */

.fancybox-fx-rotate.fancybox-slide--previous {
	opacity: 0;
	-ms-transform: rotate(-360deg);
	transform: rotate(-360deg);
}

.fancybox-fx-rotate.fancybox-slide--next {
	opacity: 0;
	-ms-transform: rotate(360deg);
	transform: rotate(360deg);
}

.fancybox-fx-rotate.fancybox-slide--current {
	opacity: 1;
	-ms-transform: rotate(0deg);
	transform: rotate(0deg);
}

/* transitionEffect: circular */

.fancybox-fx-circular.fancybox-slide--previous {
	opacity: 0;
	transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);
}

.fancybox-fx-circular.fancybox-slide--next {
	opacity: 0;
	transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);
}

.fancybox-fx-circular.fancybox-slide--current {
	opacity: 1;
	transform: scale3d(1, 1, 1) translate3d(0, 0, 0);
}

/* transitionEffect: tube */

.fancybox-fx-tube.fancybox-slide--previous {
	transform: translate3d(-100%, 0, 0) scale(.1) skew(-10deg);
}

.fancybox-fx-tube.fancybox-slide--next {
	transform: translate3d(100%, 0, 0) scale(.1) skew(10deg);
}

.fancybox-fx-tube.fancybox-slide--current {
	transform: translate3d(0, 0, 0) scale(1);
}

/* Styling for Small-Screen Devices */
@media all and (max-height: 576px) {
	.fancybox-slide {
		padding-left: 6px;
		padding-right: 6px;
	}

	.fancybox-slide--image {
		padding: 6px 0;
	}

	.fancybox-close-small {
		right: -6px;
	}

	.fancybox-slide--image .fancybox-close-small {
		background: #4e4e4e;
		color: #f2f4f6;
		height: 36px;
		opacity: 1;
		padding: 6px;
		right: 0;
		top: 0;
		width: 36px;
	}

	.fancybox-caption {
		padding-left: 12px;
		padding-right: 12px;
	}

	@supports (padding: max(0px)) {
		.fancybox-caption {
			padding-left: ~"max(12px, env(safe-area-inset-left))";
			padding-right: ~"max(12px, env(safe-area-inset-right))";
		}
	}
}
/* Share */

.fancybox-share {
	background: #f4f4f4;
	border-radius: 3px;
	max-width: 90%;
	padding: 30px;
	text-align: center;
}

.fancybox-share h1 {
	color: #222;
	font-size: 35px;
	font-weight: 700;
	margin: 0 0 20px 0;
}

.fancybox-share p {
	margin: 0;
	padding: 0;
}

.fancybox-share__button {
	border: 0;
	border-radius: 3px;
	display: inline-block;
	font-size: 14px;
	font-weight: 700;
	line-height: 40px;
	margin: 0 5px 10px 5px;
	min-width: 130px;
	padding: 0 15px;
	text-decoration: none;
	transition: all .2s;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	white-space: nowrap;
}

.fancybox-share__button:visited,
.fancybox-share__button:link {
	color: #fff;
}

.fancybox-share__button:hover {
	text-decoration: none;
}

.fancybox-share__button--fb {
	background: #3b5998;
}

.fancybox-share__button--fb:hover {
	background: #344e86;
}

.fancybox-share__button--pt {
	background: #bd081d;
}

.fancybox-share__button--pt:hover {
	background: #aa0719;
}

.fancybox-share__button--tw {
	background: #1da1f2;
}

.fancybox-share__button--tw:hover {
	background: #0d95e8;
}

.fancybox-share__button svg {
	height: 25px;
	margin-right: 7px;
	position: relative;
	top: -1px;
	vertical-align: middle;
	width: 25px;
}

.fancybox-share__button svg path {
	fill: #fff;
}

.fancybox-share__input {
	background: transparent;
	border: 0;
	border-bottom: 1px solid #d7d7d7;
	border-radius: 0;
	color: #5d5b5b;
	font-size: 14px;
	margin: 10px 0 0 0;
	outline: none;
	padding: 10px 15px;
	width: 100%;
}
/* Thumbs */

.fancybox-thumbs {
	background: #ddd;
	bottom: 0;
	display: none;
	margin: 0;
	-webkit-overflow-scrolling: touch;
	-ms-overflow-style: -ms-autohiding-scrollbar;
	padding: 2px 2px 4px 2px;
	position: absolute;
	right: 0;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	top: 0;
	width: 212px;
	z-index: 99995;
}

.fancybox-thumbs-x {
	overflow-x: auto;
	overflow-y: hidden;
}

.fancybox-show-thumbs .fancybox-thumbs {
	display: block;
}

.fancybox-show-thumbs .fancybox-inner {
	right: 212px;
}

.fancybox-thumbs__list {
	font-size: 0;
	height: 100%;
	list-style: none;
	margin: 0;
	overflow-x: hidden;
	overflow-y: auto;
	padding: 0;
	position: absolute;
	position: relative;
	white-space: nowrap;
	width: 100%;
}

.fancybox-thumbs-x .fancybox-thumbs__list {
	overflow: hidden;
}

.fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar {
	width: 7px;
}

.fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-track {
	background: #fff;
	border-radius: 10px;
	box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
}

.fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-thumb {
	background: #2a2a2a;
	border-radius: 10px;
}

.fancybox-thumbs__list a {
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	background-color: rgba(0, 0, 0, .1);
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	cursor: pointer;
	float: left;
	height: 75px;
	margin: 2px;
	max-height: ~"calc(100% - 8px)";
	max-width: ~"calc(50% - 4px)";
	outline: none;
	overflow: hidden;
	padding: 0;
	position: relative;
	-webkit-tap-highlight-color: transparent;
	width: 100px;
}

.fancybox-thumbs__list a::before {
	border: 6px solid #ff5268;
	bottom: 0;
	content: \'\';
	left: 0;
	opacity: 0;
	position: absolute;
	right: 0;
	top: 0;
	transition: all .2s cubic-bezier(.25, .46, .45, .94);
	z-index: 99991;
}

.fancybox-thumbs__list a:focus::before {
	opacity: .5;
}

.fancybox-thumbs__list a.fancybox-thumbs-active::before {
	opacity: 1;
}

/* Styling for Small-Screen Devices */
@media all and (max-width: 576px) {
	.fancybox-thumbs {
		width: 110px;
	}

	.fancybox-show-thumbs .fancybox-inner {
		right: 110px;
	}

	.fancybox-thumbs__list a {
		max-width: ~"calc(100% - 10px)";
	}
}';
	return $__finalCompiled;
}
);