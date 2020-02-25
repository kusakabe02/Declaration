<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-25 10:01:36
  from '/vagrant/templates/complete.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5471f0531fc4_24737089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57ce02c7e7b83fc7638a14b9c277580486ca7a56' => 
    array (
      0 => '/vagrant/templates/complete.html',
      1 => 1582592467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5471f0531fc4_24737089 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DeNS 宣言者登録完了</title>
</head>
<body>
  <h1>ありがとうございます。宣言者名：<?php echo $_smarty_tpl->tpl_vars['users_name']->value;?>
 様を登録しました。</h1><br />

<a name="logout" href="../index.php">ログイン画面へ</a>

</body>
</html>
<?php }
}
