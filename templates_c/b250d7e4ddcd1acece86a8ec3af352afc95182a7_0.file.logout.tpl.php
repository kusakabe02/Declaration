<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-25 00:57:45
  from '/vagrant/templates/logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e547109e3dc49_23879298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b250d7e4ddcd1acece86a8ec3af352afc95182a7' => 
    array (
      0 => '/vagrant/templates/logout.tpl',
      1 => 1582592207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e547109e3dc49_23879298 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>「宣言」SNS DeNS ログアウト</title>
</head>
<body>
  <h1>DeNSへログアウトしました。</h1><br />
    <input type="button" name="signup" value="ログイン画面へ戻る" onClick="window.open('../index.php')">
</body>
</html>
<?php }
}
