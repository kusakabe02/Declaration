<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-09 23:26:49
  from '/vagrant/templates/admin_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5deed8395b9469_05321974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f4a339a751c56aaecc6fc1b3ceba22fb38b5790' => 
    array (
      0 => '/vagrant/templates/admin_login.html',
      1 => 1575933954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5deed8395b9469_05321974 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>備品管理システム ログイン</title>
</head>
<body>
  <h1>備品管理システム ログイン</h1><br />
    <form method="post" action="">
     <div align="left">ユーザ名  :</<div>
       <input type="text" name="user"><br />
     <div align="left">パスワード:</<div>
       <input type="password" name="pass"><br />
       <br />
       <input type="submit" value="ログイン">
       </form>
</body>
</html>
<?php }
}
