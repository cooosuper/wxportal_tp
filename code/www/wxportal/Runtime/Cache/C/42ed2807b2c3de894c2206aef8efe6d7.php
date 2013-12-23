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
		<h1>功能管理</h1>
		<input type="button" id="submit_input" onclick="window.location='<?php echo U($group_name . '/Manage/myWxAccount');?>'"
			value="返回公众号管理"/>
		<hr/>
		<table id="s_table">
			<tr>
	<td width="25%"><?php echo ($wxaccount['name']); ?> 微信号:<?php echo ($wxaccount['account']); ?></td>
	<td width="25%">vip等级：1级</td>
	<td width="25%">购买时间：2012年9月10日</td>
	<td width="25%">到期时间：2013年9月10日</td>
</tr>
<tr>
	<td valign="top">
		<table id="functionManage" style="margin: 10px;width: 90%">
			<!-- 基础设置 -->
			<tr>
				<td style="text-align: left;border: 0px;">&nbsp;
					<font id="left_menu_main">基础设置</font>
				</td>
			</tr>
			<!-- 
			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/index?wxaccountid=' . $wxaccount['id']);?>"
					style="color:<?php echo ($gnxz); ?>;">功能选择</a>
				</td>
			</tr>
			 -->
			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/watchedResp?wxaccountid=' . $wxaccount['id']);?>"
					style="color:<?php echo ($gzshf); ?>;">关注时回复</a>
				</td>
			</tr>
			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/textResp?wxaccountid=' . $wxaccount['id']);?>"
					style="color:<?php echo ($zdywbhf); ?>;">自定义文本回复</a>
				</td>
			</tr>
			<!-- 
			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/musicResp?wxaccountid=' . $wxaccount['id']);?>"
					style="color:<?php echo ($zdyyyhf); ?>;">自定义音乐回复</a>
				</td>
			</tr>
			 -->
			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/newResp?wxaccountid=' . $wxaccount['id']);?>"
					style="color:<?php echo ($zdydytwhf); ?>;">自定义单图文回复</a>
				</td>
			</tr>
			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/newsResp?wxaccountid=' . $wxaccount['id']);?>"
					style="color:<?php echo ($zdytwhf); ?>;">自定义多图文回复</a>
				</td>
			</tr>
			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/unknownResp?wxaccountid=' . $wxaccount['id']);?>"
					style="color:<?php echo ($bzdsdf); ?>;">不知道时答复</a>
				</td>
			</tr>

			<!-- 3G站设置 -->
			<tr>
				<td style="text-align: left;border: 0px;">&nbsp;
					<font id="left_menu_main">3G站设置</font>
				</td>
			</tr>

			<tr>
				<td style="text-align: left;border: 0px;">
					<img src="../Public/images/menu_point.jpg" />&nbsp;<a
					href="<?php echo U($group_name . '/FunctionManage/gDefine?wxaccountid=' . $wxaccount['id']);?>"
					style="color:<?php echo ($gzsz); ?>;">3G站设置</a>
				</td>
			</tr>
		</table>
	</td>
				<td colspan="3" valign="top">
				<?php if(($count != 0)): ?><h3>已有配置(第<?php echo ($curNewsIndex + 1); ?>/<?php echo ($count); ?>个)</h3>
				<?php else: ?>
					<h3>已有配置(暂无)</h3><?php endif; ?>
					<table>
						<?php if(($count != 0)): ?><tr>
								<td colspan="6">
									<?php if(($curNewsIndex != 0)): ?><input type="button" id="submit_input" onclick="window.location='<?php echo U($group_name . '/FunctionManage/newsResp?wxaccountid=' . $wxaccount['id'] . '&curNewsIndex=' . ($curNewsIndex - 1));?>'"
											value="上一个"/><?php endif; ?>
									多图文之【<?php echo ($keyword); ?>】
									<?php if(($curNewsIndex != $count - 1)): ?><input type="button" id="submit_input" onclick="window.location='<?php echo U($group_name . '/FunctionManage/newsResp?wxaccountid=' . $wxaccount['id'] . '&curNewsIndex=' . ($curNewsIndex + 1));?>'"
											value="下一个"/><?php endif; ?>
									<input style="float:right; margin-right: 10px;" type="button" id="submit_input" onclick="window.location='<?php echo U($group_name . '/FunctionManage/editNewsResp?wxaccountid=' . $wxaccount['id'] . '&keyword=' . $keyword);?>'"
										value="修改"/>
									<input style="float:right; margin-right: 10px;" type="button" id="submit_input" onclick="window.location='<?php echo U($group_name . '/FunctionManage/delNewsResp?wxaccountid=' . $wxaccount['id'] . '&keyword=' . $keyword);?>'"
										value="删除"/>
								</td>
							</tr>
							<tr>
								<td style="background-color: silver">标题</td>
								<td style="background-color: silver">简介</td>
								<td style="background-color: silver">配图</td>
								<td style="background-color: silver">跳转地址</td>
								<!--
									<td style="background-color: silver">操作</td>
								-->
							</tr>
							<?php if(is_array($curNews)): foreach($curNews as $key=>$curNew): ?><tr>
									<td><?php echo ($curNew["title"]); ?></td>
									<td><?php echo ($curNew["description"]); ?></td>
									<td><img src="<?php echo ($curNew["thumbpicurl"]); ?>"/></td>
									<td><?php echo ($curNew["url"]); ?></td>
									<!-- 
									<td>
										<input type="button" id="submit_input" 
											onclick="window.location='<?php echo U($group_name . '/FunctionManage/delNewResp?wxaccountid=' . $wxaccount['id'] . '&newRespId=' . $curNew['id']);?>'" value="删除"/>
									</td>
									 -->
								</tr><?php endforeach; endif; endif; ?>
					</table>
					<div class="result page"><?php echo ($page); ?></div>
					
					<hr/>
					<h3>自定义多图文回复</h3>
					<center><font color="red" id="tip">&nbsp;</font></center>
		 			<form action="<?php echo U($group_name . '/FunctionManage/setNewsResp');?>" method="post" enctype="multipart/form-data">
						<table>
							<tr>
								<td>关键字</td>
								<td>
									<input name="keyword" id="keyword"/>
									<input type="hidden" name="wxaccountid" id="wxaccountid" value="<?php echo ($wxaccount['id']); ?>"/>
								</td>
							</tr>
							<tr>
								<td>标题1</td>
								<td><input name="title1" id="title1"/></td>
							</tr>
							<tr>
								<td>简介1</td>
								<td><input name="description1" id="description1"/></td>
							</tr>
							<tr>
								<td>上传图片1</td>
								<td><input type="file"  name="pic1" id="pic1"></td>
							</tr>
							<tr>
								<td>跳转地址1</td>
								<td><input name="url1" id="url1"/></td>
							</tr>
							<tr>
								<td>标题2</td>
								<td><input name="title2" id="title2"/></td>
							</tr>
							<tr>
								<td>简介2</td>
								<td><input name="description2" id="description2"/></td>
							</tr>
							<tr>
								<td>上传图片2</td>
								<td><input type="file"  name="pic2" id="pic2"></td>
							</tr>
							<tr>
								<td>跳转地址2</td>
								<td><input name="url2" id="url2"/></td>
							</tr>
							<tr>
								<td>标题3</td>
								<td><input name="title3" id="title3"/></td>
							</tr>
							<tr>
								<td>简介3</td>
								<td><input name="description3" id="description3"/></td>
							</tr>
							<tr>
								<td>上传图片3</td>
								<td><input type="file"  name="pic3" id="pic3"></td>
							</tr>
							<tr>
								<td>跳转地址3</td>
								<td><input name="url3" id="url3"/></td>
							</tr>
							<tr>
								<td>标题4</td>
								<td><input name="title4" id="title4"/></td>
							</tr>
							<tr>
								<td>简介4</td>
								<td><input name="description4" id="description4"/></td>
							</tr>
							<tr>
								<td>上传图片4</td>
								<td><input type="file"  name="pic4" id="pic4"></td>
							</tr>
							<tr>
								<td>跳转地址4</td>
								<td><input name="url4" id="url4"/></td>
							</tr>
							<tr>
								<td colspan="2" align="center"><input type="submit" id="submit_input" value="保存">
								</td>
							</tr>
						</table>
					</form>
			</td>
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