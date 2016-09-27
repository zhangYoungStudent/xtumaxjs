<?php  
  require("../dbconnect.php");
  require("../header.php");
//require_once 'sae.php';
  
?>
<title>管理员操作界面</title>
</head>
<body>

<div data-role="content" id="pageone">   
    <?php /*
             $s = new SaeStorage();
             if ($_FILES["file"]["error"] > 0){
                         echo "Error: " . $_FILES["file"]["error"] . "<br />";
                }else{
                        if( $s->upload( "xtumaxkj" , "test.jpg" , $_FILES["file"]["tmp_name"]) )
                        { //4wp是sae里面的bucket,test.jpg是最后保存的文件名
                               echo "上传成功";
                        }else
                        {
                                echo "上传失败";
                        }
                     }
?>
<?php 


	// 创建SAE storage存储
	$storage= new SaeStorage();// 创建SAE storage存储对象

    // 把$_FILES全局变量中的缓存文件上传到test这个Bucket，设置此Object名为1.txt
    $storage->putObjectFile($_FILES['uploaded']['tmp_name'], "xtumaxkj", "1111.png");

	$domain = 'xtumaxkj';// 这里的$domain对应得名字就是自己起的名字
	

	$fileType = $_FILES["tupian"]["type"]; //被上传文件的类型

	if(($fileType=="image/gif") || ($fileType=="image/jpeg")||($fileType=="image/jpg")||($fileType=="image/png")){
	
	        if($storage->fileExists($domain,$filename) == true) {// 判断文件是否已经存在
                  echo "<p style='background:#FCC9C4;border-radius: 0.3em;padding:5px;color:#fff;''>图片已存在,请重新上传!</p>";
            }
	        else{
		
	              $filename = $_FILES["file"]["name"];
	              $storage->upload( $domain,$filename,$_FILES[file][tmp_name]); 

                  echo "<p style='background:#7CBD55;border-radius: 0.3em;padding:5px;color:#fff;'>图片上传成功！</p>";
                  echo "<script> window.location='showImage.php';</script>";           
            }
    }else{
    	echo "<p style='background:#FCC9C4;border-radius: 0.3em;padding:5px;color:#fff;''>图片格数不正确,上传失败！</p>";
    }


?>
    
<?php*/
$name=$_POST['name'];    
$tel=$_POST['tel']; 
$description=$_POST['description'];
$url="http://xtumaxkj-xtumaxkj.stor.sinaapp.com/".$_FILES['myfile']['name'];
echo $name.$url;
$s2 = new SaeStorage();  
$name =$_FILES['myfile']['name'];    
$s2->upload('xtumaxkj',$name,$_FILES['myfile']['tmp_name']);//把用户传到SAE的文件转存到名为test的storage  ,$_FILES["file"]["tmp_name"] - 存储在服务器的文件的临时副本的名称
// echo $s2->getUrl("test",$name);//输出文件在storage的访问路径  
echo '<br/>';  
echo $s2->errmsg(); //输出storage的返回信息   
    
    
  $sql="insert into shudian(name,url,tel,description,time) values('$name', '$url','$tel','$description',NOW())"; //将用户信息插入数据库
  $result = mysql_query($sql);
  if(!empty($result))
  {?>
      <script language='javascript'>
			 window.location.href="guanli.php"; 
		     alert("上传成功！");
	  </script>
<?php  }else{?>
  <script language='javascript'>
			 window.location.href="guanli.php";
		     alert("上传失败！");
	  </script>
  
 <?php 
  }
    
?>    
    
  
    
</div>
</body>
</html>
