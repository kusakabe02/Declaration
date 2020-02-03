<?php
session_start();
require_once '../smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = '../templates/';
$smarty->compile_dir  = '../templates_c/';

$msg = $_SESSION[login_faild];

$smarty->assign('msg',$msg);
$smarty->assign('test2', 'テスト2です。');
$smarty->assign('test3', 'テスト3です。');

$smarty->display('login.html');
session_destroy();
?>
