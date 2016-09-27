<?php 
require("../dbconnect.php");

require("../header.php");
       
?>
 
<title>一日一留言</title>
<?php require("../header2.php");?>
<h2>一日一留言</h2>
</div>

  <div data-role="content" id="pageone">
      <p><b>飞都飞了十万八千里了，不写个俺老孙到此一游！</b></p>
    <a href="#" id="ti" data-role="button" data-inline="true" data-mini="true">到此一游</a>
	<form id="form" data-ajax="false"  onsubmit="return myFunction();" action="liuyanresult.php?" method="post"    style="display:none;">
        <textarea name="content" id="tiwen" ></textarea><p id="tishi"></p>
        <input data-ajax="false"  type="submit"  value="俺老孙去也" data-inline="true" data-mini="true"/>
    </form>	
<?php 

$perpagenum = 10;//定义每页显示几条    
$total1 = mysql_fetch_array(mysql_query("select count(*) from liuyan where zhi=0"));//查询数据库中一共有多少条数据    
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

     $sql = "select * from liuyan where zhi=0 order by id limit $startnum,$perpagenum";//查询出所需要的条数
     $rs= mysql_query($sql);
     $num= mysql_num_rows($rs);
     if($num ==0){echo "<p>对不起没有猴子逃得过如来佛祖的手掌心！</p>";}
     echo "<br>留言列表<br><hr>";
     while($row= mysql_fetch_array($rs)){
         
		 echo "<ul data-role='listview' data-inset='true'>";
         echo '<li><p style="overflow:hidden;">'.$row["content"].'</p><p style="font-size:10px;">'.date("m d",strtotime($row["time"])).$row["author"].'</p></li>';
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
<script>
function myFunction()
{
     try
     { 
        var x=document.getElementById("tiwen").value.length;
        if(x=="")    throw "值为空";
        if(x>100)     throw "字数不能超过100个字";
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

  $("#ti").click(function(){
  $("#form").toggle(800);
  });  
});     
</script>
<?php require("../footer.php");?>