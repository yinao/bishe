<?php
/* Smarty version 3.1.29, created on 2016-04-03 19:02:44
  from "/var/www/bishe/Web/templates/content_edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5700f85470fea2_94009456',
  'file_dependency' => 
  array (
    '9335c55967315f219db0541bf1f08af0d5a96694' => 
    array (
      0 => '/var/www/bishe/Web/templates/content_edit.html',
      1 => 1459681362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_5700f85470fea2_94009456 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="lefter">
			<div class="logo">
				<a href="http://www.pintuer.com" target="_blank"><img src="Public	/logo.png" alt="后台管理系统" /></a>
			</div>
		</div>
		<div class="righter nav-navicon" id="admin-nav">
			<div class="mainer">
				<div class="admin-navbar">
					<span class="float-right">
                    <a class="button button-little bg-main" href="#">前台首页</a>
                    <a class="button button-little bg-yellow" href="login.html">注销登录</a>
                </span>
					<ul class="nav nav-inline admin-nav">
						<li>
							<a href="index.html" class="icon-home"> 开始</a>
							<ul>
								<li><a href="system.html">系统设置</a></li>
								<li><a href="content.html">内容管理</a></li>
								<li><a href="#">订单管理</a></li>
								<li class="active"><a href="#">会员管理</a></li>
								<li><a href="#">文件管理</a></li>
								<li><a href="#">栏目管理</a></li>
							</ul>
						</li>
						<li>
							<a href="system.html" class="icon-cog"> 系统</a>
							<ul>
								<li><a href="#">全局设置</a></li>
								<li class="active"><a href="#">系统设置</a></li>
								<li><a href="#">会员设置</a></li>
								<li><a href="#">积分设置</a></li>
							</ul>
						</li>
						<li class="active">
							<a href="content.html" class="icon-file-text"> 内容</a>
							<ul>
								<li><a href="#">添加内容</a></li>
								<li class="active"><a href="#">内容管理</a></li>
								<li><a href="#">分类设置</a></li>
								<li><a href="#">链接管理</a></li>
							</ul>
						</li>
						<li><a href="#" class="icon-shopping-cart"> 订单</a></li>
						<li><a href="#" class="icon-user"> 会员</a></li>
						<li><a href="#" class="icon-file"> 文件</a></li>
						<li><a href="#" class="icon-th-list"> 栏目</a></li>
					</ul>
				</div>
				<div class="admin-bread">
					<span>您好，admin，欢迎您的光临。</span>
					<ul class="bread">
						<li><a href="index.html" class="icon-home"> 开始</a></li>
						<li><a href="content.html">内容</a></li>
						<li>内容管理</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="admin">
				<div class="panel admin-panel">
					<div class="panel-head"><strong>内容编辑</strong></div>
					<div class="panel-body">
					<form method="post" class="form-x">
					<div class="form-group">
						<div class="label">
							<label for="username">
								账号</label>
						</div>
						<div class="field">
							<input type="text" class="input input-auto" id="username" name="username" size="30" placeholder="手机/邮箱/账号" />
						</div>
					</div>
					</form>
					</div>
				</div>
			<br />
			<p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="http://www.pintuer.com">拼图前端框架</a>构建</p>
		</div>

		
	</body>

</html><?php }
}
