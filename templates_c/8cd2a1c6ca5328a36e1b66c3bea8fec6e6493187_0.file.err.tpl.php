<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-20 14:25:24
  from '/vagrant/templates/err.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4e96d4dc85f4_06591421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cd2a1c6ca5328a36e1b66c3bea8fec6e6493187' => 
    array (
      0 => '/vagrant/templates/err.tpl',
      1 => 1581772278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./tpl/mypage_header.tpl' => 1,
    'file:./tpl/mypage_footer.tpl' => 1,
  ),
),false)) {
function content_5e4e96d4dc85f4_06591421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./tpl/mypage_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <h1><?php echo $_smarty_tpl->tpl_vars['db_err']->value;?>
</h1>
 <h2><?php echo $_smarty_tpl->tpl_vars['err_msg']->value;?>
</h2>
 <h3>err:<?php echo $_smarty_tpl->tpl_vars['check']->value;?>
</h3>
<?php $_smarty_tpl->_subTemplateRender("file:./tpl/mypage_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
