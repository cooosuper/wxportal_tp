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
		<div><h1><?php echo ($gindex['name']); ?></h1></div>
		<?php if($gindex["thumbpicurl"] != ''): ?><div>
				<img id="s_index_img" src="<?php echo ($gindex["thumbpicurl"]); ?>"/>
			</div><?php endif; ?>
		<p></p>
		<table id="s_index_table">
			<tr>
				<td onclick="gDetail(<?php echo ($wxaccountid); ?>)"><div>公司介绍</div></td>
				<td onclick="gProduct(<?php echo ($wxaccountid); ?>)"><div>产品一览</div></td>
				<td onclick="gRecommand(<?php echo ($wxaccountid); ?>)"><div>店长推荐</div></td>
			</tr>
			<tr>
				<td onclick="gRoll(<?php echo ($wxaccountid); ?>)"><div>幸运转盘</div></td>
				<td onclick="gOrderOnline(<?php echo ($wxaccountid); ?>)"><div>在线预约</div></td>
				<td onclick="gActivity(<?php echo ($wxaccountid); ?>)"><div>精彩活动</div></td>
			</tr>
			<tr>
				<td onclick="gCoupons(<?php echo ($wxaccountid); ?>)"><div>优惠券</div></td>
				<td onclick="gFeedBack(<?php echo ($wxaccountid); ?>)"><div>意见反馈</div></td>
				<td onclick="gContact(<?php echo ($wxaccountid); ?>)"><div>联系方式</div></td>
			</tr>
		</table>
	</center>
</body>
</html>