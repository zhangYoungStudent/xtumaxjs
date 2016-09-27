<?php 
require("dbconnect.php");

require("header.php");
?>
<title>发布活动</title>
<?php require("header2.php");?>
<h1>发布活动</h1>
</div>
  <div data-role="content" class="weui_article">
    <form method="post" action="demoform.asp">
	  <h2>发布者信息</h2>
        
        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=755201244&site=qq&menu=yes"><img border="1" src="http://wpa.qq.com/pa?p=2:755201244:52" alt="联系管理人员" title="联系管理人员"/></a>
        <a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=e4ea248ae36fcfb5530eae0ef8ec368f276085669b6fbf8acd844b074ca3d7ec"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="湘大知道" title="湘大知道"></a>
        
      <div data-role="fieldcontain">
        <label for="fullname">姓名：</label><input type="text" name="name" id="fullname" placeholder="输入您的姓名...">
        <label for="fullname">电话：</label><input type="text" name="telephone" id="fullname" placeholder="输入您的联系电话...">
        <fieldset data-role="fieldcontain" data-mini="true">
            <label for="day">所在年级</label>
            <select name="grade" id="day">
		       <optgroup label="本科">
                   <option value="">一年级</option>
                   <option value="">二年级</option>
                   <option value="">三年级</option>
                   <option value="">四年级</option>
		       </optgroup>
		      <optgroup label="研究生">
                  <option value="">一年级</option>
                  <option value="">二年级</option>
		          <option value="">三年级</option>
		      </optgroup>
            </select>
        </fieldset> 		
        <label for="fullname">所在院系：</label><input type="text" name="college" id="fullname" placeholder="输入您所在的院系...">
      </div>
      <hr />
	  <h2>活动信息</h2>
      <fieldset data-role="fieldcontain">
	    <label for="fullname">活动名称：</label><input type="text" name="fullname" id="fullname">
		<label for="day">主权归属</label>
        <select name="day" id="day">
		<optgroup label="校级">
         <option value="校团委">星期一</option>
         <option value="三一">星期二</option>
         <option value="wed">星期三</option>
         <option value="thu">星期四</option>
         <option value="fri">星期五</option>
		</optgroup>
		<optgroup label="院级">
         <option value="物理与光电工程学院">星期六</option>
         <option value="sun">星期日</option>
		</optgroup>
        </select>
      </fieldset>
	  <label for="fname">详细信息：</label><textarea cols="60%" rows="5" name="textarea" id="textarea" data-role="none"  placeholder="这里的信息将会显示到活动展示页面的活动介绍里..." ></textarea>
      <label for="fname">备注：</label><textarea cols="60%" rows="5" name="textarea" id="textarea" data-role="none"  placeholder="这里的信息将会显示到活动展示页面的活动介绍里..." ></textarea>
      
      <input type="submit" data-inline="true" data-mini="true" value="提交" class="weui_btn weui_btn_mini weui_btn_default">
    </form>
	 
</div>
<?php require("footer.php");?>
