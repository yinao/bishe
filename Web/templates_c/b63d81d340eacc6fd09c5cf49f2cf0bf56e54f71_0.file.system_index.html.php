<?php
/* Smarty version 3.1.29, created on 2016-05-03 03:40:09
  from "G:\wamp\www\bishe\Web\templates\system_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57281d996b44e0_66902141',
  'file_dependency' => 
  array (
    'b63d81d340eacc6fd09c5cf49f2cf0bf56e54f71' => 
    array (
      0 => 'G:\\wamp\\www\\bishe\\Web\\templates\\system_index.html',
      1 => 1460793638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_57281d996b44e0_66902141 ($_smarty_tpl) {
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

			<div class="tab">
				<div class="tab-head">
					<strong>系统设置</strong>
					<ul class="tab-nav">
						<li class="active"><a href="#tab-set">系统设置</a></li>
						<li><a href="#tab-email">邮件设置</a></li>
						<li><a href="#tab-upload">上传设置</a></li>
						<li><a href="#tab-visit">访问限制</a></li>
					</ul>
				</div>
				<div class="tab-body">
					<br />
					<div class="tab-panel active" id="tab-set">
						<form method="post" class="form-x" action="system.html">
							<div class="form-group">
								<div class="label">
									<label>网站维护状态</label>
								</div>
								<div class="field">
									<div class="button-group button-group-small radio">
										<label class="button active">
											<input name="pintuer" value="yes" checked="checked" type="radio"><span class="icon icon-check"></span> 开启</label>
										<label class="button">
											<input name="pintuer" value="no" type="radio"><span class="icon icon-times"></span> 关闭</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="label">
									<label for="readme">维护说明</label>
								</div>
								<div class="field">
									<textarea class="input" rows="5" cols="50" placeholder="请填写维护说明" data-validate="required:请填写维护说明"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="label">
									<label for="sitename">网站名称</label>
								</div>
								<div class="field">
									<input type="text" class="input" id="sitename" name="sitename" size="50" placeholder="网站名称" data-validate="required:请填写你网站的名称" />
								</div>
							</div>
							<div class="form-group">
								<div class="label">
									<label for="siteurl">网址</label>
								</div>
								<div class="field">
									<input type="text" class="input" id="siteurl" name="siteurl" size="50" placeholder="请填写网址" data-validate="required:请填写网址" />
								</div>
							</div>
							<div class="form-group">
								<div class="label">
									<label for="logo">标志</label>
								</div>
								<div class="field">
									<a class="button input-file" href="javascript:void(0);">+ 浏览文件<input size="100" type="file" name="logo" data-validate="required:请选择上传文件,regexp#.+.(jpg|jpeg|png|gif)$:只能上传jpg|gif|png格式文件" /></a>
								</div>
							</div>
							<div class="form-group">
								<div class="label">
									<label for="title">优化标题</label>
								</div>
								<div class="field">
									<input type="text" class="input" id="title" name="title" size="50" placeholder="title标题内容，用于搜索引擎优化" data-validate="required:请填写优化标题，建议在80字以内。" />
								</div>
							</div>
							<div class="form-group">
								<div class="label">
									<label for="keywords">关键词</label>
								</div>
								<div class="field">
									<input type="text" class="input" id="keywords" name="keywords" size="50" placeholder="站点关键词，用于搜索引擎优化" data-validate="required:请填写站点关键词，建议在100字以内。" />
								</div>
							</div>
							<div class="form-group">
								<div class="label">
									<label for="desc">描述</label>
								</div>
								<div class="field">
									<input type="text" class="input" id="desc" name="desc" size="50" placeholder="网站的描述，用于搜索引擎优化" data-validate="required:请填写网站的描述，建议在200字以内。" />
								</div>
							</div>
							<div class="form-button">
								<button class="button bg-main" type="submit">提交</button>
							</div>
						</form>
					</div>
					<div class="tab-panel" id="tab-email">邮件设置</div>
					<div class="tab-panel" id="tab-upload">上传设置</div>
					<div class="tab-panel" id="tab-visit">访问限制</div>
				</div>
			</div>
			<p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="http://www.pintuer.com">拼图前端框架</a>构建</p>
		</div>

		<div class="hidden">
			<?php echo '<script'; ?>
 src="http://s4.cnzz.com/stat.php?id=5952475&web_id=5952475" language="JavaScript"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
>
				var _hmt = _hmt || [];
				(function() {
					var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
					document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F637f0fe043ea4b7f59c05d4491e27667' type='text/javascript'%3E%3C/script%3E"));
				})();
			<?php echo '</script'; ?>
>
		</div>
	</body>

</html><?php }
}
