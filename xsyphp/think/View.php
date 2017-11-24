<?php
/**
 * 视图基类
 */
class View
{
    protected $variables = array();
    protected $_controller;
    protected $_action;
    protected static $_viewConfig = [];

    function __construct($controller, $action)
    {
        $this->_controller = strtolower($controller);
        $this->_action = strtolower($action);
    }
 
    // 分配变量
    public function assign($name, $value)
    {
        $this->variables[$name] = $value;
    }
 
    // 渲染显示
    public function render()
    {
        extract($this->variables);
        //加载配置
        $_viewConfig = self::$_viewConfig;
        //加载文件后缀名称
        $_view_suffix = $_viewConfig['view_suffix'];
        //判断其他模板路径
        if ($_viewConfig['view_path']) {
            $_view_layout = $_viewConfig['view_path'];
        } else {
            $_view_layout = APP_PATH . 'views/';
        }
        // 模板文件名分隔符
        if ($_viewConfig['view_depr']) {
            $_view_ds = $_viewConfig['view_depr'];
        } else {
            $_view_ds = DS;
        }
        $controllerLayout = $_view_layout . $this->_controller . $_view_ds . $this->_action . $_view_suffix;


        //判断公共部分
        if ($_viewConfig['view_public']) {
            //判断头部文件名称
            if ($_viewConfig['view_public_head']) {
                $_view_head = $_view_layout . $_viewConfig['view_public_head'] . $_view_suffix;
            } else {
                $_view_head = $_view_layout . 'header' . $_view_suffix;
            }
            if ($_viewConfig['view_public_food']) {
                $_view_fodd = $_view_layout . $_viewConfig['view_public_food'] . $_view_suffix;
            } else {
                $_view_fodd = $_view_layout . 'fooder' . $_view_suffix;
            }
            // 页头文件
            if (file_exists($_view_head)) {
                include ($_view_head);
            } else {
                include ($_view_fodd);
            }
        }

        //判断视图文件是否存在
        if (file_exists($controllerLayout)) {
            include ($controllerLayout);
        } else {
            echo "<h1>无法找到视图文件</h1>".$controllerLayout;
            
        }
        
        // 页脚文件
        // if (file_exists($controllerFooter)) {
        //     include ($controllerFooter);
        // } else {
        //     include ($defaultFooter);
        // }
    }
    public static function setViewConfig($config)
    {
       
        self::$_viewConfig = $config;
    }
}
