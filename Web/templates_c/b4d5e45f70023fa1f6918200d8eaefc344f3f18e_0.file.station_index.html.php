<?php
/* Smarty version 3.1.29, created on 2016-04-26 09:09:07
  from "G:\wamp\www\bishe\super\Web\templates\station_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571f30332189f8_58781660',
  'file_dependency' => 
  array (
    'b4d5e45f70023fa1f6918200d8eaefc344f3f18e' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\super\\Web\\templates\\station_index.html',
      1 => 1461661744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_571f30332189f8_58781660 ($_smarty_tpl) {
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
			<div class="panel admin-panel">
				<div class="panel-head"><strong>防疫站列表</strong></div>
				<div class="padding border-bottom">
					<form class="form-inline input-auto" action="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
">
						<input type="hidden" name="a" value="st">
						<div class="form-group">
							<div class="label"><label for="stationNum">防疫站编号：</label></div>
							<div class="field"><input type="text" class="input" name="stationNum" value="<?php echo $_smarty_tpl->tpl_vars['paras']->value['stationNum'];?>
"></div>
						</div>
						<div class="form-group">
							<div class="label"><label for="stationStatus">防疫站状态：</label></div>
							<div class="field">
								<select name="stationStatus" class="input">
									<option value="0">请选择：</option>
									<option value="1"<?php if ($_smarty_tpl->tpl_vars['paras']->value['stationStatus'] == 1) {?> selected="selected"<?php }?>>未审核</option>
									<option value="2"<?php if ($_smarty_tpl->tpl_vars['paras']->value['stationStatus'] == 2) {?> selected="selected"<?php }?>>审核通过</option>
									<option value="3"<?php if ($_smarty_tpl->tpl_vars['paras']->value['stationStatus'] == 3) {?> selected="selected"<?php }?>>停止使用</option>
									<option value="4"<?php if ($_smarty_tpl->tpl_vars['paras']->value['stationStatus'] == 4) {?> selected="selected"<?php }?>>审核失败</option>
								</select>
							</div>
						</div>
						<div class="form-button">
							<button class="button buttion-small">查询</button>
						</div>
					</form>
				</div>
				<table class="table table-hover">
					<tr>
						<th>选择</th>
						<th>防疫站编号</th>
						<th>防疫站名字</th>
						<th>防疫站的地址</th>
						<th>防疫站电话</th>
						<th>疫苗数量</th>
						<th>防疫站状态</th>
						<th>操作</th>
					</tr>
					<?php
$_from = $_smarty_tpl->tpl_vars['stationList']->value;
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
						<td><input type="checkbox" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"></td>
						<td><?php echo $_smarty_tpl->tpl_vars['list']->value['station_num'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['list']->value['station_name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['list']->value['station_address'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['list']->value['station_phone'];?>
</td>
						<td><a href="javascript:void(0);" title="疫苗数量" class="badge bg-main"><?php echo $_smarty_tpl->tpl_vars['list']->value['vero_counts'];?>
</a></td>
						<td>
						<?php if ($_smarty_tpl->tpl_vars['list']->value['station_status'] == 0) {?>待审核
						<?php } elseif ($_smarty_tpl->tpl_vars['list']->value['station_status'] == 1) {?>审核通过
						<?php } elseif ($_smarty_tpl->tpl_vars['list']->value['station_status'] == 2) {?>停用
						<?php } elseif ($_smarty_tpl->tpl_vars['list']->value['station_status'] == 3) {?>审核失败
						<?php }?>
						</td>
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=st&e=sd&i=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" class="button button-small" onclick="jf.load();">详情</a></td>
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
		</div>
	</body>
</html><?php }
}
