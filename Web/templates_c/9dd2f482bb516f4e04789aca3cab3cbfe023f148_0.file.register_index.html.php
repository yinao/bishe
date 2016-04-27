<?php
/* Smarty version 3.1.29, created on 2016-04-26 05:13:14
  from "G:\wamp\www\bishe\super\Web\templates\register_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571ef8ea652c97_31296195',
  'file_dependency' => 
  array (
    '9dd2f482bb516f4e04789aca3cab3cbfe023f148' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\super\\Web\\templates\\register_index.html',
      1 => 1461645959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571ef8ea652c97_31296195 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="renderer" content="webkit">
		<title>接种系统防疫站注册</title>
		
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
		<style>
			.form-group{
				margin-top: 5px;
			}
			.panel{
				margin-top: 20px;
			}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="line">
				<div class="xs6 xm4 xs3-move xm4-move">
					<div class="media media-y" style="margin-top:20px;">
						<img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/logo.png" class="radius" alt="后台管理系统" />
					</div>
					<div class="panel">
						<div class="panel-head">
							<strong>防疫站账户注册</strong>
						</div>
						<div class="panel-body" style="padding:30px;">
							<div class="form-group">
								<div class="label"><label for="">名称：</label></div>
								<div class="field field-icon-right">
								<input type="text" class="input" placeholder="名称" data-validate="required:请填写名称" name="name" value="">
								<span class="icon icon-user"></span>
								</div>
							</div>
							<div class="form-group">
								<div class="label"><label for="">登录账号：</label></div>
								<div class="field field-icon-right">
								<input type="text" class="input" name="account" placeholder="请输入登录账号" data-validate="required:请填写登录账号,length#>5:账号长度不能小于5,length#<10:账号长度不能大于10" value="">
								<span class="icon icon-user"></span>
								</div>
							</div>
							<div class="form-group">
								<div class="label"><label for="">手机号：</label></div>
								<div class="field field-icon-right">
									<input type="text" class="input" placeholder="请输入手机号" data-validate="required:请输入手机号,mobile:手机号格式不正确" name="phone" value="">
									<span class="icon icon-mobile"></span>
								</div>
							</div>
							<div class="form-group">
								<div class="label">
									<label for="">登录密码：</label>
								</div>
								<div class="field field-icon-right">
									<input type="password" class="input" placeholder="请输入登录密码" data-validate="required:请输入登录密码,length#>8:密码长度不能小于8,length#<15:密码长度不能大于15" name="paw" value="">
									<span class="icon icon-key"></span>
								</div>
							</div>
							<div class="form-group">
								<div class="label"><label for="">确认密码：</label></div>
								<div class="field field-icon-right">
									<input type="password" class="input" placeholder="请确认密码" name="confirmPaw" data-validate="required:请确认密码,repeat#paw:两次输入密码不一致" value="">
									<span class="icon icon-key"></span>
								</div>
							</div>
						</div>
						<div class="panel-foot text-center">
							<button class="button button-block bg-main text-big btRegister">注  册</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html><?php }
}
