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
<div>    
	<?php if(($loginTips != '')): echo ($loginTips); ?>
	<a href="<?php echo U('C/Login/logout');?>">退出</a><?php endif; ?></div>
<div id="page_menu">
<ul>
	<li><a href="<?php echo U('C/Index/index');?>" class="current">首页</a></li>
	<li><a href="<?php echo U('C/Index/subpage');?>">管理</a></li>
	<li><a href="subpage.html">功能介绍</a></li>
	<li><a href="subpage.html">资费</a></li>
	<li><a href="#">管理</a></li>
	<li><a href="#">帮助</a></li>
</ul>
</div>
<div id="page_content">
<p>微信营销，从这里开始，我们将竭诚为您服务</p>
</div>
<div id="page_foot"><a href="subpage.html">Home</a> | <a
	href="subpage.html">Search</a> | <a href="subpage.html">Books</a> | <a
	href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact
Us</a><br />
<p>Copyright © 2024</p> <a href="#"><strong>Your Company Name</strong></a> |
from <a href="#" target="_parent" title="网站模板">网站模板</a>
</div>
<!-- end of footer -->
</body>
</html>