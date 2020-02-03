<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-21 04:29:56
  from '/vagrant/templates/err.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfd9fc4a679a6_55971028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce670b3b6fa9d3915f709cc62866177c676dceeb' => 
    array (
      0 => '/vagrant/templates/err.html',
      1 => 1576844544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfd9fc4a679a6_55971028 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>備品管理システム エラー</title>
</head>
<body>
  <h1>エラーが発生しました。申し訳ございません。</h1><br />

  <h3><?php echo $_smarty_tpl->tpl_vars['db_err']->value;?>
</h3>

       <button type="button" name ="back" onclick="history.back()">戻る</button>

</body>
</html>
<?php }
}
