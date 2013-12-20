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
					<h3>编辑公众帐号</h3> 
					<center><font color="red" id="tip">&nbsp;</font></center>
					<form action="<?php echo U($group_name . '/Manage/doEditWxAccount');?>" method="post" id="editWxAccountForm">
						<table>
							<tr>
								<td width="20%">*公众帐号名称</td>
								<td><input name="name" id="name" value="<?php echo ($wxaccount['name']); ?>"/></td>
								<td><input type="hidden" name="wxaccountid" id="wxaccountid" value="<?php echo ($wxaccount['id']); ?>"/><?php echo ($wxaccount['id']); ?></td>
							</tr>
							<tr>
								<td>*公众帐号原始id</td>
								<td><input name="orgId" id="orgid" value="<?php echo ($wxaccount['orgid']); ?>"/></td>
								<td>请认真填写，错了不能修改。比如：gh_31a785317770 [<a href="">不会就点我</a>]</td>
							</tr>
							<tr>
								<td>*微信号</td>
								<td><input name="account" id="account" value="<?php echo ($wxaccount['account']); ?>"/></td>
								<td>比如：Cooosuper</td>
							</tr>
							
							<tr>
								<td>*token</td>
								<td><input name="token" id="token" value="<?php echo ($wxaccount['token']); ?>"/></td>
								<td>此处token和中转接口以及腾讯平台必须一致，为保证你的资源不被他人盗用，可以自己将中转接口的token值改为当前你设定的值!</td>
							</tr>
	
							<tr>
								<td>*地区</td>
								<td><input name="area" id="area" value="<?php echo ($wxaccount['area']); ?>"/></td>
								<td>此处关联公交等本地化查询</td>
							</tr>
							<tr>
								<td colspan="3" align="center"><input type="submit" id="submit_input"
									value="提交" />
								</td>
							</tr>
						</table>
					</form>
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