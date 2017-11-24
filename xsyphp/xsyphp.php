<?php
/**
	*****************************************************************
	* 联系QQ： 775723490                						    *
	* 版  本： V2.0	                                                *
	* 来  自：《cxword工作室》开发团队								*
	* 开发者： 小鼠鱼									            *
	* 邮  箱： cxword@163.com										*
	* 说  明:  xsyphp公共入口文件   							    *
	* 备  注:  未经允许不得商业出售，代码欢迎参考纠正				*
	*****************************************************************
*/ 

// 记录开始运行时间
$GLOBALS['_beginTime'] = microtime(TRUE);

// 记录内存初始使用
define('MEMORY_LIMIT_ON',function_exists('memory_get_usage'));
if(MEMORY_LIMIT_ON) $GLOBALS['_startUseMems'] = memory_get_usage();

// 版本信息
const SXYPHP_VERSION     =   '1.1.0';

define('DS', DIRECTORY_SEPARATOR);

// 系统常量定义
defined('SYS_PATH')     or define('SYS_PATH',       __DIR__ . '/');
defined('APP_PATH')     or define('APP_PATH',       __DIR__.'app'.DS);

defined('APP_DEBUG')    or define('APP_DEBUG',      false); // 是否调试模式

defined('RUNTIME_PATH') or define('RUNTIME_PATH',   APP_PATH.'runtime'.DS);   // 系统运行时目录
defined('CORE_PATH')    or define('CORE_PATH',      SYS_PATH.'think'); // XSYPHP类库目录

defined('COMMON_PATH')  or define('COMMON_PATH',    APP_PATH.'common'.DS); // 应用公共目录
defined('CONF_PATH')    or define('CONF_PATH',      SYS_PATH.'conf'.DS); // 应用配置目录
//defined('LANG_PATH')    or define('LANG_PATH',      COMMON_PATH.'lang/'); // 应用语言目录
//defined('LOG_PATH')     or define('LOG_PATH',       RUNTIME_PATH.'logs/'); // 应用日志目录
//defined('TEMP_PATH')    or define('TEMP_PATH',      RUNTIME_PATH.'temp/'); // 应用缓存目录
//defined('DATA_PATH')    or define('DATA_PATH',      RUNTIME_PATH.'data/'); // 应用数据目录
//defined('CACHE_PATH')   or define('CACHE_PATH',     RUNTIME_PATH.'cache/'); // 应用模板缓存目录
//defined('CONF_EXT')     or define('CONF_EXT',       '.php'); // 配置文件后缀

if (APP_DEBUG) {
    ini_set('display_errors', 1);
    error_reporting(-1);
} else {
    ini_set('display_errors', 0);
}

// 加载框架文件
require(SYS_PATH . 'common/functions.php');
// 加载配置文件
$config = require(SYS_PATH.'config/config.php');

// 实例化框架类
(new functions($config))->run();


