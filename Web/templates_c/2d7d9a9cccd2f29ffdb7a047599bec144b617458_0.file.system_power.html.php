<?php
/* Smarty version 3.1.29, created on 2016-04-27 17:23:40
  from "/alidata/www/bishe/Web/templates/system_power.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5720851c240ee0_35238466',
  'file_dependency' => 
  array (
    '2d7d9a9cccd2f29ffdb7a047599bec144b617458' => 
    array (
      0 => '/alidata/www/bishe/Web/templates/system_power.html',
      1 => 1461739029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_5720851c240ee0_35238466 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/alidata/www/bishe/Web/libs/plugins/modifier.date_format.php';
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
			<div class="panel">
				<div class="panel-head"><strong>管理员管理</strong></div>
				<div class="panel-body">
					<form>
					<div class="border-bottom">
						<input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
						<input type="button" class="button button-small border-green dialogs" data-target="#gadd" data-mask="1" data-toggle="click" data-width="50%" value="添加管理员" />
						<input type="button" class="button button-small border-yellow gdall" value="批量删除" />
					</div>
					<table class="table table-hover">
						<tr>
							<th>选择</th>
							<th>管理员名</th>
							<th>管理员账号</th>
							<th>管理员权限</th>
							<th>管理员手机号</th>
							<th>创建时间</th>
							<th>操作</th>
						</tr>
							<?php
$_from = $_smarty_tpl->tpl_vars['mList']->value;
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
							<tr>
								<td>
									<input type="checkbox" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
" />
								</td>
								<td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_name'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_account'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_power'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_phone'];?>
</td>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['createTime'],'%Y-%m-%d');?>
</td>
								<td>
									<a href="javascript:void(0);" class="button button-small border-green dialogs gedit" data-target="#gadd" data-toggle="click" data-mask="1" data-width="50%">编辑</a>
									<a href="javascript:void(0);" data-target="<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
" class="button button-small border-red gdel">删除</a>
								</td>
							</tr>
							<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
					</table>
					</form>
				</div>
				<div class="panel-foot"></div>
			</div>
			<hr class="space"/>
		</div>
		<div id="gadd">
			<div class="dialog">
				<div class="dialog-head"><span class="close rotate-hover"></span><strong>对话框标题</strong></div>
				<div class="dialog-body form-inline">
					<div class="form-group padding">
						<div class="label">
							<label for="name">管理员名字：</label>
						</div>
						<div class="field">
							<input type="text" name="name" class="input input-auto" value=""/>
						</div>
					</div>
					<div class="form-group padding">
						<div class="label"><label for="account">登录账号：</label></div>
						<div class="field">
							<input type="text" name="account" class="input input-auto" value=""/>
						</div>
					</div>
					<div class="form-group padding">
						<div class="label"><label for="paw">登录密码：</label></div>
						<div class="field">
							<input type="text" name="paw" class="input input-auto" value=""/>
						</div>
					</div>
					<div class="form-group padding">
						<div class="label"><label for="phone">管理员手机号：</label></div>
						<div class="field">
							<input type="text" name="phone" class="input input-auto" value="">
						</div>
					</div>
					<div class="form-group padding">
						<div class="label"><label for="phone">管理员权限：</label></div>
						<div class="field">
							<div class="button-group border-green checkbox">
								<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_role'] == 1) {?>
								<label class="button">内容 </label> 
								<label class="button">防疫站 </label> 
								<label class="button">会员 </label>
								<label class="button">预约单 </label> 
								<label class="button">系统设置 </label> 
								<?php } elseif ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_role'] == 0) {?>
								<label class="button">防疫站</label>
								<label class="button">预约单</label>
								<label class="button">防疫站信息</label>
								<?php }?>
							</div>
						</div>
					</div>
					<div class="form-group padding">
					</div>
				</div>
				<div class="dialog-foot">
					<button class="button dialog-close">取消</button>
					<button class="button bg-green powerSub" data-toggle="a">确认</button>
				</div>
			</div>
		</div>
	</body>

</html><?php }
}
