<?php
require( dirname( __FILE__ ) . '/html/functions/_init.php' );
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie lte-ie9 lte-ie8 lte-ie7 ie6" lang="fr"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie lte-ie9 lte-ie8 lte-ie7 ie7" lang="fr"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie lte-ie9 lte-ie8 ie8" lang="fr"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie lte-ie9 ie9" lang="fr"> <![endif]-->
<!--[if !(IE)]><! -->
<html class="no-js" lang="fr"><!--<![endif]-->
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="initial-scale=1.0" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		
		<title>Basalte</title>
		
		<link rel="apple-touch-icon" sizes="57x57" href="../assets/img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../assets/img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../assets/img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="../assets/img/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="../assets/img/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="../assets/img/favicons/favicon-230x230.png" sizes="230x230">
		<link rel="icon" type="image/png" href="../assets/img/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="../assets/img/favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="../assets/img/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="../assets/img/favicons/android-chrome-manifest.json">
		<link rel="shortcut icon" href="../assets/img/favicons/favicon.ico">
		<meta property="og:image" content="favicons/open-graph.png">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
		<meta name="msapplication-config" content="favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		
		<!--[if lte IE 9]>
			<script type="text/javascript" src="../assets/js/vendor_ie/matchmedia-polyfill.js"></script>
			<script type="text/javascript" src="../assets/js/vendor_ie/matchMedia.addListener.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="../assets/js/vendor_ie/html5shiv.min.js"></script>
		<![endif]-->
		<!--[if lte IE 8]>
			<script type="text/javascript" src="../assets/js/vendor_ie/selectivizr.js"></script>
		<![endif]-->
		
		<style>
			.cssloading__overlay {
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background: #fff;
				opacity: 1;
				z-index: 10001;
				transition: opacity .25s ease, z-index .25s ease .5s, width .25s ease .5s, height .25s ease .25s, visibility .25s ease .25s;
			}
		</style>

		<link rel="preload" href="../assets/css/style.css" as="style" onload="this.rel='stylesheet'">
		<noscript>
			<link rel="stylesheet" href="../assets/css/style.css">
		</noscript>

		<script>
		/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
		!function(a){"use strict";var b=function(b,c,d){function e(a){return h.body?a():void setTimeout(function(){e(a)})}function f(){i.addEventListener&&i.removeEventListener("load",f),i.media=d||"all"}var g,h=a.document,i=h.createElement("link");if(c)g=c;else{var j=(h.body||h.getElementsByTagName("head")[0]).childNodes;g=j[j.length-1]}var k=h.styleSheets;i.rel="stylesheet",i.href=b,i.media="only x",e(function(){g.parentNode.insertBefore(i,c?g:g.nextSibling)});var l=function(a){for(var b=i.href,c=k.length;c--;)if(k[c].href===b)return a();setTimeout(function(){l(a)})};return i.addEventListener&&i.addEventListener("load",f),i.onloadcssdefined=l,l(f),i};"undefined"!=typeof exports?exports.loadCSS=b:a.loadCSS=b}("undefined"!=typeof global?global:this);
		/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
		!function(a){if(a.loadCSS){var b=loadCSS.relpreload={};if(b.support=function(){try{return a.document.createElement("link").relList.supports("preload")}catch(b){return!1}},b.poly=function(){for(var b=a.document.getElementsByTagName("link"),c=0;c<b.length;c++){var d=b[c];"preload"===d.rel&&"style"===d.getAttribute("as")&&(a.loadCSS(d.href,d,d.getAttribute("media")),d.rel=null)}},!b.support()){b.poly();var c=a.setInterval(b.poly,300);a.addEventListener&&a.addEventListener("load",function(){b.poly(),a.clearInterval(c)}),a.attachEvent&&a.attachEvent("onload",function(){a.clearInterval(c)})}}}(this);
		</script>
		
		<!-- Modernizr Custom (JS + SVG detection) -->
		<script type="text/javascript" src="../assets/js/vendor_async/modernizr.custom.min.js"></script>
		
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

	</head>
	<body itemscope itemtype="http://schema.org/WebPage" class="<?php echo $class; ?>">
		<!--[if lte IE 9]>
			<div class="message message__browserhappy">
				<p>
				You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.
				</p>
				<p>
				<button><span class="button-icon icon-close"></span>&nbsp;Close</button>
				</p>
			</div>
		<![endif]-->
		<div class="cssloading__overlay"></div>
		<div id="main">

			<main id="main__content" class="main__content">
				<div class="wrapper wrapper--mini">