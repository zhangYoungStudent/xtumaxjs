<?php
//include "chengji.php";
define("TOKEN", "weixin");
$wechatObj = new wechatCallbackapiTest();
if (!isset($_GET['echostr'])) {
    $wechatObj->responseMsg();
}else{
    $wechatObj->valid();
}

class wechatCallbackapiTest
{
    public $fromUsername='';
    public $toUsername='';
public function valid()
    {
        $echoStr = $_GET["echostr"];
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }

    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);

        if($tmpStr == $signature){
            return true;
        }else{
            return false;
        }
    }

    public function responseMsg()
    {
            $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
                    $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                    $fromUsername = $postObj->FromUserName;
                    $toUsername = $postObj->ToUserName;
                    $type = $postObj->MsgType;
                    $event=$postObj->Event;
                    $Event_Key=$postObj->EventKey;
                    $mid=$postObj->MediaId;
                    $link=$postObj->Url;
                        
                    $latitude  = $postObj->Location_X;
                    $longitude = $postObj->Location_Y;
                    $keyword = trim($postObj->Content);
                    $Recognition =$postObj->Recognition;

                    $time = time();
                
        
        
                    $textTpl = "<xml>
                                   <ToUserName><![CDATA[%s]]></ToUserName>
                                   <FromUserName><![CDATA[%s]]></FromUserName>
                                   <CreateTime>%s</CreateTime>
                                   <MsgType><![CDATA[text]]></MsgType>
                                   <Content><![CDATA[%s]]></Content>
                             </xml>";
           
        
        
        
        
        
        
        
        
        

            switch ($type) 
            {
                case 'event' :
                   $event = $postObj->Event;
				   $fromUsername=$this->fromUsername;
				   $toUsername=$this->toUsername;
                   if($event="subscribe"){$replyMsg = "欢迎关注‘湘大同志’";}elseif($event="unsubscribe"){$replyMsg = "再见！朋友！";}
                        $id="fd810065f45d4cfdd49c3f7485436d5d";
                        $url="http://www.tuling123.com/openapi/api?key=$id&info=$replyMsg";
                        $res=file_get_contents($url);
                        $res=json_decode($res,true);
                        $contentStr=$res['text'];
                  $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $contentStr);                            
                  echo $resultStr;
                break;
                
                
                case 'text' :
                   $keyword = trim($postObj->Content);
				   $this->fromUsername = $postObj->FromUserName;
				   $this->toUsername = $postObj->ToUserName;        
				   $ptime = $postObj->CreateTime;
		           $type = $postObj->MsgType;
		           $content = $postObj->Content;
		           $id = $postObj->MsgId;
                   
                    
                
                
                  $db = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
                  mysql_select_db(SAE_MYSQL_DB, $db);
                  $sql = "insert into lamp_weixin(to_user,from_user,ptime,content) values('$to_user','$from_user','$ptime','$content')";
                  mysql_query($sql);
                   /*try
                   {
		    
			              $dsn = "mysql:host=SAE_MYSQL_HOST_M;dbname=SAE_MYSQL_DB";
		
			              $pdo = new PDO($dsn,"SAE_MYSQL_USER","SAE_MYSQL_PASS",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));//创建一个pdo对象
			    
			              $pdo->query("set names utf8");
			
			              $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
			
			              $pdo->exec("delete from lamp_weixin");
			
			              $sql = "insert into lamp_weixin(to_user,from_user,ptime,content) values('$to_user','$from_user','$ptime','$content')";
		
			              $pdo->exec($sql);
			
		            }catch(PDOException $e)
                    {  
                       $exit=$e->getMessage();  
                    }*/
                
                    if($keyword!='')        //if(preg_match("/^20\d{8}\+\s{6}$/",$keyword,$arr) )
                    {
                        //$username=$arr[1];
                        //$password= $arr[2]; 
                        //$username=2012701217;
                        //$password= llllll;
                        
                        //$contentStr=auth();
   
                        //}                
                        //else
                        //{
                                             
                        $id="fd810065f45d4cfdd49c3f7485436d5d";
                        $url="http://www.tuling123.com/openapi/api?key=$id&info=$keyword";
                        $res=file_get_contents($url);
                        $res=json_decode($res,true);
                        $contentStr=$res['text'];
                    }
                   
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, "✍:".$contentStr.$exit);                            
                    echo $resultStr;
                break;
                
                
 
                
                case 'voice' :
                       $contentStr1 = "✎：".$Recognition."\r\n✍：";
                                         
                       $id="fd810065f45d4cfdd49c3f7485436d5d";
                       $url="http://www.tuling123.com/openapi/api?key=$id&info=$Recognition";
                       $res=file_get_contents($url);
                       $res=json_decode($res,true);
                       $contentStr=$res['text'];
                       $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $contentStr1.$contentStr);                            
                       echo $resultStr;            

                break;
                
                
                
                default:
        
            }/*switch ($type)*/
        
        
        
        
        /*插入数据*/
        if(!empty($postStr)){
	
		$xmlobj = simplexml_load_string($postData,'SimpleXMLElement',LIBXML_NOCDATA);
		
		$to_user = $xmlobj->ToUserName;
		$from_user = $xmlobj->FromUserName;
		$ptime = $xmlobj->CreateTime;
		$type = $xmlobj->MsgType;
		$content = $xmlobj->Content;
		$id = $xmlobj->MsgId;
		
		
		
            
            
		    try{
		    
			   $dsn = "mysql:dbname=lamp_weixin;host=SAE_MYSQL_HOST_M";
		
			   $pdo = new PDO($dsn,SAE_MYSQL_USER,SAE_MYSQL_PASS,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));//创建一个pdo对象
			   
			   $pdo->query("set names utf8");
			
			   $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
			
			   $pdo->exec("delete from lamp_weixin");
			
			   $sql = "insert into lamp_weixin(to_user,from_user,ptime,content) values('$to_user','$from_user','$ptime','$content')";
		
			   $pdo->exec($sql);
			
		    }catch(PDOException $e){  exit($e->getMessage());  }		
	     }//插入数据结束
        
        
        
        }/*public function responseMsg() */ 
        
        
        
           
              
    
}
?>