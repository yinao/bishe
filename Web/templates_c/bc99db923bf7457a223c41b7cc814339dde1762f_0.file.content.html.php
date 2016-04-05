<?php
/* Smarty version 3.1.29, created on 2016-04-04 17:49:03
  from "/var/www/bishe/Web/templates/content.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5702388f0458a9_83637134',
  'file_dependency' => 
  array (
    'bc99db923bf7457a223c41b7cc814339dde1762f' => 
    array (
      0 => '/var/www/bishe/Web/templates/content.html',
      1 => 1459763154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_5702388f0458a9_83637134 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<div class="admin">
			<form method="post">
				<div class="panel admin-panel">
					<div class="panel-head"><strong>内容列表</strong></div>
					<div class="padding border-bottom">
						<input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
						<input type="button" class="button button-small border-green" value="添加文章" />
						<input type="button" class="button button-small border-yellow" value="批量删除" />
						<input type="button" class="button button-small border-blue" value="回收站" />
					</div>
					<table class="table table-hover">
						<tr>
							<th width="45">选择</th>
							<th width="120">分类</th>
							<th width="*">名称</th>
							<th width="100">时间</th>
							<th width="100">操作</th>
						</tr>
						<tr>
							<td><input type="checkbox" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></td>
							<td>起步</td>
							<td>下载拼图框架</td>
							<td>2014-10-1</td>
							<td>
								<a class="button border-blue button-little" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&e=e">编辑</a>
								<a class="button border-yellow button-little" onclick="isDelete();" href="">删除</a>
							</td>
						</tr>
						
					</table>
					<div class="panel-foot text-center">
						<ul class="pagination">
							<li><a href="#">上一页</a></li>
						</ul>
						<ul class="pagination pagination-group">
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
						</ul>
						<ul class="pagination">
							<li><a href="#">下一页</a></li>
						</ul>
					</div>
				</div>
			</form>
			<br />
			<p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="http://www.pintuer.com">拼图前端框架</a>构建</p>
		</div>
<?php echo '<script'; ?>
>
	function isDelete(){
		if(confirm('是否删除?')){
			return true;
		}else{
			return false;
		}
	}
<?php echo '</script'; ?>
>
		
	</body>

</html><?php }
}
