
<!--处理注册用户提交的数据-->
<?php
  require("../dbconnect.php");
  require("../header.php");
  

?>
</head>
<?php require("../header2.php"); ?>
<h2>用户登录</h2>
</div>

<div data-role="content" id="pageone">
<?php
  $username	= $_POST['username'];    //用户名   
  $password	= $_POST['password'];   //密码  
  $password=md5($_POST['password']);   //对密码进行MD5加密
  $email = $_POST['email'];  //电子邮箱
  $sql="select * from user where username='$username'";    //检验用户名是否已经存在
  $result = mysql_query($sql);
  $num_rows = mysql_fetch_row($result);
  if (!empty($num_rows)) {
    echo "<p>该用户名已经存在!</p>";
    echo '<a href="register.php">返回注册页面</a>';
	return;
  }
  $_SESSION['username'] = $username;
  $sql="insert into user(username,password,email,time) values('$username', '$password','$email',NOW())"; //将用户信息插入数据库
  $result = mysql_query($sql);
  if(!empty($result))
  {
      //echo "<script language=\"javascript\"> window.location.href=\"../index.php\";</script>";
    echo "<p>注册成功,请点击返回首页</p>";?>
    <input  onclick='location.href="../index.php"' type='button'  value='点击返回' data-mini="true" />
<?php  }
  else {
      echo "<p>注册失败！</p>";
  }
?>

</div>
<?php require("../footer.php"); ?>