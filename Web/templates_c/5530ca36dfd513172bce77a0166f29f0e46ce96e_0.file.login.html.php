<?php
/* Smarty version 3.1.29, created on 2016-04-03 18:04:28
  from "/var/www/bishe/Web/templates/login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5700eaac08fb63_50185253',
  'file_dependency' => 
  array (
    '5530ca36dfd513172bce77a0166f29f0e46ce96e' => 
    array (
      0 => '/var/www/bishe/Web/templates/login.html',
      1 => 1449555670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5700eaac08fb63_50185253 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="renderer" content="webkit">
		<title>拼图后台管理-管理员登录</title>
		<!--
        	作者：大火兔 1979788761@qq.com
        	时间：2015-11-17
        	描述：使用官网CSS/JS同步最新版
        -->
		<link rel="stylesheet" href="http://www.pintuer.com/css/pintuer.css">
		<link rel="stylesheet" href="css/admin.css">
		<?php echo '<script'; ?>
 src="http://www.pintuer.com/js/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="http://www.pintuer.com/js/pintuer.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="http://www.pintuer.com/js/respond.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/admin.js"><?php echo '</script'; ?>
>
		<link type="image/x-icon" href="http://www.pintuer.com/favicon.ico" rel="shortcut icon" />
		<link href="http://www.pintuer.com/favicon.ico" rel="bookmark icon" />
	</head>

	<body>
		<div class="container">
			<div class="line">
				<div class="xs6 xm4 xs3-move xm4-move">
					<br />
					<br />
					<div class="media media-y">
						<a href="http://www.pintuer.com" target="_blank"><img src="images/logo.png" class="radius" alt="后台管理系统" /></a>
					</div>
					<br />
					<br />
					<form action="index.html" method="post">
						<div class="panel">
							<div class="panel-head"><strong>登录拼图后台管理系统</strong></div>
							<div class="panel-body" style="padding:30px;">
								<div class="form-group">
									<div class="field field-icon-right">
										<input type="text" class="input" name="admin" placeholder="登录账号" data-validate="required:请填写账号,length#>=5:账号长度不符合要求" />
										<span class="icon icon-user"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="field field-icon-right">
										<input type="password" class="input" name="password" placeholder="登录密码" data-validate="required:请填写密码,length#>=8:密码长度不符合要求" />
										<span class="icon icon-key"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="field">
										<input type="text" class="input" name="passcode" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
										<img src="images/passcode.jpg" width="80" height="32" class="passcode" />
									</div>
								</div>
							</div>
							<div class="panel-foot text-center">
								<button class="button button-block bg-main text-big">立即登录后台</button>
							</div>
						</div>
					</form>
					<div class="text-right text-small text-gray padding-top">基于<a class="text-gray" target="_blank" href="http://www.pintuer.com">拼图前端框架</a>构建</div>
				</div>
			</div>
		</div>

		<div class="hidden">
			<?php echo '<script'; ?>
 src="http://s4.cnzz.com/stat.php?id=5952475&web_id=5952475" language="JavaScript"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
>
				var _hmt = _hmt || [];
				(function() {
					var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
					document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F637f0fe043ea4b7f59c05d4491e27667' type='text/javascript'%3E%3C/script%3E"));
				})();
			<?php echo '</script'; ?>
>
		</div>
	</body>

</html><?php }
}
