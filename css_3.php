/**
 * @version		1.0.3
 * @package		Iamux template for Joomla! 3.x
 * @author		JoomlaXTC http://www.joomlaxtc.com
 * @copyright	Copyright (C) 2017 Monev Software LLC. All rights reserved.
 * @license		http://www.joomlaxtc.com/license JoomlaXTC Proprietary Use License
 */
/* ----------------------------------------------*/
/* 01 - Grid Structure
/* ----------------------------------------------*/
html {
	min-height: 100%;
}
 
.row-fluid [class*="span"] {
min-height: 0;
}
.xtc-wrapper {
max-width:1280px;
margin: 0 auto;
}
.xtc-fluidwrapper {
margin: 0 auto;
}
.xtc-wrapperpad {
max-width:1280px;
margin: 0 auto;

}

/* ----------------------------------------------*/
/* 02 - Body
/* ----------------------------------------------*/
body {
overflow-x:hidden;
z-index:1;
}

body.sticky,body.frontpage.sticky,body.innerpage.sticky {
margin-top: 80px;
}
body.innerpage.nosticky {
margin-top: 0px;
}

body.frontpage.stickyscroll .overlay {
position: absolute;
top: -1200px;
}
body.frontpage.sticky.headslide #headerwrap {
margin-top: -80px;
}
body.frontpage.sticky.headslide.stickyscroll {
margin-top: 100px;
}
body.frontpage.sticky.headslide #headerwrap.stickyscroll {
margin-top: 0px;
}

/* ----Overlay ----------------------*/
.overlay {
position: absolute;
z-index: 12;
top: 0;
left: 0;
width: 100%;
height: 100%;
}
/* ----------------------------------------------*/
/* 03 - Header
/* ----------------------------------------------*/
#headertop_inner {
max-width:1280px;
margin: 0 auto;
}
#headerwrap .xtc-wrapperpad {
width: auto;
margin: 0 auto;
}
#headerwrap.stickyscroll #header, body.innerpage #header {
margin: 0 auto;
}
#header {
position: relative;
padding:12px 30px;
margin: 0 auto;
}
#header.row-fluid {
width: auto;
}
#topleft {
float: left;
margin-left: 6px;
}
#topright {
float: right;
margin-right: 20px;
}
#top {
float: left;
padding-top: 24px;
}
/* ----Sticky Header ----------------------*/
body.nosticky #headerwrap {
z-index: 999;
position: relative;
}
body.sticky #headerwrap {
position: fixed;
top: 0%;
z-index: 999;
width: 100%;
min-height:80px;
}
#headerwrap.stickyscroll #head-top {
float: left;
width: 200px;
margin-top: 8px;
margin-left: 10%;
}
/* ----------------------------------------------*/
/* 05 - Menu Wrapper
/* ----------------------------------------------*/
#menuwrap.xtc-wrapper {
max-width:1256px;
}
#menuwrap {
margin-right: 20px;
padding:0;
text-align:right;
float: right;
margin:0 auto;
}



#menu, #menu1.hd2, #menu2.hd2 {
display:inline;
}


ul.dropdown-menu.animated {
-webkit-backface-visibility: visible !important;
backface-visibility: visible !important;
-webkit-animation-name:menufadeInDown;
animation-name: menufadeInDown;
-webkit-transform-origin: center;
transform-origin: center;
}


/* MENU ANIMATION STYLES */
.animated {
	-webkit-animation-duration: .5s;
	animation-duration: .5s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both
}
.animated.infinite {
	-webkit-animation-iteration-count: infinite;
	animation-iteration-count: infinite
}
.animated.menubounceIn, .animated.menubounceOut {
	-webkit-animation-duration: 1s;
	animation-duration: 1s
}
@-webkit-keyframes menubounce {
20%, 53%, 80%, from, to {
-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);
animation-timing-function:cubic-bezier(.215, .61, .355, 1);
-webkit-transform:translate3d(0, 0, 0);
transform:translate3d(0, 0, 0)
}
40%, 43% {
-webkit-animation-timing-function:cubic-bezier(.755, .050, .855, .060);
animation-timing-function:cubic-bezier(.755, .050, .855, .060);
-webkit-transform:translate3d(0, -30px, 0);
transform:translate3d(0, -30px, 0)
}
70% {
-webkit-animation-timing-function:cubic-bezier(.755, .050, .855, .060);
animation-timing-function:cubic-bezier(.755, .050, .855, .060);
-webkit-transform:translate3d(0, -15px, 0);
transform:translate3d(0, -15px, 0)
}
90% {
-webkit-transform:translate3d(0, -4px, 0);
transform:translate3d(0, -4px, 0)
}
}
@keyframes menubounce {
20%, 53%, 80%, from, to {
-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);
animation-timing-function:cubic-bezier(.215, .61, .355, 1);
-webkit-transform:translate3d(0, 0, 0);
transform:translate3d(0, 0, 0)
}
40%, 43% {
-webkit-animation-timing-function:cubic-bezier(.755, .050, .855, .060);
animation-timing-function:cubic-bezier(.755, .050, .855, .060);
-webkit-transform:translate3d(0, -30px, 0);
transform:translate3d(0, -30px, 0)
}
70% {
-webkit-animation-timing-function:cubic-bezier(.755, .050, .855, .060);
animation-timing-function:cubic-bezier(.755, .050, .855, .060);
-webkit-transform:translate3d(0, -15px, 0);
transform:translate3d(0, -15px, 0)
}
90% {
-webkit-transform:translate3d(0, -4px, 0);
transform:translate3d(0, -4px, 0)
}
}
@-webkit-keyframes menupulse {
from, to {
-webkit-transform:scale3d(1, 1, 1);
transform:scale3d(1, 1, 1)
}
50% {
-webkit-transform:scale3d(1.05, 1.05, 1.05);
transform:scale3d(1.05, 1.05, 1.05)
}
}
@keyframes menupulse {
from, to {
-webkit-transform:scale3d(1, 1, 1);
transform:scale3d(1, 1, 1)
}
50% {
-webkit-transform:scale3d(1.05, 1.05, 1.05);
transform:scale3d(1.05, 1.05, 1.05)
}
}
@-webkit-keyframes menuwobble {
from, to {
-webkit-transform:none;
transform:none
}
15% {
-webkit-transform:translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
transform:translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
}
30% {
-webkit-transform:translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
transform:translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
}
45% {
-webkit-transform:translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
transform:translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
}
60% {
-webkit-transform:translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
transform:translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
}
75% {
-webkit-transform:translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
transform:translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
}
}
@keyframes menuwobble {
from, to {
-webkit-transform:none;
transform:none
}
15% {
-webkit-transform:translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
transform:translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
}
30% {
-webkit-transform:translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
transform:translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
}
45% {
-webkit-transform:translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
transform:translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
}
60% {
-webkit-transform:translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
transform:translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
}
75% {
-webkit-transform:translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
transform:translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
}
}
@-webkit-keyframes menujello {
11.1%, from, to {
-webkit-transform:none;
transform:none
}
22.2% {
-webkit-transform:skewX(-12.5deg) skewY(-12.5deg);
transform:skewX(-12.5deg) skewY(-12.5deg)
}
33.3% {
-webkit-transform:skewX(6.25deg) skewY(6.25deg);
transform:skewX(6.25deg) skewY(6.25deg)
}
44.4% {
-webkit-transform:skewX(-3.125deg) skewY(-3.125deg);
transform:skewX(-3.125deg) skewY(-3.125deg)
}
55.5% {
-webkit-transform:skewX(1.5625deg) skewY(1.5625deg);
transform:skewX(1.5625deg) skewY(1.5625deg)
}
66.6% {
-webkit-transform:skewX(-.78125deg) skewY(-.78125deg);
transform:skewX(-.78125deg) skewY(-.78125deg)
}
77.7% {
-webkit-transform:skewX(.390625deg) skewY(.390625deg);
transform:skewX(.390625deg) skewY(.390625deg)
}
88.8% {
-webkit-transform:skewX(-.1953125deg) skewY(-.1953125deg);
transform:skewX(-.1953125deg) skewY(-.1953125deg)
}
}
@keyframes menujello {
11.1%, from, to {
-webkit-transform:none;
transform:none
}
22.2% {
-webkit-transform:skewX(-12.5deg) skewY(-12.5deg);
transform:skewX(-12.5deg) skewY(-12.5deg)
}
33.3% {
-webkit-transform:skewX(6.25deg) skewY(6.25deg);
transform:skewX(6.25deg) skewY(6.25deg)
}
44.4% {
-webkit-transform:skewX(-3.125deg) skewY(-3.125deg);
transform:skewX(-3.125deg) skewY(-3.125deg)
}
55.5% {
-webkit-transform:skewX(1.5625deg) skewY(1.5625deg);
transform:skewX(1.5625deg) skewY(1.5625deg)
}
66.6% {
-webkit-transform:skewX(-.78125deg) skewY(-.78125deg);
transform:skewX(-.78125deg) skewY(-.78125deg)
}
77.7% {
-webkit-transform:skewX(.390625deg) skewY(.390625deg);
transform:skewX(.390625deg) skewY(.390625deg)
}
88.8% {
-webkit-transform:skewX(-.1953125deg) skewY(-.1953125deg);
transform:skewX(-.1953125deg) skewY(-.1953125deg)
}
}
@-webkit-keyframes menubounceIn {
20%, 40%, 60%, 80%, from, to {
-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);
animation-timing-function:cubic-bezier(.215, .61, .355, 1)
}
0% {
opacity:0;
-webkit-transform:scale3d(.3, .3, .3);
transform:scale3d(.3, .3, .3)
}
20% {
-webkit-transform:scale3d(1.1, 1.1, 1.1);
transform:scale3d(1.1, 1.1, 1.1)
}
40% {
-webkit-transform:scale3d(.9, .9, .9);
transform:scale3d(.9, .9, .9)
}
60% {
opacity:1;
-webkit-transform:scale3d(1.03, 1.03, 1.03);
transform:scale3d(1.03, 1.03, 1.03)
}
80% {
-webkit-transform:scale3d(.97, .97, .97);
transform:scale3d(.97, .97, .97)
}
to {
opacity:1;
-webkit-transform:scale3d(1, 1, 1);
transform:scale3d(1, 1, 1)
}
}
@keyframes menubounceIn {
20%, 40%, 60%, 80%, from, to {
-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);
animation-timing-function:cubic-bezier(.215, .61, .355, 1)
}
0% {
opacity:0;
-webkit-transform:scale3d(.3, .3, .3);
transform:scale3d(.3, .3, .3)
}
20% {
-webkit-transform:scale3d(1.1, 1.1, 1.1);
transform:scale3d(1.1, 1.1, 1.1)
}
40% {
-webkit-transform:scale3d(.9, .9, .9);
transform:scale3d(.9, .9, .9)
}
60% {
opacity:1;
-webkit-transform:scale3d(1.03, 1.03, 1.03);
transform:scale3d(1.03, 1.03, 1.03)
}
80% {
-webkit-transform:scale3d(.97, .97, .97);
transform:scale3d(.97, .97, .97)
}
to {
opacity:1;
-webkit-transform:scale3d(1, 1, 1);
transform:scale3d(1, 1, 1)
}
}
@-webkit-keyframes menubounceInDown {
60%, 75%, 90%, from, to {
-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);
animation-timing-function:cubic-bezier(.215, .61, .355, 1)
}
0% {
opacity:0;
-webkit-transform:translate3d(0, -3000px, 0);
transform:translate3d(0, -3000px, 0)
}
60% {
opacity:1;
-webkit-transform:translate3d(0, 25px, 0);
transform:translate3d(0, 25px, 0)
}
75% {
-webkit-transform:translate3d(0, -10px, 0);
transform:translate3d(0, -10px, 0)
}
90% {
-webkit-transform:translate3d(0, 5px, 0);
transform:translate3d(0, 5px, 0)
}
to {
-webkit-transform:none;
transform:none
}
}
@keyframes menubounceInDown {
60%, 75%, 90%, from, to {
-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);
animation-timing-function:cubic-bezier(.215, .61, .355, 1)
}
0% {
opacity:0;
-webkit-transform:translate3d(0, -100px, 0);
transform:translate3d(0, -100px, 0)
}
60% {
opacity:1;
-webkit-transform:translate3d(0, 25px, 0);
transform:translate3d(0, 25px, 0)
}
75% {
-webkit-transform:translate3d(0, -10px, 0);
transform:translate3d(0, -10px, 0)
}
90% {
-webkit-transform:translate3d(0, 5px, 0);
transform:translate3d(0, 5px, 0)
}
to {
-webkit-transform:none;
transform:none
}
}
@-webkit-keyframes menubounceInLeft {
60%, 75%, 90%, from, to {
-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);
animation-timing-function:cubic-bezier(.215, .61, .355, 1)
}
0% {
opacity:0;
-webkit-transform:translate3d(-100px, 0, 0);
transform:translate3d(-100px, 0, 0)
}
60% {
opacity:1;
-webkit-transform:translate3d(25px, 0, 0);
transform:translate3d(25px, 0, 0)
}
75% {
-webkit-transform:translate3d(-10px, 0, 0);
transform:translate3d(-10px, 0, 0)
}
90% {
-webkit-transform:translate3d(5px, 0, 0);
transform:translate3d(5px, 0, 0)
}
to {
-webkit-transform:none;
transform:none
}
}
@keyframes menubounceInLeft {
60%, 75%, 90%, from, to {
-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);
animation-timing-function:cubic-bezier(.215, .61, .355, 1)
}
0% {
opacity:0;
-webkit-transform:translate3d(-100px, 0, 0);
transform:translate3d(-100px, 0, 0)
}
60% {
opacity:1;
-webkit-transform:translate3d(25px, 0, 0);
transform:translate3d(25px, 0, 0)
}
75% {
-webkit-transform:translate3d(-10px, 0, 0);
transform:translate3d(-10px, 0, 0)
}
90% {
-webkit-transform:translate3d(5px, 0, 0);
transform:translate3d(5px, 0, 0)
}
to {
-webkit-transform:none;
transform:none
}
}
@-webkit-keyframes menubounceInRight {
60%, 75%, 90%, from, to {
-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);
animation-timing-function:cubic-bezier(.215, .61, .355, 1)
}
from {
opacity:0;
-webkit-transform:translate3d(100px, 0, 0);
transform:translate3d(100px, 0, 0)
}
60% {
opacity:1;
-webkit-transform:translate3d(-25px, 0, 0);
transform:translate3d(-25px, 0, 0)
}
75% {
-webkit-transform:translate3d(10px, 0, 0);
transform:translate3d(10px, 0, 0)
}
90% {
-webkit-transform:translate3d(-5px, 0, 0);
transform:translate3d(-5px, 0, 0)
}
to {
-webkit-transform:none;
transform:none
}
}
@keyframes menubounceInRight {
60%, 75%, 90%, from, to {
-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);
animation-timing-function:cubic-bezier(.215, .61, .355, 1)
}
from {
opacity:0;
-webkit-transform:translate3d(100px, 0, 0);
transform:translate3d(100px, 0, 0)
}
60% {
opacity:1;
-webkit-transform:translate3d(-25px, 0, 0);
transform:translate3d(-25px, 0, 0)
}
75% {
-webkit-transform:translate3d(10px, 0, 0);
transform:translate3d(10px, 0, 0)
}
90% {
-webkit-transform:translate3d(-5px, 0, 0);
transform:translate3d(-5px, 0, 0)
}
to {
-webkit-transform:none;
transform:none
}
}
@-webkit-keyframes menubounceInUp {
60%, 75%, 90%, from, to {
-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);
animation-timing-function:cubic-bezier(.215, .61, .355, 1)
}
from {
opacity:0;
-webkit-transform:translate3d(0, 100px, 0);
transform:translate3d(0, 100px, 0)
}
60% {
opacity:1;
-webkit-transform:translate3d(0, -20px, 0);
transform:translate3d(0, -20px, 0)
}
75% {
-webkit-transform:translate3d(0, 10px, 0);
transform:translate3d(0, 10px, 0)
}
90% {
-webkit-transform:translate3d(0, -5px, 0);
transform:translate3d(0, -5px, 0)
}
to {
-webkit-transform:translate3d(0, 0, 0);
transform:translate3d(0, 0, 0)
}
}
@keyframes menubounceInUp {
60%, 75%, 90%, from, to {
-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);
animation-timing-function:cubic-bezier(.215, .61, .355, 1)
}
from {
opacity:0;
-webkit-transform:translate3d(0, 100px, 0);
transform:translate3d(0, 100px, 0)
}
60% {
opacity:1;
-webkit-transform:translate3d(0, -20px, 0);
transform:translate3d(0, -20px, 0)
}
75% {
-webkit-transform:translate3d(0, 10px, 0);
transform:translate3d(0, 10px, 0)
}
90% {
-webkit-transform:translate3d(0, -5px, 0);
transform:translate3d(0, -5px, 0)
}
to {
-webkit-transform:translate3d(0, 0, 0);
transform:translate3d(0, 0, 0)
}
}
@-webkit-keyframes menufadeIn {
from {
opacity:0
}
to {
opacity:1
}
}
@keyframes menufadeIn {
from {
opacity:0
}
to {
opacity:1
}
}
@-webkit-keyframes menufadeInDown {
from {
opacity:0;
-webkit-transform:translate3d(0, -30%, 0);
transform:translate3d(0, -30%, 0)
}
to {
opacity:1;
-webkit-transform:none;
transform:none
}
}
@keyframes menufadeInDown {
from {
opacity:0;
-webkit-transform:translate3d(0, -30%, 0);
transform:translate3d(0, -30%, 0)
}
to {
opacity:1;
-webkit-transform:none;
transform:none
}
}
@-webkit-keyframes menufadeInLeft {
from {
opacity:0;
-webkit-transform:translate3d(-15%, 0, 0);
transform:translate3d(-15%, 0, 0)
}
to {
opacity:1;
-webkit-transform:none;
transform:none
}
}
@keyframes menufadeInLeft {
from {
opacity:0;
-webkit-transform:translate3d(-15%, 0, 0);
transform:translate3d(-15%, 0, 0)
}
to {
opacity:1;
-webkit-transform:none;
transform:none
}
}
@-webkit-keyframes menufadeInRight {
from {
opacity:0;
-webkit-transform:translate3d(15%, 0, 0);
transform:translate3d(15%, 0, 0)
}
to {
opacity:1;
-webkit-transform:none;
transform:none
}
}
@keyframes menufadeInRight {
from {
opacity:0;
-webkit-transform:translate3d(15%, 0, 0);
transform:translate3d(15%, 0, 0)
}
to {
opacity:1;
-webkit-transform:none;
transform:none
}
}
@-webkit-keyframes menufadeInUp {
from {
opacity:0;
-webkit-transform:translate3d(0, 5%, 0);
transform:translate3d(0, 5%, 0)
}
to {
opacity:1;
-webkit-transform:none;
transform:none
}
}
@keyframes menufadeInUp {
from {
opacity:0;
-webkit-transform:translate3d(0, 5%, 0);
transform:translate3d(0, 5%, 0)
}
to {
opacity:1;
-webkit-transform:none;
transform:none
}
}
@-webkit-keyframes menuflip {
from {
-webkit-transform:perspective(400px) rotate3d(0, 1, 0, -360deg);
transform:perspective(400px) rotate3d(0, 1, 0, -360deg);
-webkit-animation-timing-function:ease-out;
animation-timing-function:ease-out
}
40% {
-webkit-transform:perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
transform:perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
-webkit-animation-timing-function:ease-out;
animation-timing-function:ease-out
}
50% {
-webkit-transform:perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
transform:perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in
}
80% {
-webkit-transform:perspective(400px) scale3d(.95, .95, .95);
transform:perspective(400px) scale3d(.95, .95, .95);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in
}
to {
-webkit-transform:perspective(400px);
transform:perspective(400px);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in
}
}
@keyframes menuflip {
from {
-webkit-transform:perspective(400px) rotate3d(0, 1, 0, -360deg);
transform:perspective(400px) rotate3d(0, 1, 0, -360deg);
-webkit-animation-timing-function:ease-out;
animation-timing-function:ease-out
}
40% {
-webkit-transform:perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
transform:perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
-webkit-animation-timing-function:ease-out;
animation-timing-function:ease-out
}
50% {
-webkit-transform:perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
transform:perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in
}
80% {
-webkit-transform:perspective(400px) scale3d(.95, .95, .95);
transform:perspective(400px) scale3d(.95, .95, .95);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in
}
to {
-webkit-transform:perspective(400px);
transform:perspective(400px);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in
}
}
@-webkit-keyframes menuflipInX {
from {
-webkit-transform:perspective(400px) rotate3d(1, 0, 0, 90deg);
transform:perspective(400px) rotate3d(1, 0, 0, 90deg);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in;
opacity:0
}
40% {
-webkit-transform:perspective(400px) rotate3d(1, 0, 0, -20deg);
transform:perspective(400px) rotate3d(1, 0, 0, -20deg);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in
}
60% {
-webkit-transform:perspective(400px) rotate3d(1, 0, 0, 10deg);
transform:perspective(400px) rotate3d(1, 0, 0, 10deg);
opacity:1
}
80% {
-webkit-transform:perspective(400px) rotate3d(1, 0, 0, -5deg);
transform:perspective(400px) rotate3d(1, 0, 0, -5deg)
}
to {
-webkit-transform:perspective(400px);
transform:perspective(400px)
}
}
@keyframes menuflipInX {
from {
-webkit-transform:perspective(400px) rotate3d(1, 0, 0, 90deg);
transform:perspective(400px) rotate3d(1, 0, 0, 90deg);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in;
opacity:0
}
40% {
-webkit-transform:perspective(400px) rotate3d(1, 0, 0, -20deg);
transform:perspective(400px) rotate3d(1, 0, 0, -20deg);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in
}
60% {
-webkit-transform:perspective(400px) rotate3d(1, 0, 0, 10deg);
transform:perspective(400px) rotate3d(1, 0, 0, 10deg);
opacity:1
}
80% {
-webkit-transform:perspective(400px) rotate3d(1, 0, 0, -5deg);
transform:perspective(400px) rotate3d(1, 0, 0, -5deg)
}
to {
-webkit-transform:perspective(400px);
transform:perspective(400px)
}
}
@-webkit-keyframes menuflipInY {
from {
-webkit-transform:perspective(400px) rotate3d(0, 1, 0, 90deg);
transform:perspective(400px) rotate3d(0, 1, 0, 90deg);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in;
opacity:0
}
40% {
-webkit-transform:perspective(400px) rotate3d(0, 1, 0, -20deg);
transform:perspective(400px) rotate3d(0, 1, 0, -20deg);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in
}
60% {
-webkit-transform:perspective(400px) rotate3d(0, 1, 0, 10deg);
transform:perspective(400px) rotate3d(0, 1, 0, 10deg);
opacity:1
}
80% {
-webkit-transform:perspective(400px) rotate3d(0, 1, 0, -5deg);
transform:perspective(400px) rotate3d(0, 1, 0, -5deg)
}
to {
-webkit-transform:perspective(400px);
transform:perspective(400px)
}
}
@keyframes menuflipInY {
from {
-webkit-transform:perspective(400px) rotate3d(0, 1, 0, 90deg);
transform:perspective(400px) rotate3d(0, 1, 0, 90deg);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in;
opacity:0
}
40% {
-webkit-transform:perspective(400px) rotate3d(0, 1, 0, -20deg);
transform:perspective(400px) rotate3d(0, 1, 0, -20deg);
-webkit-animation-timing-function:ease-in;
animation-timing-function:ease-in
}
60% {
-webkit-transform:perspective(400px) rotate3d(0, 1, 0, 10deg);
transform:perspective(400px) rotate3d(0, 1, 0, 10deg);
opacity:1
}
80% {
-webkit-transform:perspective(400px) rotate3d(0, 1, 0, -5deg);
transform:perspective(400px) rotate3d(0, 1, 0, -5deg)
}
to {
-webkit-transform:perspective(400px);
transform:perspective(400px)
}
}
@-webkit-keyframes menurotateIn {
from {
-webkit-transform-origin:center;
transform-origin:center;
-webkit-transform:rotate3d(0, 0, 1, -200deg);
transform:rotate3d(0, 0, 1, -200deg);
opacity:0
}
to {
-webkit-transform-origin:center;
transform-origin:center;
-webkit-transform:none;
transform:none;
opacity:1
}
}
@keyframes menurotateIn {
from {
-webkit-transform-origin:center;
transform-origin:center;
-webkit-transform:rotate3d(0, 0, 1, -200deg);
transform:rotate3d(0, 0, 1, -200deg);
opacity:0
}
to {
-webkit-transform-origin:center;
transform-origin:center;
-webkit-transform:none;
transform:none;
opacity:1
}
}
@-webkit-keyframes menurollIn {
from {
opacity:0;
-webkit-transform:translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
transform:translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
}
to {
opacity:1;
-webkit-transform:none;
transform:none
}
}
@keyframes menurollIn {
from {
opacity:0;
-webkit-transform:translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
transform:translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
}
to {
opacity:1;
-webkit-transform:none;
transform:none
}
}
@-webkit-keyframes menuzoomIn {
from {
opacity:0;
-webkit-transform:scale3d(.3, .3, .3);
transform:scale3d(.3, .3, .3)
}
50% {
opacity:1
}
}
@keyframes menuzoomIn {
from {
opacity:0;
-webkit-transform:scale3d(.3, .3, .3);
transform:scale3d(.3, .3, .3)
}
50% {
opacity:1
}
}
@-webkit-keyframes menuzoomInDown {
from {
opacity:0;
-webkit-transform:scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
transform:scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
-webkit-animation-timing-function:cubic-bezier(.55, .055, .675, .19);
animation-timing-function:cubic-bezier(.55, .055, .675, .19)
}
60% {
opacity:1;
-webkit-transform:scale3d(.475, .475, .475) translate3d(0, 60px, 0);
transform:scale3d(.475, .475, .475) translate3d(0, 60px, 0);
-webkit-animation-timing-function:cubic-bezier(.175, .885, .32, 1);
animation-timing-function:cubic-bezier(.175, .885, .32, 1)
}
}
@keyframes menuzoomInDown {
from {
opacity:0;
-webkit-transform:scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
transform:scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
-webkit-animation-timing-function:cubic-bezier(.55, .055, .675, .19);
animation-timing-function:cubic-bezier(.55, .055, .675, .19)
}
60% {
opacity:1;
-webkit-transform:scale3d(.475, .475, .475) translate3d(0, 60px, 0);
transform:scale3d(.475, .475, .475) translate3d(0, 60px, 0);
-webkit-animation-timing-function:cubic-bezier(.175, .885, .32, 1);
animation-timing-function:cubic-bezier(.175, .885, .32, 1)
}
}
@-webkit-keyframes menuzoomInLeft {
from {
opacity:0;
-webkit-transform:scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
transform:scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
-webkit-animation-timing-function:cubic-bezier(.55, .055, .675, .19);
animation-timing-function:cubic-bezier(.55, .055, .675, .19)
}
60% {
opacity:1;
-webkit-transform:scale3d(.475, .475, .475) translate3d(10px, 0, 0);
transform:scale3d(.475, .475, .475) translate3d(10px, 0, 0);
-webkit-animation-timing-function:cubic-bezier(.175, .885, .32, 1);
animation-timing-function:cubic-bezier(.175, .885, .32, 1)
}
}
@keyframes menuzoomInLeft {
from {
opacity:0;
-webkit-transform:scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
transform:scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
-webkit-animation-timing-function:cubic-bezier(.55, .055, .675, .19);
animation-timing-function:cubic-bezier(.55, .055, .675, .19)
}
60% {
opacity:1;
-webkit-transform:scale3d(.475, .475, .475) translate3d(10px, 0, 0);
transform:scale3d(.475, .475, .475) translate3d(10px, 0, 0);
-webkit-animation-timing-function:cubic-bezier(.175, .885, .32, 1);
animation-timing-function:cubic-bezier(.175, .885, .32, 1)
}
}
@-webkit-keyframes menuzoomInRight {
from {
opacity:0;
-webkit-transform:scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
transform:scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
-webkit-animation-timing-function:cubic-bezier(.55, .055, .675, .19);
animation-timing-function:cubic-bezier(.55, .055, .675, .19)
}
60% {
opacity:1;
-webkit-transform:scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
transform:scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
-webkit-animation-timing-function:cubic-bezier(.175, .885, .32, 1);
animation-timing-function:cubic-bezier(.175, .885, .32, 1)
}
}
@keyframes menuzoomInRight {
from {
opacity:0;
-webkit-transform:scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
transform:scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
-webkit-animation-timing-function:cubic-bezier(.55, .055, .675, .19);
animation-timing-function:cubic-bezier(.55, .055, .675, .19)
}
60% {
opacity:1;
-webkit-transform:scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
transform:scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
-webkit-animation-timing-function:cubic-bezier(.175, .885, .32, 1);
animation-timing-function:cubic-bezier(.175, .885, .32, 1)
}
}
@-webkit-keyframes menuzoomInUp {
from {
opacity:0;
-webkit-transform:scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
transform:scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
-webkit-animation-timing-function:cubic-bezier(.55, .055, .675, .19);
animation-timing-function:cubic-bezier(.55, .055, .675, .19)
}
60% {
opacity:1;
-webkit-transform:scale3d(.475, .475, .475) translate3d(0, -60px, 0);
transform:scale3d(.475, .475, .475) translate3d(0, -60px, 0);
-webkit-animation-timing-function:cubic-bezier(.175, .885, .32, 1);
animation-timing-function:cubic-bezier(.175, .885, .32, 1)
}
}
@keyframes menuzoomInUp {
from {
opacity:0;
-webkit-transform:scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
transform:scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
-webkit-animation-timing-function:cubic-bezier(.55, .055, .675, .19);
animation-timing-function:cubic-bezier(.55, .055, .675, .19)
}
60% {
opacity:1;
-webkit-transform:scale3d(.475, .475, .475) translate3d(0, -60px, 0);
transform:scale3d(.475, .475, .475) translate3d(0, -60px, 0);
-webkit-animation-timing-function:cubic-bezier(.175, .885, .32, 1);
animation-timing-function:cubic-bezier(.175, .885, .32, 1)
}
}
@-webkit-keyframes menuslideInDown {
from {
-webkit-transform:translate3d(0, -5%, 0);
transform:translate3d(0, -5%, 0);
visibility:visible
}
to {
-webkit-transform:translate3d(0, 0, 0);
transform:translate3d(0, 0, 0)
}
}
@keyframes menuslideInDown {
from {
-webkit-transform:translate3d(0, -5%, 0);
transform:translate3d(0, -5%, 0);
visibility:visible
}
to {
-webkit-transform:translate3d(0, 0, 0);
transform:translate3d(0, 0, 0)
}
}
@-webkit-keyframes menuslideInLeft {
from {
-webkit-transform:translate3d(-15%, 0, 0);
transform:translate3d(-15%, 0, 0);
visibility:visible
}
to {
-webkit-transform:translate3d(0, 0, 0);
transform:translate3d(0, 0, 0)
}
}
@keyframes menuslideInLeft {
from {
-webkit-transform:translate3d(-15%, 0, 0);
transform:translate3d(-15%, 0, 0);
visibility:visible
}
to {
-webkit-transform:translate3d(0, 0, 0);
transform:translate3d(0, 0, 0)
}
}
@-webkit-keyframes menuslideInRight {
from {
-webkit-transform:translate3d(15%, 0, 0);
transform:translate3d(15%, 0, 0);
visibility:visible
}
to {
-webkit-transform:translate3d(0, 0, 0);
transform:translate3d(0, 0, 0)
}
}
@keyframes menuslideInRight {
from {
-webkit-transform:translate3d(15%, 0, 0);
transform:translate3d(15%, 0, 0);
visibility:visible
}
to {
-webkit-transform:translate3d(0, 0, 0);
transform:translate3d(0, 0, 0)
}
}
@-webkit-keyframes menuslideInUp {
from {
-webkit-transform:translate3d(0, 5%, 0);
transform:translate3d(0, 5%, 0);
visibility:visible
}
to {
-webkit-transform:translate3d(0, 0, 0);
transform:translate3d(0, 0, 0)
}
}
@keyframes menuslideInUp {
from {
-webkit-transform:translate3d(0, 5%, 0);
transform:translate3d(0, 5%, 0);
visibility:visible
}
to {
-webkit-transform:translate3d(0, 0, 0);
transform:translate3d(0, 0, 0)
}
}
/* ----------------------------------------------*/
/* 06 - Grid Regions
/* ----------------------------------------------*/
/* Global Region Settings */
#region1.row-fluid, #region2.row-fluid, #region3.row-fluid, #region4.row-fluid, #region5.row-fluid, #region6.row-fluid, #region7.row-fluid, #region8.row-fluid, #region9.row-fluid, #region10.row-fluid, #region11.row-fluid, #region12.row-fluid {
width: auto;
}
/* Regionpadding */
.xtc-spacer {
margin-bottom:0px;
}
/* ----Region1---------------------------*/
#region1wrap .xtc-wrapper {
padding:220px 0 160px 0;
}
#region1.xtc-fluidwrapper {
padding:90px 0 160px 0;
}
 
/* ----Region2---------------------------*/
#region2wrap .xtc-wrapper {
padding:80px 80px 60px 80px;
}
#region2.xtc-fluidwrapper {
padding:80px 80px 60px 80px;
}
 
/* ----Region3---------------------------*/
#region3wrap .xtc-wrapper {
padding:60px 30px;
}
#region3.xtc-fluidwrapper {
padding:60px 30px;
}
  
#component {
padding:0px;
margin-bottom: 40px;
}
#newsflash, #banner, #pathway {
margin-bottom: 30px;
}
#breadcrumbs .modulecontent {
margin-bottom: 30px;
}
/* ----Region4---------------------------*/
#region4wrap .xtc-wrapper {
padding:80px 80px 60px 80px;
}
#region4.xtc-fluidwrapper {
padding:80px 80px 60px 80px;
}
 
/* ----Region5---------------------------*/
#region5wrap .xtc-wrapper {
padding:80px 80px 60px 80px;
}
#region5.xtc-fluidwrapper {
padding:80px 80px 60px 80px;
}
 

/* ----Region6---------------------------*/
#region6wrap .xtc-wrapper {
padding:80px 80px 60px 80px;
}
#region6.xtc-fluidwrapper {
padding:80px 80px 60px 80px;
}
 
/* ----Region7---------------------------*/
#region7wrap .xtc-wrapper {
padding:80px 80px 60px 80px;
}
#region7.xtc-fluidwrapper {
padding:80px 80px 60px 80px;
}
 /* ----Region8---------------------------*/
#region8wrap .xtc-wrapper {
padding:160px 30px;
}
#region8.xtc-fluidwrapper {
padding:160px 30px;
}
 

/* ----Region9---------------------------*/
#region9wrap .xtc-wrapper {
padding:60px 160px;
}
#region9.xtc-fluidwrapper {
padding:60px 160px;
}
 
/* ----Region10---------------------------*/
#region10wrap .xtc-wrapper {
padding:60px 60px;
}
#region10.xtc-fluidwrapper {
padding:60px 60px;
}
 
/* ----Region11---------------------------*/
#region11wrap .xtc-wrapper {
padding:60px 30px;
}
#region11.xtc-fluidwrapper {
padding:60px 30px;
}
 /* ----Region12---------------------------*/
#region12wrap .xtc-wrapper {
padding:40px 40px 20px 40px;
}
#region12.xtc-fluidwrapper {
padding:40px 40px 20px 40px;
}
 



/* Footer */
#footerwrap .xtc-wrapperpad {
	padding:12px 30px;
}
#footerwrap .xtc-wrapper {
padding:12px 30px;
}
#footerwrap {
padding:12px 30px;
}
#footer .xtc-fluidwrapper {
padding:12px 30px;
}

/* ----------------------------------------------*/
/* 07 - Module Structure
/* ----------------------------------------------*/
.module {
margin:0 0 24px 0;
}
.lastarea .module {
margin-bottom: 0
}
/* Leftside Fixed Module */
#leftside {
z-index: 9999;
position: fixed;
width: auto;
height: 100%;
top: 40%;
}
/* ----------------------------------------------*/
/* 08 - Mobile Structure
/* ----------------------------------------------*/
body.mobile .mobilepad {
padding: 0
}
body.mobile .mobile > div:first-child {
padding: 0
}
body.mobile #mobilewrap {
float: right;
width: 80%
}
body.mobile .module {
margin: 0
}
body.mobile h3.moduletitle, body.mobile .modulecontent {
border-right: none
}
body.mobile #footerwrap {
min-width: 100%
}
body.mobile span.itemImage img {
max-width: 100%;
width: auto;
}
body.mobile #mobilewrap .lg > div:first-child, body.mobile #mobilewrap .lg > div:first-child + div {
float: none;
width: 100%
}
body.mobile #mobilewrap .lg a {
line-height: 16px;
}
#xtc-mobilesitewrap #menu {
float: none
}
.xtc-iconsidemob select[multiple], .xtc-iconsidemob select[size] {
width: 100%
}
#component.mobilecomponent.clearfix {
padding: 0 12px;
margin-top: 20px
}
.morewrap td.firstcol > div {
text-align: right
}
.morewrap td.centercol > div {
text-align: left
}
.area_map table {
table-layout: fixed
}

/* ----------------------------------------------*/
/* 09 - Responsive Parameters
/* ----------------------------------------------*/
 
@media(max-width: 0px ) {
#region1 {
display:none;
}
}
 @media(max-width: 0px ) {
#region2 {
display:none;
}
}
 @media(max-width: 0px ) {
#region3 {
display:none;
}
}
 @media(max-width: 0px ) {
#region4 {
display:none;
}
}
 @media(max-width: 0px ) {
#region5 {
display:none;
}
}
 @media(max-width: 0px ) {
#region6 {
display:none;
}
}
 @media(max-width: 0px ) {
#region7 {
display:none;
}
}
 @media(max-width: 0px ) {
#region8 {
display:none;
}
}
 @media(max-width: 0px ) {
#region9 {
display:none;
}
}
 @media(max-width: 0px ) {
#region10 {
display:none;
}
}
 @media(max-width: 0px ) {
#region11 {
display:none;
}
}
 @media(max-width: 0px ) {
#region12 {
display:none;
}
}

/* Device Level Parameters */
/* Portrait tablet to landscape and desktop */
@media (min-width: 768px) and (max-width: 979px) {

	body.region1-constrain #region1, body.region2-constrain #region2, body.region3-constrain #region3, body.region4-constrain #region4, body.region5-constrain #region5, body.region6-constrain #region6, body.region7-constrain #region7, body.region8-constrain #region8, body.region9-constrain #region9, body.region10-constrain #region10, body.region1-constrain #region11, body.region12-constrain #region12 {
	width: auto;
}
}

@media (max-width: 767px) {
/* Reset Background Attachement for Devices */
#region1wrap, #region1, #region2wrap, #region2, #region3wrap, #region3, #region4wrap, #region4, #region5wrap, #region5, #region6wrap, #region6, #region7wrap, #region7, #region8wrap, #region8, #region9wrap, #region9, #region10wrap, #region10, #region11wrap, #region11, #region12wrap, #region12 {
	background-attachment: scroll!important;
}
/* Region Device Padding */
#header {padding:12px 40px;}
#region1wrap .xtc-wrapper {
padding:80px 30px 80px 30px;
}
#region1.xtc-fluidwrapper {
padding:80px 30px 80px 30px;
}
#region2wrap .xtc-wrapper {
padding:40px 30px 40px 30px;
}
#region2.xtc-fluidwrapper {
padding:40px 30px 40px 30px;
}
#region3wrap .xtc-wrapper {
padding:60px 30px;
}
#region3.xtc-fluidwrapper {
padding:60px 30px;
}
#region4wrap .xtc-wrapper {
padding:40px 30px 40px 30px;
}
#region4.xtc-fluidwrapper {
padding:40px 30px 40px 30px;
}
#region5wrap .xtc-wrapper {
padding:40px 30px 40px 30px;
}
#region5.xtc-fluidwrapper {
padding:40px 30px 40px 30px;
}
#region6wrap .xtc-wrapper {
padding:40px 30px 40px 30px;
}
#region6.xtc-fluidwrapper {
padding:40px 30px 40px 30px;
}
#region7wrap .xtc-wrapper {
padding:40px 30px 40px 30px;
}
#region7.xtc-fluidwrapper {
padding:40px 30px 40px 30px;
}
#region8wrap .xtc-wrapper {
padding:30px 30px;
}
#region8.xtc-fluidwrapper {
padding:30px 30px;
}
#region9wrap .xtc-wrapper {
padding:60px 30px;
}
#region9.xtc-fluidwrapper {
padding:60px 30px;
}
#region10wrap .xtc-wrapper {
padding:60px 30px;
}
#region10.xtc-fluidwrapper {
padding:60px 30px;
}
#region11wrap .xtc-wrapper {
padding:60px 30px;
}
#region11.xtc-fluidwrapper {
padding:60px 30px;
}
#region12wrap .xtc-wrapper {
padding:40px 40px 20px 40px;
}
#region12.xtc-fluidwrapper {
padding:40px 40px 20px 40px;
}
#footerwrap .xtc-wrapperpad {
	padding:12px 30px;
}
#footerwrap .xtc-wrapper {
padding:12px 30px;
}
#footerwrap {
padding:12px 30px;
}
#footer .xtc-fluidwrapper {
padding:12px 30px;
}
}

/* Landscape phones and down */

@media (max-width: 480px) {
/* Header */
#header {
	padding-left: 10px;
	padding-right: 10px;
}
/* TYPO */
p, input, button, select, textarea {
	font-size: 80%;
}
/* Joomla Content */
.com_content #component dd {
	display: block;
}
.com_content .blog .faq-blog_item span .page-header h2 {
	background: #fff !important;
	top: 0 !important;
	left: 0;
	position: static;
	display: block;
	padding-left: 0;
	padding-right: 0;
}
.com_content .blog .faq-blog_item {
	border: 1px solid #ccc;
	padding: 0 20px;
	margin-bottom: 0;
	margin-top: 0;
}
/* Module Classes */
.border h3.moduletitle::after {
	width: 100%;
}
/* Breadcrumbs Title Removal */
.showHere {
	display: none;
}
/* Typography Page Styling */
.fontawesome-icon-list div {
	width: 45%;
}
}