<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-21 09:00:40
  from '/vagrant/templates/complete.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfddf389ca5e8_17991387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57ce02c7e7b83fc7638a14b9c277580486ca7a56' => 
    array (
      0 => '/vagrant/templates/complete.html',
      1 => 1576918721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfddf389ca5e8_17991387 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>備品管理システム 完了</title>
</head>
<body>
  <h1>ユーザ名：<?php echo $_smarty_tpl->tpl_vars['users_name']->value;?>
 処理が完了しました。</h1><br />

       <button type="button" name ="back" onclick="history.back()">戻る</button>

</body>
</html>
<?php }
}
