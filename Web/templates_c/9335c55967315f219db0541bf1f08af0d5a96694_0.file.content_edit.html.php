<?php
/* Smarty version 3.1.29, created on 2016-04-13 23:21:25
  from "/var/www/bishe/Web/templates/content_edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570e63f528b932_15518358',
  'file_dependency' => 
  array (
    '9335c55967315f219db0541bf1f08af0d5a96694' => 
    array (
      0 => '/var/www/bishe/Web/templates/content_edit.html',
      1 => 1460560881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_570e63f528b932_15518358 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="renderer" content="webkit">
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
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
		<!--<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/respond.js"><?php echo '</script'; ?>
>-->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/admin.js"><?php echo '</script'; ?>
>
	</head>

	<body>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<div class="admin">
			<h2 style="">内容编辑</h2>
			<hr>
			<hr class="space">
			<form method="post" class="form-x">
				<div class="form-group">
					<div class="label">
						<label for="username">
							文章标题：</label>
					</div>
					<div class="field">
						<input type="text" class="input input-auto" id="username" name="username" size="30" placeholder="请输入文章的标题" />
					</div>
				</div>
				<div class="form-group">
					<div class="label">
						<label for="username">
							文章类别：</label>
					</div>
					<div class="field">
						<input type="text" class="input input-auto" id="username" name="username" size="30" placeholder="请输入文章的标题" />
					</div>
				</div>
				<div class="form-group">
					<div class="label">
						<label for="username">
							文章关键字：</label>
					</div>
					<div class="field">
						<input type="text" class="input input-auto" id="username" name="username" size="30" placeholder="请输入关键字" />
					</div>
				</div>
				<div class="form-group">
					<div class="label">
						<label for="username">
							文章说明：</label>
					</div>
					<div class="field">
						<textarea class="input" rows="5" cols="50" placeholder="请填写文章说明" data-validate="required:请填写文章说明"></textarea>
					</div>
				</div>
				<div class="form-button">
					<button class="button bg-main" type="submit">提交</button>
				</div>
			</form>
		</div>
	</body>
</html><?php }
}
