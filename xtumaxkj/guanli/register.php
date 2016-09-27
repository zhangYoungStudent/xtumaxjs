<!--注册页面-->

<?php 
include("../header.php") ;
include("../dbconnect.php");
 ?>
<title>用户注册</title> 
<?php include("../header2.php");?>
<h2>用户注册</h2>
</div>
<script language="javascript">
function disagree(){
	if(confirm("点击确定自动关闭窗口,点击取消返回！"))
		self.close();
	else{
			return;
		}			
}
function agree(){
	if(nameCheck() && emailCheck() && mima1Check() && mima2Check() && ageCheck()){
//		alert("注册成功！");
		return true;
	}
	else
		return false;
}

function nameCheck(){
		var na=document.getElementById("name").value;
		if(na.match(/^\w{5,14}$/))
			return true;
		else
			alert("请按要求填写用户名！");
}
function emailCheck(){
		var ema=document.getElementById("email").value;
		if((/^\w+@\w+(.\w+){1,2}$/).test(ema))
			return true;
		else
			alert("你的邮箱格式有误,请重新输入！");
}
function mima1Check(){	
		var mi=document.getElementById("mima1").value;			
		if(mi.match(/^.{6,}$/))
			return true;
		else
			alert("请按要求输入密码！");
}
function mima2Check(){
		if(document.getElementById("mima1").value==document.getElementById

("mima2").value)
			return true;
		else
			alert("两次密码输入不一致！");
}

</script>
<div data-role="content" id="pageone">
<center>
	<div style="text-align:left; margin:10px; width:450px">
		<hr color="#66CC99" size="2" />
		<form action="addUser.php" method="POST" enctype="multipart/form-data" onsubmit="return agree();"  >
		   <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
			<span class="s1">用&nbsp;户&nbsp;名：</span><input  id="name" type="text" name="username" onchange="nameCheck();"  /><span class="s2">&nbsp;&nbsp;由字母、数字、下划线组成(5-14位)</span><br /><br />
			<span class="s1">电子邮箱：</span><input type="text" id="email" name="email" onchange="emailCheck();" /><span class="s2">&nbsp;&nbsp;当密码遗失时凭此领取</span><br /><br />
			<span class="s1">设置密码：</span><input type="password" id="mima1" name="password" onchange="mima1Check();" /><span class="s2">&nbsp;&nbsp;不少于6位</span><br/><br />
			<span class="s1">确认密码：</span><input type="password" id="mima2" name="password" onchange="mima2Check();" /><br /><br />
            <input type="submit" name="submit" value="提交" data-ajax="false" data-inline="true" data-mini="true" />
		</form>
	</div>
</center>
</div>

<?php include("../footer.php");?>