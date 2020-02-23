<?php
session_start();
require_once '../smarty/Smarty.class.php';
require '../function/Database_function.php';

$smarty = new Smarty();
$smarty->template_dir = '../templates/';
$smarty->compile_dir  = '../templates_c/';

$serch_word='%'.htmlspecialchars($_GET['search'],ENT_QUOTES,'UTF-8').'%';
try {
  $pdo = new PDO('mysql:dbname=DeclarerSystem;host=localhost;charset=utf8','ehoge','Xsw2#edc');
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  /* タイトルと詳細でひっかけたい */
  $sql = 'SELECT * FROM Declaration WHERE title LIKE ? OR texts LIKE ?';
  $stmt = $pdo->prepare($sql);
  $data[]=$serch_word;
  $data[]=$serch_word;
  $stmt->execute($data);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $smarty->assign('search_results',$result);
  $smarty->assign('search_word',$serch_word);
  }
  catch (Exception $e) {
  $smarty->assign('db_err', 'ただいまデータベースに問題が発生しております。申し訳ございません。');
  $smarty->display('err.tpl');
  exit();
  }

$smarty->assign('login_name',$_SESSION['login_name']);
$smarty->assign('login_id',$_SESSION['login_id']);
$smarty->display('search_results.tpl');

?>
