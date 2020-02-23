<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-22 18:13:46
  from '/vagrant/templates/tpl/declaration_show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e516f5a2b1003_57254892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccdeb5a5105d99266309c631cf40db36e1ab893c' => 
    array (
      0 => '/vagrant/templates/tpl/declaration_show.tpl',
      1 => 1582391828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e516f5a2b1003_57254892 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php echo $_smarty_tpl->tpl_vars['my_declaration']->value['title'];?>

<br>
<?php echo $_smarty_tpl->tpl_vars['my_declaration']->value['declarer_id'];?>

<?php echo $_smarty_tpl->tpl_vars['my_declaration']->value['texts'];?>

期限：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['my_declaration']->value['period'],"%Y年 %m月 %d日");?>

<br><br>
<?php if ($_smarty_tpl->tpl_vars['my_declaration']->value['flag'] == 1) {?>
<div style="display:inline-flex">
  <span class="mgr-btn">
    <form action="./declaration_complete.php" method="post" onsubmit="return complete_check()">
      <input type="hidden" name="complete_id" value="<?php echo $_smarty_tpl->tpl_vars['my_declaration']->value['id'];?>
">
      <input type="submit" name="complete" value="達成!">
    </form>
  </span>
<form action="./declaration_faild.php" method="post" onsubmit="return faild_check()">
  <input type="hidden" name="faild_id" value="<?php echo $_smarty_tpl->tpl_vars['my_declaration']->value['id'];?>
">
  <input type="submit" name="faild" value="撤回…？">
</form>
</div>
<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
