<?php

require("../dbconnect.php");

//------------用户提出问题--------------------------------------------------------------------------------
$problem=$_POST[problem];//用户提出的问题
$problem=magic($problem);
$sql="insert into zhidaotiwen (problem,time) values('$problem',NOW())"; 
$isok=mysql_query($sql);

//------------用户提出问题--------------------------------------------------------------------------------



function magic($str)
 {
	 
	 $str=trim($str);
	 if(!get_magic_quotes_gpc())
	 {
		 $str=addslashes($str);
		 
	 }
	 return htmlspecialchars($str);
 }

?>
<?php require("../header.php");?>
<title>信息提交页面</title>   
</head>
<body onload="timedMsg()">
<div data-role="page">
<div data-role="header">
<h2>MAX工作室</h2>
</div>

<div data-role="content">
    <?php   if($isok)
    {
    echo "<p>您的信息已经提交成功</p>";
    }else
    {
    echo "<p>很抱歉，您的信息提交失败，请重新提交，或者联系max管理员</p>";
    }
    ?> 
    
    
</div>
    <?php require("../footer.php");?>