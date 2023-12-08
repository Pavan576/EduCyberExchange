<?php
// FROM HASH: 6cc5c944a7eb6b86bd3279780bb1d5ba
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '[data-template="xfdev_bug_tracker_index"] .p-body-header, .header-section {
	display: none;
}

[data-template="xfdev_bug_tracker_view"] .message-cell--user, .p-body-header {
	display: none;
}

[data-template="xfdev_bug_tracker_create"] .p-body-header, .header-section {
	display: none;
}

.bg-info {
    background-color: #17a2b8 !important;
}

input.form-control {
    padding: 6px 12px !important;
}
.form-control {
    color: white !important;
}
.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    color: #848fa0;
    background-color: #2c2c2c;
    background-clip: padding-box;
    border: 2px solid #3e3e3e;
    border-radius: var(--rounded);
    font-weight: 400 !important;
    -webkit-appearance: none;
}

.fr-element {
	background: #242424 !important;
}

.form-control:focus, .checkout-container .payment-method:hover, .checkout-container .payment-method:focus {
    -webkit-transition: border-color 0.25s, color 0.25s;
    -o-transition: border-color 0.25s, color 0.25s;
    transition: border-color 0.25s, color 0.25s;
}

.form-control:focus {
    border: 2px solid #DC3545;
    color: #9da5b3;
    outline: 0;
}

.alert {
	color: #fff;
	font-weight: 500 !important;
}

.mb-4, .my-4 {
    margin-bottom: 1rem !important;
}
.mt-3, .my-3 {
    margin-top: 1.2rem !important;
}


@media (min-width: 576px) {
.alert, .wrapper {
    border-radius: 0.65rem;
}
	}

@media (min-width: 576px) {
.main-title, .forum header {
    border-radius: 0.65rem 0.65rem 0 0;
}
}

.main-title {
    position: relative;
    color: rgba(255, 255, 255, 0.85);
    padding: 1.25rem 1rem;
	font-weight: 500 !important;
    z-index: 1;
}

.bg-primary {
    background-color: #dc3545 !important;
}


.button--primary, [type="submit"] {
	    padding: 0px 11px !important;
}

.dropdown-menu.show {
    display: block;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 32rem;
    margin: 0.75rem 0 0;
    font-size: 1.3rem;
    text-align: left;
    list-style: none;
    background-color: #282829;
    background-clip: padding-box;
    border-radius: var(--rounded);
    box-shadow: 0 0.5px 1.5px rgba(0, 0, 0, 0.036), 0 1.1px 3.5px rgba(0, 0, 0, 0.052), 0 2px 6.1px rgba(0, 0, 0, 0.064), 0 3.1px 9.6px rgba(0, 0, 0, 0.075), 0 4.8px 14.9px rgba(0, 0, 0, 0.086), 0 7.5px 23.2px rgba(0, 0, 0, 0.098), 0 12.5px 38.5px rgba(0, 0, 0, 0.114), 0 25px 77px rgba(0, 0, 0, 0.15);
    transform-origin: center top;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 1rem 1rem !important;
    clear: both;
    font-weight: 400 !important;
    color: #9da5b3;
    border: none !important;
    font-size: 13px;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    cursor: pointer;
}

.dropdown-item-bs:first-child:hover, .dropdown-item:first-child:hover, .dropdown-item:first-child:focus {
    border-radius: 0.65rem 0.65rem 0 0;
}
.dropdown-item:hover, .dropdown-item:focus {
    color: #bec3cc;
    text-decoration: none;
    background-color: #343434 !important;
}

/* Set up the transition animation */
.dropdown-menu {
  transition: height 0.3s ease-out;
}

/* When the dropdown menu is visible, set its height to auto */
.dropdown-menu[style*="display: block"] {
  height: auto !important;
}

.bug-status.confirmed::before {
    background-color: var(--bg-warning);
    content: "\\f0ad";
}

main {
	padding-top: 30px;
}

.bug-status {
  height: 30px;
  width: 30px;
}

.bug-status::before {
  position: absolute;
  font-family: "Font Awesome 5 Pro";
  height: 30px;
  width: 30px;
  line-height: 30px;
  text-align: center;
  font-size: 14px !important;
  border-radius: var(--rounded);
  color: rgba(255, 255, 255, 0.85);
}

.bug-status.confirmed::before {
  background-color: var(--bg-warning);
  content: "\\f0ad";
}

.bug-status.awatingresponse::before {
  background-color: var(--bg-tertiary);
  content: "\\f4fd";
  color: var(--color-secondary);
}

.bug-status.discarded::before {
  background-color: var(--bg-danger);
  content: "\\f7f9";
}

.page-header {
	border-radius: 4px;
}

#report-button {
	font-weight: 500 !important;
}

:root { 
    --bg-primary:    #dc3545 !important; 
    --bg-secondary:     #212735; 
    --bg-tertiary:     #262f3f;
	    --bg-warning: #d26d22;
    --bg-quaternary:     #2e394c; 
    --bg-success:     #43a047; 
    --bg-danger:     #dc3545; 
    --color-secondary:     #778296; 
    --font-bold:     500; 
    --rounded:     0.65rem; 
} 


.container { 
    width: 100%; 
    padding-right: 15px; 
    padding-left: 15px; 
    margin-right: auto; 
    margin-left: auto;
} 

@media (min-width: 576px){ 
  .container { 
    max-width: 540px;
  } 
}     

@media (min-width: 768px){ 
  .container { 
    max-width: 95%;
  } 
}     

@media (min-width: 992px){ 
  .container { 
    max-width: 95%;
  } 
}     

@media (min-width: 1200px){ 
  .container { 
    max-width: 90%; 
    padding-right: 15px; 
    padding-left: 15px;
  } 
}     

@media (min-width: 1400px){ 
  .container { 
    max-width: 80%; 
    padding-right: 15px; 
    padding-left: 15px;
  } 
}     

@media (min-width: 1700px){ 
  .container { 
    max-width: 70%; 
    padding-right: 15px; 
    padding-left: 15px;
  } 
}     

@media (min-width: 1950px){ 
  .container { 
    max-width: 1400px; 
    padding-right: 15px; 
    padding-left: 15px;
  } 
}     

.bg-danger { 
    background-color: var(--bg-danger) !important;
} 

.mb-3 { 
    margin-bottom: 1rem !important;
} 

.mt-n3 { 
    margin-top: -1rem !important;
} 

.page-header { 
    padding: 30px 0; 
    position: relative; 
    z-index: 1; 
    border-top: 1px solid rgba(255, 255, 255, 0.12);
} 

.d-flex { 
    display: -ms-flexbox; 
    display: flex;
} 

.flex-row { 
    -ms-flex-direction: row !important; 
    flex-direction: row !important;
} 

.align-items-center { 
    -ms-flex-align: center !important; 
    align-items: center !important;
} 

.wrapper { 
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
    0 2px 4px -1px rgba(0, 0, 0, 0.06);
} 

@media (min-width: 576px){ 
  .wrapper { 
    border-radius: var(--rounded);
  } 
}     

.block-outer { 
    padding-bottom: 15px;
} 

.block-outer.block-outer--after { 
    padding-top: 15px; 
    padding-bottom: 0;
} 

.block-outer:before,.block-outer:after { 
    content: " "; 
    display: table;
} 

.block-outer:after { 
    clear: both;
} 

h2 { 
    margin-top:   0;
    font-weight:  500; 
    line-height:  1.2; 
    color:  inherit; 
    margin-bottom:  0;
    font-size: 1.4rem;
} 

.flex-fill { 
    -ms-flex: 1 1 auto !important; 
    flex: 1 1 auto !important;
} 

.font-weight-bold { 
    font-weight: 500 !important;
} 

.text-danger { 
    color: #ef5350 !important;
} 

.container h2  { 
    font-size: 22.4px !important;
} 

.flex-grow-0 { 
    -ms-flex-positive: 0 !important; 
    flex-grow: 0 !important;
} 

.flex-shrink-0 { 
    -ms-flex-negative: 0 !important; 
    flex-shrink: 0 !important;
} 

.ml-3 { 
    margin-left: 1.2rem !important;
} 

.p-3 { 
    padding: 1rem !important;
} 

.main-row { 
    background-color: #262626; 
    border-bottom: 1px solid #1c1c1c;
} 

@media (min-width: 576px){ 
  .main-row:first-child { 
    border-radius:  unset;
  } 
}     

.main-row:last-child { 
    border-bottom: none;
} 

@media (min-width: 576px){ 
  .main-row:last-child { 
    border-radius: 0 0 var(--rounded) var(--rounded);
  } 
}     

nav { 
    display: block;
} 

h1 { 
    font-size:  1.8rem;
    margin:    .67em 0;
    margin-top:   0;
    font-weight:  500; 
    line-height:  1.2; 
    color:  inherit; 
    margin-bottom:  0;
} 

.page-header h1  { 
    font-size:  28.8px;
    color:  rgba(255, 255, 255, 0.85); 
    font-weight:  var(--font-bold); 
    margin-bottom:  0.5rem;
} 

select { 
    font-family:   inherit; 
    font-size:   inherit; 
    line-height:   inherit;
    margin:   0; 
    text-transform:    none;
    word-wrap: normal;
} 

.custom-select { 
    display:  inline-block; 
    height:  calc(2.05rem + 4px); 
    padding:  0.375rem 1.75rem 0.375rem 0.75rem; 
    line-height:  1.5; 
    color:  #727878; 
    vertical-align:  middle; 
    font-size:  0.9rem; 
    background:  #1b202b
    url("data: image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 4 5\'%3E%3Cpath fill=\'%23868A8E\' d=\'M2 0L0 2h4zm0 5L0 3h4z\'/%3E%3C/svg%3E")
    no-repeat right 0.75rem center;
    background-size: 10px 10px !important;
    border:  2px solid #1b202b; 
    border-radius:  0.25rem; 
    -webkit-appearance:  none; 
    -moz-appearance:  none; 
    appearance:  none; 
    background-image:  url("data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 4 5\'%3E%3Cpath fill=\'%23868A8E\' d=\'M2 0L0 2h4zm0 5L0 3h4z\'/%3E%3C/svg%3E"); 
    background-position-x:  right 0.75rem; 
    background-position-y:  center; 
    background-repeat-x:  no-repeat; 
    background-repeat-y:  no-repeat; 
    background-attachment:  initial; 
    background-origin:  initial; 
    background-clip:  initial; 
    background-color:  rgb(27, 32, 43);
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
    box-shadow 0.15s ease-in-out;
} 

.border-secondary { 
    border-color: #282828 !important;
} 

.bg-secondary { 
    background-color: #262626 !important;
} 

.container .custom-select  { 
    font-size: 14.4px; 
    height: 37px;
} 

.position-relative { 
    position: relative !important;
} 

.mr-3 { 
    margin-right: 1rem !important;
} 

.bug-status { 
    height: 30px; 
    width: 30px;
} 

.bug-status:before { 
    position:  absolute; 
    font-family:  "Font Awesome 5 Pro"; 
    height:  30px; 
    width:  30px; 
    line-height:  30px; 
    text-align:  center; 
    border-radius:  var(--rounded); 
    color:  rgba(255, 255, 255, 0.85);
} 

.bug-status.bugfixed:before { 
    background-color: var(--bg-success); 
    content: "\\f00c";
} 

.no-overflow { 
    overflow: hidden;
} 

.justify-content-between { 
    -ms-flex-pack: justify !important; 
    justify-content: space-between !important;
} 

.pagination-top { 
    margin-bottom: 1rem;
} 

.pageNavSimple { 
    display: inline-flex; 
    height: 24px; 
    line-height: 24px;
} 

.pageNavWrapper--mixed .pageNavSimple  { 
    display: none;
} 

a { 
    background-color:   transparent;
    -webkit-text-decoration-skip:    objects;
    color:  #cbd3df;
    text-decoration:   none; 
} 

a:hover { 
    color:  #dce2ea; 
    text-decoration:  none;
} 

.font-size-08 { 
    font-size: 13px;
} 

.text-secondary { 
    color: inherit;
} 

.pageNav { 
    display: flex;
} 

.justify-content-start { 
    -ms-flex-pack: start !important; 
    justify-content: flex-start !important;
} 

.pagination-location-previous { 
    width: 45px;
} 

ul { 
    margin-top: 0; 
    margin-bottom: 0; 
    margin-left: 0;
} 

.m-0 { 
    margin: 0 !important;
} 

.p-0 { 
    padding: 0 !important;
} 

.pagination ul  { 
    list-style: none;
} 

.justify-content-end { 
    -ms-flex-pack: end !important; 
    justify-content: flex-end !important;
} 

.pagination-location-next { 
    width: 45px;
} 

.pageNavSimple-el { 
    display: inline-block; 
    border-width: 0; 
    border-style: solid; 
    border-top-color: #4d5460; 
    border-right-color: #4d5460; 
    border-bottom-color: #4d5460; 
    border-left-color: #4d5460; 
    border-radius: 4px; 
    padding: 0 10px; 
    font-size: 1.2rem; 
    text-align: center; 
    white-space: nowrap; 
    margin-right: 4px;
} 

[data-xf-click],a[tabindex] { 
    cursor: pointer;
} 

.pageNavSimple-el.pageNavSimple-el--current { 
    color: #4080FF; 
    background-color: none;
} 

.pageNavSimple-el.pageNavSimple-el--current:hover,.pageNavSimple-el.pageNavSimple-el--current:active { 
    background: #424854; 
    text-decoration: none;
} 

.menu { 
    display: none; 
    opacity: 0; 
    -webkit-transition: all 0.2s ease, -xf-opacity 0.2s ease; 
    transition: all 0.2s ease, -xf-opacity 0.2s ease; 
    position: absolute; 
    z-index: 200; 
    margin: 8px 0 0; 
    min-width: 240px; 
    max-width: 320px; 
    border-radius: 8px; 
    box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2); 
    color: #e0e6f0; 
    background: #313742;
} 

.menu--pageJump { 
    width: auto; 
    min-width: 0;
} 

.menu { 
    transition: cubic-bezier(0.4, 0, 0.2, 1) 0.26s transform, cubic-bezier(0.4, 0, 0.2, 1) 0.26s opacity; 
    transform: translateY(-10px); 
    opacity: 0;
} 

.pageNavSimple-el.pageNavSimple-el--next { 
    background: #4080FF; 
    color: #fff; 
    min-width: 75px;
} 

.pageNavSimple-el.pageNavSimple-el--next:hover,.pageNavSimple-el.pageNavSimple-el--next:active { 
    background: #5a91ff; 
    text-decoration: none;
} 

.pageNavSimple-el:last-child { 
    margin-right: 0;
} 

.pageNavSimple-el.pageNavSimple-el--last { 
    border-color: transparent; 
    padding-left: 5px; 
    padding-right: 5px; 
    color: #4080FF;
} 

.pageNavSimple-el.pageNavSimple-el--last:hover,.pageNavSimple-el.pageNavSimple-el--last:active { 
    border-width: 0; 
    border-style: solid; 
    border-top-color: #4d5460; 
    border-right-color: #4d5460; 
    border-bottom-color: #4d5460; 
    border-left-color: #4d5460; 
    background: #464c58; 
    color: #4080FF; 
    text-decoration: none;
} 

button { 
    overflow:      visible;
    font-family:  inherit; 
    font-size:  inherit; 
    line-height:  inherit;
    margin:  0; 
    text-transform:    none;
    border-radius:  0;
} 

button,[type="button"] { 
    -webkit-appearance: button;
} 

.btn { 
    display: inline-block; 
    font-weight: 500; 
    text-align: center; 
    vertical-align: middle; 
    -webkit-user-select: none; 
    -moz-user-select: none; 
    -ms-user-select: none; 
    user-select: none; 
    border: none; 
	padding: 0.4rem 0.7rem;
    font-size: 13px;
    line-height: 1.5; 
    border-radius: 0.25rem; 
    position: relative; 
    text-transform: uppercase;
} 

.btn-transparent { 
    background-color: rgba(255, 255, 255, 0.25); 
    color: rgba(255, 255, 255, 0.85);
} 

.btn { 
    position: relative;
} 

button,[type="button"]  { 
    -webkit-appearance: button;
} 

button:not(:disabled),[type="button"]:not(:disabled) { 
    cursor: pointer;
} 

.page-header #report-button  { 
    font-size: 13px;
} 

.btn:hover { 
    text-decoration: none;
} 

.btn-transparent:hover { 
    background-color: rgba(255, 255, 255, 0.35);
} 

.btn:hover { 
    -webkit-transition: background-color 0.25s, color 0.25s; 
    -o-transition: background-color 0.25s, color 0.25s; 
    transition: background-color 0.25s, color 0.25s;
} 

[dir="auto"] { 
    text-align: left;
} 



i:before ,.pageNavSimple-el.pageNavSimple-el--next i:before  { 
    font-family: \'Font Awesome 5 Pro\'; 
    font-size: inherit; 
    font-style: normal; 
    font-weight: 900; 
    text-rendering: auto; 
    -webkit-font-smoothing: antialiased; 
    -moz-osx-font-smoothing: grayscale;
} 

.pageNavSimple-el.pageNavSimple-el--next i:before  { 
    content: "\\f0da"; 
    width: 1.28571429em; 
    display: inline-block; 
    text-align: center;
} 

i:before ,.pageNavSimple-el.pageNavSimple-el--last i:before  { 
    font-family: \'Font Awesome 5 Pro\'; 
    font-size: inherit; 
    font-style: normal; 
    font-weight: 900; 
    text-rendering: auto; 
    -webkit-font-smoothing: antialiased; 
    -moz-osx-font-smoothing: grayscale;
} 

.pageNavSimple-el.pageNavSimple-el--last i:before  { 
    content: "\\f04e"; 
    width: auto; 
    display: inline-block; 
    text-align: center; 
    font-size: 18px; 
    line-height: inherit;
} 

.u-srOnly { 
    position: absolute; 
    height: 1px; 
    width: 1px; 
    margin: -1px; 
    padding: 0; 
    border: 0; 
    clip: rect(0 0 0 0); 
    overflow: hidden;
} 

.u-dt[title] { 
    border: none; 
    text-decoration: none;
} 

.pagination ul li a  { 
    background-color: var(--bg-tertiary); 
    border-right: 1px solid var(--bg-quaternary); 
    padding: 0.8rem 1.65rem; 
    display: block; 
    color: #9da5b3; 
    font-weight: var(--font-bold);
} 

.pagination ul li:first-child a  { 
    border-radius: 4px 0 0 4px;
} 

.pagination ul li a.active  { 
    background-color: var(--bg-quaternary); 
    color: #cbd3df;
} 

.pagination ul li a:hover ,.pagination ul li a.active  { 
    background-color: var(--bg-quaternary); 
    color: #cbd3df;
} 

.pagination ul li:last-child a  { 
    border-radius: 0 4px 4px 0; 
    border: none;
} 

.pagination ul li a:hover  { 
    background-color: var(--bg-quaternary); 
    color: #cbd3df;
} 

.btn-secondary { 
    color: #b9c4d1; 
    background-color: #3a3c3f; 
    border-color: #333f54;
} 

.btn-secondary:hover { 
    color: #b9c4d1; 
    background-color: #4e5054; 
    border-color: #3e4c63;
} 

h4 { 
    margin-top:   0;
    font-weight:  500; 
    line-height:  1.2; 
    color:  inherit; 
    margin-bottom:  0;
    font-size: 1.15rem;
} 

.menu-header { 
    padding: 12px; 
    margin: 0; 
    font-weight: 400; 
    text-decoration: none; 
    font-size: 1.6rem; 
    color: #e0e6f0; 
    background: #313742; 
    border-bottom: 1px solid #4d5460;
} 

.menu-header:before,.menu-header:after { 
    content: " "; 
    display: table;
} 

.menu-header:after { 
    clear: both;
} 

.menu-row { 
    margin: 0; 
    padding: 12px;
} 

.menu-content > :last-child  { 
    border-bottom-left-radius: 8px; 
    border-bottom-right-radius: 8px;
} 

.menu-row:before,.menu-row:after { 
    content: " "; 
    display: table;
} 

.menu-row:after { 
    clear: both;
} 

.fas { 
    display: inline-block; 
    font-family:  \'Font Awesome 5 Pro\'; 
    position:  relative; 
    font-weight:  900;
    -moz-osx-font-smoothing: grayscale; 
    -webkit-font-smoothing: antialiased; 
    font-style: normal; 
    font-variant: normal; 
    text-rendering: auto; 
    line-height: 1;
} 

.fa-long-arrow-alt-right:before { 
    content: "\\f30b";
} 

.inputGroup { 
    display: flex; 
    align-items: stretch; 
    max-width: 100%;
} 

img { 
    border-style:  none;
    max-width:   100%; 
    height:   auto;
    -ms-interpolation-mode:  bicubic;
    vertical-align: middle; 
} 

.inputGroup .inputGroup-text  { 
    flex-grow: 0; 
    display: flex; 
    align-items: center; 
    white-space: nowrap; 
    vertical-align: middle; 
    padding: 0 10px;
} 

.inputGroup .inputGroup-text:last-child  { 
    padding-right: 0;
} 

input { 
    overflow:       visible;
    font-family:  inherit; 
    font-size:  inherit; 
    line-height:  inherit;
    margin:    0;
    color:   inherit; 
    font:   inherit; 
} 

.input { 
    font-size: 1.3rem; 
    color: #e0e6f0; 
    background: #3b414b; 
    border-width: 1px; 
    border-style: solid; 
    border-top-color: #4d5460; 
    border-right-color: #4d5460; 
    border-bottom-color: #4d5460; 
    border-left-color: #4d5460; 
    border-radius: 8px; 
    padding: 6px; 
    box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1); 
    display: block; 
    width: 100%; 
    line-height: 1.4; 
    text-align: left; 
    word-wrap: break-word; 
    -webkit-appearance: none; 
    -moz-appearance: none; 
    appearance: none; 
    -webkit-transition: all 0.2s ease; 
    transition: all 0.2s ease;
} 

.input[type="number"],.input.input--number { 
    text-align: right; 
    max-width: 150px;
} 

.inputGroup .input  { 
    flex-shrink: 1; 
    min-width: 0;
} 

.inputNumber .input--number  { 
    -moz-appearance: textfield !important;
} 

.input[type="number"].input--numberNarrow,.input.input--number.input--numberNarrow { 
    width: 90px;
} 

.inputGroup.inputGroup--joined .input  { 
    border-radius: 0;
} 

.menu .inputNumber .input--number  { 
    width: 120px;
} 

.inputGroup.inputGroup--joined .input:first-child  { 
    border-top-left-radius: 8px; 
    border-bottom-left-radius: 8px; 
    border-right: none;
} 

.inputNumber-button { 
    position: relative; 
    font-family: \'Font Awesome 5 Pro\'; 
    font-size: 1.0em; 
    font-style: normal !important; 
    font-weight: 900; 
    text-rendering: auto; 
    -webkit-font-smoothing: antialiased; 
    -moz-osx-font-smoothing: grayscale; 
    color: #959fb4; 
    line-height: .75em; 
    vertical-align: -15%; 
    width: 45px; 
    justify-content: center; 
    text-align: center; 
    cursor: pointer; 
    -webkit-touch-callout: none; 
    -webkit-user-select: none; 
    -moz-user-select: none; 
    -ms-user-select: none; 
    user-select: none;
} 

.menu .inputNumber-button  { 
    vertical-align: 0; 
    width: 25px;
} 

.inputGroup.inputGroup--joined .inputGroup-text  { 
    border-width: 1px; 
    border-style: solid; 
    border-top-color: #4d5460; 
    border-right-color: #4d5460; 
    border-bottom-color: #4d5460; 
    border-left-color: #4d5460; 
    background: #3b414b; 
    text-align: center; 
    padding: 4px 10px;
} 

.inputGroup.inputGroup--joined .input + .inputGroup-text  { 
    border-left: 1px solid var(--input-border-light);
} 

.inputNumber-button--up:before { 
    content: "\\f067"; 
    width: 0.88em; 
    display: inline-block; 
    text-align: center;
} 

.inputGroup.inputGroup--joined .inputNumber-button:hover ,.inputGroup.inputGroup--joined .inputNumber-button:active  { 
    background-color: #323e56; 
    color: #e0e3e9;
} 

.inputGroup.inputGroup--joined .inputGroup-text:last-child  { 
    border-left: 0; 
    border-top-right-radius: 8px; 
    border-bottom-right-radius: 8px;
} 

.inputGroup.inputGroup--joined .inputGroup-text + .inputGroup-text  { 
    border-left: 0;
} 

.inputNumber-button--down:before { 
    content: "\\f068"; 
    width: 0.88em; 
    display: inline-block; 
    text-align: center;
} 

.button { 
    display:  inline-flex; 
    display:  inline-block; 
    border:  none; 
    text-decoration:  none; 
    -webkit-transition:  background-color 0.2s ease; 
    transition:  background-color 0.2s ease; 
    font-size:  15px; 
    font-weight:  400; 
    border-radius:  4px; 
    padding-top:  0; 
    padding-right:  15px; 
    padding-bottom:  0; 
    padding-left:  15px; 
    text-align:  center; 
    outline:  none; 
    line-height:  35px; 
    height:  35px; 
    align-items:  center; 
    justify-content:  center; 
    cursor:  pointer; 
    box-sizing:  content-box; 
    -webkit-appearance:  none; 
    will-change:  box-shadow; 
    transition:  all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1); 
    white-space:  nowrap; 
    color:  #4080FF; 
    background:  #dc3545 !important;
    border-color:  rgba(105, 155, 255, 0.1);
} 

.rippleButton { 
    position: relative;
} 

.inputGroup .button  { 
    flex-shrink: 0;
} 

.button:hover { 
    background: rgba(64, 128, 255, 0.15);
} 

.rippleButton:hover { 
    cursor: pointer;
} 

.button .button-text  { 
    display: inline-flex; 
    align-items: center;
} 

.button > .button-text  { 
    border-right: 1px solid transparent;
} 


/* These were inline style tags. Uses id+class to override almost everything */
#style-c3Krb.style-c3Krb {  
   max-width: %;  
}  
#style-t6QIi.style-t6QIi {  
   max-width: %;  
}  
#style-9t91E.style-9t91E {  
   height:20px;  
    width: 20px;  
}  
#style-IyxRX.style-IyxRX {  
   font-weight: bolder;  
}  
#style-jq93t.style-jq93t {  
   height:20px;  
    width: 20px;  
}  
#style-cpw1d.style-cpw1d {  
   font-weight: bolder;  
}  
#style-wtObo.style-wtObo {  
   height:20px;  
    width: 20px;  
}  
#style-iJDKl.style-iJDKl {  
   font-weight: bolder;  
}  
#style-2yRYj.style-2yRYj {  
   height:20px;  
    width: 20px;  
}  
#style-wwVoT.style-wwVoT {  
   font-weight: bolder;  
}  
#style-N2h3Z.style-N2h3Z {  
   height:20px;  
    width: 20px;  
}  
#style-cJ4fA.style-cJ4fA {  
   font-weight: bolder;  
}  
#style-E4eoR.style-E4eoR {  
   height:20px;  
    width: 20px;  
}  
#style-r5N7n.style-r5N7n {  
   font-weight: bolder;  
}  
#style-OW6yG.style-OW6yG {  
   height:20px;  
    width: 20px;  
}  
#style-DC5D3.style-DC5D3 {  
   font-weight: bolder;  
}  
#style-YvybF.style-YvybF {  
   height:20px;  
    width: 20px;  
}  
#style-RUVYi.style-RUVYi {  
   font-weight: bolder;  
}  
#style-82b1l.style-82b1l {  
   height:20px;  
    width: 20px;  
}  
#style-wpIoG.style-wpIoG {  
   font-weight: bolder;  
}  
#style-IMaGJ.style-IMaGJ {  
   height:20px;  
    width: 20px;  
}  
#style-kiBzr.style-kiBzr {  
   font-weight: bolder;  
}  
#style-jfN7O.style-jfN7O {  
   position: relative;  
    z-index: 999;  
}';
	return $__finalCompiled;
}
);