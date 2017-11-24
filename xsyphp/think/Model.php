<?php

class Model extends Sql
{
    protected $_model;
    protected $_table;
    protected static $_dbConfig = [];

    public function __construct()
    {
        $_db_host = self::$_dbConfig['db_host'];
        $_db_username = self::$_dbConfig['db_username'];
        $_db_password = self::$_dbConfig['db_password'];
        $_db_database = self::$_dbConfig['db_database'];
        $_db_charset = self::$_dbConfig['db_charset'];
        $_db_table_prefix = self::$_dbConfig['db_table_prefix'];
        $_db_conn = self::$_dbConfig['db_conn'];
        

        if ($_db_host == "" || $_db_username == "" || $_db_database == "" || $_db_charset == "" ) {
            echo "数据库配置错误";die;
        } else {
            // 连接数据库
            $_db_link = $this->connect($_db_host, $_db_username, $_db_password, $_db_database, $_db_charset);
            if (!$_db_link) {
                echo "string";
            }

        }
        

        

        // 获取数据库表名
        if (!$this->_table) {
            // 获取模型类名称
            $this->_model = get_class($this);
            // 删除类名最后的 Model 字符
            $this->_model = substr($this->_model, 0, -5);

            // 数据库表名与类名一致
            $this->_table = strtolower($this->_model);
        }
    }

    public static function setDbConfig($config)
    {
        self::$_dbConfig = $config;
    }
}