<?php
session_start();
require_once '../smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = '../templates/';
$smarty->compile_dir  = '../templates_c/';

#ログインしているか判定し、していない場合はサインアップページへ飛ばす。ログインしていれば、メッセージセット。
if(isset($_SESSION['login'])==false){
$_SESSION[err_login] = "ユーザー登録をされていません。ユーザ登録を行ってください。";
header('Location: ../user_signup/user_signup.php');
}
else{
  $smarty->assign('login_name',$_SESSION['login_name']);
  #これでJavaScript部分に値が渡せる。
  $smarty->assign('bihin',"備品名!!!");
  $smarty->display('main.html');

}


?>
