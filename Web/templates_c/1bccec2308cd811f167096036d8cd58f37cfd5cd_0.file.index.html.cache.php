<?php
/* Smarty version 3.1.29, created on 2016-04-02 23:07:09
  from "/var/www/bishe/Web/templates/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ffe01da5c0a7_73126994',
  'file_dependency' => 
  array (
    '1bccec2308cd811f167096036d8cd58f37cfd5cd' => 
    array (
      0 => '/var/www/bishe/Web/templates/index.html',
      1 => 1459600120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
    'file:foot.html' => 1,
  ),
),false)) {
function content_56ffe01da5c0a7_73126994 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '212458525556ffe01da46b73_91368221';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
