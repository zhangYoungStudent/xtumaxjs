<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.0/css/themes/default/jquery.mobile-1.4.0.min.css"> 
<script src="http://demos.jquerymobile.com/1.4.0/js/jquery.js"></script> 
<script src="http://demos.jquerymobile.com/1.4.0/js/jquery.mobile-1.4.0.min.js"></script>
<script src="max.js" type="text/javascript"></script>
<link href="max.css" rel="stylesheet" type="text/css"/>
</head>     
<body>
<div data-role="page" id="demo-page" data-ajax="false">    
  
  <div data-role="header"  data-fullscreen="true">
     <a href="#left-panel" data-icon="bars" data-iconpos="notext">Open left panel</a>      
     
     <a href="#aboutme" data-rel="dialog" data-role="button" data-icon="info" data-iconpos="notext" data-inline="true">信息按钮</a>    
  </div>


<script language = "JavaScript"> 
var onecount; 
onecount=0; 
subcat = new Array(); 
<? 
header('Content-Type: text/html; charset=UTF-8');
//类别选择 
//mysql_select_db($database_lr, $lr); 
$db = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
mysql_select_db(SAE_MYSQL_DB, $db);	
$sql = "select * from smallclass order by sort"; 
$result = mysql_query( $sql ); 
$count = 0; 
while($res = mysql_fetch_row($result)){ 
?> 
    subcat[<?=$count?>] = new Array("<?=$res[1]?>","<?=$res[4]?>","<?=$res[0]?>"); 
<? 
$count++; 
} 
?> 
           onecount=<?php echo '<p>'.$count.'</p>'; ?> 
//联动函数 
function changelocation(bigclassid) 
{ 
   document.myform.smallclassid.length = 0; 
   var bigclassid=bigclassid; 
   var i; 
   document.myform.smallclassid.options[0] = new Option('请选择二级分类',''); 
   for (i=0;i < onecount; i++) 
   { 
        if (subcat[i][1] == bigclassid) 
        { 
           document.myform.smallclassid.options[document.myform.smallclassid.length] = new Option(subcat[i][0], subcat[i][2]); 
        } 
   } 
} 
</script> 
<?php 
//mysql_select_db($database_lr, $lr); 
	
$sql2 = "select * from minclass order by sort"; 
$result2 = mysql_query( $sql2 ); 
$count2 = 0; 
?> 
<script language = "JavaScript"> 
//如果这个数组中含有双引号则不能使用。即二级和三级类不能含有双引号 
var onecount2; 
onecount2=0; 
subcat2 = new Array(); 
<?php 
$count2 = 0; 
while($res2 = mysql_fetch_row($result2)){ 
?> 
subcat2[<?php echo $count2?>] = new Array("<?php echo $res2[1]?>","<?php echo $res2[3]?>","<?php echo $res2[0]?>"); 
<?php 
$count2++; 
} 
?> 
onecount2=<?php echo $count2?>; 
function changelocation2(smallclassid) 
{ 
      document.myform.minclassid.length = 0; 
      var smallclassid=smallclassid; 
      var j; 
      document.myform.minclassid.options[0] = new Option('请选择三级分类',''); 
      for (j=0;j < onecount2; j++) 
      { 
          if (subcat2[j][1] == smallclassid) 
          { 
             document.myform.minclassid.options[document.myform.minclassid.length] = new Option(subcat2[j][0], subcat2[j][2]); 
          } 
      } 
} 
</script> 

    

    
<select name="bigclassid" onChange="changelocation(document.myform.bigclassid.options[document.myform.bigclassid.selectedIndex].value)" size="1"> 
<option selected value="">请指定一级分类</option> 
<? 
$sql = "select * from bigclass order by sort"; 
$result = mysql_query( $sql ); 
while($res = mysql_fetch_row($result)){ 
?> 
<option value="<? echo $res[0]; ?>"><? echo $res[1]?></option> 
<? } ?> 
</select> 

<select name="smallclassid" onChange="changelocation2(document.myform.smallclassid.options[document.myform.smallclassid.selectedIndex].value)" size="1"> 
<option selected value="">请指定二级分类</option> 
</select> 

<select name="minclassid" size="1"> 
<option selected value="">==所有三级分类==</option> 
</select> 

    
    
    
</div>
</body>
</html>   