<?php 
/**
 * 错误信息输入
 */
class Error
{
    //E_ALL - 所有的错误和警告(不包括 E_STRICT)
//     E_ERROR - 致命性的运行时错误
// E_WARNING - 运行时警告(非致命性错误)
// E_PARSE - 编译时解析错误
// E_NOTICE - 运行时提醒(这些经常是你代码中的bug引起的，也可能是有意的行为造成的。)
// E_STRICT - 编码标准化警告，允许PHP建议如何修改代码以确保最佳的互操作性向前兼容性。
// E_CORE_ERROR - PHP启动时初始化过程中的致命错误
// E_CORE_WARNING  PHP启动时初始化过程中的警告(非致命性错)
// E_COMPILE_ERROR - 编译时致命性错
// E_COMPILE_WARNING - 编译时警告(非致命性错)
// E_USER_ERROR - 用户自定义的错误消息
// E_USER_WARNING - 用户自定义的警告消息
// E_USER_NOTICE - 用户自定义的提醒消息
	//规定错误等级
	protected $_error = ['E_ALL','E_ERROR','E_WARNING'];
	
	public function __construct( $b, $c)
    {
        exit('错误');
    }


     //主方法错误


	//控制器错误

	//模型错误

	//视图错误

	//数据库错误

}