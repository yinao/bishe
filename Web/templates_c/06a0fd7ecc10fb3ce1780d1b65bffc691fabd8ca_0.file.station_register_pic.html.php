<?php
/* Smarty version 3.1.29, created on 2016-05-28 02:32:24
  from "G:\wamp\www\bishe\Web\templates\station_register_pic.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57490338407c28_74583274',
  'file_dependency' => 
  array (
    '06a0fd7ecc10fb3ce1780d1b65bffc691fabd8ca' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\Web\\templates\\station_register_pic.html',
      1 => 1464402735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_57490338407c28_74583274 ($_smarty_tpl) {
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/upload.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/jquery.wallform.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			$(function(){
				$('#loadFile').off('click').on('change', function(){
					var btn = $(".upload");
					var status = $(".loadStatus");
					$("#imageform1").ajaxForm({
						target: "#preview1", 
						beforeSubmit:function(){
							status.removeClass('hidden');
							btn.hide();
						}, 
						success:function(){
							status.hide();
						}, 
						error:function(){
							status.hide();
							btn.show();
					} }).submit();
				});
				$('#loadFile2').off('click').on('change',function(){
					var btn=$('.upload2');
					var status=$('.loadStatus2');
					$('#imageform2').ajaxForm({
						target:'#preview2',
						beforeSubmit:function(){
							status.removeClass('hidden');
							btn.hide();
						},
						success:function(){
							status.addClass('hidden');
							btn.show();
						},
						error:function(){
							status.addClass('hidden');
							status.show();
						}
					}).submit();
				});
			});
		<?php echo '</script'; ?>
>
		<style type="text/css">
		.preview{
			min-height: 100px;
			max-height: auto;
		}
		.preview img{
			max-height: 100px;
			margin-left: 20px;
			margin-top: 10px;
		}
		.preview span{
			z-index: 999;
			color: red;
			cursor: pointer;
			margin-left: -10px;
		}
		</style>
	</head>

	<body>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<div class="admin">
			<div class="panel">
				<div class="panel-head"><strong>防疫站图片管理</strong></div>
				<div class="panel-body">
					<form id="imageform1" method="post" enctype="multipart/form-data" class="form form-x" action="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=st&e=stPic" onsubmit="return false;">
						<div class="form-group">
							<div class="label"><label>上传封面图片：</label></div>
							<div class="field">
								<?php if ($_smarty_tpl->tpl_vars['stationPic']->value['cover']['station_picture'] == " ") {?>
								<input type="hidden" name="act" value="update" />
								<div class="loadStatus hidden"><img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/loader.gif"></div>
								<div class="upload">
								<a class="input-file button" href="javascript:void(0);">+ 浏览文件<input id="loadFile" size="100" type="file" name="pic" value=""/></a>
								</div>
								<div class="preview" id="preview1">
									
								</div>
								<?php } else { ?>
								<div class="preview" id="preview1">
									<img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Uploads/<?php echo $_smarty_tpl->tpl_vars['stationPic']->value['cover']['picture_url'];?>
">
									<span class="close" title="删除" data-tog="cover" onclick="del(this);"></span>
								</div>
								<?php }?>

							</div>
						</div>
					</form>
				</div>
				<div class="panel-body">
					<form id="imageform2" method="post" enctype="multipart/form-data" class="form form-x" action="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=st&e=stPic" onsubmit="return false;">
						<div class="form-group">
							<div class="label"><label>上传图片介绍：</label></div>
							<div class="field">
								<input type="hidden" name="act" value="insert" />
								<div class="loadStatus2 hidden"><img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/loader.gif"></div>
								<div class="upload2">
								<a class="input-file button" href="javascript:void(0);">+ 浏览文件<input id="loadFile2" size="100" type="file" name="pic" value=""/></a>
								</div>
								<div class="preview" id="preview2">
								<?php
$_from = $_smarty_tpl->tpl_vars['stationPic']->value['pic'];
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
									<img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['picture_url'];?>
">
									<span class="close" title="删除" data-tog="pic" data-pic="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="del(this);"></span>
								<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/admin.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
		//jf.load();
			function del(obj){
				//alert('shanchu');
				jf.load();
				$.ajax({
					url:"<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=st&e=stPic",
					type:"POST",
					data:"tog="+$(obj).attr('data-tog')+"&pic="+$(obj).attr('data-pic'),
					timeout:6000,
					dataType:"json",
					success:function(data){
						jf.hide();
						if(data.status==1){
							window.location.reload();
						}else{
							alert("删除失败");
						}
					},
					error:function(data){

					}
				});
			}
		<?php echo '</script'; ?>
>
		</div>
	</body>
</html><?php }
}
