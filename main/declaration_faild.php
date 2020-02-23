<?php
/*
* メインページ・ユーザページにて「達成」・「撤回」を押下したときの処理
*/
session_start();
require_once '../smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = '../templates/';
$smarty->compile_dir  = '../templates_c/';

try {
  $id=htmlspecialchars($_POST['faild_id'],ENT_QUOTES,'UTF-8');
  $pdo = new PDO('mysql:dbname=DeclarerSystem;host=localhost;charset=utf8','ehoge','Xsw2#edc');
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sql = 'UPDATE Declaration SET flag = 0 WHERE id=?';
  $stmt = $pdo->prepare($sql);
  $data[]=$id;
  $stmt->execute($data);
  }catch (Exception $e) {
    $smarty->assign('db_err', 'ただいまデータベースに問題が発生しております。申し訳ございません。');
    $smarty->display('err.tpl');
    exit();
    }
    header('Location: ../main/main.php');
exit();

?>
