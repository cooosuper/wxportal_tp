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
				<h1>公司介绍</h1>
			</div>
		</center>
		<?php if(is_array($gdetails)): $i = 0; $__LIST__ = $gdetails;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["thumbpicurl"] != ''): ?><center>
					<div>
						<img id="s_index_img" src="<?php echo ($vo["thumbpicurl"]); ?>"/>
					</div>
				</center><?php endif; ?>
			<div><p id="s_detail_p">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["content"]); ?></p></div><?php endforeach; endif; else: echo "" ;endif; ?>
	
</body>
</html>