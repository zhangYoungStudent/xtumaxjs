<!--修改个人资料 处理页面   备注：禁止修改用户名-->

<?php
	include("../dbconnect.php");
	include("../header.php");

if ($_SESSION['username'])
  {
	  $username=$_SESSION['username'];
	  $email=$_POST['email'];
	  $password=md5($_POST['password']);
	  $sql="update user set email='$email',password='$password', where username='$username'";
  try{
  	     
      $result=mysql_query($sql);
  	?>
<script language="javascript">
        window.location.href="../index.php";
		alert("操作成功！");
</script>
	<?php
	}
	catch(Exception $e) {
		?>
	<script language="javascript">
		window.location.href="xiugai.php";
		alert("操作失败！");
	</script>
	<?php
	}
}
else {
	?>
	<script language="javascript">
		window.location.href="login.php";
		alert("您尚未登录！");
	</script>
	<?php
}
?>

