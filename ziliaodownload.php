<?php
require("dbconnect.php");

require("header.php");

/*if(isset($_GET['id']) == TRUE) {
    if( is_numeric($_GET['id']) == FLASE) {
    $error = 1;
    }
    if($error ==1){
        header("Location:http://www.xtumax.top/ziliao.php");
    }
    else {
     $id=$_GET['id'];
    }
}
else {
   $id=0;
}*/

$id=$_GET['id'];
//$id=1;

$sql = "select * from course where cata_two_id ='".$id."'";//专业

?>
<meta name="keywords" content="湘大资料下载" />
<title>湘大资料下载</title>
<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101287161" data-redirecturi="http://www.xtumax.top/index.php" charset="utf-8"></script>
<?php require("header2.php");?>
<h1>湘大资料下载</h1>
  <div data-role="navbar">
      <ul>
        <li><a href="#" class="ui-btn-active">资料分类</a></li>
        <li><a href="#" >排行榜</a></li>
      </ul>
  </div>
</div>

  <div class="ui-grid-b le">
  <div class="ui-block-a ui-btn-active le2"><a href='<?php echo $SCRIPT_NAME."?id=1";?>'><span>本学位</span></a></div>
    <div class="ui-block-c le2"><a href='<?php echo $SCRIPT_NAME."?id=2";?>'><span>双学位</span></a></div>
    <div class="ui-block-c le2"><a href='<?php echo $SCRIPT_NAME."?id=3";?>'><span>公共课程</span></a></div>
    <div class="ui-block-a le2"><a href='ziliaodownload.php?id=1'><span>考研就业</span></a></div>
    <div class="ui-block-b le2"><a href='ziliaodownload.php?id=2'><span>公务员考试</span></a></div>  
   </div>
    

    <!----------------页面内容开始------------------------------------->
  <div data-role="content" id="one">
    
<?php   

      $result= mysql_query($sql);

      $row = mysql_fetch_assoc($result);

      $numrows= mysql_num_rows($result);

      if($numrows ==0){echo "<p>此目录下暂时没有信息，欢迎您进行相关的反馈！</p>";}


     for($i=0;$i<$numrows;$i++){
        
         echo '<ul data-role="listview" data-inset="true">';
   
         
         echo '<li><a href="#">';
         echo '<h2>'.$row[$i][name].'</h2>';
         echo '<p>' .date("m d",strtotime($row[time])). '提取密码：'.$row[password].'</p>';
         echo '</a>';
         echo '<a href="';
         if(isset($_SESSION['username'])==TRUE){
           echo $row[url];
         }else{
             header("Location:http://www.xtumax.top/guanli/login.php?ref=download&id=".$row[id]);   
         }
         echo '" data-icon="arrow-d">Some Text</a>';
         echo '</li>';
         echo '</ul>';
     }


?>      
             
 </div>   

<?php require("footer.php");?>