<?php
	@session_start(); 
	define('ADMIN_USER',"admin");    //管理员用户   define（） 注意这里定义常量的方式
	
	define('EACH_PAGE',	10);   //分页设置，每页最多显示的记录数
	
    $db = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);

    mysql_select_db(SAE_MYSQL_DB, $db);	   
//$db = mysql_pconnect("localhost","root","123456");
	if (!$db) 
	{
	   die('<b>数据库连接失败！</b>');
	   exit;
	}
	//选择数据库
//mysql_select_db ("forum");
?>