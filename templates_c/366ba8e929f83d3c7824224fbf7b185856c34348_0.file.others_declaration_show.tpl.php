<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 13:05:42
  from '/vagrant/templates/tpl/others_declaration_show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e53ca26f3a141_63969025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '366ba8e929f83d3c7824224fbf7b185856c34348' => 
    array (
      0 => '/vagrant/templates/tpl/others_declaration_show.tpl',
      1 => 1582549299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53ca26f3a141_63969025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div name="show">
<br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['my_declarations']->value, 'my_declaration');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['my_declaration']->value) {
?>
<br>
タイトル：<?php echo $_smarty_tpl->tpl_vars['my_declaration']->value['title'];?>

<br>
宣言者：<?php echo $_smarty_tpl->tpl_vars['my_declaration']->value['name'];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['my_declaration']->value['texts'];?>
<br>
宣言日：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['my_declaration']->value['dates'],"%Y年 %m月 %d日");?>
<br>
期限：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['my_declaration']->value['period'],"%Y年 %m月 %d日");?>

<br><br>

  <br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
