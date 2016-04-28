<?php
/* Smarty version 3.1.29, created on 2016-04-27 17:23:05
  from "/alidata/www/bishe/Web/templates/head.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572084f94e8452_20040630',
  'file_dependency' => 
  array (
    'ab5bca0cc96af9191eb3ee0876f82d5b6838ae9d' => 
    array (
      0 => '/alidata/www/bishe/Web/templates/head.html',
      1 => 1461739029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572084f94e8452_20040630 ($_smarty_tpl) {
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
                    <a class="button button-little bg-yellow loginout" href="javascript:void(0);">注销登录</a>
                	</span>
                	<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_role'] == 1) {?>
					<ul class="nav nav-inline admin-nav">
						<li<?php echo $_smarty_tpl->tpl_vars['indexActive']->value;?>
>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
" class="icon-home"> 开始</a>
							<ul>
							<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_power'][4] == 1) {?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php?a=s">系统设置</a></li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_power'][0] == 1) {?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php?a=c">内容管理</a></li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_power'][3] == 1) {?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php?a=o">订单管理</a></li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_power'][2] == 1) {?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php?a=u">会员管理</a></li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_power'][1] == 1) {?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php?a=st">防疫站管理</a></li>
							<?php }?>
							</ul>
						</li>
						<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_power']['4'] == 1) {?>
						<li<?php echo $_smarty_tpl->tpl_vars['sysActive']->value;?>
>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=s" class="icon-cog"> 系统</a>
							<ul>
								<li<?php echo $_smarty_tpl->tpl_vars['sActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=s">系统设置</a></li>
								<li<?php echo $_smarty_tpl->tpl_vars['pActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=s&e=p">管理员设置</a></li>
							</ul>
						</li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_power'][0] == 1) {?>
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
							</ul>
						</li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_power'][3] == 1) {?>
						<li<?php echo $_smarty_tpl->tpl_vars['orderActive']->value;?>
>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=o" class="icon-shopping-cart"> 订单</a>
							<ul>
								<li<?php echo $_smarty_tpl->tpl_vars['omActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=o">订单管理</a></li>
								<li<?php echo $_smarty_tpl->tpl_vars['oiActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=o&e=info">订单详情</a></li>
								<li<?php echo $_smarty_tpl->tpl_vars['ocActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=o&e=oc">订单统计</a></li>
								<li><a href="">回收站</a></li>
							</ul>
						</li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_power'][2] == 1) {?>
						<li<?php echo $_smarty_tpl->tpl_vars['userActive']->value;?>
>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=u" class="icon-user"> 会员</a>
							<ul>
								<li class="active"><a href="">会员管理</a></li>
								<li><a href="javascript:void(0);">统计</a></li>
							</ul>
						</li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_power'][1] == 1) {?>
						<li<?php echo $_smarty_tpl->tpl_vars['staActive']->value;?>
>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=st" class="icon-th-list"> 防疫站</a>
							<ul>
								<li<?php echo $_smarty_tpl->tpl_vars['smActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=st">防疫站管理</a></li>
								<li<?php echo $_smarty_tpl->tpl_vars['sdActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=st&e=sd">防疫站详情</a></li>
							</ul>
						</li>
						<?php }?>
					</ul>
					<?php } elseif ($_smarty_tpl->tpl_vars['adminInfo']->value['admin_role'] == 0) {?>
						<ul class="nav nav-inline admin-nav">
						<!-- <li<?php echo $_smarty_tpl->tpl_vars['indexActive']->value;?>
>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
" class="icon-home"> 开始</a>
							<ul>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=s&e=p">管理员管理</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=o">预约单管理</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=st">防疫站信息管理</a></li>
							</ul>
						</li> -->
						<li<?php echo $_smarty_tpl->tpl_vars['staActive']->value;?>
>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=st" class="icon-th-list"> 防疫站</a>
							<ul>
								<li<?php echo $_smarty_tpl->tpl_vars['sdActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=st">防疫站信息管理</a></li>
								<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['station_id'] != 0) {?>
								<li<?php echo $_smarty_tpl->tpl_vars['veroActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=st&e=vero">疫苗管理</a></li>
								<?php }?>
							</ul>
						</li>
						<?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['station_id'] != 0) {?>
						<li<?php echo $_smarty_tpl->tpl_vars['orderActive']->value;?>
>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=o" class="icon-shopping-cart"> 预约单</a>
							<ul>
								<li<?php echo $_smarty_tpl->tpl_vars['omActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=o">订单管理</a></li>
								<li<?php echo $_smarty_tpl->tpl_vars['oiActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=o&e=info">订单详情</a></li>
								<li<?php echo $_smarty_tpl->tpl_vars['ocActive']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=o&e=oc">订单统计</a></li>
								<li><a href="">回收站</a></li>
							</ul>
						</li>
						
						<li<?php echo $_smarty_tpl->tpl_vars['sysActive']->value;?>
>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=s&e=p" class="icon-user"> 管理员</a>
							<ul>
								<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/index.php?a=s&e=p">管理员管理</a></li>
							</ul>
						</li>
						<?php }?>
						</ul>
					<?php }?>
				</div>
				<div class="admin-bread">
					<span>您好，<a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['adminInfo']->value['admin_name'];?>
</a>，欢迎您的光临。</span>
					<ul class="bread">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
" class="icon-home"> 开始</a></li>
						<?php echo $_smarty_tpl->tpl_vars['bread']->value;?>

					</ul>
				</div>
			</div>
		</div><?php }
}
