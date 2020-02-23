<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-23 12:28:58
  from '/vagrant/templates/search_results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e52700ac137d3_43320798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23578a714101989d9c94395f577143e63e9b3189' => 
    array (
      0 => '/vagrant/templates/search_results.tpl',
      1 => 1582448151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./tpl/mypage_header.tpl' => 1,
    'file:./tpl/mypage_footer.tpl' => 1,
  ),
),false)) {
function content_5e52700ac137d3_43320798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/vagrant/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:./tpl/mypage_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>宣言検索結果</h2><br>
ヒット数：<?php echo count($_smarty_tpl->tpl_vars['search_results']->value);?>
件<br><br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_results']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
<div name=search_result>
宣言タイトル: <?php echo $_smarty_tpl->tpl_vars['result']->value['title'];?>
<br>
宣言日： <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['result']->value['dates'],"%Y年 %m月 %d日");?>
<br>
宣言期日：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['result']->value['period'],"%Y年 %m月 %d日");?>
<br>
</div>
<br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:./tpl/mypage_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
