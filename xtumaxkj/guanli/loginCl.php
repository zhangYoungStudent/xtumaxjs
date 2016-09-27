<?php  
  require("../dbconnect.php");
  require("../header.php");
  

?>
<title>登录</title>
</head>
<body>
<div data-role="content" id="pageone">
         <?php
			$username=$_POST['username'];

            if($username==001){
                $password=$_POST['password'];            
            }else{
                $password=md5($_POST['password']);
            }

			//判断用户名，密码是否正确		
			$sql="select * from user where username='$username' and password='$password'";
			$result = mysql_query($sql);
			$num_rows = mysql_num_rows($result);
//			echo $num_rows;	
			if($num_rows == 1)
			{
				$row = mysql_fetch_array($result);
				$_SESSION['username'] = $row['username'];  //将用户名存在session中
				$row['score']=$row['score']+1;	
				mysql_query("set names gbk");	
				mysql_query("update user set score = '".$row['score']."' where username ='".$row['username']."'");
				//跳转到论坛主页面

                if($_SESSION['username']==001){   ?>
				   <script language='javascript'>; 
                       window.location.href="guanli.php";
				</script>
          <?php }else{ ?>
                   <script language='javascript'>; 
                       window.location.href="../index.php";
                </script>
          <?php }
                                   
			}
			else { ?>
                 <script language='javascript'>
					 window.location.href="login.php"; 
				     alert("登录失败！请确认你的用户名和密码是否正确！");
				</script>
            <?php } ?>  
</div>
</body>
</html>