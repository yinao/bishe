<?php
/* Smarty version 3.1.29, created on 2016-04-16 09:45:52
  from "/alidata/www/bishe/Web/templates/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571199502430f9_84844476',
  'file_dependency' => 
  array (
    '599231f7ee40a1fe19c979c663abb360eaa8ef7e' => 
    array (
      0 => '/alidata/www/bishe/Web/templates/index.html',
      1 => 1460771128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_571199502430f9_84844476 ($_smarty_tpl) {
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
							<br /> admin
						</div>
						<div class="panel-foot bg-back border-back">您好，admin，这是您第100次登录，上次登录为2014-10-1。</div>
					</div>
					<br />
					<div class="panel">
						<div class="panel-head"><strong>站点统计</strong></div>
						<ul class="list-group">
							<li><span class="float-right badge bg-red">88</span><span class="icon-user"></span> 会员</li>
							<li><span class="float-right badge bg-main">828</span><span class="icon-file"></span> 文件</li>
							<li><span class="float-right badge bg-main">828</span><span class="icon-shopping-cart"></span> 订单</li>
							<li><span class="float-right badge bg-main">828</span><span class="icon-file-text"></span> 内容</li>
							<li><span class="float-right badge bg-main">828</span><span class="icon-database"></span> 数据库</li>
						</ul>
					</div>
					<br />
				</div>
				<div class="xm9">
					<div class="alert alert-yellow"><span class="close"></span><strong>注意：</strong>您有5条未读信息，<a href="#">点击查看</a>。</div>
					<div class="alert">
						<h4>拼图前端框架介绍</h4>
						<p class="text-gray padding-top">拼图是优秀的响应式前端CSS框架，国内前端框架先驱及领导者，自动适应手机、平板、电脑等设备，让前端开发像游戏般快乐、简单、灵活、便捷。</p>
						<a target="_blank" class="button bg-dot icon-code" href="pintuer2.zip"> 下载示例代码</a>
						<a target="_blank" class="button bg-main icon-download" href="http://www.pintuer.com/download/pintuer.zip"> 下载拼图框架</a>
						<a target="_blank" class="button border-main icon-file" href="http://www.pintuer.com/"> 拼图使用教程</a>
					</div>
					<div class="panel">
						<div class="panel-head"><strong>系统信息</strong></div>
						<table class="table">
							<tr>
								<th colspan="2">服务器信息</th>
								<th colspan="2">系统信息</th>
							</tr>
							<tr>
								<td width="110" align="right">操作系统：</td>
								<td>Windows 2008</td>
								<td width="90" align="right">系统开发：</td>
								<td><a href="http://www.pintuer.com" target="_blank">拼图前端框架</a></td>
							</tr>
							<tr>
								<td align="right">Web服务器：</td>
								<td>Apache</td>
								<td align="right">主页：</td>
								<td><a href="http://www.pintuer.com" target="_blank">http://www.pintuer.com</a></td>
							</tr>
							<tr>
								<td align="right">程序语言：</td>
								<td>PHP</td>
								<td align="right">演示：</td>
								<td><a href="http://www.pintuer.com/demo/" target="_blank">demo/</a></td>
							</tr>
							<tr>
								<td align="right">数据库：</td>
								<td>MySQL</td>
								<td align="right">群交流：</td>
								<td><a href="http://shang.qq.com/wpa/qunwpa?idkey=a08e4d729d15d32cec493212f7672a6a312c7e59884a959c47ae7a846c3fadc1" target="_blank">201916085</a> (点击加入)</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="http://www.pintuer.com">拼图前端框架</a>构建</p>

		</div>

	</body>

</html><?php }
}
