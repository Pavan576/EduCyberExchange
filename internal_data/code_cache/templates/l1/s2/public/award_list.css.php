<?php
// FROM HASH: a289aa5fcc8af09d1933e01cf2588fa8
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= ':root { 

    --font-bold:   500; 
    --rounded:   0.65rem; 
} 

.award-tabs .nav-item .nav-link.active:hover {
    background-color: #262626;
}

.nav-tabs .nav-link.active {
    background-color: #242424;
}

.uix_contentWrapper { 
    flex-grow: 1;
} 

.p-body-main { 
    table-layout: fixed; 
    display: flex; 
    flex-wrap: wrap; 
    justify-content: space-between; 
    width: 100%; 
    max-width: 100%; 
    margin-bottom: auto; 
    min-height: 1px;
} 

.p-body-content { 
    vertical-align: top; 
    flex-grow: 1; 
    max-width: 100%; 
    width: 100%;
} 

@media (min-width: 901px){ 
  .p-body-content { 
    transition: ease-in width .2s,ease-in max-width .2s;
  } 
}     

.p-body-content > :first-child  { 
    margin-top: 0;
} 

.p-body-content > :last-child  { 
    margin-bottom: 0;
} 

ul { 
    margin-top: 0; 
    margin-bottom: 0; 
    margin-left: 0;
} 

.nav { 
    display: -ms-flexbox; 
    display: flex; 
    -ms-flex-wrap: wrap; 
    flex-wrap: wrap; 
    padding-left: 0; 
    margin-bottom: 0; 
    list-style: none;
} 

.justify-content-center { 
    -ms-flex-pack: center !important; 
    justify-content: center !important;
} 

.mb-3 { 
    margin-bottom:  0.75rem;
} 

.fade { 
    transition: opacity 0.15s linear;
} 

.tab-content > .tab-pane  { 
    display: none;
} 

.tab-content > .active  { 
    display: block;
} 

.fade:not(.show) { 
    opacity: 0;
} 

.award-tabs .nav-item  { 
    margin-right: 0.5rem;
} 

.d-flex { 
    display: -ms-flexbox; 
    display: flex;
} 

.flex-row { 
    -ms-flex-direction: row !important; 
    flex-direction: row !important;
} 

.flex-wrap { 
    -ms-flex-wrap: wrap !important; 
    flex-wrap: wrap !important;
} 

@media (min-width: 768px){ 
  .awards-showcase { 
    margin: 0 -0.5rem 0.5rem;
  } 
}     

.flex-row { 
    flex-direction: row;
} 

.flex-wrap { 
    flex-wrap: wrap;
} 

a { 
    background-color:   transparent;
    -webkit-text-decoration-skip:    objects;
    color:  #cbd3df;
    text-decoration:   none; 
} 

.nav-link { 
    display:  block; 
    padding:  1.05rem 2.1rem; 
    font-size:  1.2rem;
} 

.award-tabs .nav-item .nav-link  { 
    background-color: var(--bg-secondary); 
    border-radius: var(--rounded) !important; 
    border: none !important; 
    font-weight: var(--font-bold);
} 

.nav-tabs .nav-link.active  { 
    color: #fff; 
    background-color: #242424;
} 

.nav-tabs .nav-item .nav-link  { 
    border-right: 1px solid #293342;
	background: #242424;
} 

.nav-tabs .nav-item:first-child .nav-link  { 
    border-radius: var(--rounded) 0 0 var(--rounded);
} 

a:hover { 
    color:  #dce2ea; 
    text-decoration:  none;
} 

.nav-link:hover { 
    text-decoration: none;
} 

.nav-tabs .nav-link:hover  { 
    background-color: #262626; 
    color: #fff;
} 

.award-tabs .nav-item .nav-link:hover  { 
    background-color: #262626; 
    color: #fff;
} 

.award-tabs .nav-item .nav-link.active:hover  { 
    background-color: #262626; 
    color: #fff;
} 

.nav-tabs .nav-item:last-child .nav-link  { 
    border-right: none;
} 

.flex-fill { 
    -ms-flex: 1 1 auto !important; 
    flex: 1 1 auto !important;
} 

.align-items-center { 
    -ms-flex-align: center !important; 
    align-items: center !important;
} 

.p-3 { 
    padding: 1.8rem !important;
} 

.bg-secondary { 
    background-color: #202020 !important;
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

@media (min-width: 768px){ 
  .award-column { 
    width: calc(50% - 1rem); 
    margin: 0 0.25rem 0.5rem; 
    border-radius: var(--rounded);
  } 
}     

.p-3 { 
    padding: 0.75rem;
} 

.flex-shrink-0 { 
    -ms-flex-negative: 0 !important; 
    flex-shrink: 0 !important;
} 

.mr-3 { 
    margin-right: 1rem !important;
} 

.award-preview {
	display: flex;
    justify-content: center;
    place-items: center;
    width: 40px;
} 

.mr-3 { 
    margin-right: 0.75rem;
} 

.flex-shrink-0 { 
    flex-shrink: 0;
} 

.award-icons { 
    display:  block; 
    background-repeat:  no-repeat; 
    background-repeat-x:  no-repeat; 
    background-repeat-y:  no-repeat;
    background-image: url(https://ogx.emuheaven.io/img/spritesheets/award_icons_24x24.png);
} 

.font-weight-bold { 
    font-weight: 500 !important;
} 

.font-size-10 { 
    font-size: 1.5rem;
} 

.text-secondary { 
    color: var(--color-secondary);
} 

img { 
    border-style:  none;
    max-width:   100%; 
    height:   auto;
    -ms-interpolation-mode:  bicubic;
    vertical-align: middle; 
}';
	return $__finalCompiled;
}
);