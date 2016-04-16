<?php
/* Smarty version 3.1.29, created on 2016-04-15 20:19:07
  from "/var/www/bishe/Web/templates/head.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5710dc3b5091d3_46724484',
  'file_dependency' => 
  array (
    '8583750c19ed3bd2a596e364149676ef7f60b8b6' => 
    array (
      0 => '/var/www/bishe/Web/templates/head.html',
      1 => 1460722684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5710dc3b5091d3_46724484 ($_smarty_tpl) {
?>

		<div class="lefter">
			<div class="logo">
				<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/logo.png" alt="后台管理系统" /></a>
			</div>
		</div>
		<div class="righter nav-navicon" id="admin-nav">
			<div class="mainer">
				<div class="admin-navbar">
					<span class="float-right">
                    <!--<a class="button button-little bg-main" href="#">前台首页</a>-->
                    <a class="button button-little bg-yellow" href="login.html">注销登录</a>
                </span>
					<ul class="nav nav-inline admin-nav">
						<li<?php echo $_smarty_tpl->tpl_vars['indexActive']->value;?>
>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
" class="icon-home"> 开始</a>
							<ul>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php?a=s">系统设置</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php?a=c">内容管理</a></li>
								<li><a href="#">订单管理</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php?a=u">会员管理</a></li>
								<li><a href="#">文件管理</a></li>
								<li><a href="#">栏目管理</a></li>
							</ul>
						</li>
						<li<?php echo $_smarty_tpl->tpl_vars['sysActive']->value;?>
>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=s" class="icon-cog"> 系统</a>
							<ul>
								<li><a href="#">全局设置</a></li>
								<li class="active"><a href="#">系统设置</a></li>
								<li><a href="#">会员设置</a></li>
								<li><a href="#">积分设置</a></li>
							</ul>
						</li>
						<li<?php echo $_smarty_tpl->tpl_vars['conActive']->value;?>
>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=c" class="icon-file-text"> 内容</a>
							<ul>
								<li<?php echo $_smarty_tpl->tpl_vars['addActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=c&e=a">添加内容</a></li>
								<li<?php echo $_smarty_tpl->tpl_vars['mActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=c">内容管理</a></li>
								<li<?php echo $_smarty_tpl->tpl_vars['sortActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=c&e=s">分类设置</a></li>
								<li><a href="#">链接管理</a></li>
							</ul>
						</li>
						<li><a href="#" class="icon-shopping-cart"> 订单</a></li>
						<li<?php echo $_smarty_tpl->tpl_vars['userActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=u" class="icon-user"> 会员</a></li>
						<li><a href="#" class="icon-file"> 文件</a></li>
						<li><a href="#" class="icon-th-list"> 栏目</a></li>
					</ul>
				</div>
				<div class="admin-bread">
					<span>您好，admin，欢迎您的光临。</span>
					<ul class="bread">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
" class="icon-home"> 开始</a></li>
						<?php echo $_smarty_tpl->tpl_vars['bread']->value;?>

					</ul>
				</div>
			</div>
		</div><?php }
}
