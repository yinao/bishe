<?php
/* Smarty version 3.1.29, created on 2016-05-10 09:18:06
  from "G:\wamp\www\bishe\Web\templates\station_register_info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5731a74eb1b220_78433002',
  'file_dependency' => 
  array (
    'be468e5147876a932c533890a1fdf203fd81b502' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\Web\\templates\\station_register_info.html',
      1 => 1462871883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_5731a74eb1b220_78433002 ($_smarty_tpl) {
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
	</head>

	<body>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<div class="admin">
			<div class="panel">
				<div class="panel-head"><strong><?php if ($_smarty_tpl->tpl_vars['siteInfo']->value != null) {?>防疫站信息编辑<?php } else { ?>防疫站信息添加<?php }?></strong></div>
				<div class="panel-body">
					<form class="form-auto form-x" onsubmit="return false;">
						<?php if ($_smarty_tpl->tpl_vars['siteInfo']->value != null) {?>
						<div class="form-group">
							<div class="label"><label for="">防疫站编号：</label></div>
							<div class="field">
								<input type="text" readonly="true" class="input" value="<?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['station_num'];?>
">
							</div>
						</div>
						<?php }?>
						<div class="form-group">
							<div class="label"><label for="">防疫站名称：</label></div>
							<div class="field">
								<input type="text" name="stationName" class="input" value="<?php if ($_smarty_tpl->tpl_vars['siteInfo']->value != null) {
echo $_smarty_tpl->tpl_vars['siteInfo']->value['station_name'];
}?>">
							</div>
						</div>
						<div class="form-group">
							<div class="label"><label for="">防疫站电话：</label></div>
							<div class="field">
								<input type="text" name="stationPhone" class="input" value="<?php if ($_smarty_tpl->tpl_vars['siteInfo']->value != null) {
echo $_smarty_tpl->tpl_vars['siteInfo']->value['station_phone'];
}?>">
							</div>
						</div>
						<div class="form-group">
							<div class="label"><label for="">防疫站地址：</label></div>
							<div class="field">
								<input type="text" name="stationAddress" class="input" value="<?php if ($_smarty_tpl->tpl_vars['siteInfo']->value != null) {
echo $_smarty_tpl->tpl_vars['siteInfo']->value['station_address'];
}?>">
							</div>
						</div>
						<div class="form-group">
							<div class="label"><label for="">防疫站文字介绍：</label></div>
							<div class="field">
								<textarea class="input" name="description" rows="10" cols="100"><?php if ($_smarty_tpl->tpl_vars['siteInfo']->value != null) {
echo $_smarty_tpl->tpl_vars['siteInfo']->value['station_description'];
}?></textarea>
							</div>
						</div>
						<div class="form-button">
							<button class="button bg-main button-big btStation" data-tog="<?php if ($_smarty_tpl->tpl_vars['siteInfo']->value != null) {?>u<?php } else { ?>a<?php }?>" data-target="<?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['id'];?>
">确 认</button>
						</div>
					</form>
				</div>
				<div class="panel-foot"></div>
			</div>
		</div>
	</body>
</html><?php }
}
