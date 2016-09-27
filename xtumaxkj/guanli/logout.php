<!--用户退出登陆程序-->
<?php

require('../dbconnect.php');
require('../header.php');

?>
<title>注销</title>
</head>
<body>
<div data-role="page">


<?php

  $_SESSION = array();//清空

//SESSION
  session_unset();
  session_destroy();
  
 ?>
 <script language='javascript'> 
		

     window.location.href="../index.php";
		alert("成功退出登录!")
 </script>
<?php require('../footer.php');?>