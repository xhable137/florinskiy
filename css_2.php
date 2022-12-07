/**
 * @version		1.0.3
 * @package		Iamux template for Joomla! 3.x
 * @author		JoomlaXTC http://www.joomlaxtc.com
 * @copyright	Copyright (C) 2017 Monev Software LLC. All rights reserved.
 * @license		http://www.joomlaxtc.com/license JoomlaXTC Proprietary Use License
 */
/* ----------------------------------------------*/
/* GLOBAL TYPOGRAPHY
/* ----------------------------------------------*/
.td-center {text-align: center !important;}
body, p, input, button, select, textarea {
font-size:16px;
direction:ltr;
/* line-height: 1.56; */
font-weight: 400;
font-family:'arial', sans-serif;
}
.page-header h1, h1, h2, h3, h4, h5, h6 {
font-weight:400;
font-family: 'Poppins', sans-serif}
h1 {
font-size:40px;
line-height: 112%;
}
h2 {
font-size:30px;
line-height: 100%!important;
}
h3 {
font-size:32px;
line-height: 120%!important;
}
h4 {
font-size:24px;
line-height: 100%!important;
}
h5 {
font-size:16px;
}
h6 {
font-size:14px;
}
ul {
	list-style-position: inside;
}
ul.column li {
	margin: 0 0 30px;
	text-align: center
}
ul.pagenav li {
	padding: 3px!important
}
.nolh h1, .nolh h2, .nolh h3, .nolh h4, .nolh h5, .nolh h6, .nolh p {
	line-height: 0!important;
}
/* ----------------------------------------------*/
/* MENU TYPOGRAPHY
/* ----------------------------------------------*/
#menuwrap .nav>li>a, #menuwrap .nav>li>a.active > a, #menuwrap .nav>li>a:hover > a, #menuwrap ul.nav span.separator {
font-size:14px;
font-weight:400;
font-family:'Open Sans', sans-serif;text-transform:uppercase;
}
#menuwrap .dropdown-menu a, #menuwrap ul.nav .dropdown-menu span.separator {
font-size:12px;
font-weight:600;
font-family:'Open Sans', sans-serif;text-transform:uppercase;
}
/* ----------------------------------------------*/
/* LOGO TYPOGRAPHY
/* ----------------------------------------------*/
#logo p {
font-size:32px;
font-weight:900;
font-family:'Audiowide', cursive;}
/* ----------------------------------------------*/
/* COMPONENT TYPOGRAPHY
/* ----------------------------------------------*/
.componentheading, .pagetitle, span.subheading-category, .componentheading span, h1.pagetitle span, .itemListCategory h1.pagetitle span, .pagetitle span, #component h1.pagetitle span {
font-size:72px!important;
line-height: 120%;
display: block;
font-weight:900;
font-family: 'Poppins', sans-serif;}
.com_content .blog .page-header h2 a, .com_content .blog .page-header h2 {
font-size:32px;
font-weight:100;
line-height: 100%;
font-family:'Poppins', sans-serif;}
.com_content .item-page .page-header h2 a, .com_content .item-page .page-header h2 {
font-size:46px;
font-weight:700;
line-height: 100%;
font-family:'Poppins', sans-serif;}
.com_content .blog .span2 .page-header h2, .com_content .blog .span2 .page-header h2 a, .com_content .blog .span3 .page-header h2, .com_content .blog .span3 .page-header h2 a, .com_content .blog .span4 .page-header h2, .com_content .blog .span4 .page-header h2 a {
font-size: 150%;
letter-spacing: -1px;
}
/* ----------------------------------------------*/
/* MODULE TYPOGRAPHY
/* ----------------------------------------------*/

h1.moduletitle span.first_word, h1.moduletitle span.rest, h2.moduletitle span.first_word, h2.moduletitle span.rest, h3.moduletitle span.first_word, h3.moduletitle span.rest, h4.moduletitle span.first_word, h4.moduletitle span.rest, h5.moduletitle span.first_word, h5.moduletitle span.rest, h6.moduletitle span.first_word, h6.moduletitle span.rest {
font-size:28px;
line-height:28px;
font-weight:100;
letter-spacing: -1px;
font-family:'Poppins', sans-serif;}
h3.fa {
font-size:28px;
line-height:28px;
}
h3.fa::before {
margin-right: 12px;
font-family: fontAwesome;
}
/* ----------------------------------------------*/
/* JOOMLA TYPOGRAPHY
/* ----------------------------------------------*/
@media (max-width: 767px) {
	p {    margin-top: 20px;}
	h1 {
    font-size: 22px;}
}

div.joomla div.description {
font-size: 18px;
line-height: 20px;
}
.breadcrumb>li {
font-size:12px!important;
}
div.breadcrumbs a.pathway {
font-size: 11px!important;
}
/* ----------------------------------------------*/
/* TYPO STYLES
/* ----------------------------------------------*/
/* Drop Cap */
.dropcap {
	float: left;
	padding: 0 8px 0 0;
	display: block;
	color: #999;
	font: 80px/60px Times, serif
}
.ulwrap {
	background: #f4f4f4;
	border: 1px solid #ddd;
	margin: 0 0 20px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px
}
h3.wraptitle {
	padding: 0;
	margin: 0;
	font-size: 16px;
	color: #666;
	line-height: 100%
}
.h3large h3.moduletitle {
	font-size: 28px!important
}
/* UL Icons */
ul.icons {
	list-style: none;
	padding: 12px 0;
	margin: 0
}
ul.icons li span {
	padding-right: 10px
}
ul.icons li span i.icon-ok {
	color: #5ea62a
}
ul.icons li span i.icon-star {
	color: #eec523
}
ul.icons li span i.icon-remove-sign {
	color: #900
}
ul.icons li span i.icon-comments {
	color: #5e8bc9
}
ul.icons li span i.icon-play-circle {
	color: #222
}
/* Button Colors */
.btnblue {
	background: #6791e7;
	color: #fff;
	border: 0;
	padding: 8px 12px
}
.btnred {
	background: #e52644;
	color: #fff;
	border: 0;
	padding: 8px 12px
}
.btngreen {
	background: #1b3647;
	color: #fff;
	border: 0;
	padding: 8px 12px
}
.btnorange {
	background: #ff5353;
	color: #fff;
	border: 0;
	padding: 8px 12px
}
.btnyellow {
	background: #ffbc48;
	color: #fff;
	border: 0;
	padding: 8px 12px
}
.btngrey {
	background: #222;
	color: #fff;
	border: 0;
	padding: 8px 12px
}
/* Blog Bubbles */
.blog-red, .blog-blue, .blog-green, .blog-cyan, .blog-tan, .blog-yellow, .blog-grey, .blog-pink, .blog-basecolor1, .blog-basecolor2, .blog-basecolor3, .blog-basecolor4, .blog-basecolor5 {
	line-height: 133%;
	margin-bottom: 15px;
	position: relative;
	padding: 30px;
	font-size: 14px;
	color: #fff;
	color: rgba(255,255,255,0.85);
	font-weight: 700;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
}
.blog-red+p, .blog-blue+p, .blog-green+p, .blog-cyan+p, .blog-tan+p, .blog-yellow+p, .blog-grey+p, .blog-pink+p, .blog-basecolor1+p, .blog-basecolor2+p, .blog-basecolor3+p, .blog-basecolor4+p, .blog-basecolor5+p {
	margin: 15px 0 2em 85px;
	font-style: italic
}
.blog-red:after, .blog-blue:after, .blog-green:after, .blog-cyan:after, .blog-tan:after, .blog-yellow:after, .blog-grey:after, .blog-pink:after, .blog-basecolor1:after, .blog-basecolor2:after, .blog-basecolor3:after, .blog-basecolor4:after, .blog-basecolor5:after {
	content: "";
	position: absolute;
	bottom: -30px;
	left: 50px;
	border-width: 0 20px 30px 0;
	border-style: solid;
	display: block;
	width: 0
}
.blog-red {
	background: #590c0d
}
.blog-red:after {
	border-color: transparent #590c0d
}
.blog-blue {
	background: #587faf
}
.blog-blue:after {
	border-color: transparent #587faf
}
.blog-green {
	background: #90892f
}
.blog-green:after {
	border-color: transparent #90892f
}
.blog-tan {
	background: #87785e
}
.blog-tan:after {
	border-color: transparent #87785e
}
.blog-cyan {
	background: #21ceda
}
.blog-cyan:after {
	border-color: transparent #21ceda
}
.blog-yellow {
	background: #c8a446
}
.blog-yellow:after {
	border-color: transparent #c8a446
}
.blog-grey {
	background: #7a7a7a
}
.blog-grey:after {
	border-color: transparent #7a7a7a
}
.blog-pink {
	background: #b12d4c
}
.blog-pink:after {
	border-color: transparent #b12d4c
}


/* Responsive CSS */
/* Landscape phone to portrait tablet */
@media (max-width: 767px) {
/* TYPO */
p, input, button, select, textarea {
	font-size: 90%;
}
body, p, input, button, select, textarea {
font-size:16px;
direction:ltr;
	line-height: 1.56;
font-weight: 400;
font-family:'Open Sans', sans-serif;}
.page-header h1, h1, h2, h3, h4, h5, h6 {
font-weight:100;
font-family: 'Poppins', sans-serif;}
h1 {
font-size:42px;
	line-height: 112%;
	letter-spacing: -2px;
}
h2 {
font-size:32px;
	line-height: 100%!important;
}
h3 {
font-size:22px;
	line-height: 120%!important;
}
h4 {
font-size:18px;
	line-height: 100%!important;
}
h5 {
font-size:16px;
}
h6 {
font-size:14px;
}
.breadcrumb>li {
font-size:12px;
}
/* ----------------------------------------------*/
/* MENU TYPOGRAPHY
/* ----------------------------------------------*/
#menuwrap .nav-collapse.in.collapse .nav>li>a, #menuwrap .nav-collapse.in.collapse .nav>li>a.active > a,#menuwrap .nav-collapse.in.collapse  .nav>li>a:hover > a, #menuwrap .nav-collapse.in.collapse  ul.nav span.separator {
font-size:14px;
font-weight:200;
font-family:'Open Sans', sans-serif;}
	
	
#menuwrap .nav-collapse.in.collapse .dropdown-menu a,#menuwrap .nav-collapse.in.collapse ul.nav .dropdown-menu span.separator {
font-size:12px;
font-weight:100;
font-family:'Open Sans', sans-serif;}
/* ----------------------------------------------*/
/* LOGO TYPOGRAPHY
/* ----------------------------------------------*/
#logo p {
font-size:32px;
font-weight:900;
font-family:'Audiowide', cursive;}
/* ----------------------------------------------*/
/* COMPONENT TYPOGRAPHY
/* ----------------------------------------------*/
.componentheading, .pagetitle, span.subheading-category, .componentheading span, h1.pagetitle span, .itemListCategory h1.pagetitle span, .pagetitle span, #component h1.pagetitle span {
font-size:42px!important;
	line-height: 120%;
	display: block;
font-weight:100;
font-family: 'Poppins', sans-serif;}
.com_content .blog .page-header h2 a, .com_content .blog .page-header h2 {
font-size:32px;
font-weight:100;
	line-height: 100%;
font-family:'Poppins', sans-serif;}
.com_content .item-page .page-header h2 a, .com_content .item-page .page-header h2 {
font-size:32px;
font-weight:100;
	line-height: 100%;
font-family:'Poppins', sans-serif;}
/* ----------------------------------------------*/
/* MODULE TYPOGRAPHY
/* ----------------------------------------------*/

h1.moduletitle span.first_word, h1.moduletitle span.rest, h2.moduletitle span.first_word, h2.moduletitle span.rest, h3.moduletitle span.first_word, h3.moduletitle span.rest, h4.moduletitle span.first_word, h4.moduletitle span.rest, h5.moduletitle span.first_word, h5.moduletitle span.rest, h6.moduletitle span.first_word, h6.moduletitle span.rest {
font-size:28px;
line-height:28px;
font-weight:100;
	letter-spacing: -1px;
font-family:'Poppins', sans-serif;}
h3.fa {
font-size:28px;
line-height:28px;
}