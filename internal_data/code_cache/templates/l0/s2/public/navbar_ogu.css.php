<?php
// FROM HASH: b50a2695993e13199460681d91b70ed2
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '@font-face { 
  font-family:"Font Awesome 6 Free";
  font-style:normal;
  font-weight:400;
  font-display:block;
  src:url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/webfonts/fa-regular-400.woff2) format("woff2"),url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/webfonts/fa-regular-400.ttf) format("truetype");
} 
@font-face { 
  font-family:"Font Awesome 6 Free";
  font-style:normal;
  font-weight:900;
  font-display:block;
  src:url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/webfonts/fa-solid-900.woff2) format("woff2"),url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/webfonts/fa-solid-900.ttf) format("truetype");
} 

.headertop { 
    background-color: #1c1c1c; 
    position: fixed; 
    top: 0; 
    left: 0; 
    width: 100%; 
    z-index: 2;
} 

.adminnav:before {
    content: "\\f132";
    font-family: \'Font Awesome\\ 5 Free\';
    padding: 10px 1px;
    font-size: 22px;
    line-height: 26px;
    color: #a4a4a4 !important;
}

.adminnav {
    position: relative !important;
	top: 4px !important;
	margin-right: 15px;
    display: inline-block;
}

.adminnav:hover {
    border-bottom: 2px solid #ca003d;
    line-height: 26px;
}

.top-wrap { 
    width: calc(75% + 19px); 
    max-width: 1514px;
    margin: auto auto; 
    position: relative;
} 

#dropdown-menu_staff {
  display: none;
}

#dropdown-menu_staff.show {
  display: block;
}

@media only screen and (min-width: 1000px){ 
  .responsiveshow { 
    display: none !important;
  } 
}     

.dropdown2 { 
    position: relative; 
    display: inline-block;
} 

.guestnav {
	color: #a4a4a4 !important;
    font-weight: 520 !important;
    padding: 8px;
    font-size: 14px;
    border: none;
    border-radius: 40rem;
    margin: 6px 0;
    background-color: #323232;
}

.guestbtn {
	color: #a4a4a4 !important;
    font-weight: 520 !important;
    font-size: 14px;
    border: none;
    border-radius: 40rem;
    margin: 6px 0;
	padding: 7px;
    background-color: #323232;
}

.conversationnotification { 
    background: transparent; 
    color: #a4a4a4!important; 
    padding: 10px 9px !important; 
    display: inline-block; 
    font-size: 14px; 
    line-height: 26px; 
    font-weight: 600 !important;
} 


.conversationnotification:hover { 
    border-bottom: 2px solid #ca003d;
} 



.dropdown-more-open { 
    transition: transform .3s;
} 

.dropdown-content-mobile { 
    display: none; 
    position: absolute; 
    background-color: rgb(36,36,36); 
    z-index: 99;
} 

#dropdown-more { 
    font-size: 13px;
} 

.alertnav { 
    position: relative;
} 

.alertnav:before { 
    content: "\\f0f3"; 
    font-family: \'Font Awesome\\ 5 Free\'; 
    padding: 10px 1px; 
    font-size: 22px; 
    line-height: 26px; 
    color: #a4a4a4 !important;
} 

.alertnav:hover { 
    border-bottom: 2px solid #ca003d; 
    line-height: 26px;
} 

.pmnav { 
    position: relative;
} 

.pmnav:before { 
    content: "\\f27a"; 
    font-family: \'Font Awesome\\ 5 Free\'; 
    padding: 10px 1px; 
    font-size: 22px; 
    line-height: 26px; 
    color: #a4a4a4 !important;
} 

.pmnav:hover { 
    border-bottom: 2px solid #ca003d; 
    line-height: 26px;
} 

.dropdown { 
    position: relative; 
    display: inline-block;
} 

.dropdown2-content { 
    display: none; 
    position: absolute; 
    background-color: rgb(30, 30, 30); 
    border-radius: 10px; 
    min-width: 180px; 
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); 
    z-index: 1; 
    margin-top: 5px;
} 

.dropdown2:hover .dropdown2-content  { 
    display: block;
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

.fa-ellipsis-h:before,.fa-ellipsis:before { 
    content: "\\f141";
} 

.dropdown-content-mobile a  { 
    color: #a4a4a4!important; 
    padding: 9px; 
    text-decoration: none; 
    display: block;
} 

.dropdown-content-mobile a:hover  { 
    color: #ccc!important; 
    padding: 9px; 
    text-decoration: none; 
    display: block;
} 

.fa-magnifying-glass:before,.fa-search:before { 
    content: "\\f002";
} 

form { 
    margin: 0; 
    padding: 0;
} 


#headerlogo { 
: 
    height: 60px;
} 

#headerlogomobile { 
    height: 27px;
	margin-left:.5rem;
} 

.main-sell-button { 
    background: linear-gradient(to left, #ca003d,#9b0431); 
    padding: 6px 20px; 
    border-radius: 50px; 
    min-width: 80px; 
    min-height: 35px; 
    border: 0; 
    color: #fff; 
    font-weight: 600;
} 

button { 
    padding: 10px 20px; 
    cursor: pointer; 
    font-family: \'Poppins\',\'Helvetica Neue\',Helvetica,Roboto,Oxygen,Ubuntu,Cantarell,\'Fira Sans\',\'Droid Sans\',sans-serif; 
    font-size: 13px; 
    background: #262626; 
    color: #fff; 
    border: 0; 
    outline: 0; 
    transition: 350ms ease; 
    border-radius: 40rem; 
} 

.dropbtn { 
    background: transparent; 
    color: #a4a4a4; 
    padding: 10px; 
    font-size: 13px; 
    border: none; 
    cursor: pointer; 
    border-radius: 0.10rem;
} 

.dropbtn:hover { 
    transform: scale(1.03);
} 

.dropdown-content { 
    display:  none; 
    position:  absolute; 
    background-color:  #232323; 
    z-index:  99;
    width: 230px; 
    border-radius: 8px; 
    right: 0px;
} 

.menu1:hover { 
    background-color: #242424; 
    width: 100%;
} 

input.textbox { 
    background: #202020; 
    color: #a0a0a0; 
    border: 1px solid #303030; 
    padding: 9px; 
    outline: 0; 
    font-size: 13px; 
    font-family: \'Poppins\',\'Helvetica Neue\',Helvetica,Roboto,Oxygen,Ubuntu,Cantarell,\'Fira Sans\',\'Droid Sans\',sans-serif; 
    border-radius: 2px;
} 

[type="submit"] { 
    padding: 10px 20px; 
    cursor: pointer; 
    font-family: \'Poppins\',\'Helvetica Neue\',Helvetica,Roboto,Oxygen,Ubuntu,Cantarell,\'Fira Sans\',\'Droid Sans\',sans-serif; 
    font-size: 13px; 
    background: #262626; 
    color: #fff; 
    border: 0; 
    outline: 0; 
    transition: 350ms ease; 
    border-radius: 40rem; 
    font-weight: 900 !important; 
    margin-top: 5px;
} 

input.button { 
    padding: 10px 20px; 
    cursor: pointer; 
    font-family: \'Poppins\',\'Helvetica Neue\',Helvetica,Roboto,Oxygen,Ubuntu,Cantarell,\'Fira Sans\',\'Droid Sans\',sans-serif; 
    font-size: 13px; 
    background: #262626; 
    color: #fff; 
    border: 0; 
    outline: 0; 
    transition: 350ms ease; 
    border-radius: 40rem; 
    font-weight: 900 !important; 
    margin-top: 5px;
} 

.dropdown-content a  { 
    display:  block;
    color:  #a4a4a4!important; 
    padding:  9px; 
    text-decoration:  none; 
    border-bottom: 0px !important;
} 

.dropdown-content a:hover  { 
    background-color:  rgb(26, 26, 26); 
    border-radius: 6px;
} 

.fa-user-check:before { 
    content: "\\f4fc";
} 

.fa-rocket:before { 
    content: "\\f135";
} 

.fa-gamepad:before { 
    content: "\\f11b";
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

.fa-cogs:before,.fa-gears:before { 
    content: "\\f085";
} 

.profileoverflow { 
    overflow: hidden;
} 

.fa-book:before { 
    content: "\\f02d";
} 

.fa-comments:before { 
    content: "\\f086";
} 

.dropborder { 
    border-radius: 8px;
} 

.fa-user:before { 
    content: "\\f007";
} 

.fa-star:before { 
    content: "\\f005";
} 

.fa-cog:before,.fa-gear:before { 
    content: "\\f013";
} 

.fa-circle-question:before,.fa-question-circle:before { 
    content: "\\f059";
} 


/* These were inline style tags. Uses id+class to override almost everything */
#style-17jpe.style-17jpe {  
   float:left;  
}  
#style-sfPgW.style-sfPgW {  
   display:inline;  
   font-size:17px;  
   line-height:30px;  
   border-right: 2px solid #222;  
   border-bottom: none !important;  
   cursor:pointer;  
}  

@media (max-width: 991px) {
	#style-sfPgW.style-sfPgW,#style-6ATYq.style-6ATYq, .style-g8ipn {
		font-size: 14px !important;
	}
}
#style-P9lYN.style-P9lYN {  
   color:#a4a4a4;  
   padding:15px;  
   display:block;  
}  
#style-OiysV.style-OiysV {  
   width: 16px !important;  
}  
#style-xmsk2.style-xmsk2 {  
   color:#a4a4a4;  
   padding:15px;  
   display:block;  
}  
#style-lBPoO.style-lBPoO {  
   width: 16px !important;  
}  
#style-2UoJo.style-2UoJo {  
   color:#a4a4a4;  
   padding:15px;  
   display:block;  
}  
#style-etJFg.style-etJFg {  
   width: 16px !important;  
}  
#style-522J3.style-522J3 {  
   color:#a4a4a4;  
   padding:15px;  
   display:block;  
}  
#style-Fp6Cb.style-Fp6Cb {  
   width: 16px !important;  
}  
#style-6ATYq.style-6ATYq {  
   display:inline;  
   font-size:17px;  
   line-height:30px;  
}  
#style-g8ipn.style-g8ipn {  
   display:inline;  
   font-size:17px;  
   line-height:30px;  
}  
#style-qbYLV.style-qbYLV {  
   display:inline;  
   font-size:17px;  
   line-height:30px;  
}  
#style-rEvzC.style-rEvzC {  
   display:inline;  
   font-size:17px;  
   line-height:30px;  
}  
#dropdown-more-open.style-M1gxo {  
   display:inline;  
   font-size:17px;  
   line-height:30px;  
}  
#dropdown-more.style-fEwgH {  
   left: 17%;  
    width: 195px;  
    background-color:#1e1e1e;  
   border-radius:10px;  
   margin-top: 5px;  
}  
#dropdown-search-open.style-p4l42 {  
   font-size:17px;  
   line-height:30px;  
}  
#dropdown-search.style-tozL7 {  
   left: 17%;  
    padding: 10px;  
    background-color: rgb(30, 30, 30);  
    border-radius: 10px;  
    margin-top: 5px;  
    display: none;  
}  
#style-HEWJL.style-HEWJL {  
   padding:6px !important;  
}  
#style-yUis1.style-yUis1 {  
   padding: 7px 8px !important;  
   font-size:12px !important;  
}  
#style-EEic2.style-EEic2 {  
   float:right;  
}  
#over.style-Raxn7 {  
   margin-left: auto;  
   margin-right: auto;  
   display: block;  
   position:absolute;  
    width:100%;  
    height:100%;  
   margin-top: 10px;  
   text-align:center;  
}  
#headerlogo.style-Apckt {  
   display: inline-block;  
    height: 60px;  
}  
#over.style-zCVle {  
   margin-left: auto;  
   margin-right: auto;  
   display: block;  
   position:absolute;  
    width:100%;  
    height:100%;  
   margin-top: 10px;  
}  
#style-2tb4n.style-2tb4n {  
   float:right;  
}  
#style-YCGWm.style-YCGWm {  
   display:inline;  
}  
#style-TXLve.style-TXLve {  
   display: inline !important;  
   
	/* border: 1px solid #313131;  
    */
	padding: 6px 11px;  
   
	border-radius: 40rem;  
   
	border: 1px solid #444;  
}  
#style-bgln2.style-bgln2 {  
   margin-right:15px;  
   margin-left:5px;  
   display:inline-block;  
   top:5px;  
}  
#style-PaFhR.style-PaFhR {  
   margin-right:15px;  
   display:inline-block;  
   top:5px;  
}  
#style-6ZN9e.style-6ZN9e {  
   margin-left: -12px;  
}  
#dropdown-profile-open.style-CttoA {  
   font-weight: 500;  
}  
#style-HOWKU.style-HOWKU {  
   border-radius: 50%;  
   display: inline-block;  
    vertical-align: middle;  
   padding: 0;  
}  
#dropdown-profile.style-vgWcv {  
   display: none;  
}  
#style-O2plo.style-O2plo {  
   display:none;  
   background-color: #0014ff;  
   padding: 10px;  
   border-top-left-radius:8px;  
   border-top-right-radius:8px;  
}  
#style-1Km8S.style-1Km8S {  
   display: inline-block;  
   vertical-align: top;  
}  
#style-Ul9s5.style-Ul9s5 {  
   color: #fff;  
    font-size: 13px;  
   font-weight: 500;  
}  
#style-KWVwD.style-KWVwD {  
   background: rgba(0, 0, 0, 0.1);  
   padding: 5px;  
   border-radius: 3px;  
   color: #fff;  
   font-size: 14px;  
}  
#style-fdm6Q.style-fdm6Q {  
   background: rgba(0, 0, 0, 0.1);  
   padding: 5px;  
   border-radius: 3px;  
   color: #fff;  
   font-size: 14px;  
}  
#style-eAG4K.style-eAG4K {  
   padding: 6px;  
}  
#style-TCb2c.style-TCb2c {  
   width:25px;  
}  
#style-1v5Oj.style-1v5Oj {  
   width:25px;  
}  
#style-gOTAD.style-gOTAD {  
   width:25px;  
}  
#style-rn7e7.style-rn7e7 {  
   width:25px;  
}  
#style-KUVqs.style-KUVqs {  
   width:25px;  
}  
#style-TP4mB.style-TP4mB {  
   padding: 0;  
   color: #8d8d8d !important;  
}  
#style-Rov22.style-Rov22 {  
   background-color: #2f2d2d;  
   padding: 10px;  
   border-bottom-right-radius:8px;  
   border-bottom-left-radius:8px;  
   text-align: center;  
}  
#style-iaLlp.style-iaLlp {  
   float: right;  
}';
	return $__finalCompiled;
}
);