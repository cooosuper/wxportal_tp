<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>营销，从这里开始！</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta
		content="width=device-width,height=device-height,initial-scale=1.0, maximum-scale=1.0, user-scalable=0;"
		name="viewport" />
	<meta content="telephone=no" name="format-detection" />
	<link href="../Public/css/common.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="../Public/images/logo.png" />
	<script src="../Public/js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="../Public/js/common.js" type="text/javascript"></script>
</head>
<body id="s_index_body">
	<center>
		<div>
			<h1>欢迎联系我们</h1>
		</div>
		<?php if(is_array($gcontacts)): $i = 0; $__LIST__ = $gcontacts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div><p id="s_detail_p">地址：<?php echo ($vo["address"]); ?></p></div>
			<div><p id="s_detail_p">电话：<?php echo ($vo["telephone"]); ?></p></div>
			<div><p id="s_detail_p">邮箱：<?php echo ($vo["email"]); ?></p></div>
			<div><p id="s_detail_p">传真：<?php echo ($vo["faxnumber"]); ?></p></div><?php endforeach; endif; else: echo "" ;endif; ?>
	</center>
</body>
</html>