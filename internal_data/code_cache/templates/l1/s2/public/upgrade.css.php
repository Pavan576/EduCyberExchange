<?php
// FROM HASH: 61c9b76febf08f32076095f3fcc4d0ab
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.text-white {
	color: #fff;
	background: #343434;
}

.card form {
	display: flex;
	gap: 5px;
}

.button:not(.button--splitTrigger):hover {
	background: #2a2a2a;
}

@media (max-width: 1358px) {
#pricing__monthly__plan {
    flex-direction: column;
}
}

@media (max-width: 1358px) {
.pricing-body-plans {
    width: 100%;
}
}


.wrapper {
  display: flex;
  justify-content: center;
  flex-direction: column;
  width: 100%;
}

h1 {
  margin-bottom: 20px;
  text-align: center;
}

.container {
  background-color: #222222;
  color: #787878;
  border-radius: 20px;
  box-shadow: 0 5px 10px 0 rgb(0, 0, 0, 0.25);
  margin: 20px 0;
}

.question {
  font-size: 1.2rem;
  font-weight: 600;
  padding: 20px 80px 20px 20px;
  position: relative;
  display: flex;
  align-items: center;
  cursor: pointer;
}

.question::after {
  content: "\\002B";
  font-size: 2.2rem;
  position: absolute;
  right: 20px;
  transition: 0.2s;
}

.question.active::after {
  transform: rotate(45deg);
}

.answercont {
  max-height: 0;
  overflow: hidden;
  transition: 0.3s;
}

.answer {
  padding: 0 20px 20px;
  line-height: 1.5rem;
}

.question.active + .answercont {
}

@media screen and (max-width: 790px) {
  html {
    font-size: 14px;
  }
  .wrapper {
    width: 80%;
  }
}






.container { 
    width:  100%; 
    padding-right:  15px; 
    padding-left:  15px; 
    margin-right:  auto; 
    margin-left:  auto;
    max-width: 410px;
} 

@media (min-width: 725px){ 
  .container { 
    max-width: 1075px;
  } 
}     

@media (min-width: 1012px){ 
  .container { 
    max-width: 1315px;
  } 
}     

@media (min-width: 1400px){ 
  .container { 
    max-width: 1480px;
  } 
}     

@media (min-width: 1800px){ 
  .container { 
    max-width: 1480px;
  } 
}     

.p-body-pageContent > :last-child  { 
    margin-bottom: 0;
} 

a { 
    background-color:  transparent; 
    -webkit-text-decoration-skip:  objects;
    color: #e9e9e9; 
    text-decoration: none;
} 

.p-breadcrumbs > li a  { 
    display:    inline-block; 
    vertical-align:    top; 
    max-width:   inherit; 
    color:  #747474;
    overflow:    hidden; 
    white-space:    nowrap; 
    word-wrap:    normal; 
    text-overflow:    ellipsis;
    font-weight:   400;
    text-transform:  uppercase; 
} 

[data-theme="dark"] .p-breadcrumbs > li a  { 
    max-width: inherit; 
    color: #747474; 
    text-transform: uppercase;
} 

a:hover { 
    color:  #ababab;
    text-decoration:  none;
} 

.p-breadcrumbs > li:hover a  { 
    color: inherit;
} 

.p-breadcrumbs > li a:hover  { 
    transition:  none;
    color: #747474; 
} 

[data-theme="dark"] .p-breadcrumbs > li a:hover  { 
    transition: ease-in .08s;
} 

.p-breadcrumbs > li:last-child a  { 
    color: #e9e9e9;
} 

.p-breadcrumbs > li:last-of-type a  { 
    font-weight: inherit;
} 

.p-breadcrumbs > li:last-child a  { 
    color:  #50cd89; 
    text-transform: uppercase;
} 

[data-theme="dark"] .p-breadcrumbs > li:last-child a  { 
    color: #50cd89; 
    text-transform: uppercase;
} 

.p-title { 
    display: flex; 
    flex-wrap: wrap; 
    align-items: center; 
    max-width: 100%; 
    margin-bottom: -5px;
} 

.text-center { 
    text-align: center !important;
} 

.p-title { 
    margin-bottom: 3px; 
    text-transform: capitalize;
} 

h2.p-title { 
    text-transform: uppercase; 
    font-weight: 700; 
    letter-spacing: .12rem;
} 

.accordion { 
    margin: 3em auto; 
    max-width: 64em;
} 

.pricing-body { 
    display: flex; 
    flex-direction: column; 
    align-items: center; 
    row-gap: 25px;
} 

.option { 
    position: relative; 
    margin-bottom: 1em;
} 

.pricing-body-header { 
    display: flex; 
    flex-direction: column; 
    justify-content: center; 
    align-items: center; 
    row-gap: 0px;
} 

input { 
    overflow:   visible;
    font-family:  \'Poppins\',\'Helvetica Neue\',Helvetica,Roboto,Oxygen,Ubuntu,Cantarell,\'Fira Sans\',\'Droid Sans\',sans-serif; 
    font-size:  100%; 
    line-height:  1.4;
    margin:  0;
} 

input.button {
    font-weight: unset !important;
}

[type="checkbox"] { 
    box-sizing: border-box; 
    padding: 0;
} 

.toggle { 
    display: none;
} 

input[type="checkbox"] { 
    box-sizing: border-box; 
    padding: 0;
} 

.title { 
    display: block; 
    border-radius:   7px;
    backface-visibility:  hidden; 
    transform:  translateZ(0); 
    transition:  all 0.2s;
    background: #191a1e; 
    padding: 1em; 
    color: #7A7572; 
    font-weight: bold;
} 

label.title { 
    color: #94959f;
} 

[data-theme="dark"] .title  { 
    background: #171717 !important;
} 

[data-theme="dark"] label.title  { 
    color: #7d7d7d;
} 

.title:after,.title:before { 
    content: \'\'; 
    position: absolute; 
    right: 1.25em; 
    top: 1.25em; 
    width: 2px; 
    height: 0.75em; 
    background-color: #7A7572; 
    transition: all 0.2s;
} 

.title:after { 
    transform: rotate(90deg);
} 

.content { 
    backface-visibility:  hidden; 
    transform:  translateZ(0); 
    transition:  all 0.2s;
    max-height: 0; 
    overflow: hidden; 
    background-color: #191a1e;
} 

.pricing-body-header h2  { 
    font-weight: 500;
} 

.pricing-body-plans > div  { 
    display: none;
} 

.pricing-body-plans > div.active  { 
    display: flex;
} 

.content p  { 
    margin: 0; 
    padding: 0.5em 1em 1em; 
    font-size: 0.9em; 
    line-height: 1.5;
} 

[data-theme="dark"] .content p  { 
    background: #171717 !important;
} 

strong { 
    font-weight:  700;
} 

.card { 
    display:  flex; 
    background-color: #202020; 
    padding:   22px; 
    margin:  20px 20px;
    border-radius:   7px; 
    flex-direction:  column; 
} 

[data-theme="dark"] .card  { 
    background: #171717 !important;
} 

.card .card-header  { 
    display: flex; 
    margin-bottom:  9px;
    flex-direction: column; 
    row-gap: 8px; 
    justify-content: center; 
    align-items: center;
} 

.card .card-body  { 
    padding:  12px 30px; 
    min-height: 120px;
} 

.card-footer { 
    display: flex; 
    justify-content: center; 
    align-items: center;
} 

.card-title { 
    text-transform:    uppercase; 
    font-weight:  400; 
    font-size:  18px;
    letter-spacing:   0.2rem!important;
    cursor:  default;
} 

.card-price { 
    font-size: 26px;
} 

img { 
    border-style:   none;
    max-width:  100%; 
    height:  auto;
    -ms-interpolation-mode: bicubic;
} 

.card-body ul  { 
    display: flex; 
    padding:  7px;
    list-style-type: none; 
    flex-direction: column; 
    row-gap: 8px;
} 

.p-3 { 
    padding:  0.75rem;
} 

.mt-4 { 
    margin-top: 1.5rem !important;
} 

.rounded { 
    border-radius:  7px !important;
} 

li.bonus.p-3.rounded.mt-4 { 
    list-style:  none; 
    margin-top:  auto!important;
    background: rgba(10,10,10,0.4);
} 

li.bonus.p-3.primereq.rounded.mt-4 { 
    text-align: center;
} 

button { 
    overflow:    visible;
    font-family:  \'Poppins\',\'Helvetica Neue\',Helvetica,Roboto,Oxygen,Ubuntu,Cantarell,\'Fira Sans\',\'Droid Sans\',sans-serif; 
    font-size:   100%; 
    line-height:  1.4;
    margin:   0;
    text-transform:  none;
} 

[type="submit"],button { 
    -webkit-appearance: button;
} 

.button { 
    display:     inline-block; 
    display:     inline-flex; 
    align-items:     center; 
    justify-content:     center; 
    text-decoration:     none; 
    cursor:     pointer; 
    white-space:     nowrap; 
    -webkit-transition:     background-color .005s ease, border-color .005s ease, color .005s ease; 
    transition:     background-color .005s ease, border-color .005s ease, color .005s ease; 
    font-size:    13px;
    border-radius:   6px;
    padding-top:     12px; 
    padding-right:     20px; 
    padding-bottom:     12px; 
    padding-left:     20px; 
    font-weight:    600 !important; 
    text-align:     center; 
    border:     none; 
    color:  #fefefe;
    background:   #32353e; 
    padding:  7px 17px; 
} 

.card-footer button  { 
    margin-right:   10px;
    border-radius:  7px;
    border: 1px solid #191a1e; 
    background: transparent; 
    padding: 10px 25px; 
    color: #b5b6b8; 
    cursor: pointer;
	transition: .3s ease;
} 

[type="submit"]:not(:disabled),button:not(:disabled) { 
    cursor: pointer;
} 

[data-theme="dark"] .button  { 
    color: #d7d7d7; 
    background: #222;
} 

button.button.button--icon.button--icon--purchase { 
    background: #9b0431; 
    color: #fff!important; 
} 

.card-footer button:hover  { 
    background:  transparent; 
    color:  #c33660;
} 

button.button.button--icon.button--icon--purchase:hover { 
    background: #c90942; 
    color: #fff!important;
} 

[data-theme="dark"] button.button.button--icon.button--icon--purchase:hover  { 
    background: #4cc382; 
    color: #fff!important;
} 

.inputGroup { 
    display: flex; 
    align-items: stretch; 
    max-width: 100%;
} 

button,[type="button"]  { 
    -webkit-appearance: button;
} 

[type="button"]:not(:disabled),button:not(:disabled) { 
    cursor: pointer;
} 

button.button.button--icon.button--icon--lock { 
    border: transparent !important;
} 

[data-theme="dark"] button.button.button--icon.button--icon--lock  { 
    background: transparent;
} 

button.button.button--icon.button--icon--lock:hover { 
    border: transparent !important;
} 

.card-body ul li  { 
    color: #b5b6b8; 
    position: relative; 
    font-size: 14px;
} 

[data-theme="dark"] .card-body ul li  { 
    color: #878787;
} 

.card-body ul li:before  { 
    display:  none;
    color:  #bc1e4a; 
    content: "•"; 
    font-weight: bold; 
    width: 20px; 
    margin-left: -18px; 
    font-size: 25px; 
    position: absolute; 
    top: 50%; 
    transform: translateY(-50%);
} 

hr { 
    overflow:   visible;
    box-sizing:  content-box; 
    height:  0; 
    width: 100%; 
    border-color: #5e5e5e;
} 

.mb-2 { 
    margin-bottom: .5rem !important; 
    font-size: 14px;
} 

.text-success { 
    color:  #4cc382 !important;
} 

.font-weight-bolder { 
    font-weight: bolder !important;
} 

.text-uppercase { 
    text-transform: uppercase !important;
} 

.mb-2 { 
    margin-bottom: 0.5rem !important;
} 

.font-weight-bolder.mb-2.text-success.text-uppercase { 
    text-align: center; 
    margin-bottom: 0.75rem!important;
} 

.align-items-center { 
    align-items: center !important;
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

.flex-row { 
    flex-direction: row;
} 

.button.button--icon > .button-text:before ,a.button.button--icon > .button-text:before ,.button.button--icon .button-icon,a.button.button--icon .button-icon { 
    font-family: \'Font Awesome 5 Pro\'; 
    font-size: inherit; 
    font-style: normal; 
    font-weight: 400; 
    text-rendering: auto; 
    -webkit-font-smoothing: antialiased; 
    -moz-osx-font-smoothing: grayscale;
} 

.button.button--icon > .button-text:before ,a.button.button--icon > .button-text:before ,.button.button--icon > .fa--xf:before ,a.button.button--icon > .fa--xf:before ,.button.button--icon .button-icon,a.button.button--icon .button-icon { 
    font-size: 120%; 
    vertical-align: -.1em; 
    display: inline-block; 
    margin: -0.255em 6px -0.255em 0;
} 

.button.button--icon--purchase > .button-text:before ,a.button.button--icon--purchase > .button-text:before  { 
    display:  none;
    content:  "\\f09d"; 
    width:  1.13em; 
    text-align:  center;
} 

.inputGroup .button  { 
    flex-shrink: 0;
} 

button.button.button--icon.button--icon--nfgift { 
    border:  1px solid #4c4c4c; 
    border-radius: 7px;
} 

[data-theme="dark"] button.button.button--icon.button--icon--nfgift  { 
    border: 1px solid transparent!important; 
    color: #959595; 
    background: transparent!important;
} 

.inputGroup .button:hover  { 
    background: #4cc382; 
    color: #fff!important;
} 

button.button.button--icon.button--icon--nfgift:hover { 
    background:  #009ef7 !important; 
    color:  #fff !important; 
    border:  1px solid #009ef7 !important;
} 

.button.button--icon--lock > .button-text:before ,a.button.button--icon--lock > .button-text:before  { 
    content: "\\f023"; 
    width: .88em; 
    display: inline-block; 
    text-align: center;
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

.mr-2 { 
    margin-right: .5rem;
} 

.fas { 
    display:  inline-block; 
    -moz-osx-font-smoothing:  grayscale; 
    -webkit-font-smoothing:  antialiased; 
    font-style:  normal; 
    font-feature-settings:  normal; 
    font-variant:  normal; 
    text-rendering:  auto; 
    line-height:  1;
    font-weight: 900;
} 

.solar {
	   font-weight:500;
	color: #67ffff;
}

.cosmic {
	color: white;
    font-weight: 600;
    text-shadow: 0px 2px 3px #000;
	background-image: url(/styles/kingznet/sparkle.gif);
}

.text-active { 
    color: #50cd89;
} 

.fa-check-circle:before { 
    content: "\\f058";
} 

.text-not-active { 
    color: #df5656;
} 

.fa-times-circle:before { 
    content: "\\f057";
} 

.flex-fill { 
    -ms-flex:  1 1 auto !important; 
    flex:  1 1 auto !important;
    font-size: 13px;
} 

.button.button--icon--nfgift > .button-text:before ,a.button.button--icon--nfgift > .button-text:before  { 
    display:  inline-block; 
    content:  "\\f06b"; 
    width:  .8em; 
    text-align:  center;
    font-weight: 600; 
    padding-right: 5px;
} 

.ml-auto { 
    font-weight:  600;
    font-size: 13px;
} 

.fa-star:before { 
    content: "\\f005";
} 


/* These were inline style tags. Uses id+class to override almost everything */
#style-9lxPN.style-9lxPN {  
   color:#ddd;  
   font-weight:700!important;  
}  
#style-ecstJ.style-ecstJ {  
   font-weight:500;  
   color: #f1ac2e;  
}  
#style-qzMHE.style-qzMHE {  
   margin-bottom:3px;  
   margin-top:3px;  
   color:#fff;  
}  
#style-ZN1zg.style-ZN1zg {  
   letter-spacing:0.06rem;  
   margin-bottom:10px;  
   color:#ddd;  
   font-weight:600;  
}  
#style-Z1p6l.style-Z1p6l {  
   font-weight:500;
	color: #67ffff;
   float:right;  
   cursor:default;  
}  
#style-ge3yv.style-ge3yv {  
   float:right;  
   cursor:default;  
   white-space:nowrap;  
   overflow:hidden;  
}  
#style-qleIY.style-qleIY {  
   vertical-align:top;  
   width:24px;  
   height:24px;  
}  
#style-UkwXt.style-UkwXt {  
   float:right;  
   cursor:default;  
}  
#style-1gHog.style-1gHog {  
   color:#27ae60;  
   cursor:default;  
}  
#style-1vjgf.style-1vjgf {  
   color:#eb5757;  
   cursor:default;  
}  
#style-FyA4D.style-FyA4D {  
   font-weight:600;  
   float:right;  
   cursor:default;  
   white-space:nowrap;  
   overflow:hidden;  
}  
#style-3YsHe.style-3YsHe {  
   color:white;  
   font-weight:600;  
   text-shadow: 0px 2px 3px #000;  
   background-image:url(\'/styles/kingznet/sparkle.gif\');  
}  
#style-RwDLo.style-RwDLo {  
   margin-bottom:3px;  
   margin-top:3px;  
   color:#fff;  
}  
#style-y49py.style-y49py {  
   letter-spacing:0.06rem;  
   margin-bottom:10px;  
   color:#ddd;  
   font-weight:600;  
}  
#style-7CAg1.style-7CAg1 {  
   color:white;  
   font-weight:600;  
   text-shadow: 0px 2px 3px #000;  
   float:right;  
   cursor:default;  
   background-image:url(\'/styles/kingznet/sparkle.gif\');  
}  
#style-22ACF.style-22ACF {  
   float:right;  
   cursor:default;  
   white-space:nowrap;  
   overflow:hidden;  
}  
#style-JiPAt.style-JiPAt {  
   vertical-align:top;  
   width:24px;  
   height:24px;  
}  
#style-ASF3f.style-ASF3f {  
   float:right;  
   cursor:default;  
}  
#style-tmCR7.style-tmCR7 {  
   color:#27ae60 ;  
}  
#style-nVenw.style-nVenw {  
   color:#eb5757;  
}  
#style-7xT9j.style-7xT9j {  
   font-weight:600;  
   float:right;  
   cursor:default;  
   white-space:nowrap;  
   overflow:hidden;  
}  
#style-ZvqBs.style-ZvqBs {  
   cursor: not-allowed;  
}  
#style-IiTXm.style-IiTXm {  
   text-align:center;  
   font-size:13px;  
}  
#style-wSg9f.style-wSg9f {  
   text-align:center;  
   color:#ddd;  
   display:block;  
   font-weight:600!important;  
}  
#style-UUhOc.style-UUhOc {  
   margin-top:0px;  
}  
#style-48HsS.style-48HsS {  
   margin-top:0px;  
}';
	return $__finalCompiled;
}
);