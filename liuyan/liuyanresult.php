<?php
require("../dbconnect.php"); 
require("../header.php");

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

<title>信息提交页面</title>   
</head>
<body>
<div data-role="page">
<div data-role="content">
<?php 
   if(isset($_SESSION['username'])==TRUE){

       $content=$_POST[content];

       $author=$_SESSION['username'];

       $content=magic($content);

       $sql="insert into liuyan (content,author,time) values('$content','$author',NOW())"; 


       try{
  	     $result=mysql_query($sql);
  	?>
	<script language="javascript">
		window.location.href="liuyan.php";
		alert("操作成功！刷新页面查看");
	</script>
	<?php
	}
	catch(Exception $e) {
		?>
	<script language="javascript">
		window.location.href="liuyan.php";
		alert("操作失败！请重新尝试");
	</script>
	<?php
	}
}else {
	?>
	<script language="javascript">
        window.location.href="../guanli/login.php";
		alert("你尚未登录！");
	</script>
	<?php
}
?>
</div> 
</div>
</body>
</html>
 