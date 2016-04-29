<?php
/* Smarty version 3.1.29, created on 2016-04-28 14:39:17
  from "G:\wamp\www\bishe\Web\templates\station_register_info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57222095517b07_21833979',
  'file_dependency' => 
  array (
    'be468e5147876a932c533890a1fdf203fd81b502' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\Web\\templates\\station_register_info.html',
      1 => 1461854355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_57222095517b07_21833979 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="renderer" content="webkit">
		<title>防疫站信息添加</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/pintuer.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/admin.css">
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/jquery.min.js"><?php echo '</script'; ?>
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
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/jquery.wallform.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(function(){
				$('#loadFile').off('click').on('change', function(){
					var btn = $(".input-file");
					var status = $(".loadStatus");
					btn.hide();
					status.removeClass('hidden');
					$("#imageform").ajaxForm({
						target: '#preview', 
						beforeSubmit:function(){
							status.show();
							btn.hide();
						}, 
						success:function(){
							status.hide();
							btn.show();
						}, 
						error:function(){
							status.hide();
							btn.show();
					} }).submit();
				});
			});
		<?php echo '</script'; ?>
>
	</head>

	<body>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<div class="admin">
			<div class="panel">
				<div class="panel-head"><strong>防疫站信息添加</strong></div>
				<div class="panel-body">
					<form class="form-auto form-x" onsubmit="return false;">
						<div class="form-group">
							<div class="label"><label for="">防疫站名称：</label></div>
							<div class="field">
								<input type="text" name="stationName" class="input" value="">
							</div>
						</div>
						<div class="form-group">
							<div class="label"><label for="">防疫站电话：</label></div>
							<div class="field">
								<input type="text" name="stationPhone" class="input" value="">
							</div>
						</div>
						<div class="form-group">
							<div class="label"><label for="">防疫站地址：</label></div>
							<div class="field">
								<input type="text" name="stationAddress" class="input" value="">
							</div>
						</div>
						<div class="form-group">
							<div class="label"><label for="">防疫站文字介绍：</label></div>
							<div class="field">
								<textarea class="input" name="description" rows="10" cols="100"></textarea>
							</div>
						</div>
						<div class="form-button">
							<button class="button bg-main button-big btStation">确 认</button>
							<button class="button" type="button" onclick="ceshi();">测试</button>
						</div>
					</form>
				</div>
				<div class="panel-foot"></div>
			</div>
		</div>
	</body>
</html><?php }
}
