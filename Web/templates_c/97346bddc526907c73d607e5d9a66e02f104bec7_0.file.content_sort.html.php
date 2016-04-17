<?php
/* Smarty version 3.1.29, created on 2016-04-17 04:38:41
  from "G:\wamp\www\bishe\Web\templates\content_sort.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571313515ec1e8_09698244',
  'file_dependency' => 
  array (
    '97346bddc526907c73d607e5d9a66e02f104bec7' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\Web\\templates\\content_sort.html',
      1 => 1460812654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_571313515ec1e8_09698244 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'G:\\wamp\\www\\bishe\\Web\\libs\\plugins\\modifier.date_format.php';
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
			<form method="post">
				<div class="panel admin-panel">
					<div class="panel-head"><strong>内容分类列表</strong></div>
					<div class="padding border-bottom">
						<input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
						<input type="button" class="button button-small border-green dialogs" name="addS" data-toggle="click" data-target="#sortAdd" data-mask="1" data-width="50%" value="添加类别" />
						<input type="button" class="button button-small border-yellow sortAll" value="批量删除" />
						<!-- <input type="button" class="button button-small border-blue" value="回收站" /> -->
					</div>
					<table class="table table-hover">
						<tr>
							<th width="45">选择</th>
							<th width="*">类别名称</th>
							<th width="220">时间</th>
							<th width="200">操作</th>
						</tr>
						<?php
$_from = $_smarty_tpl->tpl_vars['sortList']->value;
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
							<td><input type="checkbox" name="id" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[0];?>
"></td>
							<td><?php echo $_smarty_tpl->tpl_vars['list']->value[1];?>
</td>
							<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value[2],'%Y-%m-%d');?>
</td>
							<td>
								<a class="button sortEdit border-blue button-little dialogs" data-toggle="click" data-target="#sortAdd" data-mask="1" data-width="50%" href="javascript:void(0);">编辑</a>
								<a class="button border-yellow button-little sortDel" href="javascript:void(0);">删除</a>
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
			</form>
		</div>
		<div id="sortAdd">
			<div class="dialog">
				<div class="dialog-head">
					<span class="close rotate-hover"></span><strong>添加内容类别</strong>
				</div>
				<div class="dialog-body">
					<label for="sortName">类别名称：</label>
					<input class="input input-auto sortName" name="sortName" value="" />
				</div>
				<div class="dialog-foot">
					<button class="button dialog-close">
						取消</button>
					<button class="button bg-green sortSub" data-toggle="a">
						确认</button>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
