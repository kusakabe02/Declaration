<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-10 09:07:52
  from '/vagrant/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e411d68d07537_84760608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68de23f3dd00913047764963e4f51fc8bafc8b8a' => 
    array (
      0 => '/vagrant/templates/login.tpl',
      1 => 1581325678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e411d68d07537_84760608 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>「宣言」SNS DeNS  ログイン</title>
</head>
<body>
  <h1>DeNSへログイン</h1><br />
  <?php echo $_SESSION['login_faild'];?>


    <form method="post" action="user_login_check.php">
     <div align="left">登録宣言者名  :</div>
       <input type="text" name="user"><br />
     <div align="left">パスワード :</div>
       <input type="password" name="pass"><br />
       <br />
       <input type="submit" name="submit" value="ログイン">
       </form>
       <input type="button" name="signup" value="新規で宣言者登録（サインアップ）" onClick="window.open('../user_signup/user_signup.php')">
       <button type="button" name ="back" onclick="history.back()">一画面前へ戻る</button>

</body>
</html>
<?php }
}
