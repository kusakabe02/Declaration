<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-25 23:39:23
  from '/vagrant/templates/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e03f32bcd3605_33064291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93a5bbdeaaed138a7fe255c6c0c6441f5c49fbd3' => 
    array (
      0 => '/vagrant/templates/login.html',
      1 => 1577317026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e03f32bcd3605_33064291 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>備品管理システム ログイン</title>
</head>
<body>
  <h1>備品管理システム ログイン</h1><br />
  <?php echo $_SESSION['login_faild'];?>

  
    <form method="post" action="user_login_check.php">
     <div align="left">ユーザ名  :</div>
       <input type="text" name="user"><br />
     <div align="left">パスワード :</div>
       <input type="password" name="pass"><br />
       <br />
       <input type="submit" name="submit" value="ログイン">
       </form>
       <input type="button" name="signup" value="ユーザ登録" onClick="window.open('../user_signup/user_signup.php')">
       <button type="button" name ="back" onclick="history.back()">戻る</button>

</body>
</html>
<?php }
}
