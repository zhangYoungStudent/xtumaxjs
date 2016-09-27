<?php 
require("dbconnect.php");

require("header.php");


if(isset($_GET['id']) == TRUE) {
    if( is_numeric($_GET['id']) == FALSE) {
    $error = 1;
    }
    if($error ==1){
        header("Location:http://www.xtumax.top/ziliao.php ");
    }
    else {
     $id=$_GET['id'];
    }
}
else {
   $id=1;
}

$sql= "select * from cata_one where class_id='".$id."'";

$result= mysql_query($sql);

$sql2="select * from cata_two where cata_one_id=1";

$result2= mysql_query($sql2);

//$row2= mysql_fetch_array($result2);

?>


<title>湘大资料下载</title>
<meta name="keywords" content="湘大资料下载" />

<?php require("header2.php");?> 
 <h2>湘大资料下载</h2>

  <div data-role="navbar">
      <ul>
        <li><a href="#" class="ui-btn-active">资料分类</a></li>
        <li><a href="#" >排行榜</a></li>
      </ul>
  </div>
 </div> 
  <div class="ui-grid-b le" >
  <div class="ui-block-a ui-btn-active le2" onclick="changeBgColor();"><a href='<?php echo $SCRIPT_NAME."?id=1";?>'><span>本学位</span></a></div>
    <div class="ui-block-c le2" ><a href='<?php echo $SCRIPT_NAME."?id=2";?>'><span>双学位</span></a></div>
    <div class="ui-block-c le2" ><a href='<?php echo $SCRIPT_NAME."?id=3";?>'><span>公共课程</span></a></div>
    <div class="ui-block-a le2" ><a href='ziliaodownload.php?id=1'><span>考研就业</span></a></div>
    <div class="ui-block-b le2" ><a href='ziliaodownload.php?id=2'><span>公务员考试</span></a></div>  
   </div>
    

    <!----------------页面内容开始------------------------------------->
  <div data-role="content" id="one">
    
<?php
//$row= mysql_fetch_array($result);



echo $row2[0];
echo '<table class="table">';            
    while($row= mysql_fetch_array($result)){

        echo '<h4 class="h4">'.$row[2].'</h4>';
        while($row2= mysql_fetch_array($result2)){//'".$i."'
           echo "<tr>";
           echo  '<td class="tdleft">'.$row2[2].'</td>';   
           echo "</tr>";
        }
        //for($j=0;$j<4;$j++){echo $row[0][$j];}
        /*
          
          $result2= mysql_query($sql2); 
        
          $rownums= mysql_num_rows($result2);

          while($row1= mysql_fetch_array($result2)){

               echo "<tr>";
              
               echo  '<td class="tdleft">'.$row1["name"].'</td>';
              
               echo  "</tr>"; 
          }*/    
     }
echo '</table>';

?>
   <h4 class="h4">本学位</h4>   
   <table class="table">
       <tr>
           <td class="tdleft">物理学院</td>
          <td class="tdright">材料学院</td>
       </tr>  
     <tr>
         <td class="tdleft">兴湘学院</td>
         <td class="tdright">人文社科</td>  
     </tr>
       <tr>
         <td class="tdleft">兴湘学院</td>
         <td class="tdright">人文社科</td>  
     </tr>
       <tr>
         <td class="tdleft">兴湘学院</td>
         <td class="tdright">人文社科</td>  
     </tr>
   </table>
    
 

</div>
<script>

function changeBgColor(){    
    $("div.le2").css('background-color','#BFEFFF');
}            
</script>

<?php require("footer.php");?>