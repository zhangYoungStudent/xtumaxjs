<?php 
require("../dbconnect.php");

require("../header.php");

?>

<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101287161" data-redirecturi="http://www.xtumax.top/index.php" charset="utf-8"></script>
<!------------------------------------------------------------------------------------------------------------------>
<title>登陆页面</title>  
<?php require("../header2.php");?>
     <h1>登陆页面</h1>
  </div>
  
  <div data-role="content">
   
      
<!----------------------------------------------------------------------------------------------------------------->      

<!----------------------------------------------------------------------------------------------------------------->    
    <form method="post" action="loginCl.php" onsubmit="return myFunction();">
	 <table>
	   <tr>
           <td>用户名</td><td><input id="username" type="text" name="username"><p id="tishi"></p></td>
       </tr>
       <tr>
	      <td>密码</td><td><input type="password" name="password"></td>	   
	   </tr>
	   <tr>
           <td><a href="register.php">注册</a></td><td><input data-ajax="false"  type="submit" name="发送" value="登陆"  data-inline="true" data-mini="true"></td>
	   </tr>  
       <span id="qq_login_btn"></span>
<!-------------------------------------------------------------------------------------------------------------------->
         <script type="text/javascript">
	    QC.Login({//按默认样式插入QQ登录按钮
		btnId:"qq_login_btn"	//插入按钮的节点id
	   });
      </script>  
<!-------------------------------------------------------------------------------------------------------------------->
        </table>
     </form>
   </div> 

    
<?php require("../footer.php");?>