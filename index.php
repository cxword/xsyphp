<?php
/**
	*****************************************************************
	* 联系QQ： 775723490                						    *
	* 版  本： V2.0	                                                *
	* 来  自：《猫吓鱼工作室》开发团队								*
	* 开发者： 小鼠鱼									            *
	* 邮  箱： cxword@163.com										*
	* 说  明:  系统主要入口										    *
	* 备  注:  未经允许不得商业出售，代码欢迎参考纠正				*
	*****************************************************************
*/ 
//本程序有cxword工作室开发，联系邮箱：cxword@163.com ，联系人：小鼠鱼

// 应用入口文件

//检验PHP环境,低于5.4则提示退出
if(version_compare(PHP_VERSION,'5.4.0','<'))  die('require PHP > 5.4.0 ! 快来试试PHP5.4以上版本的新特性吧~');

//开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 应用目录为当前目录
define('APP_PATH', __DIR__ . '/application/');

// 引入xsyphp框架入口文件
require './xsyphp/xsyphp.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单

