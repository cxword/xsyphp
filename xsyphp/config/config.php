<?php
/**
 * 系统配置文件
 * @copyright   Copyright(c) 2011
 * @author      yuansir <yuansir@live.cn/yuansir-web.com>
 * @version     1.0
 */
return[
   /*数据库配置*/
   'db'  => array(
            'db_host'           =>      'localhost',
            'db_username'       =>      'root',
            'db_password'       =>      '',
            'db_database'       =>      'app',
            'db_table_prefix'   =>      'app_',
            'db_charset'        =>      'urf8',
            'db_conn'           =>      1,   //数据库连接标识; 1 为长久链接，默认0为即时链接
            
    ),
   'route' => array(
            'default_controller'             =>      'Home',  //系统默认控制器
            'default_action'                 =>      'index',  //系统默认控制器
            'url_type'                       =>      1          /*定义URL的形式 1 为普通模式    index.php?c=controller&a=action&id=2
                                                         *              2 为PATHINFO   index.php/controller/action/id/2(暂时不实现)              
                                                         */ 
    ),
   'view' => array(

        //是否开启公共文件
        'view_public'  => false,
        //公共头部
        'view_public_head'  => '', 
        //公共底部
        'view_public_food'  => '', 
        // 模板路径
        'view_path'    => '',
        // 模板后缀
        'view_suffix'  => '.html',
        // 模板文件名分隔符
        'view_depr'    => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin'    => '{',
        // 模板引擎普通标签结束标记
        'tpl_end'      => '}',
        // 标签库标签开始标记
        'taglib_begin' => '{',
        // 标签库标签结束标记
        'taglib_end'   => '}',
    ),
   'cache' => array(
        'cache_dir'                 =>      'cache', //缓存路径，相对于根目录
        'cache_prefix'              =>      'cache_',//缓存文件名前缀
        'cache_time'                =>      1800,    //缓存时间默认1800秒
        'cache_mode'                =>      2,       //mode 1 为serialize ，model 2为保存为可执行文件    
    ),

];
