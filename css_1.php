/**
 * @version		1.0.3
 * @package		Iamux template for Joomla! 3.x
 * @author		JoomlaXTC http://www.joomlaxtc.com
 * @copyright	Copyright (C) 2017 Monev Software LLC. All rights reserved.
 * @license		http://www.joomlaxtc.com/license JoomlaXTC Proprietary Use License
 */
/* ----------------------------------------------*/
/* 01 - Фотогаллерея на главной
/* ----------------------------------------------*/


/* ----------------------------------------------*/
/* 02 - BODY
/* ----------------------------------------------*/
.alert {
padding: 45px 35px 8px 14px !important;}
.zakazz {text-align: -webkit-center; text-align: center;}
.zoom-float, .icon-txt {
    float: left;
}
.btn-primary:hover {cursor: pointer;
    border: solid 1px;

	background: #ffffff!important;
    color: #c20000;
    border: solid 1px #c20000 !important;
}



	.btn-primary { background: #c20000 !important; }
.one_half {
    width: 48%;
}

.one_half, .one_third, .one_fourth, .two_third, .three_fourth, .one_fifth, .onecol_forty, .onecol_sixty, .onecol_thirtyfive {
    position: relative;
    margin-right: 4%;
    float: left;
}

h5.light {
    font-weight: 500;
}

.marb2 {
    margin-bottom: 20px;
}
.clearfix:before, .clearfix:after {
    display: table;
    content: "";
}
.clearfix:after {
    clear: both;
}
.clearfix:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}

ul.recent_posts_list {
    margin: 0px;
    padding: 0px;
    width: 100%;
    float: left;
}

.recent_posts_list li {
    padding: 0px 0px 13px 0px;
    margin: 0px 0px 16px 0px;
    list-style-type: none;
    border-bottom: 1px solid #eee;
    float: left;
    width: 100%;
}
.recent_posts_list li span {
    float: left;
    margin-right: 15px;
}
.recent_posts_list li a {
    text-decoration: none;
    line-height: 17px;
    display: block;
    color: #999;
}
.recent_posts_list li span img {
    float: left;
    margin-right: 0px;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    -moz-opacity: 1;
    -khtml-opacity: 1;
    opacity: 1;
	    float: left;
    margin-bottom: 23px;
    object-fit: cover;
    width: 150px;
    height: 50px;
}
.recent_posts_list li i {
    padding: 1px 0px 0px 0px;
    margin: 0px;
    display: block;
    font-size: 10px;
    font-style: normal;
    color: #c9c9c9;
}

.comment_form {
    
    width: 50%;
    margin-top: 30px;
}
label {
    display: inline-block;
    margin-bottom: 5px;
    font-weight: bold;
}
#recaptcha {    padding-bottom: 10px;
    margin-bottom: 10px;}
.comment_input_bg {
    float: left;
    width: 75%;
    height: 40px;
    padding: 7px 10px 0px 10px;
    border-top: 2px solid #e3e3e3;
    border-left: 2px solid #e3e3e3;
    border-right: 1px solid #e3e3e3;
    border-bottom: 1px solid #e3e3e3;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background-color: #f9f9f9;
}
.comment_form label {
    float: left;
    width: 25%;
    height: 15px;
    padding: 7px 10px;
    margin-bottom: 40px;
    font-weight: normal;
	display: none;
}
.comment_textarea_bg {
    float: none;
    width: 90%;
    height: 235px;
    padding: 7px 10px 0px 10px;
    margin-bottom: 20px;
    border-top: 2px solid #e3e3e3;
    border-left: 2px solid #e3e3e3;
    border-right: 1px solid #e3e3e3;
    border-bottom: 1px solid #e3e3e3;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background-color: #f9f9f9;
}
.comment_submit {
    background-color: #eee;
    border: 1px solid #ddd;
    padding: 9px 13px;
    font-family: 'Open Sans',sans-serif;
    font-weight: 600;
    border-radius: 4px;
    color: #333;
    text-transform: uppercase;
}


#clr-txt {color:#ff0000 !important;}

/* Body Homepage Background */
body.frontpage { background:#fff url('images/body_bk-s1.jpg') top center no-repeat fixed;background-size:auto}


/* Body Innerpage Background */
body.innerpage { background:#fff; ;background-size:auto}

/* Overlay Background */
.overlay {
background:#8C1F8C;background-size:cover;}

/* Background Video */
video#bgvid {
position: fixed;
opacity:0.2;
top: 50%;
left: 50%;
min-width: 100%;
min-height: 100%;
width: auto;
height: auto;
z-index: -100;
-ms-transform: translateX(-50%) translateY(-50%);
-moz-transform: translateX(-50%) translateY(-50%);
-webkit-transform: translateX(-50%) translateY(-50%);
transform: translateX(-50%) translateY(-50%);
background:#fff url('images/body_bk-s1.jpg') top center no-repeat fixed; background-size: cover;}

/* ----------------------------------------------*/
/* 03 - TYPOGRAPHY
/* ----------------------------------------------*/
/* Basecolor classes used in HTML mark up */
.basecolor_1 {
 color:#B54CB5;}
.basecolor_2 {
 color:#1a8f80;}
.basecolor_3 {
 color:#DEED13;}
.basecolor_4 {
 color:#fff;}
.basecolor_5 {
 color:#000;}
.bgbasecolor_1 {
 background:#B54CB5;}
.bgbasecolor_2 {
 background:#1a8f80;}
.bgbasecolor_3 {
 background:#DEED13;}
.bgbasecolor_4 {
 background:#fff;}
.bgbasecolor_5 {
 background:#000;}
 
/* Global Fonts */
body {
color:#5f5f5f;}
a {
 color:#c20000;}
a:hover {
 color:#B54CB5;text-decoration:none;}
h1, h2, h3, h4, h5, h6 {
 color:#B54CB5;}

/* Custom Gradient H Classes */
h1.gradient1,h2.gradient1,h3.gradient1,h4.gradient1,h5.gradient1,h6.gradient1,p.gradient1,i.gradient1 {
   background: -webkit-linear-gradient(#ff0000, #9e0000);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Default Button */
/* .btn {background:#e6e6e6!important;*/
}

/* BaseColor Buttons */
.btn.basecolor_1,.btn.basecolor_2,.btn.basecolor_3,.btn.basecolor_4,.btn.basecolor_5 {
color: #fff;
text-shadow: none;
box-shadow: none;
border-radius: 0px;
font-weight: 700;
border: 0!important;
padding: 8px 12px!important;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
.btn.basecolor_1 {
background:#B54CB5!important;
}
.btn.basecolor_2 {
background:#1a8f80!important;
}
.btn.basecolor_3 {
background:#DEED13!important;	
}
.btn.basecolor_4 {
background:#fff!important;
}
.btn.basecolor_5 {
background:#000!important;
}

/* Bootstrap Button Overrides */
.btn-primary:focus, .btn-primary:active, .btn-primary.active, .btn-primary.disabled,.btn-primary[disabled] {
background:#c20000!important;
}
.btn-info, .btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active, .btn-info.disabled, .btn-info[disabled] {
background: #1a8f80!important;
}
.btn-success, .btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.disabled, .btn-success[disabled] {
background: #0CABC7!important;
}
.btn-warning, .btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.disabled, .btn-warning[disbaled] {
background: #DE1F75!important;
}
.btn-danger, .btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.disabled, .btn-danger[disabled] {
background: #DB00DB!important;
}
.btn-inverse, .btn-inverse:hover, .btn-inverse:focus, .btn-inverse:active, .btn-inverse.disabled, .btn-inverse[disabled] {
background: #2E2E2E!important;
}

/* Basecolor Blog Bubbles */
.blog-basecolor1 {
background: #B54CB5;
}
.blog-basecolor1:after {
border-color: transparent #B54CB5;
}
.blog-basecolor2 {
background: #1a8f80;
}
.blog-basecolor2:after {
border-color: transparent #1a8f80;
}
.blog-basecolor3 {
background: #DEED13;
}
.blog-basecolor3:after {
border-color: transparent #DEED13;
}
.blog-basecolor4 {
background: #fff;
}
.blog-basecolor4:after {
border-color: transparent #fff;
}
.blog-basecolor5 {
background: #000;
}
.blog-basecolor5:after {
border-color: transparent #000;
}

/* BreadCrumb Background Basecolor */
.breadcrumb {background: #000;}

/* ----------------------------------------------*/
/* 02 - Header,logo,menu
/* ----------------------------------------------*/
/* Header Top Background */
#headertop {
background:transparent;
}

/* Header Wrap Background */
#headerwrap {
 background:rgba(0, 0, 0, 0.5) ;background-size:auto;}
 
 #headerwrap.stickyscroll {
 background:#000000 ;background-size:auto;}

#headerwrap:hover {
 background:#000000 ;background-size:auto;}

/* Header Background */
#header {
background:transparent ;background-size:auto;}

 .innerpage #headerwrap {
 background:#000000 ;background-size:auto;}

/* Logo  */
#logo {
float: left;
text-align:center;
}

#logo img {
padding:0 12px;
}

#logo a p {
color:#000;
padding:0;
float:right;
display:inline;
margin:0px;
}

/* Logo Override */
#logo a p {
 background: -webkit-linear-gradient(#cd0de4, #0de49a);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}




/* Menu */
/* Menu Background */
#menu {
background: transparent;
}
/* BOOTSTRAP MENU RESET */

/* Menu Top Level */
#menuwrap #menu ul.nav > li a, #menu ul.nav > li span.separator {
background-color: transparent;
color:#fff;
position:relative;
z-index:13;}

#menuwrap #menu ul.nav > li:hover a, #menuwrap #menu ul.nav > li span.separator:hover a {
background-color: transparent;}

#menuwrap #menu ul.nav > li a:hover, #menuwrap #menu ul.nav > li.parent:hover > a, #menu ul.nav > li span.separator:hover {
color:#c20000;
}
#menuwrap #menu ul.nav > li.active a, #menuwrap #menu ul.nav > li.active:hover {
 background-color: transparent!important;
}
#menuwrap #menu ul.nav > li.active a, #menuwrap #menu ul.nav > li.active a:hover {
color:#ff0000;
}
#menuwrap ul.nav li.parent a:after  {
content: "\f105";
font-family: 'FontAwesome';
margin-left:8px;
position: absolute;
display: inline;
font-weight:100;
font-size:85%;
-webkit-transition: -webkit-transform .3s ease-in-out;
transition: transform .3s ease-in-out;
}
#menuwrap ul.nav li.parent a:hover:after {
-webkit-transform: rotate(90deg);
transform: rotate(90deg);
}
#menuwrap ul.nav li.parent:hover > a:after {
-webkit-transform: rotate(90deg);
transform: rotate(90deg);
}
#menu ul.nav li {
	padding: 0px;
}
/* Menu Drop Level */
/* BOOTSTRAP MENU RESET */
#menuwrap #menu .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus, .dropdown-submenu:hover>a, .dropdown-submenu:focus>a {
background: transparent!important;
}
#menuwrap ul.dropdown-menu li a:after,#menuwrap ul.dropdown-menu li.dropdown.parent ul.dropdown-menu a:after{
	content: ""!important;
}
#menuwrap ul.dropdown-menu li.dropdown.parent a:after {
content: "\f101"!important;
font-family: 'FontAwesome';
position: absolute;
right: 8%;
display: inline;
font-weight:100;
-webkit-transition: -webkit-transform .3s ease-in-out;
          transition:         transform .3s ease-in-out;
}
#menuwrap ul.dropdown-menu li.dropdown.parent a:hover:after {
-webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
#menuwrap ul.dropdown-menu li.dropdown.parent:hover > a:after {
-webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
#menuwrap #menu ul.nav ul.dropdown-menu {
background-color: #000!important;
border-radius: 0px}
#menuwrap #menu ul.nav ul.dropdown-menu li {
float: none;
}
#menuwrap #menu ul.nav ul.dropdown-menu li a, #menu ul.nav ul.dropdown-menu li span.separator {
text-align: left;
background: transparent!important;
color:#fff;
border-radius: }
#menuwrap #menu ul.nav ul.dropdown-menu li a:hover, #menu ul.nav ul.dropdown-menu li span.separator:hover {
background:#c20000!important;
}
#menuwrap #menu ul.nav ul.dropdown-menu li a:hover, #menuwrap #menu ul.nav ul.dropdown-menu li a:hover:after, #menu ul.nav ul.dropdown-menu li li span.separator:hover {
color:#fff!important;
}
#menuwrap #menu ul.nav ul.dropdown-menu li:active a {
background: #B54CB5!important;
}
#menuwrap #menu ul.nav ul.dropdown-menu li a:active {
color:#fff!important;
}
/* Mobile Menu */
.navbar .btn-navbar .icon-bar {
background-color: #fff!important;
}
/* NAV PILLS */
.nav-pills>.active>a, .nav-pills>.active>a:hover, .nav-pills>.active>a:focus {
background:#B54CB5;
 }
.nav>li>a:hover, .nav>li>a:focus {
background:#B54CB5;
color: #ffea76;
}
/* SIDE MENU */
.sidemenu .nav-pills > li > span.separator, .sidemenu ul.dropdown-menu>li>a:hover, .sidemenu ul.dropdown-menu>li>a:focus, .sidemenu ul.dropdown-menu .dropdown-submenu:hover>a, .sidemenu ul.dropdown-menu .dropdown-submenu:focus>a {
	color: #fff;
	background: transparent!important;
	display: block;
}
/* CANVAS MENU */
#jxtc_canvasslide_left a:hover, #jxtc_canvasslide_right a:hover {
color: #fff;
border-left:4px solid #DEED13;}
#jxtc_canvasslide_left label.close, #jxtc_canvasslide_right label.close {
background:#DEED13;
opacity: 1;
}
label.open.xtccanvas {
background:#B54CB5!important;
color: #fff;
padding: 8px 10px;
font-size: 22px!important;
position: fixed;
top: 15%;
right: 0%;
z-index: 1200;
}
/* Bottom menu */
ul.menu.bottom a {color:#fff;}
/* ----------------------------------------------*/
/* 03 - Region Layout
/* ----------------------------------------------*/

/* REGION 1 */
/* Region outerwrap */
#region1wrap {background:transparent ; background-size:auto;}
 
/* Region innerwrap */
#region1 { background:transparent  url('images/regionpattern.png') repeat fixed ;background-size:auto; }

/* REGION 2*/
/* Region outerwrap */
#region2wrap {background:#fff url('images/circle_bk.jpg') repeat-y;background-size:cover;}

/* Region innerwrap */
#region2 {background:transarent ;background-size:auto;}

/* REGION 3*/
/* Region outerwrap */
#region3wrap {background:#fff ;background-size:auto;}

/* Region innerwrap */
#region3 {background:transparent ;background-size:auto;}

/* Component */
#component {
 background:transparent}
/* Left */
#left {
 background:transparent}
/* Right */
#right {
 background:transparent}

/* REGION 4*/
/* Region outerwrap */
#region4wrap {background:transparent url('images/r4_bk-s1.jpg') repeat;background-size:cover;}

/* Region innerwrap */
#region4 {background:transparent  url('images/geotrans_bk.png') no-repeat ;background-size:cover;}

/* REGION 5*/
/* Region outerwrap */
#region5wrap {background:transparent url('images/circle_bk.jpg') repeat-y;background-size:cover;}

/* Region innerwrap */
#region5 {background:transparent ;background-size:auto;}

/* REGION 6 */
/* Region outerwrap */
#region6wrap {background:transparent url('images/r6-s1.jpg') repeat-y;background-size:cover;}

/* Region innerwrap */
#region6 {background:transparent ;background-size:auto;}

/* REGION 7 */
/* Region outerwrap */
#region7wrap {background:transparent url('images/circle_bk.jpg') repeat-y;background-size:cover;}

/* Region innerwrap */
#region7 {background:transparent ;background-size:auto;}

/* REGION 8*/

/* Region outerwrap */
#region8wrap {background:#474747 url('images/r8_bk-s1.jpg') top center no-repeat;background-size:contain;}

/* Region innerwrap */
#region8 {background:transparent ;background-size:cover;}

/* region8 innerwrap move up parameter */

/* REGION 9*/
/* Region outerwrap */
#region9wrap {background:#5f5f5f ;background-size:auto;}

/* Region innerwrap */
#region9 {background:transparent ;background-size:auto;}

/* REGION 10*/
/* Region outerwrap */
#region10wrap {background:#5f5f5f ;background-size:auto;}

/* Region innerwrap */
#region10 {background:transparent ;background-size:auto;}

/* REGION 11*/
/* Region outerwrap */
#region11wrap {background:#fff ;background-size:auto;}

/* Region innerwrap */
#region11 {background:transparent ;background-size:auto;}

/* REGION 12*/
/* Region outerwrap */
#region11wrap {background:#fff ;background-size:auto;}

/* Region innerwrap */
#region12 {background:transparent ;background-size:auto;}

/* Footer */
/* Region outerwrap */
#footerwrap {
 background:#5f5f5f ;background-size:auto;}
.footer {
 background:transparent ;background-size:auto; padding-left: 20%;
    padding-right: 20%;
}


#backtotop-btn {
font-size:26px;
color:#FFFFFF;
background:rgba(0, 0, 0, 0.6);
padding:12px;
left: 0 !important;
}
.backtotop-fade-out  { -webkit-animation-name: backtotop-fade-out-blinker;
    -webkit-animation-duration: 2s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    -moz-animation-name: backtotop-fade-out-blinker;
    -moz-animation-duration: 2s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;
    animation-name: backtotop-fade-out-blinker;
    animation-duration: 2s;
    animation-timing-function: linear; }

@-moz-keyframes backtotop-fade-out-blinker {
    0% { opacity: 1}
    50% { opacity: 0}
    100% { opacity: 1} 
}

@-webkit-keyframes backtotop-fade-out-blinker { 
    0% { opacity: 1.0; }
    50% { opacity: 0.7; }
    100% { opacity: 1.0; } 
} 

@keyframes backtotop-fade-out-blinker { 
    0% { opacity: 1.0; } 
    50% { opacity: 0.8; } 
    100% { opacity: 1.7; } 
}
/* ----------------------------------------------*/
/* 04 - Module CSS
/* ----------------------------------------------*/
/* Module Background */
.module {
 background: transparent;border-radius:0px;
 }
/* Module Title Background */
h3.moduletitle {
 background: transparent;
 color:#333;
 }
/* Module Title First Word Color */
h1.span.first_word, h2.span.first_word, h3.span.first_word, h4.span.first_word, h5.span.first_word, h6.span.first_word, h1.fa::before, h3.fa::before, h4.fa::before, h5.fa::before, h6.fa::before {
color:#333;
 }
/* Module Title Rest Word Color */
h1.span.rest, h2.span.rest, h3.span.rest, h4.span.rest, h5.span.rest, h6.span.rest {
color:#333;
}
.modulecontent {
color:#5f5f5f!important;
}
/* Base Colors */
.basecolor_1 h1 span, .basecolor_1 h2 span, .basecolor_1 h3 span, .basecolor_1 h4 span, .basecolor_1 h5 span, .basecolor_1 h6 span {
color:#B54CB5!important;
}
.basecolor_2 h1 span, .basecolor_2 h2 span, .basecolor_2 h3 span, .basecolor_2 h4 span, .basecolor_2 h5 span, .basecolor_2 h6 span {
color:#1a8f80!important;
}
.basecolor_3 h1 span, .basecolor_3 h2 span, .basecolor_3 h3 span, .basecolor_3 h4 span, .basecolor_3 h5 span, .basecolor_3 h6 span {
color:#DEED13!important;
}
.basecolor_4 h1 span, .basecolor_4 h2 span, .basecolor_4 h3 span, .basecolor_4 h4 span, .basecolor_4 h5 span, .basecolor_4 h6 span {
color:#fff!important;
}
.basecolor_5 h1 span, .basecolor_5 h2 span, .basecolor_5 h3 span, .basecolor_5 h4 span, .basecolor_5 h5 span, .basecolor_5 h6 span {
color:#000!important;
}
/* Basecolor Box Suffixes */
.module.basecolor1.box {
background:#B54CB5!important;
}
.module.basecolor2.box {
background:#1a8f80!important;
}
.module.basecolor3.box {
background:#DEED13!important;
}
.module.basecolor4.box {
background:#fff!important;
}
.module.basecolor5.box {
background:#000!important;
}
/* These parameters are controlled by the base colors in the template adaministrator  */
.basecolor1 .moduletitle {
border-color:#B54CB5;
}
.basecolor2 .moduletitle {
border-color:#1a8f80;
}
.basecolor3 .moduletitle {
border-color:#DEED13;
}
.basecolor4 .moduletitle {
border-color:#fff;
}
.basecolor5 .moduletitle {
border-color:#000;
}

/* Border Module background color - Covers the border behind the text with the background color */
#region1wrap .border h3.moduletitle span {
background:transparent!important;
}
#region2wrap .border h3.moduletitle span {
background:transarent!important;
}
#region3wrap .border h3.moduletitle span {
background:transparent!important;
}
#region4wrap .border h3.moduletitle span {
background:transparent!important;
}
#region5wrap .border h3.moduletitle span {
background:transparent!important;
}
#region6wrap .border h3.moduletitle span {
background:transparent!important;
}
#region7wrap .border h3.moduletitle span {
background:transparent!important;
}
#region8wrap .border h3.moduletitle span {
background:transparent!important;
}
#region9wrap .border h3.moduletitle span {
background:transparent!important;
}
#region10wrap .border h3.moduletitle span {
background:transparent!important;
}
#region11wrap .border h3.moduletitle span {
background:transparent!important;
}
#region12wrap .border h3.moduletitle span {
background:transparent!important;
}

/* ----------------------------------------------*/
/* 05 - Content Overrides
/* ----------------------------------------------*/
/* Joomla Content */
h1.pagetitle span {
color:#B54CB5!important;
}
.contentheading {
color:#B54CB5;
}
.page-header h1, .componentheading, .componentheadingnowrap, .pagetitle, span.subheading-category {
color:#B54CB5;
}
.com_content .item-page .page-header h2 a, .com_content .item-page .page-header h2 {
color:#B54CB5;
}
.com_content .blog .page-header h2 a, .com_content .blog .page-header h2 {
color:#B54CB5!important;
}

.com_content p.readmore {text-align:right}
.com_content p.readmore a.btn {
color:#B54CB5!important;
background:transparent!important;
border:1px solid #B54CB5!important;
border-radius:3px!important;
}
.com_content p.readmore a.btn:hover {
color:#DE1F75!important;
background:transparent!important;
border:1px solid #DE1F75!important;
}
.btn,btn {border-radius:3px!important;} 
.label-info, .badge-info {background:#B54CB5!important;
color: #fff;}
/* Category Blog */
.item-image img {opacity:0.7;outline: 1px solid #fff;
outline-offset: -12px;}
.item-image img:hover {opacity:1;}
.item-image {background:#B54CB5}
.com_content .blog .item {background:#000000;color:#fff;padding:24px;border-radius:0px}
.com_content .blog .item .article-info.muted {color:#fff;}
/* FAQ Category Blog */
.com_content .faqblog .faq-blog_item:hover {
border-color:#B54CB5;
 }
.com_content .faqblog .faq-blog_item span .page-header h2::before {
color:#B54CB5;
 }
/* Pricing Table Category Blog */
.pricetbl-title {
background:#1a8f80;
 }
.pricetbl-price {
background:#B54CB5;
color: #fff;
}
.com_content .blog .item .pricetbl-wrap .j2store-product {
background:#DEED13;
color: #fff;
}
/* Calendar */
.calendar tbody td.hilite, .calendar tbody td.active, .calendar tbody td.selected { /* Hovered cells <TD> */
background: #B54CB5!important;
color: #fff!important;
border-radius: 50%;
font-weight: bold;
}
.calendar thead .name {
background: #B54CB5!important;
color: #fff!important;
}
.eventcontentinner {
background: #B54CB5!important;
color: #fff!important;
}
.eventcontentinner a {
color: #fff!important;
}

/* COM User */
input.button.subbutton.btn.btn-primary, #form-login-submit.control-group .btn.btn-primary, .logout-button .btn.btn-primary {
background:#c20000;
}
.loginpagetitle {
color:#B54CB5}


/* CUSTOM TEMPLATE STYLES */

/* FRONT PAGE STYLE */
/* Leftside */
#leftside {padding-left:36px;}
ul.leftside li {color:#fff;font-size:36px;line-height:14px;}
/* Inset */
#insetmod {text-align: center;width:50%;margin: 0 auto;z-index:2;
position:relative;}
#insetmod h1 {font-size:135px;z-index:12;}
#insetmod h2 {color:#fff;font-size:32px;font-weight:bold;text-transform:uppercase;}
#insetmod p {color:#fff;}
.back-text { background: -webkit-linear-gradient(#ff0000, #9e0000);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;}

/* User 1 */
.u1over {position:absolute;margin-top:-40px;z-index:6}
.user1mod {padding:60px 0 0 40px;}
.divider {
	width: 70%;
	max-width: 30px;
	margin: 0 0 3vh;
	border-color: #c20000;
}
.user1mod h2 {font-weight:700;color:#c20000;text-shadow: 2px 1px 0px rgba(0, 0, 0, 0.2);}
.user1mod p {width:75%;}
.user1mod a,user1mod i {color:#c20000;}

/* User 13 */
.user13mod {padding:40px 0px 0px 160px;}
.user13mod .divider {
	width: 70%;
	max-width: 30px;
	margin: 0 0 3vh;
	border-color: #FFFFFF;
}
.user13mod h2 {font-weight:700;color:#fff;text-shadow: 2px 1px 0px rgba(0, 0, 0, 0.2);}
.user13mod p {width:75%;color:#fff;}
.user13mod a,user13mod i {color:#FFFFFF;}
.user13over {position:absolute;margin-bottom:-140px;margin-left:-40px;z-index:5;}

/* User 19 */
.user19over {position:absolute;margin-top:-220px;left:10%;z-index:5;}
.user19mod {padding:160px 80px 0;}
.user19mod .divider {
	width: 70%;
	max-width: 30px;
	margin: 0 0 3vh;
	border-color: #c20000;
}
.user19mod h2 {font-weight:700;color:#c20000;text-shadow: 2px 1px 0px rgba(0, 0, 0, 0.2);}
.user19mod p {width:75%;}
.user19mod a,user19mod i {color:#c20000;}

/* User 25 */
.user25over {position:absolute;margin-top:-340px;right:15%;z-index:5;}
.user25mod {padding:110px 80px 0;}
.user25mod .divider {
	width: 70%;
	max-width: 30px;
	margin: 0 0 3vh;
	border-color:#c20000;
}
.user25mod h2 {font-weight:700;color:#c20000;text-shadow: 2px 1px 0px rgba(0, 0, 0, 0.2);}
.user25mod p {width:75%;}
.user25mod a,user25mod i {color:#c20000;}


/* User 31 */
.user31over {position:absolute;margin-top:-320px;left:20%;z-index:5;}
.user31mod {padding:100px 80px 0;}
.user31mod .divider {
	width: 70%;
	max-width: 30px;
	margin: 0 0 3vh;
	border-color: #c20000;
}
.user31mod h2 {font-weight:700;color:#c20000;text-shadow: 2px 1px 0px rgba(0, 0, 0, 0.2);}
.user31mod p {width:75%;}
.user31mod a,user31mod i {color:#c20000;}

/* User 37 */
.user37mod_wrap {padding:10px;border: 1px solid #fff;width:50%;margin:0 auto;}
.user37mod {background-color: rgba(255, 255, 255, 0.9);
background: rgba(255, 255, 255, 0.9);
color: rgba(255, 255, 255, 0.9);padding:40px 0px;}
.user37mod h2 {font-size:32px;font-weight:700;text-align:right;}


/* Footer */
.footercons i {color:#fff;font-size:24px;padding:0 12px;}

#legals  {text-align:right;}

#legals .button.btn.btn-primary {border: 0px;
border-radius: 50%!important;
height: 60px;
width: 60px;
margin-left: -40px;
margin-top:-4px;
font-size: 14px;
padding: 0 1px 0 0;}

#legals #mod-search-searchword {height:28px;}

.circleeround {border-radius:50%;width:75%;}
ul.docs {margin-left:0px;}
ul.docs li {font-size:12px;line-height:22px;}
/* ----------------------------------------------*/
/* 06 - Responsive CSS
/* ----------------------------------------------*/
/* Check to see if the Responsive parameter is on */
/* FrontPage Responsive */
@media (max-width: 1280px) {
.user13over {
	position: relative;
	margin-bottom: 0px;
	margin-left: 0px;
}
.user19over {
	width: 40%;
}
	
}
@media (max-width: 1024px) {
.user13mod,.user25mod {
	padding:0;
}
.user19mod,.user31mod {
	padding:0 0 0 40px;
}
.user37mod_wrap {width:70%;
}
.user1mod p, .user13mod p, .user19mod p, .user25mod p, .user31mod p, .user37mod p {
width: 100%;
}
	
}
@media (max-width: 979px) {
/* Front Page Modules */
body.frontpage {
	text-align: center;
}
#insetmod {
	width: 80%;
}
#insetmod h1 {
	font-size: 45px;
}
#insetmod h2 {font-size: 20px;}
.divider, .user13mod .divider, .user19mod .divider, .user25mod .divider, .user31mod .divider {
	display: none;
}
.u1over, .user19over, .user25over, .user31over {
	display: none;
}
.user1mod, .user13mod, .user19mod, .user25mod, .user31mod {
	padding: 60px 0;
}
#user1 .span6,#user13 .span6,#user19 .span6,#user25 .span6,#user31 .span6,#user37 .span6 {
	width:100%;
	margin-left:0;
}
.user1mod h2, .user13mod h2, .user19mod h2, .user25mod h2, .user31mod h2, .user37mod h2 {
	text-align: center;
}
.user1mod p, .user13mod p, .user19mod p, .user25mod p, .user31mod p, .user37mod p {
	text-align: center;
}
.user37mod_wrap {
	width: 90%;
}
	
#legals {
	text-align:center;
}
}
@media (max-width: 767px) {
.user1mod, .user13mod, .user19mod, .user25mod, .user31mod {
	padding: 60px 0 40px;
}
.footercons i {padding:0 6px;}
}
	
@media (max-width: 480px) {
#insetmod {
	width: 100%;
}
}
		
/* Body Frontpage Background Swap Breakpoints */


/* Portrait tablet to landscape and desktop */
@media (max-width: 979px) {
body.frontpage {background:#fff url('images/body_bk-s1_979.jpg') top center no-repeat fixed;background-size:auto;}
}

/* Landscape phone to portrait tablet */
@media (max-width: 767px) {
body.frontpage {background:#fff url('images/body_bk-s1_768.jpg') top center no-repeat fixed;background-size:auto;}
}
/* Landscape phones and down */
@media (max-width: 480px) {
body.frontpage {background:#fff url('images/body_bk-s1_480.jpg') top center no-repeat fixed;background-size:auto;}
}
/* End Device Swap Parameter  */

/* Body Frontpage No Background Images Parameter  */

/* Body Innerpage Background Swap Breakpoints */

/* Body Innerpage No Background Images Parameter  */


/* Headerwrap Background Swap Breakpoints */

/* Headerwrap No Background Images Parameter  */
	


/* Header Background Swap Breakpoints */

/* Headerwrap No Background Images Parameter  */

/* Region1Wrap Background Swap Breakpoints */

/* Region1 Wrap No Background Images Parameter  */
@media (max-width: 767px) {#region1wrap {background-image:none;}}
	
/* Region1  Background Swap Breakpoints */

/* Region1 No Background Images Parameter  */

/* Region2 Wrap Background Swap Breakpoints */

/* Portrait tablet to landscape and desktop */
@media (max-width: 979px) {
#region2wrap {background:#fff  url('images/circle_bk_979.jpg')  repeat-y; background-size:auto;}
}

/* Landscape phone to portrait tablet */
@media (max-width: 767px) {
#region2wrap {background:#fff url('images/circle_bk_768.jpg')  repeat-y; background-size:auto;background-attachment:scroll;}
}
/* Landscape phones and down */
@media (max-width: 480px) {
#region2wrap {background:#fff url('images/circle_bk_480.jpg')  repeat-y; background-size:auto;background-attachment:scroll;}
}
/* End Device Swap Parameter  */

/* Region2 Wrap No Background Images Parameter  */
	
/* Region 2 Background Swap Breakpoints */

/* Region 2 No Background Images Parameter  */
	
/* Region 3 Wrap Background Swap Breakpoints */

/* Region 3 Wrap No Background Images Parameter  */

/* Region 3 Background Swap Breakpoints */

/* Region 3 No Background Images Parameter  */
	

/* Region 4 Wrap Background Swap Breakpoints */
/* Portrait tablet to landscape and desktop */
@media (max-width: 979px) {
#region4wrap {background:transparent url('images/r4_bk-s1_979.jpg') repeat; background-size:auto;}
}

/* Landscape phone to portrait tablet */
@media (max-width: 767px) {
#region4wrap {background:transparent url('images/r4_bk-s1_767.jpg') repeat; background-size:auto;background-attachment:scroll;}
}
/* Landscape phones and down */
@media (max-width: 480px) {
#region4wrap {background:transparent url('images/r4_bk-s1_480.jpg') repeat; background-size:auto;background-attachment:scroll;}
}
/* End Device Swap Parameter  */

/* Region 4 Wrap No Background Images Parameter  */

/* Region 4 Background Swap Breakpoints */

/* Portrait tablet to landscape and desktop */
@media (max-width: 979px) {
#region4 {background: url('images/geotrans_bk_979.png') no-repeat; background-size:auto;}
}

/* Landscape phone to portrait tablet */
@media (max-width: 767px) {
#region4 {background: url('images/geotrans_bk_767.png') no-repeat; background-size:auto;background-attachment:scroll;}
}

/* Landscape phones and down */
@media (max-width: 480px) {
#region4 {background: url('images/geotrans_bk_480.png') no-repeat; background-size:auto;background-attachment:scroll;}
}

/* End Device Swap Parameter  */

/* Region 4 No Background Images Parameter  */

/* Region 5 Wrap Background Swap Breakpoints */

/* Portrait tablet to landscape and desktop */
@media (max-width: 979px) {
#region5wrap {background:transparent url('images/circle_bk_979.jpg') repeat-y; background-size:auto;}
}

/* Landscape phone to portrait tablet */
@media (max-width: 767px) {
#region5wrap {background:transparent url('images/circle_bk_768.jpg')  repeat-y; background-size:auto;background-attachment:scroll;}
}
/* Landscape phones and down */
@media (max-width: 480px) {
#region5wrap {background:transparent url('images/circle_bk_480.jpg')  repeat-y; background-size:auto;background-attachment:scroll;}
}
/* End Device Swap Parameter  */

/* Region 5 Wrap No Background Images Parameter  */
	
	
/* Region 5 Background Swap Breakpoints */

/* Region 5 No Background Images Parameter  */

/* Region 6 Wrap Background Swap Breakpoints */

@media (max-width: 980px) {
#region6wrap {background:transparent url('images/r6-s1_979.jpg')  repeat-y; background-size:auto;}
}

@media (max-width: 767px) {
#region6wrap {background:transparent url('images/r6-s1_767.jpg')  repeat-y; background-size:auto;background-attachment:scroll;}
}
	
@media (max-width: 480px) {
#region6wrap {background:transparent url('images/r6-s1_480.jpg')  repeat-y; background-size:auto;background-attachment:scroll;}


/* Region 6 Wrap No Background Images Parameter  */
	
/* Region 6 Background Swap Breakpoints */

/* Region 6 No Background Images Parameter  */
@media (max-width: 767px) {#region6 {background-image:none;}}
	
/* Region 7 Wrap No Background Images Parameter  */
	
/* Region 7 Wrap Background Swap Breakpoints */

/* Portrait tablet to landscape and desktop */
@media (max-width: 979px) {
#region7wrap {background:transparent url('images/circle_bk_979.jpg')  repeat-y; background-size:auto;}
}

/* Landscape phone to portrait tablet */
@media (max-width: 767px) {
#region7wrap {background:transparent url('images/circle_bk_768.jpg')  repeat-y; background-size:auto;background-attachment:scroll;}
}
/* Landscape phones and down */
@media (max-width: 480px) {
#region7wrap {background:transparent url('images/circle_bk_480.jpg')  repeat-y; background-size:auto;background-attachment:scroll;}
}
/* End Device Swap Parameter  */
	
/* Region 7 Background Swap Breakpoints */

/* Region 7 No Background Images Parameter  */
@media (max-width: 767px) {#region7 {background-image:none;}}
	

	
/* Region 8 Wrap Background Swap Breakpoints */

/* Portrait tablet to landscape and desktop */
@media (max-width: 979px) {
#region8wrap {background:#474747 url('images/r8_bk-s1_979.jpg') top center no-repeat; background-size:auto;}
}

/* Landscape phone to portrait tablet */
@media (max-width: 767px) {
#region8wrap {background:#474747 url('images/r8_bk-s1_767.jpg')  top center no-repeat; background-size:auto;background-attachment:scroll;}
}
/* Landscape phones and down */
@media (max-width: 480px) {
#region8wrap {background:#474747 url('images/r8_bk-s1_480.jpg')  top center no-repeat; background-size:auto;background-attachment:scroll;}
}
/* End Device Swap Parameter  */

/* Region 8 Wrap No Background Images Parameter  */
	
/* Region 8 Background Swap Breakpoints */

/* Region 8 No Background Images Parameter  */
@media (max-width: 767px) {#region8 {background-image:none;}}
	
/* Region 9 Wrap Background Swap Breakpoints */

/* Region 9 Wrap No Background Images Parameter  */
@media (max-width: 767px) {#region9wrap {background-image:none;}}

 /* Region 9 Background Swap Breakpoints */

/* Region 9 No Background Images Parameter  */
@media (max-width: 767px) {#region9 {background-image:none;}}

/* Region 10 Wrap Background Swap Breakpoints */

/* Region 10 Wrap No Background Images Parameter  */
@media (max-width: 767px) {#region10wrap {background-image:none;}}

 /* Region 10 Background Swap Breakpoints */

/* Region 10 No Background Images Parameter  */
@media (max-width: 767px) {#region10 {background-image:none;}}

/* Region 11 Background Swap Breakpoints */

/* Region 11 No Background Images Parameter  */
@media (max-width: 767px) {#region11 {background-image:none;}}

 /* Region 11 Background Swap Breakpoints */

/* Region 11 No Background Images Parameter  */
@media (max-width: 767px) {#region11 {background-image:none;}}
/* Region 12 Wrap Background Swap Breakpoints */

/* Region 12 Wrap No Background Images Parameter  */
@media (max-width: 767px) {#region12wrap {background-image:none;}}

/* Region 12 Background Swap Breakpoints */

/* Region 12 No Background Images Parameter  */
@media (max-width: 767px) {#region12 {background-image:none;}}

/* Footer Wrap No Background Images Parameter  */
	
	
/* Footer Wrap Background Swap Breakpoints */
	
/* Footer  No Background Images Parameter  */
	
	
/* Region 12 Wrap Background Swap Breakpoints */


	
	
/* End Responsive Parameters */
