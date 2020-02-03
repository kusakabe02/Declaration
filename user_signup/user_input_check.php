<?php
session_start();

require_once '../smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = '../templates/';
$smarty->compile_dir  = '../templates_c/';

$input_data = $_SESSION[input_data];
$smarty->assign("input_data",$input_data);

$smarty->display('input.html');


session_destroy();

?>
