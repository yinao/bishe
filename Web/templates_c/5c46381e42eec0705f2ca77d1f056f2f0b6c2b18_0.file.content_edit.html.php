<?php
/* Smarty version 3.1.29, created on 2016-04-17 04:50:01
  from "G:\wamp\www\bishe\Web\templates\content_edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571315f929dad0_70432843',
  'file_dependency' => 
  array (
    '5c46381e42eec0705f2ca77d1f056f2f0b6c2b18' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\Web\\templates\\content_edit.html',
      1 => 1460868597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_571315f929dad0_70432843 ($_smarty_tpl) {
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
		<link href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
	    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/umeditor/umeditor.config.js"><?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/umeditor/umeditor.min.js"><?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/umeditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
	</head>

	<body>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<div class="admin">
			<h2 style=""><?php echo $_smarty_tpl->tpl_vars['mTitle']->value;?>
</h2>
			<hr>
			<hr class="space">
			<form class="form-x" onsubmit="return false">
				<div class="form-group">
					<div class="label">
						<label for="title">
							文章标题：</label>
					</div>
					<div class="field">
						<input type="text" class="input input-auto" id="title" name="title" size="30" data-validate="required:请选择文章类别" value="<?php if ($_smarty_tpl->tpl_vars['toggle']->value == 'u') {
echo $_smarty_tpl->tpl_vars['list']->value[2];
}?>" placeholder="请输入文章的标题" />
					</div>
				</div>
				<div class="form-group">
					<div class="label">
						<label for="sort">
							文章类别：</label>
					</div>
					<div class="field">
						<select class="input input-auto" name="sort" id="sort" data-validate="required:请选择文章类别">
							<?php
$_from = $_smarty_tpl->tpl_vars['sortList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value[0] == $_smarty_tpl->tpl_vars['list']->value[1]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value[1];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="label">
						<label for="content">
							文章内容：</label>
					</div>
					<div class="field">
						<?php echo '<script'; ?>
 type="text/plain" id="editor" style="width: 700px;height: 360px;"><?php if ($_smarty_tpl->tpl_vars['toggle']->value == 'u') {
echo $_smarty_tpl->tpl_vars['list']->value[3];
}
echo '</script'; ?>
>
					</div>
				</div>
				<div class="form-group">
					<div class="label">
						<label for="keyword">
							文章关键字：</label>
					</div>
					<div class="field">
						<input type="text" class="input input-auto" id="keyword" name="keyword" value="<?php if ($_smarty_tpl->tpl_vars['toggle']->value == 'u') {
echo $_smarty_tpl->tpl_vars['list']->value[4];
}?>" size="30" data-validate="required:请输入文章关键字" placeholder="请输入关键字" />
					</div>
				</div>
				<div class="form-group">
					<div class="label">
						<label for="description">
							文章说明：</label>
					</div>
					<div class="field">
						<textarea class="input" name="description" rows="5" cols="50" placeholder="请填写文章说明" data-validate="required:请填写文章说明"><?php if ($_smarty_tpl->tpl_vars['toggle']->value == 'u') {
echo $_smarty_tpl->tpl_vars['list']->value[5];
}?></textarea>
					</div>
				</div>
				<div class="form-button">
					<button class="button bg-main newsSub"<?php if ($_smarty_tpl->tpl_vars['toggle']->value == 'u') {?> data-target="<?php echo $_smarty_tpl->tpl_vars['list']->value[0];?>
"<?php }?> data-toggle="<?php echo $_smarty_tpl->tpl_vars['toggle']->value;?>
">提交</button>
				</div>
			</form>
			<hr class="space">
		</div>

	    <?php echo '<script'; ?>
>
	    	var um = UM.getEditor('editor');
	    <?php echo '</script'; ?>
>
	</body>
</html><?php }
}
