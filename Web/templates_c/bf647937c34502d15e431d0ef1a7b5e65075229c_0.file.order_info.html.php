<?php
/* Smarty version 3.1.29, created on 2016-05-08 13:18:26
  from "G:\wamp\www\bishe\Web\templates\order_info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572f3ca2ce6f69_87857419',
  'file_dependency' => 
  array (
    'bf647937c34502d15e431d0ef1a7b5e65075229c' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\Web\\templates\\order_info.html',
      1 => 1462713504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_572f3ca2ce6f69_87857419 ($_smarty_tpl) {
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
				<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_role'] == 0) {?>
				<div class="panel" style="margin-bottom:10px">
					<div class="panel-head">
						<strong>预约单操作：</strong>
						<?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['record']['is_dealed'] != 1) {?>
						<a href="javascript:void(0);" data-toggle="<?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['record']['id'];?>
" data-target="1" class="button small-button bg-red orderUsed">使用</a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['record']['is_dealed'] == 0) {?>
						<a href="javascript:void(0);" data-toggle="<?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['record']['id'];?>
" data-target="2" class="button small-button bg-red orderUsed">过期</a>
						<?php }?>
					</div>
				</div>
				<?php }?>
				<div class="panel" style="margin-bottom:10px;">
					<div class="panel-head"><strong>订单详情</strong></div>
					<div class="panel-body">
						<form action="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php" method="get" class="form-inline input-auto">
							<div class="form-group">
								<div class="label"><label for="orderNum">订单号：</label></div>
								<div class="field">
									<input type="hidden" name="a" value="o">
									<input type="hidden" name="e" value="info">
									<input type="text" name="orderNum" id="orderNum" class="input" value="<?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['record']['order_num'];?>
"/>
								</div>
							</div>
							<div class="form-button">
								<button type="submit" class="button button-small">查询</button>
							</div>
						</form>
						<div style="margin:5px;">
							<strong>预约接种时间：</strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderInfo']->value['record']['order_time'],'%Y-%m-%d');?>


							<strong class="margin-left">预约单状态：</strong>
									<?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['record']['is_dealed'] == 0) {?>未使用
									<?php } elseif ($_smarty_tpl->tpl_vars['orderInfo']->value['record']['is_dealed'] == 1) {?>已使用
									<?php } elseif ($_smarty_tpl->tpl_vars['orderInfo']->value['record']['is_dealed'] == 2) {?>已过期
									<?php }?>
						</div>
					</div>
				</div>
				<div class="x4">
					<div class="panel">
						<div class="panel-head"><strong>预约客户信息</strong></div>
						<div class="panel-body">
							<ul class="list-group">
								<li><strong>预约者手机：</strong><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['user']['user_phone'];?>
</li>
								<li><strong>接种者姓名：</strong><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['user']['name'];?>
</li>
								<li><strong>接种者性别：</strong><?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['user']['sex'] == 1) {?>男<?php } elseif ($_smarty_tpl->tpl_vars['orderInfo']->value['uesr']['sex'] == 0) {?>女<?php }?></li>
								<li><strong>接种者年龄：</strong><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['user']['age'];?>
岁</li>
								<li><strong>接种者身高：</strong><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['user']['height'];?>
cm</li>
								<li><strong>接种者体重：</strong><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['user']['weigh'];?>
kg</li>
								<li><strong>接种者健康状况：</strong><?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['user']['healthy'] == 0) {?>良好<?php } elseif ($_smarty_tpl->tpl_vars['orderInfo']->value['user']['healthy'] == 1) {?>较好<?php } elseif ($_smarty_tpl->tpl_vars['orderInfo']->value['user']['healthy'] == 2) {?>不太好<?php }?></li>
								<li><strong>创建时间：</strong><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['user']['create_time'];?>
</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="x4">
					<div class="panel">
						<div class="panel-head"><strong>接种站信息</strong></div>
						<div class="panel-body">
							<ul class="list-group">
								<li><strong>接种站名字：</strong><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['station']['station_name'];?>
</li>
								<li><strong>接种站电话：</strong><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['station']['station_phone'];?>
</li>
								<li><strong>接种站地址：</strong><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['station']['station_address'];?>
</li>
								<li><strong>接种站编号：</strong><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['station']['station_num'];?>
</li>
								<li><strong>接种站介绍：</strong><a href="javascript:void(0);" class="button button-small border-blue" title="图片介绍">图片介绍</a><a href="javascript:void(0);" class="button button-small border-green" title="文字介绍">文字介绍</a></li>
								<li><strong>接种站状态：</strong><?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['station']['station_status'] == 0) {?>未通过验证<?php } elseif ($_smarty_tpl->tpl_vars['orderInfo']->value['station']['station_status'] == 1) {?>正常营业中<?php } elseif ($_smarty_tpl->tpl_vars['orderInfo']->value['station']['station_status'] == 2) {?>停止使用<?php }?></li>
								<li><strong>接种站创建时间：</strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderInfo']->value['station']['create_time'],'%Y-%m-%d');?>
</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="x4">
					<div class="panel">
						<div class="panel-head"><strong>预约疫苗信息</strong></div>
						<div class="panel-body">
							<ul class="list-group">
								<li><strong>疫苗编号：</strong><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['vero']['vero_num'];?>
</li>
								<li><strong>疫苗名字：</strong><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['vero']['vero_name'];?>
</li>
								<li><strong>疫苗描述：</strong><a href="javascript:void(0);" title="文字介绍" class="icon-external-link"></a><!-- $orderInfo.vero.vero_instruction --></li>
								<li><strong>疫苗状态：</strong><?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['vero']['vero_status'] == 0) {?>未验证<?php } elseif ($_smarty_tpl->tpl_vars['orderInfo']->value['vero']['vero_status'] == 1) {?>正在使用<?php } elseif ($_smarty_tpl->tpl_vars['orderInfo']->value['vero']['vero_status'] == 2) {?>停用<?php }?></li>
								<li><strong>疫苗创建时间：</strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderInfo']->value['vero']['create_time'],'%Y-%m-%d');?>
</li>
							</ul>
						</div>
					</div>
				</div>
		</div>
	</body>
</html><?php }
}
