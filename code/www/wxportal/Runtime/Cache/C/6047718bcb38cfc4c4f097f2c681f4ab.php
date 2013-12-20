<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>wxportal</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="../Public/css/common.css" rel="stylesheet" type="text/css" />
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
					<?php if(($curUser['isactive'] != 1)): ?><h3>请如实填写您的个人信息，一旦填写，无法修改！</h3>
	 					<center><font color="red" id="tip">&nbsp;</font></center>
	 					<form action="<?php echo U($group_name . '/Manage/fillPersonInfo');?>" method="post" id="personInfoForm">
							<table>
								<tr>
									<td width="15%">*真实姓名</td>
									<td><input name="name" id="name"/>
									</td>
									<td>请务必填写您的真实姓名，</td>
								</tr>
		
								<tr>
									<td width="15%">*身份证</td>
									<td><input name="creditCard" id="creditcard"/>
									</td>
									<td>请务必填写您的真实身份证信息</td>
								</tr>
								<tr>
									<td>*手机号</td>
									<td><input name="telephone" id="phonenumber"/>
									</td>
									<td>必须正确的手机号,我们系统会自动监测你的vip1以上帐号，如果到期会自动发短信通知!</td>
								</tr>
								<tr>
									<td>*地址</td>
									<td><input name="addr" id="address"/>
									</td>
									<td></td>
								</tr>
								<tr>
									<td colspan="3" align="center"><input type="submit" id="submit_input"
										value="提交" /></td>
								</tr>
							</table>
						</form>
					<?php else: ?>
						<h3>您已填写信息，如果发现有误，请联系管理员</h3>
	 					<center><font color="red" id="tip">&nbsp;</font></center>
						<table>
							<tr>
								<td width="15%">*真实姓名</td>
								<td><?php echo ($curUser['name']); ?>
								</td>
							</tr>
	
							<tr>
								<td width="15%">*身份证</td>
								<td><?php echo ($curUser['creditcard']); ?>
								</td>
							</tr>
							<tr>
								<td>*手机号</td>
								<td><?php echo ($curUser['phonenumber']); ?>
								</td>
							</tr>
							<tr>
								<td>*地址</td>
								<td><?php echo ($curUser['address']); ?>
								</td>
							</tr>

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