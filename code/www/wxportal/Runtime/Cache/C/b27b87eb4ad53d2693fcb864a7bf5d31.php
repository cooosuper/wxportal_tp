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
			<?php if(($loginTips != '')): echo ($loginTips); ?> <a href="<?php echo U('C/Login/logout');?>">退出</a><?php endif; ?>
		</div>
	</div>
	<div id="page_menu">
		<ul>
			<li><a href="<?php echo U('C/Index/index');?>" class="current">首页</a></li>
			<li><a href="<?php echo U('C/Index/subpage');?>">管理</a></li>
			<li><a href="subpage.html">功能介绍</a></li>
			<li><a href="subpage.html">资费</a></li>
			<li><a href="#">关于</a></li>
			<li><a href="#">帮助</a></li>
		</ul>
	</div>
	<div id="scrollTips">
		<marquee id="scrollTips" onmouseover="this.stop()" onmouseout="this.start()">热烈庆祝CS科技正式开业，方便、快捷、简单一直是我们的宗旨！欢迎广大客户前来体验指导。
		</marquee>
	</div>
	<h1>登录</h1>
	<hr/>
	<div id="page_content">
		<form action="<?php echo U('C/Login/handleLogin');?>">
			<table>
				<tr>
					<td>用户名</td>
					<td><input type="text" name="name" /></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="password" /></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" id="submit_input"/></td>
				</tr>
			</table>
		</form>
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