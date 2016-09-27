<?php 
require("dbconnect.php");

require("header.php");
?>
<title>报名入口</title>
<?php require("header2.php");?>
<h1>活动报名</h1>
</div>
  <div data-role="content" class="weui_article">
      <p><?php echo ;?></p>
     
	 <form method="post" action="loginCl.php" onsubmit="return myFunction();">
	 <table>
	   <tr>
           <td>姓名</td><td><input id="username" type="text" name="username"><p id="tishi"></p></td>
       </tr>
       <tr>
           <td>年级</td><td><input id="username" type="text" name="username"><p id="tishi"></p></td>
       </tr>
       <tr>
           <td>班级</td><td><input id="username" type="text" name="username"><p id="tishi"></p></td>
       </tr>
         <tr>
           <td>电话</td><td><input id="username" type="text" name="username"><p id="tishi"></p></td>
       </tr>
       <tr>
	      <td>密码</td><td><input type="password" name="password"></td>	   
	   </tr>
         <tr>
           <td>QQ</td><td><input id="username" type="text" name="username"><p id="tishi"></p></td>
       </tr>
	   <tr>
           <td></td><td><input data-ajax="false"  type="submit" name="发送" value="点击报名"  data-inline="true" data-mini="true"></td>
	   </tr>  
       
        </table>
     </form>
</div>
<?php require("footer.php");?>
