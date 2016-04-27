<?php
/* Smarty version 3.1.29, created on 2016-04-26 14:59:54
  from "G:\wamp\www\bishe\super\Web\templates\station_vero.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571f826ac29ae8_26566373',
  'file_dependency' => 
  array (
    'f47915e404246c51f6cf861e7a4008d212e1e0e5' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\super\\Web\\templates\\station_vero.html',
      1 => 1461682141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_571f826ac29ae8_26566373 ($_smarty_tpl) {
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
				<form>
				<div class="panel admin-panel">
					<div class="panel-head"><strong>疫苗列表</strong></div>
					<div class="padding border-bottom">
						<input type="button" class="button button-small border-green dialogs" data-toggle="click" data-target="#veroAdd" data-mask="1" data-width="50%" value="添加疫苗" />
					</div>
					<div class="panel-body">
						<table class="table table-hover">
						<tr>
							<th>选择</th>
							<th>疫苗编号</th>
							<th>疫苗名字</th>
							<th>疫苗描述</th>
							<th>疫苗状态</th>
							<th>操作</th>
						</tr>
						<?php
$_from = $_smarty_tpl->tpl_vars['stationInfo']->value['vero'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_list_0_saved_item = isset($_smarty_tpl->tpl_vars['list']) ? $_smarty_tpl->tpl_vars['list'] : false;
$_smarty_tpl->tpl_vars['list'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['list']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
$__foreach_list_0_saved_local_item = $_smarty_tpl->tpl_vars['list'];
?>
						<tr>
							<td><input type="checkbox" name="id" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" /></td>
							<td><?php echo $_smarty_tpl->tpl_vars['list']->value['vero_num'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['list']->value['vero_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['list']->value['vero_instruction'];?>
</td>
							<?php if ($_smarty_tpl->tpl_vars['list']->value['vero_status'] == 0) {?>
							<td>未审核</td>
							<td>
								<a href="javascript:void(0);" title="停用" data-target="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" data-toggle="stop" class="button button-small bg-red veroVerify">停用</a>
							</td>
							<?php } elseif ($_smarty_tpl->tpl_vars['list']->value['vero_status'] == 1) {?>
							<td>正常使用</td>
							<td><a href="javascript:void(0);" title="停用" data-target="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" data-toggle="stop" class="button button-small bg-red veroVerify">停用</a></td>
							<?php } elseif ($_smarty_tpl->tpl_vars['list']->value['vero_status'] == 2) {?>
							<td>停用</td>
							<td><a href="javascript:void(0);" title="启用" data-target="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" data-toggle="start" class="button button-small bg-red veroVerify">启用</a></td>
							<?php } elseif ($_smarty_tpl->tpl_vars['list']->value['vero_status'] == 3) {?>
							<td>审核失败</td>
							<td><a href="javascript:void(0);" title="停用" data-target="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" data-toggle="stop" class="button button-small bg-red veroVerify">停用</a></td>
							<?php }?>
						</tr>
						<?php
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_0_saved_local_item;
}
if ($__foreach_list_0_saved_item) {
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_0_saved_item;
}
?>
					</table>
					</div>
					<div class="panel-foot text-center">
						<?php echo $_smarty_tpl->tpl_vars['stationInfo']->value['pager'];?>

					</div>
				</form>
				</div>
			<hr class="space">
		</div>
		<div id="veroAdd">
			<div class="dialog">
				<div class="dialog-head">
					<span class="close rotate-hover"></span><strong>添加疫苗</strong>
				</div>
				<div class="dialog-body">
					<form>
						<div class="form-group">
							<div class="label"><label for="">疫苗名称：</label></div>
							<div class="field"><input type="text" name="veroName" class="input" value=""></div>
						</div>
						<div class="form-group">
							<div class="label"><label for="">疫苗</label></div>
							<div class="field"><textarea name="description" class="input"></textarea></div>
						</div>
					</form>
				</div>
				<div class="dialog-foot">
					<button class="button dialog-close">
						取消</button>
					<button class="button bg-green veroSubmit" data-toggle="a">
						确认</button>
				</div>
			</div>
		</div>
	</body>

</html><?php }
}
