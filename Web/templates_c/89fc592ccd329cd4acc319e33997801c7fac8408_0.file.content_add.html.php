<?php
/* Smarty version 3.1.29, created on 2016-04-14 20:22:59
  from "/var/www/bishe/Web/templates/content_add.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570f8ba39d20c7_00629264',
  'file_dependency' => 
  array (
    '89fc592ccd329cd4acc319e33997801c7fac8408' => 
    array (
      0 => '/var/www/bishe/Web/templates/content_add.html',
      1 => 1460636577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570f8ba39d20c7_00629264 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="renderer" content="webkit">
		<title>dfa</title>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/jquery.min.js"><?php echo '</script'; ?>
>
    	<?php echo '<script'; ?>
 charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/umeditor/umeditor.config.js"><?php echo '</script'; ?>
>
    	<?php echo '<script'; ?>
 charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/umeditor/umeditor.min.js"><?php echo '</script'; ?>
>
   		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/Public/umeditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
   		<?php echo '<script'; ?>
 type="text/javascript">
        var um = UM.getEditor('editor');
    <?php echo '</script'; ?>
>
	</head>
	<body>
		<?php echo '<script'; ?>
 type="text/plain" id="editor" style="width: 500px;height: 360px;"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
