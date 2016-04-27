<?php
/* Smarty version 3.1.29, created on 2016-04-27 00:58:19
  from "G:\wamp\www\bishe\Web\templates\station_info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57200eab218394_96547638',
  'file_dependency' => 
  array (
    '3566ed962d5c4495f6392f773053324c7307f78d' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\Web\\templates\\station_info.html',
      1 => 1461682021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_57200eab218394_96547638 ($_smarty_tpl) {
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
			<?php if ($_smarty_tpl->tpl_vars['stationInfo']->value['station']['station_status'] != 2 && $_smarty_tpl->tpl_vars['adminInfo']->value['admin_role'] == 1) {?>
			<div class="panel">
				<div class="panel-head">
					<strong>审核操作：</strong>
					<?php if ($_smarty_tpl->tpl_vars['stationInfo']->value['station']['station_status'] != 1) {?>
					<button class="button button-small bg-main stationPass" data-toggle="<?php echo $_smarty_tpl->tpl_vars['stationInfo']->value['station']['id'];?>
">审核通过</button>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['stationInfo']->value['station']['station_status'] != 3) {?>
					<button class="button button-small bg-red stationFail" data-toggle="<?php echo $_smarty_tpl->tpl_vars['stationInfo']->value['station']['id'];?>
">审核失败</button>
					<?php }?>
				</div>
			</div>
			<?php }?>
			<div class="panel" style="margin-top:20px;">
				<div class="panel-head"><strong>防疫站详情</strong></div>
				<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_role'] == 1) {?>
				<div class="padding border-bottom">
					<form class="form-inline input-auto" action="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
">
						<div class="form-group">
							<input type="hidden" name="a" value="st">
							<input type="hidden" name="e" value="sd">
							<div class="label"><label for="stationNum">防疫站编号：</label></div>
							<div class="field">
							<input type="text" name="stationNum" class="input" value="<?php if ($_smarty_tpl->tpl_vars['paras']->value['stationNum'] != null) {
echo $_smarty_tpl->tpl_vars['paras']->value['stationNum'];
} else {
echo $_smarty_tpl->tpl_vars['stationInfo']->value['station']['station_num'];
}?>" />
							</div>
						</div>
						<div class="form-button">
							<button class="button button-small">查询</button>	
						</div>
					</form>
				</div>
				<?php }?>
				<div class="panel-body" style="margin-bottom:20px;">
					<ul class="list-group">
					<li>
						<span style="width:20%;display:inline-block;"><strong>防疫站编号：</strong><?php echo $_smarty_tpl->tpl_vars['stationInfo']->value['station']['station_num'];?>
</span>
						<span style="width:35%;display:inline-block;"><strong>防疫站名称：</strong><?php echo $_smarty_tpl->tpl_vars['stationInfo']->value['station']['station_name'];?>
</span>
						<span style="width:20%;display:inline-block;"><strong>防疫站电话：</strong><?php echo $_smarty_tpl->tpl_vars['stationInfo']->value['station']['station_phone'];?>
</span>
						<span style="width:20%;display:inline-block;"><strong>防疫站创建时间：</strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['stationInfo']->value['station']['create_time'],'%Y-%m-%d');?>
</span>
					</li>
					<li>
					<div class="x6" style="max-height:20px;"><strong>防疫站地址：</strong><?php echo $_smarty_tpl->tpl_vars['stationInfo']->value['station']['station_address'];?>
  <a href="" target="_blank" title="在地图上查看"><small>（在地图中查看）</small></a></div>
					<div class="x6"><strong>防疫站状态：</strong>
						<?php if ($_smarty_tpl->tpl_vars['stationInfo']->value['station']['station_status'] == 0) {?>
						未审核
						<?php } elseif ($_smarty_tpl->tpl_vars['stationInfo']->value['station']['station_status'] == 1) {?>
						审核通过
						<?php } elseif ($_smarty_tpl->tpl_vars['stationInfo']->value['station']['station_status'] == 2) {?>
						停用
						<?php } elseif ($_smarty_tpl->tpl_vars['stationInfo']->value['station']['station_status'] == 3) {?>
						审核未过
						<?php }?>
					</div>
					</li>
					</ul>
				</div>
			</div>
			<div class="panel" style="margin-top:20px;">
				<div class="panel-head"><a href="javascript:void(0);" class="cuttle"><strong>防疫站描述</strong></a> <small>(点击展开)</small></div>
				<div class="panel-body hidden">
					<?php echo $_smarty_tpl->tpl_vars['stationInfo']->value['station']['station_description'];?>

				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_role'] == 1) {?>
			<div class="panel" style="margin-top:20px;">
				<div class="panel-head"><strong>疫苗情况</strong></div>
				<div class="panel-body">
					<table class="table table-hover">
						<tr>
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
							<td><?php echo $_smarty_tpl->tpl_vars['list']->value['vero_num'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['list']->value['vero_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['list']->value['vero_instruction'];?>
</td>
							<?php if ($_smarty_tpl->tpl_vars['list']->value['vero_status'] == 0) {?>
							<td>未审核</td>
							<td>
								<a href="javascript:void(0);" title="通过" data-target="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" data-toggle="pass" class="button button-small bg-main veroVerify">通过</a>
								<a href="javascript:void(0);" title="失败" data-target="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" data-toggle="fail"  class="button button-small bg-red veroVerify">失败</a>
							</td>
							<?php } elseif ($_smarty_tpl->tpl_vars['list']->value['vero_status'] == 1) {?>
							<td>正常使用</td>
							<td><a href="javascript:void(0);" title="失败" data-target="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" data-toggle="fail"  class="button button-small bg-red veroVerify">失败</td>
							<?php } elseif ($_smarty_tpl->tpl_vars['list']->value['vero_status'] == 2) {?>
							<td>停用</td>
							<td></td>
							<?php } elseif ($_smarty_tpl->tpl_vars['list']->value['vero_status'] == 3) {?>
							<td>审核失败</td>
							<td><a href="javascript:void(0);" title="通过" data-target="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" data-toggle="pass"  class="button button-small bg-main veroVerify">通过</a></td>
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
				<div class="panel-foot text-center"><?php echo $_smarty_tpl->tpl_vars['stationInfo']->value['pager'];?>
</div>
			</div>
			<?php }?>
		</div>
		<?php echo '<script'; ?>
>
			$(function(){
				$('.cuttle').click(function(){
					var p=$(this).closest('.panel');
					var body=p.find('.panel-body');
					if(body.hasClass('hidden')){
						body.removeClass('hidden');
					}else{
						body.addClass('hidden');
					}
				});
				$('.pass').click(function(){

				});
				$('.fail').click(function(){

				});
			});
		<?php echo '</script'; ?>
>
	</body>
</html><?php }
}
