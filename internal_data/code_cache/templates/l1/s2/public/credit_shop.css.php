<?php
// FROM HASH: e523eea28dcb45a65eb8b4c89313f11d
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.icon {
	display: flex;
}

:root { 
    --thead-first-bg:    #615dfa; 
    --thead-second-bg:    #41ecff; 
    --main-gradient:    linear-gradient(to right,var(--thead-first-bg),var(--thead-second-bg)); 
    --main-webkit-gradient:    -webkit-linear-gradient(to right,var(--thead-first-bg),var(--thead-second-bg)); 
    --default-padding:    1rem; 
    --default-border-radius:    1rem; 
    --default-margin:    wrgin:1rem 0; 
} 

.wraps { 
    width: 75%; 
    max-width: 1514px; 
    margin: auto auto; 
    overflow: hidden; 
    animation: opac 0.8s;
} 


.custom-nav { 
    display: flex; 
    align-items: center; 
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
    background-repeat-x: no-repeat, repeat, repeat; 
    background-repeat-y: no-repeat, repeat, repeat;
} 

.custom-nav:before { 
    content: \'\'; 
    background: none; 
    display: block; 
    position: absolute; 
    width: 3.25rem; 
    height: 3.25rem; 
    left: 6rem; 
    top: -.75rem; 
    z-index: 8; 
    transition: 250ms ease;
} 

.custom-nav:hover:before { 
    transform: translateY(-.25rem);
} 

.cpsidebar { 
    width: 250px; 
    float: left; 
    margin-right: 12px !important;
} 

.cpcontentmain { 
    width: calc(100% - 272px); 
    float: left;
} 

.breadcrumb .active  { 
    font-weight: 500;
} 

.custom-nav_inner { 
    padding: var(--default-padding) 0; 
    font-size: calc(1em + 1px); 
    text-shadow: 0 0 1px rgba(0,0,0,0.25); 
    margin: auto; 
    text-align: center;
} 

table { 
    color: rgb(137,137,137); 
    font-size: 13px;
} 

.tborder { 
    margin: auto auto; 
    border: 0; 
    border-radius: 3px; 
    border-spacing: 0px;
} 

.hundo { 
    width: 100%;
} 

.table-rounded { 
    border-collapse: separate;
} 

a:visited { 
    color: #e9e9e9; 
    text-decoration: none;
} 

a:hover,a:active { 
    color: #ccc; 
    text-decoration: none;
} 

.custom-nav span  { 
    display: -webkit-box; 
    -webkit-line-clamp: 1; 
    -webkit-box-orient: vertical; 
    overflow: hidden; 
    text-overflow: ellipsis; 
    font-size: 2.55rem; 
    font-weight: 600;
} 

.trow2 { 
    background:  #202020; 
    padding:  11px;
    font-size: 13px !important; 
    font-weight: 500 !important;
	display: flex;
    place-items: center;
} 

.trow1:hover, .trow2:hover {
    background: #222222 !important;
}

.trow1 { 
    background:  #202020; 
    padding:  11px;
    font-size: 13px !important; 
    font-weight: 500 !important;
} 

.tr-rounded:first-child td:first-child  { 
    border-top-left-radius: calc(var(--default-border-radius) * 2 / 4);
} 

.tr-rounded:first-child td:last-child  { 
    border-top-right-radius: calc(var(--default-border-radius) * 2 / 4);
} 

.tr-rounded:last-child td:first-child  { 
    border-bottom-left-radius: calc(var(--default-border-radius) * 2 / 4);
} 

.tr-rounded:last-child td:last-child  { 
    border-bottom-right-radius: calc(var(--default-border-radius) * 2 / 4);
} 

.user-icon { 
    width: 16px;
} 

.fa { 
    display: var(--fa-display,inline-block); 
    font-family:  var(--fa-style-family,"Font Awesome 6 Free"); 
    font-weight:  var(--fa-style,900);
    -moz-osx-font-smoothing: grayscale; 
    -webkit-font-smoothing: antialiased; 
    font-style: normal; 
    font-variant: normal; 
    line-height: 1; 
    text-rendering: auto;
} 

.user-icon { 
    width: 29px !important; 
    font-size: 19px !important;
} 

.fa-cart-plus:before { 
    content: "\\f217";
} 

a:link { 
    color: #e9e9e9; 
    text-decoration: none; 
    font-weight: 600 !important;
} 

.fas { 
    display:   var(--fa-display,inline-block); 
    -moz-osx-font-smoothing:   grayscale; 
    -webkit-font-smoothing:   antialiased; 
    font-style:   normal; 
    font-variant:   normal; 
    line-height:   1; 
    text-rendering:   auto;
    font-family:  "Font Awesome 6 Free";
    font-weight: 900;
} 

.fa-box-open:before { 
    content: "\\f49e";
} 

.fa-bar-chart:before,.fa-chart-bar:before { 
    content: "\\f080";
} 

.fa-circle-dollar-to-slot:before,.fa-donate:before { 
    content: "\\f4b9";
} 

.expcolimage { 
    float: right; 
    width: auto; 
    vertical-align: middle; 
    margin-top: 3px;
} 

.fa-trophy:before { 
    content: "\\f091";
} 

.fa-box:before { 
    content: "\\f466";
} 

.fa-thumb-tack:before,.fa-thumbtack:before { 
    content: "\\f08d";
} 

.fa-paint-brush:before,.fa-paintbrush:before { 
    content: "\\f1fc";
} 

.fa-palette:before { 
    content: "\\f53f";
} 

.fa-chevron-circle-up:before,.fa-circle-chevron-up:before { 
    content: "\\f139";
} 

.fa-bag-shopping:before,.fa-shopping-bag:before { 
    content: "\\f290";
} 

.fa-coins:before { 
    content: "\\f51e";
} 

.float_right { 
    float: right; 
    font-size: 14px !important;
} 

.fa-chess-queen:before { 
    content: "\\f445";
} 


@keyframes opac { 
  0% {  
      opacity: 0; 
      opacity: 0; 
  }  
  100% {  
      opacity: 1; 
      opacity: 1; 
  }  

} 
/* These were inline style tags. Uses id+class to override almost everything */
#style-bWTMN.style-bWTMN {  
   background: #242424;  
}  
#pm_notice.style-dwdsN {  
   font-weight: 600;  
   display:none !important;  
}  
#style-ocJpm.style-ocJpm {  
   border-radius: 0.35rem 0.35rem 0 0;  
}  
#style-8atFr.style-8atFr {  
   border-radius: 0.35rem 0.35rem 0 0;  
}  
#style-kKvHP.style-kKvHP {  
   float: none;  
}  
#bets_img.style-Dpa4i {  
   cursor: pointer;  
}  
#style-vLkoc.style-vLkoc {  
   color: rgb(137,137,137);  
}  
#bets_e.style-MmmKA {  
   display: none;  
}  
#style-droSf.style-droSf {  
   padding: 8px 0 0;  
}  
#style-ejzZy.style-ejzZy {  
   padding: 8px 0 0;  
}  
#style-i1blC.style-i1blC {  
   border-radius: 0 0 0.35rem 0.35rem;  
}  
#style-m9G54.style-m9G54 {  
   border-radius: 0 0 0.35rem 0.35rem;  
}  
#style-KgMZB.style-KgMZB {  
   color:white !important;  
}  
#style-AJHZR.style-AJHZR {  
   color:white !important;  
}  
#style-gJ7GE.style-gJ7GE {  
   color:#a4a4a4;  
}';
	return $__finalCompiled;
}
);