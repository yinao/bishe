<?php
/* Smarty version 3.1.29, created on 2016-05-28 01:01:53
  from "G:\wamp\www\bishe\Web\templates\Index_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5748ee017b3290_73423117',
  'file_dependency' => 
  array (
    '234a282d5c8617dd0bef8577765b2d6afab59ce0' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\Web\\templates\\Index_index.html',
      1 => 1464397044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_5748ee017b3290_73423117 ($_smarty_tpl) {
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
			<div class="line-big">
				<div class="xm3">
					<div class="panel border-back">
						<div class="panel-body text-center">
							<img src="Public/face.jpg" width="120" class="radius-circle" />
							<br /> <?php echo $_smarty_tpl->tpl_vars['adminInfo']->value['admin_name'];?>

						</div>
					</div>
					<br />
					<div class="panel">
						<div class="panel-head"><strong>站点统计</strong></div>
						<ul class="list-group">
							<li><span class="float-right badge bg-red"><?php echo $_smarty_tpl->tpl_vars['indexInfo']->value[1];?>
</span><span class="icon-user"></span> 会员</li>
							<li><span class="float-right badge bg-main"><?php echo $_smarty_tpl->tpl_vars['indexInfo']->value[0];?>
</span><span class="icon-shopping-cart"></span> 订单</li>
							<li><span class="float-right badge bg-main"><?php echo $_smarty_tpl->tpl_vars['indexInfo']->value[2];?>
</span><span class="icon-file-text"></span> 内容</li>
							<li><span class="float-right badge bg-main"><?php echo $_smarty_tpl->tpl_vars['indexInfo']->value[3];?>
</span><span class="icon-file-text"></span> 防疫站</li>
						</ul>
					</div>
					<br />
				</div>
				<div class="xm9">
					<div class="alert alert-yellow" style="margin-bottom:20px;"><span class="close"></span><strong>注意：</strong>您有5条未读信息，<a href="#">点击查看</a>。</div>
					<div class="alert">
						<h4>预防接种系统介绍</h4>
						<p class="text-gray padding-top">预防接种系统是集防疫站为一体，进行统一审核管理的系统。手机客户端是基于APPCAN的手机混合应用，可一次生成安卓版本和IOS版本。减少了系统客户端的维护费用。</p>
					</div>
					<div class="panel" style="margin-top:20px;">
						<div class="panel-head"><strong>系统信息</strong></div>
						<table class="table">
							<tr>
								<th colspan="2">服务器信息</th>
							</tr>
							<tr>
								<td width="110" align="right">操作系统：</td>
								<td><?php echo $_smarty_tpl->tpl_vars['systemType']->value[0];?>
(<?php echo $_smarty_tpl->tpl_vars['systemType']->value[1];?>
)</td>
							</tr>
							<tr>
								<td align="right">Web服务器：</td>
								<td>Apache</td>
							</tr>
							<tr>
								<td align="right">程序语言：</td>
								<td>PHP <?php echo $_smarty_tpl->tpl_vars['lanague']->value;?>
</td>
							</tr>
							<tr>
								<td align="right">数据库：</td>
								<td>MySQL<?php echo $_smarty_tpl->tpl_vars['mysqlType']->value;?>
</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

		</div>

	</body>

</html><?php }
}
