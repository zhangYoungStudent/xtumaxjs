<!--------------------------------------------------------------------------------------------------------------->
    <div data-role="panel" id="left-panel" data-theme="b">
        <h3>用户指南</h3>
        <div style="margin-bottom:20px;"> 
		      <p align="center" style="color:#006699; font-size:14px">
		             
              </p>
		 <?php  if(isset($_SESSION['username'])==TRUE)		
            {    
    $username['username']=$_SESSIONN['username'];//为什么传递不成功？？？
                 echo "<a href='/guanli/xiugai.php' data-ajax='false'>学生</a>：".$_SESSION['username'];
                 $ues="select username,score FROM user where user.username='".$_SESSION['username']."'";
                 $res = mysql_query($ues);
                 $row1= mysql_fetch_array($res); ?>
                    <br>豆豆：<?php echo $row1['score'];?>颗<br>
        <?php    echo '<a href="http://www.xtumax.top/guanli/logout.php" data-ajax="false">注销</a>';
            }else{
                 echo "<p>游客</p>";
                 echo '<a href="http://www.xtumax.top/guanli/login.php" data-ajax="false">登陆</a>';
            }
         ?>
            
<?php       $sql = "select count(*) as total from user";
	        $result = mysql_query($sql);
	        $soj=mysql_fetch_object($result);
?>
            
        </div>
        <ul data-role="listview" data-theme="g">
            <li><a href="http://www.xtumax.top/index.php" data-ajax="false">首页</a></li>
            <li><a href="http://www.xtumax.top/zhidao/zhidao.php" data-ajax="false">湘大知道</a></li>
            <li><a href="http://www.xtumax.top/ziliao.php" data-ajax="false">湘大资料</a></li>
            <li><a href="http://www.xtumax.top/game/ceshi/index.html" data-ajax="false">游戏中心</a></li>
            <li><a href="http://www.xtumax.top/liuyan/liuyan.php" data-ajax="false">一日一留言</a></li>
            <li><a href="#" style="margin-top:20px;line-height:15px;font-size:10px;" data-ajax="false"> 注册用户</a><span  class="ui-li-count" ><?php echo $soj->total; ?>位</span></li>
     　</ul>
    </div><!-- /panel -->
  <!-- ------------------------------------------------------------------------------------------------/panel --> 








<!--------------------------------页脚开始----------------------------------->		 
<div data-role="footer" data-position="fixed"><h3>©湘潭大学MAX科技公司</h3></div>
<!--------------------------------页脚结束----------------------------------->	
        
</div>
    
    <!--------------------------------弹出框开始----------------------------------->
    <div data-role="page" id="aboutme">
        <div data-role="header"><h1>关于我们</h1></div>
        <div data-role="content"><p>MAX工作室是由max科技公司中一些成员组成，如果您有好的建议请联系我们(＾－＾)</p></div>
        <div data-role="footer"><h1>max工作室</h1></div>
        
    </div>
    <!--------------------------------弹出框结束----------------------------------->  
</body>
</html>