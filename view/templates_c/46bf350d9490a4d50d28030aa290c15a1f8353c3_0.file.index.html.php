<?php
/* Smarty version 3.1.32, created on 2018-07-22 18:40:21
  from 'C:\wamp64\www\phpweb\smarty\sm_dir\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b54cf9575f949_18920531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46bf350d9490a4d50d28030aa290c15a1f8353c3' => 
    array (
      0 => 'C:\\wamp64\\www\\phpweb\\smarty\\sm_dir\\templates\\index.html',
      1 => 1532284812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b54cf9575f949_18920531 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="這是我製作的個人網站">		
	<meta name="keywords" content="HTML,CSS,XML,JavaScript,IPMA">			
	<meta name="author" content="Li LUXUAN">			
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>index</title>
	<link rel="icon" type="images/png" href="images/logo.png">	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<!--
	<link rel="stylesheet" type="text/css" href="css/style.css">-->
	<link rel="stylesheet" type="text/css" href="css/webfonts.css">	
	<?php echo '<script'; ?>
 src="js/jquery-3.3.1.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/script-index.js"><?php echo '</script'; ?>
>
	<style>
		.flexbox{display:flex;flex-wrap:wrap;justify-content:space-between;}
		
		/*nav*/
		#nav{max-width:60vw;min-width:40vw;position:relative;}

		/*nav a*/
		#nav a{font-size:1.2rem;color:#000;border-bottom:2px solid #666;text-align:center;height:2rem;line-height:2rem;transition:background-color 0.5s;display:block;}
		#nav a:hover, .bc-mov{background-color:orange;color:#FFF;}
		/*樣式*/
		#nav [class^=icon]::before{font-size:0.8em;padding-right:2px;}
		/*第一層*/
		#nav ul{justify-content:left;}
		#nav ul>li a{color:red;width:6.5rem;}
		/*第二層*/
		#nav ul>li ul{position:absolute;opacity:0;transition:all 0.5s;margin-left:6.5rem;margin-top:-2rem;}
		#nav ul>li:hover ul{opacity:1;}
		#nav ul>li ul>li a{color:blue;width:10rem;}
		
	</style>
</head>
<body>
	<header id="indexheader" class="relativeR">
	<section>
	<ul id="nav" class="flexbox">
		<li><a href="html.html">Front End</a>
			<ul>
				<li class="bc-mov"><a href="#">Html</a></li>
				<li><a href="#">Css</a></li>
				<li><a href="#" class="icon-chevron-down">JavaScript</a>
					<ul class="flexbox">
						<li><a href="#">Js選取器的用法</a></li>
						<li><a href="#">Js邏輯判斷應用</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="">222</a></li>
	</ul>

<template>
<nav id="topnav">
	<ul class="flexbox">
		<li class="color3">other</li>
			<li><a href="index.html" class="bc-mov">do-ing</a></li>
			<li><a href="internat-resources.html">網路資源</a></li>							
			<li><a href="schedule.html">學習進度</a></li>
			<li><a href="collection/index.html" target="_blank">作品集</a></li>
			<li><a href="modularization.html" class="icon-chevron-down">組合</a>
				<ul class="fontsize">
					<li><a href="comprehensive-example/index.html">綜合範例</a></li>
					<li><a href="development/index.html">開發</a></li>
					<li><a href="modularization.html">模組化</a></li>
				</ul>
			</li>
	</ul>
	<ul class="flexbox">
		<li class="color1">Front End</li>
		<li><a href="html.html">HTML</a></li>
		<li><a href="css.html">CSS</a></li>
		<li><a href="javascript.html" class="icon-chevron-down">JavaScript</a>
	<ul class="fontsize">
		<li><a href="jstest/script-ex1.html">JS選取器的用法</a></li>
		<li><a href="jstest/script-ex2.html">JS邏輯判斷應用</a></li>
	</ul>
		</li>
		<li><a href="jquery.html">jQuery</a></li>
		<li><a href="vue.js.html">Vue.js</a></li>
		<li><a href="python.html">Python</a></li>
	</ul>
	<ul class="flexbox">
		<li class="color2">Back End</li>
		<li><a href="php.html">PHP</a></li>
		<li><a href="smarty.html">Smarty</a></li>
		<li><a href="django.html">Django</a></li>
	</ul>
</nav>
</section>
</template>


	</header>
	<main></main>
	<footer></footer>
</body>
</html><?php }
}
