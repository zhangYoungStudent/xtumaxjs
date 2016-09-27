<?php

require("../dbconnect.php");

/*/------------用户回答问题--------------------------------------------------------------------------------*/
$problem2=$_GET[problem2];//用户回答的问题

$id2=$_GET[id2];

$answer=$_POST[answer];



//------------用户回答问题--------------------------------------------------------------------------------



function magic($str)
 {
	 
	 $str=trim($str);
	 if(!get_magic_quotes_gpc())
	 {
		 $str=addslashes($str);
		 
	 }
	 return htmlspecialchars($str);
 }

?>
<?php require("../header.php");?>
<title>信息提交页面</title>   
</head>
<body onload="timedMsg()">
<div data-role="page">
<div data-role="header">
<h2>MAX工作室</h2>
</div>
<?php
$sql2="select * from answer where problem_id='".$id2."'";

$result=mysql_query($sql2);

$rown=mysql_num_rows($result);

if($rown==1){
  $row= mysql_fetch_array($result);

  $z=$row['lei']+1;

  $sql4="update answer set answer".$z."='".$answer."',lei ='".$z."' where problem_id ='".$id2."'"; 
  
  $isok4=mysql_query($sql4);
  $isok41=mysql_query($sql41);
    
  if($isok4){
         echo "<p>您的信息已经提交成功</p>";
        }else{
         echo "<p>很抱歉，您的信息提交失败，请重新提交，或者联系max管理员</p>";
        }  
    
      if($z ==10){
           echo "对于这个问题，我们已经得到了足够的答案,感谢您的帮助";
           $sql5='update zhidaotiwen set zhi=0  where  id='.$id2;
           $isok5=mysql_query($sql5);
           if($isok5)
           {
              echo "<p>您的信息已经提交成功</p>";
           }else
           {
                echo "<p>很抱歉，您的信息提交失败，请联系max管理员</p>";
           }
       } 
      
}else{

  $sql3="insert into answer (problem_id,problem,lei,answer1) values('$id2','$problem2','1','$answer')";
  $isok3=mysql_query($sql3); 
    if($isok3)
    {
    echo "<p>您的信息已经提交成功</p>";
    }else
    {
    echo "<p>很抱歉，您的信息提交失败，请重新提交，或者联系max管理员</p>";
    }
}
    
    
    
    
    ?>
<div data-role="content">
    

    
</div>
    <?php require("../footer.php");?>