<?php
session_start();
/*
1.ユーザ登録フォームの入力値を受け取り入力値チェックを行う。
2.登録可否を判定後、パスワード列を暗号化しテーブルへ格納。
3.登録しましたページへ遷移
*/

require_once '../smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = '../templates/';
$smarty->compile_dir  = '../templates_c/';
#DB接続
try {

/*
データチェック後のSESSIONデータ受け取り
*/
  $users_name  = $_SESSION[input_name];
  $users_pass1 = $_SESSION[input_pass1];
  $users_pass2 = $_SESSION[input_pass2];

  $users_name=htmlspecialchars($users_name,ENT_QUOTES,'UTF-8');
  $users_pass1=htmlspecialchars($users_pass1,ENT_QUOTES,'UTF-8');
  $users_pass2=htmlspecialchars($users_pass2,ENT_QUOTES,'UTF-8');

  //パスワードをハッシュに
  $hash_pass = password_hash($users_pass1,PASSWORD_DEFAULT);
 //タイムゾーンを東京に
  date_default_timezone_set('Asia/Tokyo');
#関数化（クラス化できそう？）
#データベース接続処理

  $pdo = new PDO('mysql:dbname=DeclarerSystem;host=localhost;charset=utf8','ehoge','Xsw2#edc');

  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
/*
前画面からの入力値、プロフィールは初期値を入れる。
*/
  $sql='INSERT INTO Declarer(name,password,profile,image_path,entry_date) VALUES(?,?,?,?,?)';
  $stmt=$pdo->prepare($sql);
  $data[]=$users_name;
  $data[]=$hash_pass;
  $data[]="よろしくお願いします。";
  $data[]="../img/profile/default.png";
  $data[]=date("Y-m-d");

  $stmt->execute($data);

} catch (Exception $e) {

  //$e->errorInfo();
  $smarty->assign('db_err', 'ただいまデータベースに問題が発生しております。申し訳ございません。');
  $smarty->display('err.html');
  exit();
}


$smarty->assign('users_name',$users_name);
$smarty->display('complete.html');

session_destroy();
?>
