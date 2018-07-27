<?php

	//建立時要注意資料夾建立的位置
	define('ROOTPATH',$_SERVER['DOCUMENT_ROOT']);
	define('MODEL','/model');
	define('VIEW','/view/'); 
	define('CONTROLLER','/controller');
	define('SMARTY','/smarty/');


	//載入 smarty 類別檔
	require_once(ROOTPATH.MODEL.SMARTY.'Smarty.class.php');

	//建立 smarty 物件
	$sm = new Smarty;

	//配置 smarty 所需用的資料匣
	$sm->template_dir = ROOTPATH.VIEW.'templates';;
	$sm->compile_dir = ROOTPATH.VIEW.'templates_c';
	$sm->config_dir = ROOTPATH.VIEW.'configs';
	$sm->cache_dir = ROOTPATH.VIEW.'cache';

	//自訂 smarty 標識符號
	$sm->left_delimiter = '{{ ';
	$sm->right_delimiter = ' }}';

	//關閉暫存
	$sm->caching = false;

	//閉閉測試
	$sm->debugging = false;
?>