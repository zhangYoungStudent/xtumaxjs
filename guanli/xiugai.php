<?php
	include("../dbconnect.php");
	include("../header.php");
?>

<script language="javascript">
function agree(){
	if(emailCheck() && mima1Check() && mima2Check() && ageCheck())
	{
		return true;
	}
	else
		return false;
}
function emailCheck(){
		var ema=document.getElementById("email").value;
		if((/^\w+@\w+(.\w+){1,2}$/).test(ema))
			return true;
		else alert("你的邮箱格式有误,请重新输入！");
}
function mima1Check(){	
		var mi=document.getElementById("mima1").value;			
		if(mi.match(/^.{6,}$/))
			return true;
		else alert("请按要求输入密码！");
}
function mima2Check(){
		if(document.getElementById("mima1").value==document.getElementById("mima2").value)
			return true;
		else
			alert("两次密码输入不一致！");
}
function ageCheck(){
		var ag=document.getElementById("age").value;
		if(ag.match(/^[0-9]+$/))
		return true;
		else{
			alert("你的年龄有误，请正确输入！");
			return false;
		}			
}
</script>
<title>修改个人信息</title>
<?php include("../header2.php");

if ($_SESSION['username'])
	{   
    echo "<h2>你好！".$_SESSION['username']."</h2></div>";
?>
<div data-role="content" id="pageone">

     <h3><font color="#3366FF" size="+1">你可以修改你的个人资料</font></h3>
    <form action="modifydataCl.php" method="POST" onsubmit="return agree();" data-ajax="false">
	     <span>电子邮箱：</span><input type="text" id="email" name="email" onchange="emailCheck();" /><span class="s2">&nbsp;&nbsp;当密码遗失时凭此领取</span><br /><br />
	     <span>修改密码：</span><input type="password" id="mima1" name="password" onchange="mima1Check();" /><span class="s2">&nbsp;&nbsp;不少于6位</span><br /><br />
	     <span>确认密码：</span><input type="password" id="mima2" name="password" onchange="mima2Check();" /><br /><br />
	     <input type="submit" name="submit" value="提交" /> 
    </form>
<?php
	}
	

else {
		?>
		<script language='javascript'>; 
				

window.location.href="login.php";
				alert("你尚未登录不能修改个人资料！");
		</script>
		<?php
	}
?>
</div>
<?php include("../footer.php");?>