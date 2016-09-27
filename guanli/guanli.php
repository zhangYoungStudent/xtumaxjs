<?php  
  require("../dbconnect.php");
  require("../header.php");
  if(isset($_SESSION['username'])==(001||002)){
  
  }else{ ?>
       <script language='javascript'>
	      window.location.href="login.php"; 
	      alert("登录失败！请确认你的用户名和密码是否正确！");
	   </script>
 <?php }
  

?>
<title>管理员操作界面</title>
<?php  require("../header2.php"); ?>
<h2>管理员操作界面</h2>
    <div data-role="navbar">
      <ul>
        <li><a href="#" class="ui-btn-active" id="hide" >知道</a></li>
        <li><a href="#" id="show">资料</a></li>
        <li><a href="#" id="show">旧书店</a></li>
        <li><a href="#" id="show">活动中心</a></li>
      </ul>
    </div> 
</div>


<div data-role="content" id="pageone">
<!-------------------------------------------旧书店----------------------------------------------------------------->    
<div class="shudian">

		
<form enctype="multipart/form-data" action="upload.php" method="post" data-ajax="false">  
<table>
	   <tr>
           <td>名字</td><td><input name="name" type="text" /></td>
       </tr> 
       <tr>
           <td>电话</td><td><input name="tel" type="text" /></td>
       </tr>
      <tr>
           <td>图书图片</td><td><input name="myfile" type="file" /></td>
       </tr>
       <tr>
           <td>图书描述</td><td><input name="description" type="text" /></td>
       </tr>
      <tr>
           <td></td><td><input type="submit" value="提交" data-ajax="false"/></td>
       </tr>
</table>    
</form>  
       
               
</div>
    
    
<!----------------------------------------------------------------------------------------------------------------->        
</div>

<div data-role="content" id="pagetwo">
<!-------------------------------------------资料----------------------------------------------------------------->    
<div class="ziliao">

		
<form enctype="multipart/form-data" action="upload.php" method="post" data-ajax="false">  
<table>
	   <tr>
           <td>名字</td><td><input name="name" type="text" /></td>
       </tr> 
       <tr>
           <td>电话</td><td><input name="tel" type="text" /></td>
       </tr>
      <tr>
           <td>图书图片</td><td><input name="myfile" type="file" /></td>
       </tr>
       <tr>
           <td>图书描述</td><td><input name="description" type="text" /></td>
       </tr>
      <tr>
           <td></td><td><input type="submit" value="提交" data-ajax="false"/></td>
       </tr>
</table>    
</form>  
       
               
</div>
    
    
<!----------------------------------------------------------------------------------------------------------------->        
</div>




</div>
<?php  require("../footer.php"); ?>