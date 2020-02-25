<?php

session_start();
require_once '../smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = '../templates/';
$smarty->compile_dir  = '../templates_c/';

$smarty->assign('login_name',$_SESSION['login_name']);
$smarty->assign('login_id',$_SESSION['login_id']);
$smarty->display('comingsoon.tpl');

?>
