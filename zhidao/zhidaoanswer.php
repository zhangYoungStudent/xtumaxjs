<?php
require("../dbconnect.php");

require("../header.php");

$problem=$_GET[problem];
$id=$_GET[id];
/*if(isset($_GET['id']) == TRUE) {
    if( is_numeric($_GET['id']) == FALSE) {
    $error = 1;
    }
    if($error ==1){
        header("Location:http://www.xtumax.top/zhidao.php ");
    }
    else {
     $id=$_GET['id'];//问题的id 但问题本身并没有传过来
    }
}*/

echo $id.$problem;


?>
<title>回答问题</title>
<?php require("../header2.php");?>
<h2>回答问题</h2>
</div>

<div data-role="content">
       
      <h3><?php echo $problem; ?></h3>
      <form id="form" data-ajax="false" onsubmit="return myFunction();" <?php echo 'action="zhidaoanswer2.php?id2='.$id.'&problem2='.$problem.'"' ;?>method="post">
      <textarea name="answer" id="answer" ></textarea><p id="tishi"></p>
      <input data-ajax="false"  type="submit"  value="提交" data-inline="true" data-mini="true"/>
      </form>
 
       
<script>
function myFunction()
{
     try
     { 
        var x=document.getElementById("answer").value.length;
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
</script>    
     
</div>
<?php require("../footer.php");?>