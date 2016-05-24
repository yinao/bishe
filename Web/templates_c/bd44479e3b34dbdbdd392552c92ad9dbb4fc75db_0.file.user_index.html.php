<?php
/* Smarty version 3.1.29, created on 2016-05-24 05:54:08
  from "G:\wamp\www\bishe\Web\templates\user_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5743ec806338b6_03578109',
  'file_dependency' => 
  array (
    'bd44479e3b34dbdbdd392552c92ad9dbb4fc75db' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\Web\\templates\\user_index.html',
      1 => 1464069243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_5743ec806338b6_03578109 ($_smarty_tpl) {
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
				<form>
				<div class="panel admin-panel">
					<div class="panel-head"><strong>内容列表</strong></div>
					<div class="padding border-bottom">
						<input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
						<input type="button" class="button button-small border-yellow userall" value="批量删除" />
						<a class="button button-small border-blue" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=u&d=<?php echo $_smarty_tpl->tpl_vars['tog']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['tog']->value[1];?>
</a>
					</div>
					<table class="table table-hover">
						<tr>
							<th width="60">选择</th>
							<th width="120">用户名</th>
							<th width="120">手机号</th>
							<th width="200">接种记录</th>
							<th width="200">创建ip地址</th>
							<th width="200">创建时间</th>
							<th width="200">账号状态</th>
							<!-- <th width="100">操作</th> -->
						</tr>
						<?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
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
							<td><input type="checkbox" name="id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
"></td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value[1];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value[2];?>
</td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=o&phone=<?php echo $_smarty_tpl->tpl_vars['v']->value[2];?>
" title="接种记录" target="_blank"><span class="icon-external-link"></span></a></td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value[4];?>
</td>
							<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value[5],'%Y-%m-%d');?>
</td>
							<!-- <td>
								<a class="button border-blue button-little" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&i=<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
">编辑</a>
								<a class="button border-yellow button-little userdel" data-target="<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
" href="javascript:void(0);">删除</a>
							</td> -->
							<td>
							<?php if ($_smarty_tpl->tpl_vars['v']->value[6] == 0) {?>
							启用
							<?php } else { ?>
							停用
							<?php }?>
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
					<div class="panel-foot text-center">
						<?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

					</div>
				</form>
				</div>
			<hr class="space">
		</div>
		
	</body>

</html><?php }
}
