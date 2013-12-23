<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>营销，从这里开始！</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="../Public/css/common.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="../Public/images/logo.png" />
	<script src="../Public/js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="../Public/js/common.js" type="text/javascript"></script>
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
		<h1>公众帐号管理</h1>
		<hr/>
		<table id="s_table">
			<tr>
				<td valign="top" width="20%" >
	<table style="margin: 10px; width: 90%">
		<tr>
			<td style="text-align: left;border: 0px;">
				<img src="../Public/images/menu_point.jpg" />
				<?php if(($left_menu == 0)): ?><a href="<?php echo U($group_name . '/Manage/index');?>" style="color: blue;">个人信息</a>
				<?php else: ?>
					<a href="<?php echo U($group_name . '/Manage/index');?>">个人信息</a><?php endif; ?>
			</td>
		</tr>
		<tr>
			<td style="text-align: left;border: 0px;">
				<img src="../Public/images/menu_point.jpg" />
				<?php if(($left_menu == 1)): ?><a href="<?php echo U($group_name . '/Manage/myWxAccount');?>" style="color: blue;">我的公众帐号</a>
				<?php else: ?>
					<a href="<?php echo U($group_name . '/Manage/myWxAccount');?>" >我的公众帐号</a><?php endif; ?>
			</td>
		</tr>
		<tr>
			<td style="text-align: left;border: 0px;">
				<img src="../Public/images/menu_point.jpg" />
				<?php if(($left_menu == 2)): ?><a href="<?php echo U($group_name . '/Manage/addWXaccount');?>" style="color: blue;">添加公众帐号</a>
				<?php else: ?>
					<a href="<?php echo U($group_name . '/Manage/addWXaccount');?>" >添加公众帐号</a><?php endif; ?>
		</tr>
	</table>
</td>
				<td>
					<?php if(($count == 0)): ?><h3>您还没有创建公众帐号</h3>
					<input type="button" id="submit_input" 
						onclick="window.location='<?php echo U($group_name . '/Manage/addWXaccount');?>'" 
						value="添加公众帐号"/><br /><br />
					<?php else: ?>
						<h3>已有公众帐号列表</h3> 
						<input type="button" id="submit_input" style="float: left;margin-left: 10px;"
							onclick="window.location='<?php echo U($group_name . '/Manage/addWXaccount');?>'" 
							value="添加公众帐号"/><br /><br />
						<table>
							<tr style="background: silver;">
								<td>公众号名称</td>
								<td>原始id</td>
								<td>微信号</td>
								<td>token</td>
								<td>地区</td>
								<td>操作</td>
							</tr>
							
							<?php if(is_array($wxaccounts)): foreach($wxaccounts as $key=>$wxaccount): ?><tr>
									<td><?php echo ($wxaccount["name"]); ?></td>
									<td><?php echo ($wxaccount["orgid"]); ?></td>
									<td><?php echo ($wxaccount["account"]); ?></td>
									<td><?php echo ($wxaccount["token"]); ?></td>
									<td><?php echo ($wxaccount["area"]); ?></td>
									<td>
										<input type="button" id="submit_input"
											onclick="window.location='<?php echo U($group_name . '/Manage/editWxAccount?wxaccountid=' . $wxaccount['id']);?>'" value="编辑"/>
										<input type="button" id="submit_input" 
											onclick="window.location='<?php echo U($group_name . '/Manage/delWxAccount?wxaccountid=' . $wxaccount['id']);?>'" value="删除"/>
										<input type="button" id="submit_input" 
											onclick="window.location='<?php echo U($group_name . '/FunctionManage/index?wxaccountid=' . $wxaccount['id']);?>'" value="功能管理"/>
									</td>
								</tr><?php endforeach; endif; ?>
						</table><?php endif; ?>
				</td>
			</tr>
		</table>
	</div>
		<div id="page_foot">
			<a href="<?php echo U($group_name . '/Index/index');?>" class="<?php echo ($sy); ?>">首页</a> | 
			<a href="<?php echo U($group_name . '/Manage/index');?>" class="<?php echo ($gl); ?>">管理</a> | 
			<a href="<?php echo U($group_name . '/Introduce/index');?>" class="<?php echo ($gnjs); ?>">功能介绍</a> | 
			<a href="<?php echo U($group_name . '/Pay/index');?>" class="<?php echo ($zf); ?>">资费</a> | 
			<a href="<?php echo U($group_name . '/About/index');?>" class="<?php echo ($gy); ?>">关于</a> | 
			<a href="<?php echo U($group_name . '/Help/index');?>" class="<?php echo ($bz); ?>">帮助</a>
			<br />
			<a href="#"><strong>Copyright © 2014 | CS科技有限公司</strong></a>
		</div>
		<!-- end of footer -->
	</body>
</html>