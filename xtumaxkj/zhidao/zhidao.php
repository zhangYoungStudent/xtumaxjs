<?php 
require("../dbconnect.php");

require("../header.php");
       
?>
 
<title>湘大知道</title>
<meta name="keywords" content="湘大知道" />

<?php require("../header2.php");?>
  <h2>湘大知道</h2>
    <div data-role="navbar">
      <ul>
        <li><a href="#" class="ui-btn-active" id="hide" >向MAX提问</a></li>
        <li><a href="#" id="show">帮MAX回答</a></li>
      </ul>
    </div> 
  </div>
<!-----------------------------------------------------------------------------------------------------------第一页向max提问---------------------------->  
  <div data-role="content" id="pageone">
    <p>本页面是用于读者向max提出问题的，读者如需查询答案或者其他信息，请直接在服务号聊天窗口输入！</p>
    <a href="#" id="ti" data-role="button" data-inline="true" data-mini="true">提问</a>
    <a style="float:right;"target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=755201244&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:755201244:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
	<form id="form" data-ajax="false"  onsubmit="return myFunction();" action="result.php" method="post"    style="display:none;">
        <textarea name="problem" id="tiwen" ></textarea><p id="tishi"></p>
        <input data-ajax="false"  type="submit"  value="提交" data-inline="true" data-mini="true"/>
    </form>

	
<?php 

$perpagenum = 10;//定义每页显示几条    
$total1 = mysql_fetch_array(mysql_query("select count(*) from zhidaotiwen where zhi=1"));//查询数据库中一共有多少条数据    
$Total1 = $total1[0];                          //    
$Totalpage1 = ceil($Total1/$perpagenum);//上舍，取整    
if(!isset($_GET['page'])||!intval($_GET['page'])||$_GET['page']>$Totalpage1)//page可能的四种状态   
{    
    $page=1;    
}    
else    
{    
    $page=$_GET['page'];//如果不满足以上四种情况，则page的值为$_GET['page']    
}    
$startnum  = ($page-1)*$perpagenum;//开始条数    

     $sql = "select * from zhidaotiwen where zhi=1 order by id limit $startnum,$perpagenum";//查询出所需要的条数
     $rs= mysql_query($sql);
     $num= mysql_num_rows($rs);
     if($num ==0){echo "<p>对不起读者向max提出的问题都被解答光了！</p>";}
     while($row= mysql_fetch_array($rs)){
		 echo "<ul data-role='listview' data-inset='true'>";
		 echo '<li>'.date("m d",strtotime($row["time"])).'&nbsp;&nbsp;&nbsp;'.$row["problem"].'</li>';
		 echo "</ul>";
	 }
     //显示分页符
       $per = $page - 1;//上一页    
       $next = $page + 1;//下一页    
       echo "<center>共有".$Total."条记录,每页".$perpagenum."条,共".$Totalpage."页 ";    
       if($page != 1)    
       {    
        echo "<a href='".$_SERVER['PHP_SELF']."'>第一页</a>";    
        echo "<a href='".$_SERVER['PHP_SELF'].'?page='.$per."'> 上一页</a>";    
        }    
       if($page != $Totalpage)    
       {    
        echo "<a href='".$_SERVER['PHP_SELF'].'?page='.$next."'> 下一页</a>";    
        echo "<a href='".$_SERVER['PHP_SELF'].'?page='.$Totalpage."'> 尾页</a></center>";    
       }    
       
?>        
                     
         
</div>
<!----------------------------------------------------------------------------------------------------------------------------提问页面结束----------------->  

<!-------------------------------------------第二页回答页面开始--------------------------------------------------------------------------------------------->
<div data-role="content" id="pagetwo" style="display:none;">    
<?php

$perpagenum = 10;//定义每页显示几条    
$total1 = mysql_fetch_array(mysql_query("select count(*) from zhidaotiwen where zhi=2"));//查询数据库中一共有多少条数据    
$Total1 = $total1[0];                          //    
$Totalpage1 = ceil($Total1/$perpagenum);//上舍，取整    
if(!isset($_GET['page'])||!intval($_GET['page'])||$_GET['page']>$Totalpage1)//page可能的四种状态   
{    
    $page=1;    
}    
else    
{    
    $page=$_GET['page'];//如果不满足以上四种情况，则page的值为$_GET['page']    
}    
$startnum  = ($page-1)*$perpagenum;//开始条数    

$sql2 = "select * from zhidaotiwen where zhi=2 order by id limit $startnum,$perpagenum";//查询出所需要的条数    

     $re= mysql_query($sql2);
     $numrows= mysql_num_rows($re);
     if($numrows ==0){echo "<p>max暂时还没有问题需要您的解答，感谢您的好意！</p>";}
     echo '<ul data-role="listview"  data-inset="true" >';
           while($row= mysql_fetch_array($re))
           {
            echo '<li data-icon="edit" data-iconpos="left"><a href="zhidaoanswer.php?id='.$row['id'].'&problem='.$row["problem"].'">'.$row["problem"].'</a></li>';         
	       }
     echo '</ul>';

     //显示分页符

       $per = $page - 1;//上一页    
       $next = $page + 1;//下一页    
       echo "<center>共有".$Total1."条记录,每页".$perpagenum."条,共".$Totalpage1."页 ";    
       if($page != 1)    
       {    
        echo "<a href='".$_SERVER['PHP_SELF']."'>首页</a>";    
        echo "<a href='".$_SERVER['PHP_SELF'].'?page='.$per."'> 上一页</a>";    
        }    
       if($page != $Totalpage)    
       {    
        echo "<a href='".$_SERVER['PHP_SELF'].'?page='.$next."'> 下一页</a>";    
        echo "<a href='".$_SERVER['PHP_SELF'].'?page='.$Totalpage."'> 尾页</a></center>";    
       }    
?> 	 
</div>
<!---------------------------------------------------------------------第二页回答页面结束------------------------------------>
<script>
function myFunction()
{
     try
     { 
        var x=document.getElementById("tiwen").value.length;
        if(x=="")    throw "值为空";
        if(x>50)     throw "字数不能超过50个字";
        if(x<5)      throw "字数必须够5个字";
         //var z=document.getElementById("tiwen").value;
         //for(i=0;i<z.length;i++){if(z.charCodeAt(i)<=128) throw "请检查您输入的字符是否都是汉字"} 
      }
     catch(err)
     {
        var y=document.getElementById("tishi");
        y.innerHTML="错误提示：" + err + "。";
        return false;
      }  
}
    
$(document).ready(function(){
  $("#hide").click(function(){
  $("#pageone").show();
  $("#pagetwo").hide();
  });
  $("#show").click(function(){
  $("#pagetwo").show();
  $("#pageone").hide();
  });
  $("#ti").click(function(){
  $("#form").toggle(800);
  });  
});      
</script>
<?php require("../footer.php");?>