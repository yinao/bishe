<?php
/* Smarty version 3.1.29, created on 2016-04-26 07:45:47
  from "G:\wamp\www\bishe\super\Web\templates\order_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571f1cab3bdb86_11527807',
  'file_dependency' => 
  array (
    'b35d3fb94b337d75827bb1bbcea6ade8c6f84462' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\super\\Web\\templates\\order_index.html',
      1 => 1461656745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_571f1cab3bdb86_11527807 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'G:\\wamp\\www\\bishe\\super\\Web\\libs\\plugins\\modifier.date_format.php';
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
					<div class="panel-head"><strong>订单列表</strong></div>
					<div class="padding border-bottom">
						<!-- <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" /> -->
						<form method="get" class="form-inline form-auto" action="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=o">
							<input type="hidden" name="a" value="o">
							<div class="form-group">
								<div class="label"><label for="orderNum">订单号：</label></div>
								<div class="field"><input type="text" class="input" name="orderNum" id="orderNum" value=""></div>
							</div>
							<div class="form-group">
								<div class="label"><label for="phone">手机号：</label></div>
								<div class="field"><input type="text" class="input" name="phone" id="phone" value=""/></div>
							</div>
							<div class="form-group">
								<div class="label"><label for="stationNum">防疫站编号：</label></div>
								<div class="field"><input type="text" class="input" name="stationNum" id="stationNum" value=""></div>
							</div>
							<div class="form-group">
								<div class="label"><label for="veroNum">疫苗编号：</label></div>
								<div class="field"><input type="text" class="input" name="veroNum" id="veroNum" value=""/></div>
							</div>
							<div class="form-button">
								<button class="button button-small">查询</button>
							</div>
						</form>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<tr>
								<th><a href="javascript:void(0);">全选</a></th>
								<th>预约单号</th>
								<th>客户手机号</th>
								<th>防疫站编号</th>
								<th>疫苗编号</th>
								<th>预约时间</th>
								<th>创建时间</th>
								<th>订单状态</th>
								<th>操作</th>
							</tr>
							<?php
$_from = $_smarty_tpl->tpl_vars['orderList']->value;
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
								<td><input type="checkbox" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['record_id'];?>
"></td>
								<td><a href="javascript:void(0);"> <?php echo $_smarty_tpl->tpl_vars['list']->value['order_num'];?>
</a></td>
								<td><?php echo $_smarty_tpl->tpl_vars['list']->value['user_phone'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['list']->value['station_num'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['list']->value['vero_num'];?>
</td>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['order_time'],'%Y-%m-%d');?>
</td>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['create_time'],'%Y-%m-%d');?>
</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['list']->value['is_dealed'] == 0) {?>未使用
									<?php } elseif ($_smarty_tpl->tpl_vars['list']->value['is_dealed'] == 1) {?>已使用
									<?php } elseif ($_smarty_tpl->tpl_vars['list']->value['is_dealed'] == 2) {?>已过期
									<?php }?>
								</td>
								<td>
									<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=o&e=info&i=<?php echo $_smarty_tpl->tpl_vars['list']->value[0];?>
" class="button button-small border-green">编辑</a>
									<!-- <a href="javascript:void(0)" class="button button-small border-red orderdel">删除</a> -->
								</td>
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
					<?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

					</div>
				</div>
		</div>
	</body>
</html><?php }
}
