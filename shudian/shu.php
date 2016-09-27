<?php 
require("../dbconnect.php");

require("../header.php");

?>

<title>旧书店</title>
<script type="text/javascript" src="js/pagination.js"></script>
<script src="js/huaping.js" type="text/javascript"language="javascript"></script>
<link href="css/gwk_touch.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">
	
	var euid = getQueryString("e"); 
	
	function clickLogMn(pid, mid, href, kw, type, content) {
		if (typeof (pid) == "undefined") {
			pid = '-1';
		}
		if (typeof (mid) == "undefined") {
			mid = '-1';
		}
		if (typeof (type) == "undefined") {
			type = 'undefined';
		}
		kw = encodeURIComponent(kw);
		content = encodeURIComponent(content);
		var gt = pid + '_' + mid + '_' + type + '_' + kw + '_' + content + '_'+ '' + '_' + 'gwk106';
		document.getElementById("clickLog").src = '../../www.gouwuke.com/gwkClickMonitor.do@gt=' + gt;
		var _euid = escape(euid);
		var gwkTag = pid + '}_{' + mid + '}_{' + type + '}_{' + kw + '}_{' + _euid;
		window.open('../../www.gouwuke.com/gwkTagMonitor.do@gt=' + gwkTag+ '&href=' + href);
		return false;
	}
		
	/*
	 * 获取参数
	 */
	function getQueryString(name){
		// 如果链接没有参数，或者链接中不存在我们要获取的参数，直接返回空
		if(location.href.indexOf("?")==-1 || location.href.indexOf(name+'=')==-1){
			return '';
		}
		
		// 获取链接中参数部分
		var queryString = location.href.substring(location.href.indexOf("?")+1);
		 
		// 分离参数对 ?key=value&key2=value2
		var parameters = queryString.split("&");
		 
		var pos, paraName, paraValue;
		for(var i=0; i<parameters.length; i++){
		// 获取等号位置
		
		pos = parameters[i].indexOf('=');
		if(pos == -1) { 
			continue; 
			}
		// 获取name 和 value
		paraName = parameters[i].substring(0, pos);
		paraValue = parameters[i].substring(pos + 1);
		
		// 如果查询的name等于当前name，就返回当前值，同时，将链接中的+号还原成空格
		
		if(paraName == name){
			return unescape(paraValue.replace(/\+/g, " "));
			}
		}
		return '';
	}
	
	/*
	 * 检查输入关键词
	 */
	function checkKeyWord(){
		var keyword = $("#KeyWord").val();
		if(keyword==null||keyword=="中国购物搜索导航第一站"||keyword==""){
		    return false;
		}
		return true;
	}
	</script>
	<img height="0" width="0" id="clickLog" border="0" name="clickLog"/>
<?php require("../header2.php");?>
<h2>旧书店</h2>
</div>
<!--定义顶部锚点-->
	<a name="top"></a>
	<div id="content">
		<div class="scroll">
			<div class="slide_01" id="slide_01">
				<div>
					<div>
						
							<div class="mod_01">
								<a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=6&c=6433&v=45415&i=18903&t=http_3A_2F_2Fm.paixie.net','','mobilewap','')"href="javascript:void(0)"><img src="http://image.gouwuke.com/images/waplunbo/24/12/52/1394691966006.jpg"alt="拍鞋网移动CPS"> </a>
							</div>
						
							<div class="mod_01">
								<a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=5&c=6559&v=696&i=21842&t=http_3A_2F_2Fm.mbaobao.com_2Fa-dudu1990228.html ','','mobilewap','')"href="javascript:void(0)"><img src="http://image.gouwuke.com/images/waplunbo/24/45/51/1394698452747.jpg"alt="麦包包移动CPS"> </a>
							</div>
						
							<div class="mod_01">
								<a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=45&c=17466&v=121252&i=40349&t=http_3A_2F_2Fm.meijing.com_2Ftemai.html ','','mobilewap','')"href="javascript:void(0)"><img src="http://image.gouwuke.com/images/waplunbo/24/58/6/1394618943291.jpg"alt="美睛网移动CPS"> </a>
							</div>
						
							<div class="mod_01">
								<a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=4&c=6953&v=82329&i=25802&t=http_3A_2F_2Fm.yougou.com','','mobilewap','')"href="javascript:void(0)"><img src="http://image.gouwuke.com/images/waplunbo/24/7/7/1394011638016.jpg"alt="优购移动CPS"> </a>
							</div>
						
							<div class="mod_01">
								<a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=20&c=6470&v=26008&i=19982&t=http_3A_2F_2Fm.s.cn','','mobilewap','')"href="javascript:void(0)"><img src="http://image.gouwuke.com/images/waplunbo/24/26/58/1394693348899.jpg"alt="名鞋库移动CPS"> </a>
							</div>
						
					</div>
				</div>
			</div>
			<div class="dotModule_new">
				<div id="slide_01_dot"></div>
			</div>
		</div>
	<script type="text/javascript">
	if (document.getElementById("slide_01")) {
		var slide_01 = new ScrollPic();
		slide_01.scrollContId = "slide_01"; //内容容器ID
		slide_01.dotListId = "slide_01_dot";//点列表ID
		slide_01.dotOnClassName = "selected";
		slide_01.arrLeftId = "sl_left"; //左箭头ID
		slide_01.arrRightId = "sl_right";//右箭头ID
		slide_01.frameWidth = 320;
		slide_01.pageWidth = 320;
		slide_01.upright = false;
		slide_01.speed = 5;
		slide_01.space = 30;
		slide_01.initialize(); //初始化
	}
	</script>
		
		<div class="row_con">
			<h2>书架展示</h2>
			
				<dl class="list">
					<dt>
						<a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=40&c=6953&v=82329&i=25802&t=http_3A_2F_2Fm.yougou.com_2Findex.php_2Fgoods_2Fgoodsdetail_2Fproductid_2F99942116_2Factiveid_2F9e469f61865d4fa5a671d1b528eef2fe','','mobilewap','新百伦新款中性复古鞋')"href="javascript:void(0)"><img src="http://image.gouwuke.com/images/wapgood/24/44/12/1394011605310.jpg"	alt="新百伦新款中性复古鞋" /> </a>
					</dt>
					<dd>
						<p>		
							<a  href="javascript:void(0)"  onclick="clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=40&c=6953&v=82329&i=25802&t=http_3A_2F_2Fm.yougou.com_2Findex.php_2Fgoods_2Fgoodsdetail_2Fproductid_2F99942116_2Factiveid_2F9e469f61865d4fa5a671d1b528eef2fe','','mobilewap','新百伦新款中性复古鞋')"  > 新百伦新款中性复古鞋</a>
						</p>
						<span>¥593.00 </span>
						<del>659.00</del>
						<br>
						<b> <a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=40&c=6953&v=82329&i=25802&t=http_3A_2F_2Fm.yougou.com_2Findex.php_2Fgoods_2Fgoodsdetail_2Fproductid_2F99942116_2Factiveid_2F9e469f61865d4fa5a671d1b528eef2fe','','mobilewap','新百伦新款中性复古鞋')"href="javascript:void(0)">优购网</a> </b>
						<a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=40&c=6953&v=82329&i=25802&t=http_3A_2F_2Fm.yougou.com_2Findex.php_2Fgoods_2Fgoodsdetail_2Fproductid_2F99942116_2Factiveid_2F9e469f61865d4fa5a671d1b528eef2fe','','mobilewap','')"href="javascript:void(0)" class="btn"> 联系该同学</a>
					</dd>
				</dl>
                <dl class="list">
					<dt>
						<a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=40&c=6953&v=82329&i=25802&t=http_3A_2F_2Fm.yougou.com_2Findex.php_2Fgoods_2Fgoodsdetail_2Fproductid_2F99942116_2Factiveid_2F9e469f61865d4fa5a671d1b528eef2fe','','mobilewap','新百伦新款中性复古鞋')"href="javascript:void(0)"><img src="http://image.gouwuke.com/images/wapgood/24/44/12/1394011605310.jpg"	alt="新百伦新款中性复古鞋" /> </a>
					</dt>
					<dd>
						<p>		
							<a  href="javascript:void(0)"  onclick="clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=40&c=6953&v=82329&i=25802&t=http_3A_2F_2Fm.yougou.com_2Findex.php_2Fgoods_2Fgoodsdetail_2Fproductid_2F99942116_2Factiveid_2F9e469f61865d4fa5a671d1b528eef2fe','','mobilewap','新百伦新款中性复古鞋')"  > 新百伦新款中性复古鞋</a>
						</p>
						<span>¥593.00 </span>
						<del>659.00</del>
						<br>
						<b> <a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=40&c=6953&v=82329&i=25802&t=http_3A_2F_2Fm.yougou.com_2Findex.php_2Fgoods_2Fgoodsdetail_2Fproductid_2F99942116_2Factiveid_2F9e469f61865d4fa5a671d1b528eef2fe','','mobilewap','新百伦新款中性复古鞋')"href="javascript:void(0)">优购网</a> </b>
						<a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=40&c=6953&v=82329&i=25802&t=http_3A_2F_2Fm.yougou.com_2Findex.php_2Fgoods_2Fgoodsdetail_2Fproductid_2F99942116_2Factiveid_2F9e469f61865d4fa5a671d1b528eef2fe','','mobilewap','')"href="javascript:void(0)" class="btn"> 联系该同学</a>
					</dd>
				</dl>
            <dl class="list">
					<dt>
						<a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=40&c=6953&v=82329&i=25802&t=http_3A_2F_2Fm.yougou.com_2Findex.php_2Fgoods_2Fgoodsdetail_2Fproductid_2F99942116_2Factiveid_2F9e469f61865d4fa5a671d1b528eef2fe','','mobilewap','新百伦新款中性复古鞋')"href="javascript:void(0)"><img src="http://image.gouwuke.com/images/wapgood/24/44/12/1394011605310.jpg"	alt="新百伦新款中性复古鞋" /> </a>
					</dt>
					<dd>
						<p>		
							<a  href="javascript:void(0)"  onclick="clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=40&c=6953&v=82329&i=25802&t=http_3A_2F_2Fm.yougou.com_2Findex.php_2Fgoods_2Fgoodsdetail_2Fproductid_2F99942116_2Factiveid_2F9e469f61865d4fa5a671d1b528eef2fe','','mobilewap','新百伦新款中性复古鞋')"  > 新百伦新款中性复古鞋</a>
						</p>
						<span>¥593.00 </span>
						<del>659.00</del>
						<br>
						<b> <a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=40&c=6953&v=82329&i=25802&t=http_3A_2F_2Fm.yougou.com_2Findex.php_2Fgoods_2Fgoodsdetail_2Fproductid_2F99942116_2Factiveid_2F9e469f61865d4fa5a671d1b528eef2fe','','mobilewap','新百伦新款中性复古鞋')"href="javascript:void(0)">优购网</a> </b>
						<a onclick="return clickLogMn('','','../../g.yiqifa.com/gc@w=660306&u=534&e=40&c=6953&v=82329&i=25802&t=http_3A_2F_2Fm.yougou.com_2Findex.php_2Fgoods_2Fgoodsdetail_2Fproductid_2F99942116_2Factiveid_2F9e469f61865d4fa5a671d1b528eef2fe','','mobilewap','')"href="javascript:void(0)" class="btn"> 联系该同学</a>
					</dd>
				</dl>
		</div>
		
		<div class="go_top"><a href="#top" class="top">返回顶部</a></div>
</div>
</div>
<?php require("../footer.php"); ?>
	<script type="text/javascript">
		var iframe = '';
		var referer = document.referrer;
		if(typeof(referer) == 'undefined')
			referer = '';
		if(window.top!=this){
			iframe = 'iframe';
		}
		referer = encodeURIComponent(referer);
		var url = '../../www.gouwuke.com/gwkImprMonitor.do@src=mobilewap&wid=660306&oid=534&referer='+referer+"&iframe="+iframe;
		document.write('<image src = \"'+url+'\" height=\"0\" weight=\"0\"/>');
	</script>
