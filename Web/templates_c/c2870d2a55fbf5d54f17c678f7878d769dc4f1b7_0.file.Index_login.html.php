<?php
/* Smarty version 3.1.29, created on 2016-04-28 11:59:04
  from "G:\wamp\www\bishe\Web\templates\Index_login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5721fb08100c77_25832036',
  'file_dependency' => 
  array (
    'c2870d2a55fbf5d54f17c678f7878d769dc4f1b7' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\Web\\templates\\Index_login.html',
      1 => 1461638877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5721fb08100c77_25832036 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="renderer" content="webkit">
		<title>接种系统后台管理-管理员登录</title>
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/pintuer.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/admin.css">
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/pintuer.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/admin.js"><?php echo '</script'; ?>
>
	</head>

	<body>
		<div class="container">
			<div class="line">
				<div class="xs6 xm4 xs3-move xm4-move">
					<br />
					<br />
					<div class="media media-y">
						<img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/logo.png" class="radius" alt="后台管理系统" />
					</div>
					<br />
					<br />
						<div class="panel">
							<div class="panel-head"><strong>登录后台管理系统</strong></div>
							<div class="panel-body" style="padding:30px;">
								<div class="form-group">
									<div class="field field-icon-right">
										<input type="text" class="input" name="manName" placeholder="登录账号" data-validate="required:请填写账号,length#>=5:账号长度不符合要求,username:英文字母开头的字母，下划线，数字" value="" />
										<span class="icon icon-user"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="field field-icon-right">
										<input type="password" class="input" name="manPaw" placeholder="登录密码" data-validate="required:请填写密码,length#>=8:密码长度不符合要求" value="" />
										<span class="icon icon-key"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="field">
										<input type="text" class="input" name="passcode" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" value="" />
										<a href="javascript:void(0);" title="点击刷新验证码"><img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=i&e=verify" width="80" height="32" class="passcode" /></a>
									</div>
								</div>
							</div>
							<div class="panel-foot text-center">
								<button class="button button-block bg-main text-big btlogin">立即登录后台</button>
							</div>
						</div>
				</div>
			</div>
		</div>
	</body>

</html><?php }
}
