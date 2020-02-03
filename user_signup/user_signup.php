<?php
session_start();
require_once '../smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = '../templates/';
$smarty->compile_dir  = '../templates_c/';

$err_empty = $_SESSION[err_empty];
$err_len = $_SESSION[err_len];
$err_preg = $_SESSION[err_preg];
#ログインされていなかった場合
$err_login = $_SESSION[err_login];

$smarty->assign("err_empty",$err_empty);
$smarty->assign("err_len",$err_len);
$smarty->assign("err_preg",$err_preg);
$smarty->assign("err_login",$err_login);


$smarty->display('signup.html');




?>
