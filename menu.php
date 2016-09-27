<?php

$token = "lfFniqSuZtvJxc-A6eMURuZLbvxsHgxN8dm8CS8ynlQ-W-XIkXjTP4jWg6NfyeAQzwq5Bk0or6yb5RT6KsiYZOFvPjQWxZj9Ekto8supAwrV4WDkquq_GUHaefvG6Ej4KBHaAGAXOU";

$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=$token";

$data = '{"button":[
      {
           "name":"今日湘大",
           "sub_button":[
            {
               "type":"view",
               "name":"旧书店",
               "url":"http://www.xtumax.top/shudian/shu.php"
            },
			{
               "type":"view",
               "name":"湘大知道",
               "url":"http://www.xtumax.top/zhidao/zhidao.php"
            },
			{
               "type":"view",
               "name":"湘大资料",
               "url":"http://www.xtumax.top/ziliao.php"
            },
			{
               "type":"view",
               "name":"文章中心",
               "url":"http://www.xtumax.top/notice.php"
            }]
       },
       {
           "name":"志同道合",
           "sub_button":[
           {	
               "type":"view",
               "name":"湘大十佳",
               "url":"http://www.xtumax.top/notice.php"
            },
           
            {
               "type":"view",
               "name":"发布活动",
               "url":"http://www.xtumax.top/fabu.php"
            },
            {
               "type":"view",
               "name":"活动中心",
               "url":"http://www.xtumax.top/huodong/fabucenter.php"
            }]
       },
      {
           "name":"关于我们",
           "sub_button":[
			{
               "type":"view",
               "name":"游戏中心",
               "url":"http://www.xtumax.top/game/ceshi/index.html"
            },
            {
               "type":"view",
               "name":"微官网",
               "url":"http://www.xtumax.top/notice.php"
            },
            {
               "type":"view",
               "name":"创意征集",
               "url":"http://www.xtuax.top/notice.php"
            }]
       }
       
       ]}';
curl($url,$data);

function curl($url,$data) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
//curl_setopt($ch, CURLOPT_HEADER, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
echo $output = curl_exec($ch);
curl_close($ch);
}
?>