<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>wxportal</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="../Public/css/common.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="top">
		<img id="logo" src="../Public/images/logo.png" alt="CS科技" />
		<div id="logoTips">营销，从这里开始！</div>
		<div id="loginInfo">
			<?php if(($loginTips != '')): echo ($loginTips); ?> <a href="<?php echo U($group_name . '/Index/logout');?>">退出</a><?php endif; ?>
		</div>
	</div>
	<div id="page_menu">
		<ul>
			<li><a href="<?php echo U($group_name . '/Index/index');?>" class="<?php echo ($sy); ?>">首页</a></li>
			<li><a href="<?php echo U($group_name . '/Manage/index');?>" class="<?php echo ($gl); ?>">管理</a></li>
			<li><a href="<?php echo U($group_name . '/Introduce/index');?>" class="<?php echo ($gnjs); ?>">功能介绍</a></li>
			<li><a href="<?php echo U($group_name . '/Pay/index');?>" class="<?php echo ($zf); ?>">资费</a></li>
			<li><a href="<?php echo U($group_name . '/About/index');?>" class="<?php echo ($gy); ?>">关于</a></li>
			<li><a href="<?php echo U($group_name . '/Help/index');?>" class="<?php echo ($bz); ?>">帮助</a></li>
		</ul>
	</div>
	<div id="scrollTips">
		<marquee id="scrollTips" onmouseover="this.stop()" onmouseout="this.start()">热烈庆祝CS科技正式开业，方便、快捷、简单一直是我们的宗旨！欢迎广大客户前来体验指导。
		</marquee>
	</div>
	<div id="page_content">
		<h1>功能管理</h1>
		<input type="button" id="submit_input" onclick="window.location='<?php echo U($group_name . '/Manage/index');?>'"
			value="返回公众号管理"/>
		<hr/>
		<table>
			<tr>
	<td width="25%">aidanfd 微信号:lfdskafkd</td>
	<td width="25%">vip等级：1级</td>
	<td width="25%">购买时间：2012年9月10日</td>
	<td width="25%">到期时间：2013年9月10日</td>
</tr>
<tr>
	<td valign="top">
		<table style="margin: 10px;width: 90%">
			<!-- 基础设置 -->
			<tr>
				<td style="text-align: left;border: 0px;">&nbsp;
					<font color="red" style="font-weight: bold">基础设置</font>
				</td>
			</tr>
			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/index');?>"
					style="color:<?php echo ($gnxz); ?>;">功能选择</a>
				</td>
			</tr>
			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/watchedMsg');?>"
					style="color:<?php echo ($gzshf); ?>;">关注时回复</a>
				</td>
			</tr>
			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/textResp');?>"
					style="color:<?php echo ($zdywbhf); ?>;">自定义文本回复</a>
				</td>
			</tr>
			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/musicResp');?>"
					style="color:<?php echo ($zdyyyhf); ?>;">自定义音乐回复</a>
				</td>
			</tr>
			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/newsResp');?>"
					style="color:<?php echo ($zdytwhf); ?>;">自定义图文回复</a>
				</td>
			</tr>
			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/unknownResp');?>"
					style="color:<?php echo ($bzdsdf); ?>;">不知道时答复</a>
				</td>
			</tr>

			<!-- 3G站设置 -->
			<tr>
				<td style="text-align: left;border: 0px;">&nbsp;
					<font color="red" style="font-weight: bold">3G站设置</font>
				</td>
			</tr>

			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/gDefine');?>"
					style="color:<?php echo ($gzsz); ?>;">3G站设置</a>
				</td>
			</tr>
		</table>
	</td>
				<td colspan="3" valign="top"><h3>3G站设置</h3>
					<table>
						<tr>
							<td>我们正在努力开发中，敬请期待！</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
		<div id="page_foot">
			<a href="subpage.html">首页</a> | 
			<a href="subpage.html">管理</a> | 
			<a href="subpage.html">功能简介</a> | 
			<a href="#">资费</a> | 
			<a href="#">关于</a> | 
			<a href="#">帮助</a>
			<br />
			<a href="#"><strong>Copyright © 2014 | CS科技有限公司</strong></a>
		</div>
		<!-- end of footer -->
	</body>
</html>